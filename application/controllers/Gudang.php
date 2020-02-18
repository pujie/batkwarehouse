<?php

class Gudang extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('product');
        $this->load->library('common');
        $this->load->model("crud");
        session_start();
    }
    function add(){
        $this->common->checksession();
        $objs = $this->product->gets();
        $cats = $this->product->getcategories();
        $data = array(
            'breadcrumb'=>array(
                '0'=>array('label'=>'App','url'=>'/'),
                '1'=>array('label'=>'Gudang','url'=>'/gudang'),
                '2'=>array('label'=>'Add','url'=>'#')
            ),
            'objs'=>$objs['res'],
            'cats'=>$cats['res'],
            'amount'=>$objs['cnt'],
            'entrygudangstatus'=>'active',
            'username'=>$_SESSION['username']
        );
        $data = array_merge($this->common->setdefaultmenustatus(),$data);
        $this->load->view('gudang/add',$data);
    }
    function index(){
        $this->common->checksession();
        $objs = $this->crud->gets(array(
            "tableName"=>"warehouses",
            "data"=>array(
                "id","name","description"
            )
        ));
        $data = array(
            'breadcrumb'=>array(
                '0'=>array('label'=>'App','url'=>'/'),
                '1'=>array('label'=>'Gudang','url'=>'/gudang'),
                '2'=>array('label'=>'Index','url'=>'#')
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
        $this->common->checksession();
        $obj = $this->crud->getby(array(
            "tableName"=>"warehouses",
            "key"=>"id",
            "searchval"=>$this->uri->segment(3),
            "data"=>array(
                "id","name","description"
            )
        ));
        $data = array(
            'breadcrumb'=>array(
                '0'=>array('label'=>'App','url'=>'/'),
                '1'=>array('label'=>'Gudang','url'=>'/gudang'),
                '2'=>array('label'=>'Edit','url'=>'#')
            ),
            'obj'=>$obj,
            'gudangstatus'=>'active',
            'username'=>$_SESSION['username']
        );
        $data = array_merge($this->common->setdefaultmenustatus(),$data);
        $this->load->view('gudang/edit',$data);
    }
    function save(){
        $params = $this->input->post();
        $data = array(
            'name'=>$params['name'],'description'=>$params['description']
        );
        $obj['tableName'] = 'warehouses';
        $obj['data'] = $params;
        $this->load->model('crud');
        $this->crud->save($obj);
        redirect("/Gudang/");
    }
}