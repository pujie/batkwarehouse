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
    function getcategories(){
        $sql = 'select id, name from categories ';
        $sql.= '';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'cnt'=>$que->num_rows(),
            'res'=>$que->result()
        );
    }
    function getproducts(){
        $sql = 'select concat(id, " - ", name)name,sellingprice from products ';
        $sql.= '';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'cnt'=>$que->num_rows(),
            'res'=>$que->result()
        );
    }
    function importTemp(){
        $sql = 'insert into products (kditem,name,category_id,hpp,qty) select a.kditem,a.nmitem,b.id,a.hpp,a.qty from temp a left outer join groups b on b.name=a.category ' ;
        $ci = & get_instance();
        $que = $ci->db->query($sql);
    }
}