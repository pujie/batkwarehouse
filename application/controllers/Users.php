<?php
class Users extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('user');
    }
    function index(){
        $this->setpassword(1,$this->uri->segment(3));
    }
    function setpassword(){
        $name = $this->uri->segment(3);
        $pass = $this->uri->segment(4);
        $this->_setpassword($name,$pass);
    }
    function _setpassword($name,$password){
        $encrypted = $this->user->encryptpassword($password);
        $this->user->save(array(
            'name'=>$name,'salt'=>$encrypted['salt'],'password'=>$encrypted['encrypted']
        ));
    }
    function generatesalt($password){
        $encrypted = $this->user->encryptpassword($password);
        print_r($this->user->encryptpassword($password));
    }
    function check(){
        $name = $this->uri->segment(3);
        $pass = $this->uri->segment(4);
        if($this->user->checkpassword(array('name'=>$name,'password'=>$pass))){
            echo 'benar';
        }else{
            echo 'salah';
        };
    }
    function createrandomstring(){
        echo $this->user->randomstring();
    }
}