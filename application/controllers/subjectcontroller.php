<?php

class SubjectController extends ApplicationController {
    
    function new_subject() {
        
    }
    
    function create() {
        $subject = new Subject();
        
        foreach ($_REQUEST["subject"] as $key => $value):
            $subject->$key = $value;
        endforeach;
        
        $subject->school_id = $this->school->id;
        $subject->created_at = date("Y-m-d H:i:s");
        $subject->save();
        
        header('Location: /subjects/list_all');
    }
    
    function view($subject_id) {
        $selected_subject =  new Subject();
        $selected_subject = $selected_subject->find($subject_id);
        
        $this->set('selected_subject', convert_array_to_object('subject', $selected_subject[0]["Subject"]));
    }
    
    function edit($subject_id) {
        $selected_subject =  new Subject();
        $selected_subject = $selected_subject->find($subject_id);
        
        $this->set('selected_subject', convert_array_to_object('subject', $selected_subject[0]["Subject"]));
    }
    
    function save($subject_id) {
        $subject = new Subject();
        $subject = convert_array_to_object('subject', $subject->find($subject_id)[0]['Subject']);
        
        foreach ($_REQUEST["subject"] as $key => $value):
            $subject->$key = $value;
        endforeach;
        
        $subject->save();
        
        header('Location: /subject/edit/' . $subject_id);
    }
    
    function teachers($subject_id) {
        $subject = new Subject();
        $teachers = $subject->find_teachers($subject_id, $this->school->id);
        
        $this->set('teachers', $teachers);
    }
    
}