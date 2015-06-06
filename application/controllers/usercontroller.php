<?php

class UserController extends ApplicationController {

    function before() {
        if ($this->_action == 'login' && isset($_SESSION['the_user_id'])) {
            $user = new User();
            $user = $user->find($_SESSION['the_user_id']);

            if (!empty($user)) {
                $_SESSION['logged_in'] = true;
                $_SESSION['user_id'] = $_SESSION['the_user_id'];
            }
        }

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

}
