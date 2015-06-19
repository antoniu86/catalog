<?php

class PeriodsController extends ApplicationController {

    function before() {
        parent::before();

        $this->redirect_to_home();
    }

    function list_all($year_id) {
        $periods = new Period();
        $this->set('periods', $periods->find_all($year_id, $this->school->id));
        $this->set('year_id', $year_id);
    }

}
