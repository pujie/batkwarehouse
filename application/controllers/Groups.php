<?php
Class Groups extends CI_Controller{
    function __construct(){
        parent::__construct();
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
                '1'=>array('label'=>'Group','url'=>'/groups'),
                '2'=>array('label'=>'Add','url'=>'#')
            ),
            'objs'=>$objs['res'],
            'cats'=>$cats['res'],
            'amount'=>$objs['cnt'],
            'entrygroupstatus'=>'active',
            'username'=>$_SESSION['username']
        );
        $data = array_merge($this->common->setdefaultmenustatus(),$data);
        $this->load->view('groups/add',$data);
    }
    function index(){
        $this->common->checksession();
        $objs = $this->crud->gets(array(
            "tableName"=>"groups",
            "data"=>array(
                "id","name"
            )
        ));
        $data = array(
            'breadcrumb'=>array(
                '0'=>array('label'=>'App','url'=>'/'),
                '1'=>array('label'=>'Group','url'=>'/groups'),
                '2'=>array('label'=>'Index','url'=>'#')
            ),
            'objs'=>$objs['res'],
            'amount'=>$objs['cnt'],
            'groups'=>'active',
            'username'=>$_SESSION['username']
        );
        $data = array_merge($this->common->setdefaultmenustatus(),$data);
        $this->load->view('groups/index',$data);
    }
    function edit(){
        $this->common->checksession();
        $obj = $this->crud->getby(array(
            "tableName"=>"groups",
            "key"=>"id",
            "searchval"=>$this->uri->segment(3),
            "data"=>array(
                "id","name"
            )
        ));
        $data = array(
            'breadcrumb'=>array(
                '0'=>array('label'=>'App','url'=>'/'),
                '1'=>array('label'=>'Group','url'=>'/groups'),
                '2'=>array('label'=>'Edit','url'=>'#')
            ),
            'obj'=>$obj,
            'groupstatus'=>'active',
            'username'=>$_SESSION['username']
        );
        $data = array_merge($this->common->setdefaultmenustatus(),$data);
        $this->load->view('groups/edit',$data);
    }
    function save(){
        $params = $this->input->post();
        $data = array(
            'name'=>$params['name']
        );
        $obj['tableName'] = 'groups';
        $obj['data'] = $params;
        $this->load->model('crud');
        $this->crud->save($obj);
        redirect("/groups/");
    }

}