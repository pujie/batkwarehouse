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
                '0'=>array('label'=>'App','url'=>'/'),
                '1'=>array('label'=>'Import Tool','url'=>'/importtool'),
                '2'=>array('label'=>'Index','url'=>'#')
            ),
            'importstatus'=>'active',
            'username'=>$_SESSION['username']
        );
        $data = array_merge($this->common->setdefaultmenustatus(),$data);
        $this->load->view('importtool/index',$data);
    }
    function productlist(){
        $this->common->checksession();
        $objs = $this->crud->gets(array(
            "tableName"=>"temp",
            "data"=>array(
                "kditem","nmitem","category","qty"
            )
        ));
        $data = array(
            'breadcrumb'=>array(
                '0'=>array('label'=>'App','url'=>'/'),
                '1'=>array('label'=>'Import Tool','url'=>'/importtool'),
                '2'=>array('label'=>'List','url'=>'#')
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
                $unit = $filesop[7];
                array_push($objarr,array(
                    "kditem"=>$kditem,"nmitem"=>$nmitem,
                    "hpp"=>$hpp,"qty"=>$qty,"unit"=>$unit
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
                    '0'=>array('label'=>'App','url'=>'/'),
                    '1'=>array('label'=>'Import Tool','url'=>'/importtool'),
                    '2'=>array('label'=>'Import','url'=>'#')
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
        $unit = $params['unit'];
        $category = $params['category'];
        for($c = 1;$c<$params['count'];$c++ ){
            $sql = "insert into temp (kditem,nmitem, category,hpp, qty,unit) ";
            $sql.= "values ";
            $sql.= "('".$kditem[$c]."','".$nmitem[$c]."','".$category."', '".$hpp[$c]."', '".$qty[$c]."', '".$unit[$c]."')";
            $data = array(
                'kditem'=>$kditem[$c],'nmitem'=>$nmitem[$c],'category'=>$category,'hpp'=>$hpp[$c],'qty'=>$qty[$c],'unit'=>$unit[$c]
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
                '0'=>array('label'=>'App','url'=>'/'),
                '1'=>array('label'=>'Import Tool','url'=>'/importtool'),
                '2'=>array('label'=>'Success','url'=>'#')
            ),
            'importstatus'=>'active',
            'username'=>$_SESSION['username']
        );
        $data = array_merge($this->common->setdefaultmenustatus(),$data);
        $this->load->view('/importtool/success',$data);
    }
    function clearproducts(){
        $this->crud->clear('products');
    }
    function importTempProducts(){
        $this->load->model('product');
        $this->product->importTemp();
    }
}