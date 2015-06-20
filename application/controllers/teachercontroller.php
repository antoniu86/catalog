<?php

class TeacherController extends UserController {

    function before() {
        parent::before();

        $this->redirect_to_home();
    }

    function new_teacher() {
        
    }

}
