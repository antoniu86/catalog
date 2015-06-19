<?php

class StudentController extends ApplicationController {
    
    function before() {
        parent::before();
        
        $this->redirect_to_home();
    }
    
    function new_student() {
        
    }
    
}