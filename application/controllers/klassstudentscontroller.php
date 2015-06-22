<?php

class KlassStudentsController extends ApplicationController {

    function before() {
        parent::before();

        $this->redirect_to_home();
    }

    function list_all($klass_id, $year_id) {
        $klass_students = new KlassStudent();
        $this->set('klass_students', $klass_students->find_all($klass_id));

        $this->set('klass_id', $klass_id);
        $this->set('year_id', $year_id);
    }

    function add_in_klass($klass_id, $year_id) {
        $klass_students = new KlassStudent();
        $this->set('klass_students', $klass_students->select_notenrolled($klass_id, $year_id, $this->school->id));

        $this->set('klass_id', $klass_id);
        $this->set('year_id', $year_id);
    }
    
    function save($klass_id, $year_id) {
        if (isset($_REQUEST['user'])) {
            foreach ($_REQUEST['user']['id'] as $value):
                $klass_student = new KlassStudent();
                $klass_student->user_id = $value;
                $klass_student->klass_id = $klass_id;
                $klass_student->year_id = $year_id;
                $klass_student->school_id = $this->school->id;
                $klass_student->save();
            endforeach;
        }
        
        header('Location: /klassstudents/list_all/' . $klass_id . '/' . $year_id);
    }
    
    function delete($id, $klass_id, $year_id) {
        $klass_student = new KlassStudent();
        $klass_student = convert_array_to_object('KlassStudent', $klass_student->find($id)[0]['KlassStudent']);
        $klass_student->delete();
        
        header('Location: /klassstudents/list_all/' . $klass_id . '/' . $year_id);
    }

}
