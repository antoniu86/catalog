<?php

class Subject extends Model {
    
    var $hasMany = array('User' => 'User');
    var $hasOne = array('School' => 'School');
    
    function find($subject_id) {
        $this->where('id', $subject_id);
        $this->showHasMany();
        $this->showHasOne();
        return $this->search();
    }
    
    function find_all($school_id) {
        $this->where('school_id', $school_id);
        return $this->search();
    }
    
    function find_teachers($subject_id, $school_id) {
        $user = new User();
        $user->where('teacher', true);
        $user->where('school_id', $school_id);
        $user->where('subject_id', $subject_id);
        return $user->search();
    }
    
}