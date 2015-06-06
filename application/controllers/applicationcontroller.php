<?php

class ApplicationController extends Controller {
    
    var $user;
    var $school;
    var $logged = false;
    
    function before() {
        $this->check_for_login();
        
        $this->set('logged', $this->logged);
        $this->set('user', $this->user);
        $this->set('school', $this->school);
    }
    
    function check_for_login() {
        if (isset($_SESSION['logged_in'])) {
            if (isset($_SESSION['user_id'])) {
                $user = new User();
                $user = $user->find($_SESSION['user_id']);
                
                if (!empty($user)) {
                    $this->logged = true;
                    $this->user = convert_array_to_object("user", $user[0]["User"]);
                    $this->school = convert_array_to_object("school", $user[0]["School"]);
                    
                    return ;
                }
            }
        }
        
        $this->logged = false;
        $this->user = null;
        $this->school = null;
    }
    
    function redirect_to_home() {
        if (!$this->logged) {
            header('Location: ' . BASE_PATH . '/');
        }
    }
}
