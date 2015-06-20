<?php

class Insight extends Model {
    
    var $hasOne = array('School' => 'School');
    
    function find($insight_id) {
        $this->where('id', $insight_id);
        return $this->search();
    }
    
    function find_all($school_id) {
        $this->where('school_id', $school_id);
        $this->orderBy('created_at', 'DESC');
        return $this->search();
    }
    
    function intro_text() {
        return substr($this->text, 0, 100) . '...';
    }
    
    function short_title() {
        return substr($this->title, 0, 50) . '...';
    }
    
}