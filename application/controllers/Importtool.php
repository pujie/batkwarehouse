<?php
Class Importtool extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $this->load->view('importtool/index');
    }
    function import(){
        session_start();
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
            $this->load->view("importtool/akskomp",$data);
        }
    }
    function save(){
        $params = $this->input->post();
        $kditem = $params['kditem'];
        $nmitem = $params['nmitem'];
        $hpp = $params['hpp'];
        $qty = $params['qty'];
        $category = $params['category'];
        $this->load->model('crud');
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
        $this->load->view('/importtool/success');
    }
}