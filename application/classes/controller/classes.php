<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Classes extends My_LoggedUserController {

    public function action_view()
    {
        $data['user']  = $this->logget_user;
        $data['class'] = ORM::factory('class', $this->request->param('id'));
        $data['tclass']  = $data['class']->tclass;
        if(empty($data['tclass']->id)) $this->request->redirect('');
        $data['level']       = ORM::factory('level', $data['tclass']->level_id);
        $data['subjects']    = ORM::factory('class_subject')->select('dg_sbjcts.name', 'dg_sbjcts.pid')->join('dg_sbjcts')->on('dg_sbjcts.id', '=', 'class_subject.subject_id')->where('class_id', '=', $data['tclass']->id)->order_by('dg_sbjcts.pid')->find_all();
        $data['students']    = $data['class']->students->find_all();
        $data['all_subject'] = ORM::factory('subject')->find_all();
        $data['all_class']   = ORM::factory('class')->join('dg_tmpl_clsss')->on('dg_tmpl_clsss.id', '=', 'class.tclass_id')->where('dg_tmpl_clsss.level_id', '=', $data['level']->id)->where('class.year_id', '=', $data['class']->year_id)->find_all();
        $this->setTitle('Class ' . $data['level']->name . $data['tclass']->name)
            ->view('classes/view', $data)
            ->render();
    }

    public function action_delete_subject()
    {
        if(Helper_User::getUserRole($this->logget_user) == 'student' || Helper_User::getUserRole($this->logget_user) == 'teacher') $this->request->redirect('');
        $subject_class = ORM::factory('class_subject')->where('subject_id', '=', $this->request->param('subject'))->where('class_id', '=', $this->request->param('class'))->find();
        if($subject_class->subject_id){
            $subject_class->delete();
        }
        $this->request->redirect($this->request->referrer());
    }

    public function action_add_subject()
    {
        if(Helper_User::getUserRole($this->logget_user) == 'student' || Helper_User::getUserRole($this->logget_user) == 'teacher') $this->request->redirect('');
        $class_subject = ORM::factory('class_subject');
        $class         = ORM::factory('class', $this->request->post('class'));
        try {
            $class_subject->class_id   = $class->tclass_id;
            $class_subject->subject_id = $this->request->post('subject');
            $class_subject->save();
            $tclass                    = $class->tclass;
            $sbj_year                  = ORM::factory('year_subject');
            $sbj_year->year_id         = $class->year_id;
            $subject                   = ORM::factory('subject', $class_subject->subject_id);
            $sbj_year->subject         = $subject->name;
            $sbj_year->parent_subject  = $subject->pid == 0 ? NULL : ORM::factory('subject', $subject->pid)->name;
            $sbj_year->class           = $tclass->level->name . $tclass->name;
            $sbj_year->save();
        }
        catch (Kohana_Database_Exception $e) {

        }
        $this->request->redirect($this->request->referrer());
    }

    public function action_change_teacher()
    {
        if(Helper_User::getUserRole($this->logget_user) == 'student' || Helper_User::getUserRole($this->logget_user) == 'teacher') $this->request->redirect('');
        $class = ORM::factory('class_template', $this->request->post('class'));
        if($class->id){
            $class->teacher_id = $this->request->post('teacher');
            $class->save();
        }
        $this->request->redirect($this->request->referrer());
    }

    public function action_delete_student()
    {
        if(Helper_User::getUserRole($this->logget_user) == 'student' || Helper_User::getUserRole($this->logget_user) == 'teacher') $this->request->redirect('');
        $student = ORM::factory('student', $this->request->param('student'));
        if($student->student_id){
            $student->class_id = NULL;
            $student->save();
        }
        $this->request->redirect($this->request->referrer());
    }

    public function action_move_student()
    {
        if(Helper_User::getUserRole($this->logget_user) == 'student' || Helper_User::getUserRole($this->logget_user) == 'teacher') $this->request->redirect('');
        $student = ORM::factory('student', $this->request->post('student'));
        if($student->student_id){
            $student->class_id = $this->request->post('class');
            $student->save();
        }
        $this->request->redirect($this->request->referrer());
    }
}