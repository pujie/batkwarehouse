<?php
class Sales extends CI_Controller {
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
        $prod = $this->product->getproductnames();
        $data = array(
            'breadcrumb'=>array(
                '0'=>'App','1'=>'Sales','2'=>'Kasir'
            ),
            'objs'=>$objs['res'],
            'amount'=>$objs['cnt'],
            'kasirstatus'=>'active',
            'username'=>$_SESSION['username'],
            'products'=>$this->test(),//json_encode($prod['res']),
            'defaultdata'=>'[&quot;Alabama&quot;,&quot; Support <support@demo.com> &quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;]',
            'defaull'=>'[&quot;Indonesia&quot;,&quot;Brunei&quot;]'
        );
        $data = array_merge($this->common->setdefaultmenustatus(),$data);
        $this->load->view('sales/kasir',$data);
    }
    function printtest(){
        echo $this->test();
    }
    function test(){
        $o = $this->product->getproductnames();
        //echo json_encode($o['res']);
        $out = array();
        foreach ($o['res'] as $value) {
            array_push($out,$value->name);
            //echo " ".$value->name."<br />";
        }
//        return json_encode($out);
        return '[&quot;'.implode('&quot;,&quot;',$out).'&quot;]';
    }
}