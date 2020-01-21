<?php
class User extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function createsalt($password){
        return(sha1($password));
    }
    function encryptpassword($password){
        $salt = $this->createsalt($this->randomstring());
        $encrypted = sha1($salt.$password);
        return array('salt'=>$salt,'encrypted'=>$encrypted);
    }
    function checkpassword($obj){
        $sql = "select id,name,salt,password from users ";
        $sql.= "where name='".$obj['name']."'";
        echo $sql;echo '<br />';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        $res = $que->result();
        $result = $res[0];
        $_salt = $result->salt;
        $_encrypted = $result->password;
        $_pass = $obj['password'];
        $password = sha1($_salt.$_pass);
        if($_encrypted===$password){
            return true;
        }
        return false;
    }
    function save($obj){
        $sql = 'update users ' ;
        $sql.= 'set salt="'.$obj['salt'].'",password="'.$obj['password'].'"';
        $sql.= 'where name="'.$obj['name'].'" ';
        $ci = & get_instance();
        $ci->db->query($sql);
    }
    function randomstring(){
        $this->load->helper('string');
        return random_string('alnum',10);
    }
}