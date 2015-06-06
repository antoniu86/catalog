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
    
    function get($name) {
        if (isset($this->variables[$name])) {
            return $this->variables[$name];
        } else {
            return;
        }
    }

    function render($ajax = 0, $path = NULL) {
        $html = new HTML;
        extract($this->variables);

        if ($ajax == 0) {
            if (file_exists(ROOT . DS . 'application' . DS . 'views' . DS . 'layouts' . DS . 'header.php')) {
                include (ROOT . DS . 'application' . DS . 'views' . DS . 'layouts' . DS . 'header.php');
            }
        }

        if ($path) {
            if (file_exists(ROOT . DS . 'application' . DS . 'views' . DS . $path . '.php')) {
                include (ROOT . DS . 'application' . DS . 'views' . DS . $path . '.php');
            }
        } else {
            if (file_exists(ROOT . DS . 'application' . DS . 'views' . DS . $this->_controller . DS . $this->_action . '.php')) {
                include (ROOT . DS . 'application' . DS . 'views' . DS . $this->_controller . DS . $this->_action . '.php');
            }
        }

        if ($ajax == 0) {
            if (file_exists(ROOT . DS . 'application' . DS . 'views' . DS . 'layouts' . DS . 'footer.php')) {
                include (ROOT . DS . 'application' . DS . 'views' . DS . 'layouts' . DS . 'footer.php');
            }
        }
    }
    
    function render_view($view) {
        $html = new HTML;
        extract($this->variables);
        
        if (file_exists(ROOT . DS . 'application' . DS . 'views' . DS . $view . '.php')) {
            include(ROOT . DS . 'application' . DS . 'views' . DS . $view . '.php');
            return;
        }
        
        if (file_exists(ROOT . DS . 'application' . DS . 'views' . DS . $this->variables['folder'] . DS . '_' . $view . '.php')) {
            include(ROOT . DS . 'application' . DS . 'views' . DS . $this->variables['folder'] . DS . '_' . $view . '.php');
        }
    }
}
