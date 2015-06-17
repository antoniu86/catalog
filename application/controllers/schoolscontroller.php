<?php

class SchoolsController extends ApplicationController {

    function before() {
        parent::before();
        
        $this->redirect_to_home();
    }
            
    function list_all() {
        $school = new School();
        $schools = $school->find_all();
        
        $this->set('schools', $schools);
    }

}
