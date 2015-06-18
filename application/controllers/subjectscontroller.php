<?php

class SubjectsController extends ApplicationController {
    
    function list_all() {
        $subjects = new Subject();
        $this->set('subjects', $subjects->find_all($this->school->id));
    }
    
}