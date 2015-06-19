<?php

class Period extends Model {
    
    var $hasOne = array('School' => 'School', 'Year' => 'Year');
    
    function find($period_id) {
        $this->where('id', $period_id);
        $this->showHasOne();
        return $this->search();
    }
    
    function find_all($year_id, $school_id) {
        $this->where('year_id', $year_id);
        $this->where('school_id', $school_id);
        $this->orderBy('start_at');
        $this->showHasOne();
        return $this->search();
    }
    
}