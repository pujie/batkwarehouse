<?php
Class Stock extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function store(){
        $sql = 'insert into stocks ';
        $sql.= '(kditem,category_id,nmitem,qty,hpp) ';
        $sql.= 'select kditem,nmitem,qty,hpp from temp ';
    }
}