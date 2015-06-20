<?php

class ClassStudent extends Model {
    
    var $hasOne = array('Klass' => 'Klass', 'User' => 'User');
    
}