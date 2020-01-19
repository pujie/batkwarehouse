<?php
class Sales extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('product');
        $this->load->library('common');
    }
    function index(){
        $objs = $this->product->gets();
        $data = array(
            'breadcrumb'=>array(
                '0'=>'App','1'=>'Sales','2'=>'Stock'
            ),
            'objs'=>$objs['res'],
            'amount'=>$objs['cnt'],
            'salesstatus'=>'active'
        );
        $data = array_merge($this->common->setdefaultmenustatus(),$data);
        $this->load->view('sales/index',$data);
    }
    function showhidecolumn(){
        $objs = $this->product->gets();
        $data = array(
            'breadcrumb'=>array(
                '0'=>'App','1'=>'Sales','2'=>'Stock'
            ),
            'objs'=>$objs['res'],
            'amount'=>$objs['cnt'],
            'salesstatus'=>'active'
        );
        $data = array_merge($this->common->setdefaultmenustatus(),$data);
        $this->load->view('sales/showhidecolumn',$data);
    }
    function kasir(){
        $objs = $this->product->gets();
        $data = array(
            'breadcrumb'=>array(
                '0'=>'App','1'=>'Sales','2'=>'Kasir'
            ),
            'objs'=>$objs['res'],
            'amount'=>$objs['cnt'],
            'kasirstatus'=>'active'
        );
        $data = array_merge($this->common->setdefaultmenustatus(),$data);
        $this->load->view('sales/kasir',$data);
    }
}