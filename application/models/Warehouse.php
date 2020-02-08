<?php
Class Warehouse extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    public $id;
    public $name;
    public $description;
    public $createdate; 
}

        //print_r($params);
        //$obj = new stdClass();
        //$data = new stdClass();
        //$data->name = $params['name'];
        //$data->description = $params['description'];
        //$obj->tableName = 'warehouse';
        //$obj->data = $data;
