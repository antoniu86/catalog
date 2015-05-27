<?php

class Controller {
    protected $_controller;
    protected $_action;
    protected $_template;
    public $ajax;
    public $render;

    function __construct($controller, $action) {
        global $inflect;

        $this->_controller = ucfirst($controller);
        $this->_action = $action;
        $this->ajax = 0;
        $this->render = 1;
        
        if (file_exists(ROOT . DS . 'application' . DS . 'models' . DS . strtolower($inflect->singularize($controller)) . '.php')) {
            $model = ucfirst($inflect->singularize($controller));
            $this->$model = new $model;
        }
        $this->_template = new Template($controller, $action);
        $this->_template->set('folder', $controller);
    }

    function set($name, $value) {
        $this->_template->set($name, $value);
    }

    function __destruct() {
        if ($this->render) {
            $this->_template->render($this->ajax);
        }
    }
}
