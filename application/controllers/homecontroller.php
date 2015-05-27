<?php

class HomeController extends Controller {
    
    function index() {
        
    }
    
    function before() {
        $this->ajax = 1;
    }
}
