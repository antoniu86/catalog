<?php

class UserController extends ApplicationController {

    function before() {
        if ($this->_action == 'login' && isset($_SESSION['the_user_id'])):
            $user = new User();
            $user = $user->find($_SESSION['the_user_id']);

            if (!empty($user)):
                $_SESSION['logged_in'] = true;
                $_SESSION['user_id'] = $_SESSION['the_user_id'];
            endif;
        endif;

        parent::before();

        if ($this->_action == 'check_user')
            return;

        $this->redirect_to_home();
    }

    function check_user($username, $password) {
        $this->ajax = 1;
        echo $this->User->check_for_login($username, $password);
    }

    function login() {
        header('Location: ' . BASE_PATH . '/');
    }

    function logout() {
        session_destroy();
        session_unset();

        header('Location: ' . BASE_PATH . '/');
    }
    
    function view($user_id) {
        $user = new User();
        $user = $user->find($user_id);
        $this->set('selected_user', convert_array_to_object('user', $user[0]['User']));
    }
    
    function edit($user_id) {
        $user = new User();
        $user = $user->find($user_id);
        
        $this->set('selected_user', convert_array_to_object('user', $user[0]['User']));
    }
    
    function save($user_id) {
        $user = new User();
        $user = convert_array_to_object('user', $user->find($user_id)[0]['User']);
        
        foreach ($_REQUEST["user"] as $key => $value):
            $user->$key = $value;
        endforeach;
        
        $user->save();
        
        header('Location: /user/edit/' . $user_id);
    }

    function create_student(){
        $this->create_user('student');
    }
    
    function create_teacher(){
        $this->create_user('teacher');
    }
    
    function create_user($type) {
        $user = new User();
        
        foreach ($_REQUEST["user"] as $key => $value):
            $user->$key = $value;
        endforeach;
        
        switch ($type):
            case 'student':
                $user->student = true;
                break;
            
            case 'teacher':
                $user->teacher = true;
                break;
        endswitch;
        
        $user->school_id = $this->school->id;
        $user->created_at = date("Y-m-d H:i:s");
        
        $user->save();
    }
    
    function redirect_to_list($type) {
        switch ($type):
            case 'student':
                $section = 'students';
                break;
            
            case 'teacher':
                $section = 'teachers';
                break;
        endswitch;
        
        header('Location: /' . $section . '/list_all');
    }
}
