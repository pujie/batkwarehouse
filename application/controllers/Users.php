<?php
class Users extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('user');
    }
    function index(){
/*        $password = $this->uri->segment(3);
        echo $this->user->createsalt($password);
        print_r($this->user->encryptpassword($password));
    */
        $this->setpassword(1,$this->uri->segment(3));
    }
    function setpassword($user_id,$password){
        $encrypted = $this->user->encryptpassword($password);
        $this->user->save(array(
            'id'=>1,'salt'=>$encrypted['salt'],'password'=>$encrypted['encrypted']
        ));
    }
    function generatesalt($password){
        $encrypted = $this->user->encryptpassword($password);
        print_r($this->user->encryptpassword($password));
    }
    function check(){
        if($this->user->checkpassword(array('name'=>'Kasmudiyanto','password'=>'abcx'))){
            echo 'benar';
        }else{
            echo 'salah';
        };

    }
}