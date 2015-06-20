<?php

class KlassesController extends ApplicationController {

    function before() {
        parent::before();

        $this->redirect_to_home();
    }

    function list_all($year_id) {
        $klasses = new Klass();
        $this->set('klasses', $klasses->find_all($year_id, $this->school->id));
        $this->set('year_id', $year_id);
    }

}
