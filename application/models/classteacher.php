<?php

class ClassTeacher extends Model {
    
    var $hasOne = array('Klass' => 'Klass', 'User' => 'User');
    
}