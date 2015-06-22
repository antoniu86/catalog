<?php

class KlassStudent extends Model {

    var $hasOne = array('Klass' => 'Klass', 'User' => 'User');

    function find($id) {
        $this->where('id', $id);
        return $this->search();
    }
    
    function find_all($klass_id) {
        $this->where('klass_id', $klass_id);
        $this->showHasOne();
        return $this->search();
    }

    function select_notenrolled($klass_id, $year_id, $school_id) {
        $ids = array();
        $existing = $this->custom('select user_id as id from klassstudents where year_id = ' . $year_id);

        foreach ($existing as $value):
            $ids[] = $value['Klassstudent']['id'];
        endforeach;

        if (count($ids) == 0):
            return $this->custom('select * from users where student is true and school_id = ' . $school_id);
        else:
            $sql_ids = implode(',', $ids);

            return $this->custom('select * from users where student is true and school_id = ' . $school_id . ' and id not in (' . $sql_ids . ')');
        endif;
    }

}
