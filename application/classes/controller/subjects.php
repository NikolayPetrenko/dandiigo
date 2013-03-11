<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Subjects extends My_LoggedUserController {

    /*
     * Show list subjects
     */
    public function action_list()
    {
        if(Helper_User::getUserRole($this->logget_user) == 'student' || Helper_User::getUserRole($this->logget_user) == 'teacher') return $this->request->redirect('');
        $data['subjects'] = ORM::factory('subject')->where('pid', '=', 0)->find_all();
        Helper_Output::factory()->link_css('bootstrap');
        $this->setTitle('Subjects')
                ->view('subjects/subjectsList', $data)
                ->render();
    }
    
    /*
     * Create new subject
     */
    public function action_new()
    {
        if(Helper_User::getUserRole($this->logget_user) == 'student' || Helper_User::getUserRole($this->logget_user) == 'teacher') return $this->request->redirect('');
        $data = array();
        if ($this->request->post()) {
            try {
                ORM::factory('subject')->values($this->request->post(), array('name', 'pid'))->create();
                $this->request->redirect('subjects/list');
            }
            catch (ORM_Validation_Exception $e) {
                $data['errors'] = Helper_Main::errors($e->errors('validation'));
            }
        }
        $this->setTitle('New Subject')
            ->view('subjects/newSubject', $data)
            ->render();
    }

    /*
     * Edit subject
     */
    public function action_edit()
    {
        if(Helper_User::getUserRole($this->logget_user) == 'student' || Helper_User::getUserRole($this->logget_user) == 'teacher') return $this->request->redirect('');
        if ($this->request->post()) {
            try {
                ORM::factory('subject', $this->request->param('id'))->values($this->request->post(), array('name', 'pid'))->update();
                $data['success'] = 'Subject successful edit';
            }
            catch (ORM_Validation_Exception $e) {
                $data['errors'] = Helper_Main::errors($e->errors('validation'));
            }
        }
        $data['subject'] = ORM::factory('subject', $this->request->param('id'));
        if(empty($data['subject']->id)) $this->request->redirect('');
        $this->setTitle('Edit Subject')
            ->view('subjects/editSubject', $data)
            ->render();
    }
    
    
    public function action_change_scheme()
    {
        if(Helper_User::getUserRole($this->logget_user) == 'student' || Helper_User::getUserRole($this->logget_user) == 'teacher') return $this->request->redirect('');
        $subject = ORM::factory('class_subject', $this->request->post('subject'));
        if($subject->id){
            $subject->scheme = $this->request->post('scheme');
            $subject->save();
        }
        $this->request->redirect($this->request->referrer());
    }
    
    public function action_change_teacher()
    {
        if(Helper_User::getUserRole($this->logget_user) == 'student' || Helper_User::getUserRole($this->logget_user) == 'teacher') return $this->request->redirect('');
        $subject = ORM::factory('class_subject', $this->request->post('subject'));
        if($subject->id){
            $subject->teacher_id = $this->request->post('teacher');
            $subject->save();
        }
        $this->request->redirect($this->request->referrer());
    }
}