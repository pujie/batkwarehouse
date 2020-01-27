<?php
class Sales extends CI_Controller {
    var $prices = array();
    var $idnames = array();
    function __construct(){
        parent::__construct();
        $this->load->model('product');
        $this->load->library('common');
        session_start();
        $this->initproductnames();
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
        $this->common->checksession();
        $objs = $this->product->gets();
        $data = array(
            'breadcrumb'=>array(
                '0'=>'App','1'=>'Sales','2'=>'Kasir'
            ),
            'objs'=>$objs['res'],
            'amount'=>$objs['cnt'],
            'kasirstatus'=>'active',
            'username'=>$_SESSION['username'],
            'products'=>$this->getproductnames()
        );
        $data = array_merge($this->common->setdefaultmenustatus(),$data);
        $this->load->view('sales/kasir',$data);
    }
    function printtest(){
        echo $this->test();
    }
    function initproductnames(){
        $products = $this->product->getproducts();
        foreach ($products['res'] as $value) {
            array_push($this->idnames,$value->name);
            array_push($this->prices,$value->sellingprice);
        }
    }
    function getproductprice(){
        $id = $this->uri->segment(3);
        echo $this->getproductprice_($id);
    }
    function getproductprice_($productid){
        return $this->prices[$productid];
    }
    function getproductnames(){
        return '[&quot;'.implode('&quot;,&quot;',$this->idnames).'&quot;]';
    }
}