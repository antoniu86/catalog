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
    
    function check_if_exists($id) {
        $this->where('id', intval($id));
        
        return count($this->search());
    }
    
    function check_for_login($username, $password) {
        $this->where('username', $username);
        $user = $this->search();
        
        if (!empty($user)) {
            if ($user[0]['User']['password'] == $password) {
                $_SESSION['the_user_id'] = $user[0]['User']['id'];
                return json_encode(['status' => 'ok']);
            } else {
                return json_encode(['status' => 'bad', 'message' => 'Wrong password!']);
            }
        } else {
            return json_encode(['status' => 'bad', 'message' => 'User not found!']);
        }
    }
    
}

