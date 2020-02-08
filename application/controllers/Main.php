<?php
class Main extends CI_Controller {
    function __construct(){
        parent::__construct();
        session_start();
        $this->load->library('common');
    }
    function index(){
        $info = '';
        if(isset($_SESSION['wrongpassword'])){
            $info = ($_SESSION['wrongpassword'])?'Password Salah':'';
        };
        if(isset($_SESSION['wrongpage'])){
            $info = ($_SESSION['wrongpage'])?'Halaman yang dipilih salah':'';
        };
        $data = array(
            'info'=>$info
        );
        $this->load->view('login',$data);
    }
    function dologout(){
        session_unset();
        session_destroy();
        redirect('/main');
    }
    function loginhandler(){
        $params = $this->input->post();
        $this->load->model('user');
        if($this->user->checkpassword($params)){
            $_SESSION['username'] = $params['username'];
            $this->gotopage($params['role']);
        }else{
            session_unset('wrongpage');
            $_SESSION['wrongpassword'] = true;
            //$this->common->checksession();
            redirect("/main");
    }}
    function gotopage($n){
        switch($n){
            case '1':
            redirect('/sales');
            break;
            case '2':
            redirect('/gudang');
            break;
            case '3':
            redirect('/sales/kasir');
            break;
            case '0':
            $_SESSION['wrongpage'] = true;
            //$this->dologout();
            redirect("/main");
            break;
        }
    }
    function save(){
        $params = $this->input->post();
        $this->load->model('crud');
        echo $this->crud->save($params);
    }
}