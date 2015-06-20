<?php

class YearController extends ApplicationController {

    function before() {
        parent::before();

        $this->redirect_to_home();
    }

    function new_year() {
        
    }

    function create() {
        $year = new Year();

        foreach ($_REQUEST["year"] as $key => $value):
            $year->$key = $value;
        endforeach;

        $year->school_id = $this->school->id;
        $year->created_at = date("Y-m-d H:i:s");
        $year->save();

        header('Location: /years/list_all');
    }

    function view($year_id) {
        $selected_year = new Year();
        $selected_year = $selected_year->find($year_id);

        $this->set('selected_year', convert_array_to_object('year', $selected_year[0]["Year"]));
    }

    function edit($year_id) {
        $selected_year = new Year();
        $selected_year = $selected_year->find($year_id);

        $this->set('selected_year', convert_array_to_object('year', $selected_year[0]["Year"]));
    }

    function save($year_id) {
        $year = new Year();
        $year = convert_array_to_object('year', $year->find($year_id)[0]['Year']);

        foreach ($_REQUEST["year"] as $key => $value):
            $year->$key = $value;
        endforeach;

        $year->save();

        header('Location: /year/view/' . $year_id);
    }

}
