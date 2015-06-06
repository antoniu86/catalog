<?php

$routing = array(
    '/admin\/(.*?)\/(.*?)\/(.*)/' => 'admin/\1_\2/\3',
    '/login\/(.*)/' => 'user/login/\1',
    '/logout/' => 'user/logout'
);

$default['controller'] = 'home';
$default['action'] = 'index';