<?php
class Product extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function gets(){
        $sql = 'select id, name, description, amount, unit, sellingprice, alterprice from products ';
        $sql.= '';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'cnt'=>$que->num_rows(),
            'res'=>$que->result()
        );
    }
}