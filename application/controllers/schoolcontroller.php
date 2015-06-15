<?php

class SchoolController extends ApplicationController {

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
        $user->created_at = date("Y-m-d H:i:s");
        
        $user->save();
        
        header('Location: /schools/list_all');
    }
    
    function view($id) {
        $selected_school =  new School();
        $selected_school = $selected_school->find($id);
        
        $this->set('selected_school', $selected_school);
    }

}
