<?php

class User extends Model {
    
    var $hasOne = array('School' => 'School', 'Subject' => 'Subject');
    
    function full_name() {
        return $this->first_name . ' ' . $this->last_name;
    }
    
    function find($user_id) {
        $this->where('id', $user_id);
        $this->showHasOne();
        
        return $this->search();
    }
    
    function get_all_students($school_id) {
        $this->where('school_id', $school_id);
        $this->where('student', true);
        $this->showHasOne();
        
        return $this->search();
    }
    
    function get_all_teachers($school_id) {
        $this->where('school_id', $school_id);
        $this->where('teacher', true);
        $this->showHasOne();
        
        return $this->search();
    }
    
    function get_subject() {
        $subject = new Subject();
        $subject = $subject->find($this->subject_id);
        return $subject;
    }
    
    function account_type() {
        if ($this->sys()) {
            return 'Administrator sistem';
        } elseif ($this->admin()) {
            return 'Administrator';
        } elseif ($this->teach()) {
            return 'Profesor';
        } else {
            return 'Elev';
        }
    }
    
    function sys() {
        return $this->system;
    }
    
    function admin() {
        return $this->administrator;
    }
    
    function teach() {
        return $this->teacher;
    }
    
    function stud() {
        return $this->student;
    }
    
    function check_if_exists($user_id) {
        $this->where('id', intval($user_id));
        
        return count($this->search());
    }
    
    function check_for_login($username, $password) {
        $this->where('username', $username);
        $user = $this->search();
        
        if (!empty($user)) {
            $user = convert_array_to_object("user", $user[0]["User"]);
            
            if ($user->password == $password) {
                $_SESSION['the_user_id'] = $user->id;
                
                $user->last_login = date("Y-m-d H:i:s");
                $user->save();
                
                return json_encode(['status' => 'ok']);
            } else {
                return json_encode(['status' => 'bad', 'message' => 'Parola gresita!']);
            }
        } else {
            return json_encode(['status' => 'bad', 'message' => 'Utilizatorul nu a fost gasit!']);
        }
    }
    
}

