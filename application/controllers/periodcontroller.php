<?php

class PeriodController extends ApplicationController {

    function before() {
        parent::before();

        $this->redirect_to_home();
    }

    function new_period($year_id) {
        $this->set('year_id', $year_id);
    }

    function create($year_id) {
        $period = new Period();

        foreach ($_REQUEST["period"] as $key => $value):
            $period->$key = $value;
        endforeach;

        $period->school_id = $this->school->id;
        $period->year_id = $year_id;
        $period->created_at = date("Y-m-d H:i:s");
        $period->save();

        header('Location: /periods/list_all/' . $year_id);
    }

    function view($period_id) {
        $selected_period = new Period();
        $selected_period = $selected_period->find($period_id);

        $this->set('selected_period', convert_array_to_object('period', $selected_period[0]["Period"]));
        $this->set('year', convert_array_to_object('year', $selected_period[0]["Year"]));
    }

    function edit($period_id) {
        $selected_period = new Period();
        $selected_period = $selected_period->find($period_id);

        $this->set('selected_period', convert_array_to_object('period', $selected_period[0]["Period"]));
    }

    function save($period_id) {
        $period = new Period();
        $period = convert_array_to_object('period', $period->find($period_id)[0]['Period']);

        foreach ($_REQUEST["period"] as $key => $value):
            $period->$key = $value;
        endforeach;

        $period->save();

        header('Location: /period/view/' . $period_id);
    }

}
