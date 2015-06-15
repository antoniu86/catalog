<?php

class User extends Model {
    
    var $hasOne = array('School' => 'School');
    
    function full_name() {
        return $this->first_name . ' ' . $this->last_name;
    }
    
    function find($id) {
        $this->where('id', intval($id));
        $this->showHasOne();
        
        return $this->search();
    }
    
    function account_type() {
        if ($this->sys()) {
            return 'Administrator sistem';
        } elseif ($this->admin()) {
            return 'Administrator';
        } elseif ($this->teach()) {
            return 'Profesor';
        } else {
            return 'Student';
        }
    }
    
    function sys() {
        return $this->system;
    }
    
    function admin() {
        return $this->administrator;
    }
    
    function teach() {
        return $this->student;
    }
    
    function stud() {
        return $this->student;
    }
    
    function check_if_exists($id) {
        $this->where('id', intval($id));
        
        return count($this->search());
    }
    
    function check_for_login($username, $password) {
        $this->where('username', $username);
        $user = $this->search();
        $user = convert_array_to_object("user", $user[0]["User"]);
        
        if (!empty($user)) {
            if ($user->password == $password) {
                $_SESSION['the_user_id'] = $user->id;
                
                $user->last_login = date("Y-m-d H:i:s");
                $user->save();
                
                return json_encode(['status' => 'ok']);
            } else {
                return json_encode(['status' => 'bad', 'message' => 'Wrong password!']);
            }
        } else {
            return json_encode(['status' => 'bad', 'message' => 'User not found!']);
        }
    }
    
}

