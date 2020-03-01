<?php
Class Crud extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function save($obj){
        $fields = $obj['data'];
        $keys = array();$vals = array();
        $keypar = array();
        foreach($fields as $key=>$val){
            array_push($keys,$key);
            array_push($vals,$val);
            array_push($keypar,''.$key.'="'.$val.'"');
        }
        $sql = 'insert into ' . $obj['tableName'] . ' ';
        $sql.= '('.implode(',',$keys).')';
        $sql.= 'values ';
        $sql.= '("'.implode('","',$vals).'")';
        $sql.= 'on duplicate key update ';
        $sql.= ''.implode(',',$keypar).'';
        $sql.= '';
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
    function getby($objs){
        $keys = array();$vals = array();
        foreach($objs['data'] as $key=>$val){
            array_push($keys,$key);
            array_push($vals,$val);
        }
        $sql = 'select '.implode(',',$vals).' from ' . $objs['tableName'] . ' ';
        $sql.= 'where ' . $objs['key'] . ' = ' . $objs['searchval'] . ' ';
        $ci = & get_instance();
        $res = $ci->db->query($sql);
        $result = $res->result();
        return $result[0];
    }
    function clear($tableName){
        $sql = 'delete from '.$tableName.' ';
        $ci = & get_instance();
        $res = $ci->db->query($sql);
    }
}