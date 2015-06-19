<?php

class SubjectsController extends ApplicationController {
    
    function before() {
        parent::before();
        
        $this->redirect_to_home();
    }
    
    function list_all() {
        $subjects = new Subject();
        $this->set('subjects', $subjects->find_all($this->school->id));
    }
    
}