<?php

class YearsController extends ApplicationController {

    function before() {
        parent::before();

        $this->redirect_to_home();
    }

    function list_all() {
        $years = new Year();
        $this->set('years', $years->find_all($this->school->id));
    }

}
