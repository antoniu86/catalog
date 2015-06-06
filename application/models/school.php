<?php

class School extends Model {
    
    var $hasMany = array('User' => 'User');
    
    function find($id) {
        $this->where('id', $id);
        $this->showHasMany();
        return $this->search();
    }
    
}