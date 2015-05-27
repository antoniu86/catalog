<?php

class Template {
    protected $variables = array();
    protected $_controller;
    protected $_action;

    function __construct($controller, $action) {
        $this->_controller = $controller;
        $this->_action = $action;
    }

    function set($name, $value) {
        $this->variables[$name] = $value;
    }

    function render($doNotRenderHeader = 0) {
        $html = new HTML;
        extract($this->variables);

        if ($doNotRenderHeader == 0) {
            if (file_exists(ROOT . DS . 'application' . DS . 'views' . DS . 'layouts' . DS . 'header.php')) {
                include (ROOT . DS . 'application' . DS . 'views' . DS . 'layouts' . DS . 'header.php');
            }
        }

        if (file_exists(ROOT . DS . 'application' . DS . 'views' . DS . $this->_controller . DS . $this->_action . '.php')) {
            include (ROOT . DS . 'application' . DS . 'views' . DS . $this->_controller . DS . $this->_action . '.php');
        }

        if ($doNotRenderHeader == 0) {
            if (file_exists(ROOT . DS . 'application' . DS . 'views' . DS . 'layouts' . DS . 'footer.php')) {
                include (ROOT . DS . 'application' . DS . 'views' . DS . 'layouts' . DS . 'footer.php');
            }
        }
    }
}
