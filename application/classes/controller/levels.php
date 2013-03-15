<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Levels extends My_LoggedUserController {

    /*
     * Show list grade levels
     */
    public function action_list()
    {
        if(Helper_User::getUserRole($this->logget_user) == 'student' || Helper_User::getUserRole($this->logget_user) == 'teacher') return $this->request->redirect('');
        $years          = Model_Level::get_min_max_student_year();
        $data['years']  = $years[0];
        $data['year']   = $this->request->param('year') ? $this->request->param('year') : ORM::factory('academicyear')->where('name', '=', Helper_Main::getCurrentYear())->find()->id;
        $data['levels'] = ORM::factory('level')->order_by('order')->find_all();
        $data['user']   = $this->logget_user;
        Helper_Output::factory()->link_css('bootstrap')->link_js('level/index');
        $this->setTitle('Grade Levels')
                ->view('levels/levelsList', $data)
                ->render();
    }
    
    /*
     * Create new level
     */
    public function action_new()
    {
        if(Helper_User::getUserRole($this->logget_user) != 'sadmin') return $this->request->redirect('');
        $data = array();
        if ($this->request->post()) {
            try {
                $_POST['order'] = ORM::factory('level')->count_all() + 1;
                $level = ORM::factory('level')->values($_POST, array('name', 'order'))->create();
                if($this->request->post('classes')){
                    foreach ($this->request->post('classes') as $value) {
                        try{
                            $tclass           = ORM::factory('class_template');
                            $tclass->name     = $value;
                            $tclass->level_id = $level->id;
                            $tclass->save();
                            $current_year = ORM::factory('academicyear')->where('name', '=', Helper_Main::getCurrentYear())->find()->id;
                            for($i = $current_year; $i < $current_year + 6; $i++){
                                $class            = ORM::factory('class');
                                $class->year_id   = $i;
                                $class->tclass_id = $tclass->id;
                                $class->save();
                            }
                        }
                        catch (Kohana_Database_Exception $e){}
                    }
                }
                $this->request->redirect('levels/list');
            }
            catch (ORM_Validation_Exception $e) {
                $data['errors'] = Helper_Main::errors($e->errors('validation'));
            }
        }
        Helper_Output::factory()->link_js('class/templates');
        $this->setTitle('New Level')
            ->view('levels/newLevel', $data)
            ->render();
    }

    /*
     * Edit level
     */
    public function action_edit()
    {
        if(Helper_User::getUserRole($this->logget_user) == 'teacher' || Helper_User::getUserRole($this->logget_user) == 'student') return $this->request->redirect('');
        if ($this->request->post()) {
            try {
                $level = ORM::factory('level', $this->request->param('id'));
                if(Helper_User::getUserRole($this->logget_user) == 'sadmin'){
                    $levels = ORM::factory('level')->where('id', '!=', $level->id)->find_all();
                    if(count($levels) > 0){
                        foreach($levels as $lvl){
                            if($this->request->post('order') >= $lvl->order && $level->order < $lvl->order){
                                $lvl->order = $lvl->order + 1;
                                $lvl->save();
                            }
                        }
                    }
                    $level->values($this->request->post(), array('name', 'order', 'annual', 'early_repayment'))->update();
                }
                if($this->request->post('classes')){
                    foreach ($this->request->post('classes') as $value){
                        try{
                            $tclass           = ORM::factory('class_template');
                            $tclass->name     = $value;
                            $tclass->level_id = $level->id;
                            $tclass->save();
                            $current_year = ORM::factory('academicyear')->where('name', '=', Helper_Main::getCurrentYear())->find()->id;
                            for($i = $current_year; $i < $current_year + 6; $i++){
                                $class            = ORM::factory('class');
                                $class->year_id   = $i;
                                $class->tclass_id = $tclass->id;
                                $class->save();
                            }
                        }
                        catch (Kohana_Database_Exception $e){}
                    }
                }
                if($this->request->post('old_classes')){
                    foreach ($this->request->post('old_classes') as $key => $value) {
                        $tclass  = ORM::factory('class_template', $key);
                        $tclass->name = $value;
                        $tclass->save();
                    }
                }
                if($this->request->post('delete_classes')){
                    foreach ($this->request->post('delete_classes') as $key => $value) {
                        $tclass  = ORM::factory('class_template', $key);
                        $classes = $tclass->classes->find_all();
                        foreach($classes as $class){
                            Helper_User::deleteUsersFromClass($class);
                        }
                        $tclass->delete();
                    }
                }
                $data['success'] = 'Level successful edit';
            }
            catch (ORM_Validation_Exception $e) {
                $data['errors'] = Helper_Main::errors($e->errors('validation'));
            }
        }
        $data['user']  = $this->logget_user;
        $data['level'] = ORM::factory('level', $this->request->param('id'));
        if(empty($data['level']->id)) $this->request->redirect('');
        $data['classes'] = $data['level']->template_classes->order_by('name')->find_all();
        Helper_Output::factory()->link_js('class/templates');
        $this->setTitle('Edit Level')
            ->view('levels/editLevel', $data)
            ->render();
    }
   
    /*
     * Unassigned students
     */
    public function action_unassigned_students()
    {
        if(Helper_User::getUserRole($this->logget_user) == 'teacher' || Helper_User::getUserRole($this->logget_user) == 'student') return $this->request->redirect('');
        $data['level']     = ORM::factory('level', $this->request->param('id'));
        $data['all_class'] = ORM::factory('class')->join('dg_tmpl_clsss')->on('dg_tmpl_clsss.id', '=', 'class.tclass_id')->where('dg_tmpl_clsss.level_id', '=', $data['level']->id)->where('class.year_id', '=', $this->request->param('year'))->find_all();
        $data['students']  = $data['level']->students->where('end_year', '=', $this->request->param('year'))->where('class_id', '=', NULL)->find_all();
        $data['year']      = $this->request->param('year');
        Helper_Output::factory()->link_js('user/index');
        $this->setTitle('Unassigned students')
            ->view('levels/unassignedStudents', $data)
            ->render();
    }
   
    /*
     * Unassigned students
     */
    public function action_auto_assigned()
    {
        if(Helper_User::getUserRole($this->logget_user) == 'teacher' || Helper_User::getUserRole($this->logget_user) == 'student') return $this->request->redirect('');
        $data['level']   = ORM::factory('level', $this->request->param('id'));
        $students_ids    = explode(',', $this->request->post('students'));
        $students_mens   = ORM::factory('student')->where('sex', '=', '0')->where('student_id', 'IN', $students_ids)->find_all();
        $students_womens = ORM::factory('student')->where('sex', '=', '1')->where('student_id', 'IN', $students_ids)->find_all();
        $classes         = ORM::factory('class')->join('dg_tmpl_clsss')->on('dg_tmpl_clsss.id', '=', 'class.tclass_id')->where('dg_tmpl_clsss.level_id', '=', $data['level']->id)->where('class.year_id', '=', $this->request->param('year'))->find_all()->as_array();
        Helper_User::autoAssignedClass($students_mens, $students_womens, $classes);
        $this->request->redirect('levels/list');
    }    

    public function action_promoting_detaining()
    {
        if(Helper_User::getUserRole($this->logget_user) == 'student') return $this->request->redirect('');
        $student = ORM::factory('student')->where('student_id', '=', $this->request->param('student'))->find();
        if(Helper_User::getUserRole($this->logget_user) == 'teacher' && $this->logget_user->id != $student->class->teacher_id) return $this->request->redirect('');
        $student->class_id = NULL;
        if($this->request->param('type') == 'prom'){
            if(!Helper_Main::getStatusForPromotion($student->student_id)) return $this->request->redirect('');
            $old_level = ORM::factory('level', $student->academic_year);
            $levels = ORM::factory('level')->order_by('order')->find_all();
            $new_level = NULL;
            foreach($levels as $key => $level){
                if($level->order == $old_level->order) {
                    $lvl   = $levels[$key+1];
                    $new_level = $lvl->id;
                    break;
                }
            }
            $student->academic_year = $new_level;
        }
        $student->end_year = $student->end_year + 1;
        $student->save();
        $this->request->redirect($this->request->referrer());
    }


    /*
     * Delete level
     */
    public function action_delete()
    {
        if(Helper_User::getUserRole($this->logget_user) != 'sadmin') return $this->request->redirect('');
        $level   = ORM::factory('level', $this->request->param('id'));
        $tclasses = $level->template_classes->find_all();
        if(count($tclasses) > 0){
            foreach ($tclasses as $tclass){
                $classes = $tclass->classes->find_all();
                foreach($classes as $class){
                    Helper_User::deleteUsersFromClass($class);
                }
            }
        }
        if($level->id){
            $level->delete();
        }
        $this->request->redirect('levels/list');
    }
    
}