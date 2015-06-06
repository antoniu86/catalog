<?php

class ErrorController extends ApplicationController {
    
    function before($params = null) {
        parent::before($params);
        $this->redirect_to_home();
    }
            
    function index($params = array()) {
        $this->render = 0;
        
        if ($params == '404') {
            $this->missing();
        }
    }
    
    function missing() {
        $this->render = 1;
    }
    
}