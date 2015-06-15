<?php

class SchoolsController extends ApplicationController {

    function list_all() {
        $school = new School();
        $schools = $school->find_all();
        
        $this->set('schools', $schools);
    }

}
