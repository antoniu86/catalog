<?php

class SchoolController extends ApplicationController {

    function before() {
        parent::before();
        
        $this->redirect_to_home();
    }
    
    function new_school() {
        
    }
    
    function create() {
        $school = new School();
        
        foreach ($_REQUEST["school"] as $key => $value):
            $school->$key = $value;
        endforeach;
        
        $school->save();
        
        $school = new School();
        $school = $school->custom('select id from schools order by id desc limit 1');
        
        $user = new User();
        
        foreach ($_REQUEST["user"] as $key => $value):
            $user->$key = $value;
        endforeach;
        
        $user->school_id = $school[0]["School"]["id"];
        $user->administrator = true;
        $user->created_at = date("Y-m-d H:i:s");
        
        $user->save();
        
        header('Location: /schools/list_all');
    }
    
    function view($school_id) {
        $selected_school =  new School();
        $selected_school = $selected_school->find($school_id);
        
        $this->set('selected_school', convert_array_to_object('school', $selected_school[0]["School"]));
    }
    
    function edit($school_id) {
        $selected_school =  new School();
        $selected_school = $selected_school->find($school_id);
        
        $this->set('selected_school', convert_array_to_object('school', $selected_school[0]["School"]));
    }
    
    function save($school_id) {
        $school = new School();
        $school = convert_array_to_object('school', $school->find($school_id)[0]['School']);
        
        foreach ($_REQUEST["school"] as $key => $value):
            $school->$key = $value;
        endforeach;
        
        $school->save();
        
        header('Location: /school/edit/' . $school_id);
    }

}
