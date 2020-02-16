<?php
Class Importtool extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('common');
        $this->load->model("crud");
        session_start();
    }
    function index(){
        $this->common->checksession();
        $data = array(
            'breadcrumb'=>array(
                '0'=>'App','1'=>'Import','2'=>'Import'
            ),
            'importstatus'=>'active',
            'username'=>$_SESSION['username']
        );
        $data = array_merge($this->common->setdefaultmenustatus(),$data);
        $this->load->view('importtool/index',$data);
    }
    function list(){
        $this->common->checksession();
        $objs = $this->crud->gets(array(
            "tableName"=>"temp",
            "data"=>array(
                "kditem","nmitem","category","qty"
            )
        ));
        $data = array(
            'breadcrumb'=>array(
                '0'=>'App','1'=>'Import','2'=>'List yang telah diimport'
            ),
            'objs'=>$objs['res'],
            'amount'=>$objs['cnt'],
            'importstatus'=>'active',
            'username'=>$_SESSION['username']
        );
        $data = array_merge($this->common->setdefaultmenustatus(),$data);
        $this->load->view('importtool/list',$data);
    }
    function import(){
        $params = $this->input->post();
        if(isset($_POST["submit"]))
        {
            $file = $_FILES['file']['tmp_name'];
            $handle = fopen($file, "r");
            $c = 0;
            $objarr = array();
            while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
            {
                $kditem = $filesop[0];
    			$nmitem = $filesop[1];
                $hpp = $filesop[2];
    			$qty = $filesop[6];
                array_push($objarr,array(
                    "kditem"=>$kditem,"nmitem"=>$nmitem,
                    "hpp"=>$hpp,"qty"=>$qty,
                )
                );
                $c = $c + 1;
            }
            $filesop = fgetcsv($handle, 1000, ",");
            $data = array(
                "results" =>$objarr,
                "role"=>"1",
                "feedData"=>"processimport"
            );




            $objs = $this->crud->gets(array(
                "tableName"=>"temp",
                "data"=>array(
                    "kditem","nmitem","category","qty"
                )
            ));
            $data = array(
                'breadcrumb'=>array(
                    '0'=>'App','1'=>'Import','2'=>'List untuk diimport'
                ),
                'amount'=>$c,
                'importstatus'=>'active',
                "results" =>$objarr,
                'username'=>$_SESSION['username']
            );
            $data = array_merge($this->common->setdefaultmenustatus(),$data);




            $this->load->view("importtool/datatoimport",$data);
        }
    }
    function save(){
        $params = $this->input->post();
        $kditem = $params['kditem'];
        $nmitem = $params['nmitem'];
        $hpp = $params['hpp'];
        $qty = $params['qty'];
        $category = $params['category'];
        for($c = 1;$c<$params['count'];$c++ ){
            $sql = "insert into temp (kditem,nmitem, category,hpp, qty) ";
            $sql.= "values ";
            $sql.= "('".$kditem[$c]."','".$nmitem[$c]."','".$category."', '".$hpp[$c]."', '".$qty[$c]."')";
            $data = array(
                'kditem'=>$kditem[$c],'nmitem'=>$nmitem[$c],'category'=>$category,'hpp'=>$hpp[$c],'qty'=>$qty[$c]
            );
            $obj['tableName'] = 'temp';
            $obj['data'] = $data;
            $this->crud->save($obj);
        }
        redirect("/importtool/savesuccess");
    }
    function savesuccess(){
        $this->common->checksession();
        $data = array(
            'breadcrumb'=>array(
                '0'=>'App','1'=>'Import','2'=>'Sukses'
            ),
            'importstatus'=>'active',
            'username'=>$_SESSION['username']
        );
        $data = array_merge($this->common->setdefaultmenustatus(),$data);
        $this->load->view('/importtool/success',$data);
    }
}