<?php

class Gudang extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('product');
        $this->load->library('common');
        session_start();
    }
    function index(){
        $this->common->checksession();
        $objs = $this->product->gets();
        $data = array(
            'breadcrumb'=>array(
                '0'=>'App','1'=>'Sales','2'=>'Gudang'
            ),
            'objs'=>$objs['res'],
            'amount'=>$objs['cnt'],
            'gudangstatus'=>'active',
            'username'=>$_SESSION['username']
        );
        $data = array_merge($this->common->setdefaultmenustatus(),$data);
        $this->load->view('gudang/index',$data);
    }
    function edit(){
        $objs = $this->product->gets();
        $data = array(
            'breadcrumb'=>array(
                '0'=>'App','1'=>'Sales','2'=>'Edit Gudang'
            ),
            'objs'=>$objs['res'],
            'amount'=>$objs['cnt'],
            'gudangstatus'=>'active'
        );
        $data = array_merge($this->common->setdefaultmenustatus(),$data);
        $this->load->view('gudang/edit',$data);
    }
    function entry(){
        $this->common->checksession();
        $objs = $this->product->gets();
        $cats = $this->product->getcategories();
        $data = array(
            'breadcrumb'=>array(
                '0'=>'App','1'=>'Sales','2'=>'Entri Gudang'
            ),
            'objs'=>$objs['res'],
            'cats'=>$cats['res'],
            'amount'=>$objs['cnt'],
            'entrygudangstatus'=>'active',
            'username'=>$_SESSION['username']
        );
        $data = array_merge($this->common->setdefaultmenustatus(),$data);
        $this->load->view('gudang/entry',$data);
    }
}