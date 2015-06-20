<?php

class InsightsController extends ApplicationController {

    function before() {
        parent::before();

        $this->redirect_to_home();
    }

    function list_all() {
        $insights = new Insight();
        $this->set('insights', $insights->find_all($this->school->id));
    }

}
