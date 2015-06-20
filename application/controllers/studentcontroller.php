<?php

class StudentController extends UserController {
    
    function before() {
        parent::before();
        
        $this->redirect_to_home();
    }
    
    function new_student() {
        
    }
    
}