<?php

class Kasir extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library('common');
        $this->load->model('product');
        session_start();
    }
    function index(){
        $this->common->checksession();
        $objs = $this->product->gets();
        $data = array(
            'breadcrumb'=>array(
                '0'=>'App','1'=>'Sales','2'=>'Stock'
            ),
            'objs'=>$objs['res'],
            'amount'=>$objs['cnt'],
            'salesstatus'=>'active',
            'username'=>$_SESSION['username']
        );
        $data = array_merge($this->common->setdefaultmenustatus(),$data);
        $this->load->view('sales/kasir_',$data);
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