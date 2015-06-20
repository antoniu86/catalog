<?php

class Klass extends Model {

    var $hasMany = array('ClassTeacher' => 'ClassTeacher', 'ClassStudent' => 'ClassStudent');
    var $hasOne = array('School' => 'School', 'Year' => 'Year', 'User' => 'User');

    function find($klass_id) {
        $this->where('id', $klass_id);
        $this->showHasMany();
        $this->showHasOne();

        return $this->search();
    }

    function find_all($year_id, $school_id) {
        $this->where('year_id', $year_id);
        $this->where('school_id', $school_id);
        $this->showHasMany();
        $this->showHasOne();

        return $this->search();
    }
    
    function get_main_teacher() {
        $user = new User();
        $user = $user->find($this->user_id);
        return $user;
    }

}
