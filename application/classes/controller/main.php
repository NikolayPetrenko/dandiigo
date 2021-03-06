<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends My_LoggedUserController {

    /*
     * Main page
     */
    public function action_index()
    {
        if($this->logget_user->change_password == 1) $this->request->redirect('change-password');
        $data['user']      = $this->logget_user;
        $data['user_info'] = $this->user_data;
        Helper_Output::factory()->link_css('bootstrap');
        $this->setTitle('Main')
                ->view('main/index', $data)
                ->render();
    }
    
    /*
     * Approve admin, teacher, student
     */
    public function action_approve()
    {
        if(Helper_User::getUserRole($this->logget_user) == 'student') return $this->request->redirect('');
        $user = ORM::factory('user', $this->request->param('id'));
        $user->status = 1;
        $user->save();
        if($user->roles->find()->name == 'student'){
            $student = $user->students->find();
            $year = ORM::factory('academicyear')->where('name', '=', Helper_Main::getCurrentYear())->find()->id;
            $student->start_year = $student->end_year = $year;
            $student->save();
        }
        return $this->request->redirect($this->request->param('type') .'s/list');
    }
    
    /*
     * Change password for user
     */
    public function action_change_password()
    {
        $data = array();
        if($this->request->post()){
            try {
                $user = ORM::factory('user', $this->logget_user->id)->update_user($this->request->post(), array('password', 'change_password'));
                $this->request->redirect('');
            }
            catch (ORM_Validation_Exception $e) {
                $data['errors'] = Helper_Main::errors($e->errors('validation'));
            }
        }
        $this->setTitle('Change password')
                ->view('main/changePassword', $data)
                ->render();
    }
    
        
    /*
     * Academic Period
     */
    public function action_academic_period()
    {
        if(Helper_User::getUserRole($this->logget_user) != 'sadmin') return $this->request->redirect('');
        $data['period'] = ORM::factory('setting', 'academic_period');
        if($this->request->post()){
            $data['period']->value = $this->request->post('value');
            $data['period']->save();
        }
        $this->setTitle('Academic Period')
                ->view('main/academicPeriod', $data)
                ->render();
    }
}