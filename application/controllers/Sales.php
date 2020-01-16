<?php

class Sales extends CI_Controller {
    function __construct(){
        parent::__construct();
    }
    function index(){
        $this->load->view('sales/index');
    }
    function getparam(){
        $param1=$this->uri->segment(3);
        $param2=$this->uri->segment(4);
        $param3=$this->uri->segment(5);
        $param4=$this->uri->segment(6);
        if($param1=='ngetes'){
            echo 'ini cuma ngetes ';
        }
        else{
            echo 'ini serius <br/>
            tapi boong LOL ';
        }
        echo $param1;
        echo $param2;
        echo $param3*$param4;
    }
    function penjumlahan(){
        $angka1=$this->uri->segment(3);
        $angka2=$this->uri->segment(4);
        echo $angka1+$angka2;
    }
}