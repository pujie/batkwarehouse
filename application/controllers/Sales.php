<?php
class Sales extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('product');
    }
    function index(){
        $objs = $this->product->gets();
        $data = array(
            'breadcrumb'=>array(
                '0'=>'App','1'=>'Sales','2'=>'Stock'
            ),
            'objs'=>$objs['res'],
            'amount'=>$objs['cnt']
        );
        $this->load->view('sales/index',$data);
    }
    function showhidecolumn(){
        $objs = $this->product->gets();
        $data = array(
            'breadcrumb'=>array(
                '0'=>'App','1'=>'Sales','2'=>'Stock'
            ),
            'objs'=>$objs['res'],
            'amount'=>$objs['cnt']
        );
        $this->load->view('sales/showhidecolumn',$data);
    }
}