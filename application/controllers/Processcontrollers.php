<?php
Class Processcontrollers extends CI_Controller{
    function __construct(){
        parent::__construct();
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
                $id = $filesop[0];
    			$idr = $filesop[1];
                $name = $filesop[2];
    			$kd1 = $filesop[3];
    			$kd2 = $filesop[4];
    			$kd3 = $filesop[5];
    			$month = $filesop[6];
    			$year = $filesop[7];
                array_push($objarr,array(
                    "id"=>$id,"idr"=>$idr,
                    "name"=>$name,"kd1"=>$kd1,
                    "kd2"=>$kd2,"kd3"=>$kd3,
                    "month"=>$month,"year"=>$year,
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
            $this->load->view("categories/importresult",$data);
        }
    }
}