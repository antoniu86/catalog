<?php

class KlassTeachersController extends ApplicationController {

    function before() {
        parent::before();

        $this->redirect_to_home();
    }

    function list_all($klass_id, $year_id) {
        $klass_teachers = new KlassTeacher();
        $this->set('klass_teachers', $klass_teachers->find_all($klass_id));

        $this->set('klass_id', $klass_id);
        $this->set('year_id', $year_id);
    }

    function add_in_klass($klass_id, $year_id) {
        $klass_teachers = new KlassTeacher();
        $this->set('klass_teachers', $klass_teachers->select_notenrolled($klass_id, $year_id, $this->school->id));

        $this->set('klass_id', $klass_id);
        $this->set('year_id', $year_id);
    }

    function save($klass_id, $year_id) {
        if (isset($_REQUEST['user'])) {
            foreach ($_REQUEST['user']['id'] as $value):
                $klass_teacher = new KlassTeacher();
                $klass_teacher->user_id = $value;
                $klass_teacher->klass_id = $klass_id;
                $klass_teacher->year_id = $year_id;
                $klass_teacher->school_id = $this->school->id;
                $klass_teacher->save();
            endforeach;
        }

        header('Location: /klassteachers/list_all/' . $klass_id . '/' . $year_id);
    }

    function delete($id, $klass_id, $year_id) {
        $klass_teacher = new KlassTeacher();
        $klass_teacher = convert_array_to_object('KlassTeacher', $klass_teacher->find($id)[0]['KlassTeacher']);
        $klass_teacher->delete();

        header('Location: /klassteachers/list_all/' . $klass_id . '/' . $year_id);
    }

}
