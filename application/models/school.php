<?php

class School extends Model {
    
    var $hasMany = array('User' => 'User', 'Subject' => 'Subject');
    
    function find($school_id) {
        $this->where('id', $school_id);
        $this->showHasMany();
        return $this->search();
    }
    
    function find_all() {
        return $this->search();
    }
    
    function get_admin() {
        $user = new User();
        $user->where('school_id', $this->id);
        $user->setLimit(1);
        return $user->search();
    }
    
}