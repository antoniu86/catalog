<?php

class Year extends Model {
    
    var $hasMany = array('Period' => 'Period');
    var $hasOne = array('School' => 'School');
    
    function find($year_id) {
        $this->where('id', $year_id);
        $this->showHasMany();
        $this->showHasOne();
        return $this->search();
    }
    
    function find_all($school_id) {
        $this->where('school_id', $school_id);
        return $this->search();
    }
    
    function find_periods($school_id) {
        $period = new Period();
        $period->where('school_id', $school_id);
        $period->where('year_id', $this->id);
        return $period->search();
    }
    
}