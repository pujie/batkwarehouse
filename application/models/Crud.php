<?php
Class Crud extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function save($obj){
        //return json_encode($obj);
        $fields = $obj['data'];
        $keys = array();$vals = array();
        foreach($fields as $key=>$val){
            array_push($keys,$key);
            array_push($vals,$val);
        }
        $sql = 'insert into ' . $obj['tableName'] . ' ';
        $sql.= '('.implode(',',$keys).')';
        $sql.= 'values ';
        $sql.= '("'.implode('","',$vals).'")';
        $ci = & get_instance();
        $ci->db->query($sql);
        return $sql;
    }
}