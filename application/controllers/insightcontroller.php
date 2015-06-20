<?php

class InsightController extends ApplicationController {

    function before() {
        parent::before();

        $this->redirect_to_home();
    }

    function new_insight() {
        
    }

    function create() {
        $insight = new Insight();

        foreach ($_REQUEST["insight"] as $key => $value):
            $insight->$key = $value;
        endforeach;

        $insight->school_id = $this->school->id;
        $insight->created_at = date("Y-m-d H:i:s");
        $insight->save();

        header('Location: /insights/list_all');
    }

    function view($insight_id) {
        $selected_insight = new Insight();
        $selected_insight = $selected_insight->find($insight_id);

        $this->set('selected_insight', convert_array_to_object('insight', $selected_insight[0]["Insight"]));
    }

    function edit($insight_id) {
        $selected_insight = new Insight();
        $selected_insight = $selected_insight->find($insight_id);

        $this->set('selected_insight', convert_array_to_object('insight', $selected_insight[0]["Insight"]));
    }

    function save($insight_id) {
        $insight = new Insight();
        $insight = convert_array_to_object('insight', $insight->find($insight_id)[0]['Insight']);

        foreach ($_REQUEST["insight"] as $key => $value):
            $insight->$key = $value;
        endforeach;

        $insight->save();

        header('Location: /insight/view/' . $insight_id);
    }

}
