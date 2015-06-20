<?php

class KlassController extends ApplicationController {

    function before() {
        parent::before();

        $this->redirect_to_home();
    }

    function new_klass($year_id) {
        $this->set('year_id', $year_id);
    }

    function create($year_id) {
        $klass = new Klass();

        foreach ($_REQUEST["klass"] as $key => $value):
            $klass->$key = $value;
        endforeach;

        $klass->school_id = $this->school->id;
        $klass->year_id = $year_id;
        $klass->created_at = date("Y-m-d H:i:s");
        $klass->save();

        header('Location: /klasses/list_all/' . $year_id);
    }

    function view($klass_id) {
        $selected_klass = new Klass();
        $selected_klass = $selected_klass->find($klass_id);

        $this->set('selected_klass', convert_array_to_object('klass', $selected_klass[0]["Klass"]));
        $this->set('teacher', convert_array_to_object('user', $selected_klass[0]["User"]));
    }

    function edit($klass_id) {
        $selected_klass = new Klass();
        $selected_klass = $selected_klass->find($klass_id);

        $this->set('selected_klass', convert_array_to_object('klass', $selected_klass[0]["Klass"]));
    }

    function save($klass_id) {
        $klass = new Klass();
        $klass = convert_array_to_object('klass', $klass->find($klass_id)[0]['Klass']);

        foreach ($_REQUEST["klass"] as $key => $value):
            $klass->$key = $value;
        endforeach;
        
        $klass->save();

        header('Location: /klass/view/' . $klass_id);
    }

}
