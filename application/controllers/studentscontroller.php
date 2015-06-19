<?php

class StudentsController extends ApplicationController {
    
    function before() {
        parent::before();
        
        $this->redirect_to_home();
    }
    
    function list_all() {
        $students = new User();
        $this->set('students', $students->get_all_students($this->school->id));
    }
    
}