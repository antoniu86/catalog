<?php

class TeachersController extends ApplicationController {
    
    function before() {
        parent::before();
        
        $this->redirect_to_home();
    }
    
    function list_all() {
        $teachers = new User();
        $this->set('teachers', $teachers->get_all_teachers($this->school->id));
    }
    
}