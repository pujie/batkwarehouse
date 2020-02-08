<?php
Class Crud extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function save($obj){
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
    function gets($objs){
        $keys = array();$vals = array();
        foreach($objs['data'] as $key=>$val){
            array_push($keys,$key);
            array_push($vals,$val);
        }
        $sql = 'select '.implode(',',$vals).' from ' . $objs['tableName'] . ' ';
        $ci = & get_instance();
        $res = $ci->db->query($sql);
        return array('res'=>$res->result(),'cnt'=>$res->num_rows());
    }
}