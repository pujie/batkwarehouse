<?php
class User extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function createsalt($password){
        return(sha1($password));
    }
    function encryptpassword($password){
        $salt = $this->createsalt($password);
        $sugar = sha1('sugar');
        $encrypted = sha1($salt.$sugar);
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
        $_pass = $result->password;
        $sugar = sha1('sugar');
        $salt = $this->createsalt($obj['password']);
        $encrypted = sha1($salt.$sugar);
        if($encrypted===$result->password){
            return true;
        }
        return false;
    }
    function save($obj){
        $sql = "update users ";
        $sql.= 'set salt="'.$obj['salt'].'",password="'.$obj['password'].'"';
        $sql.= 'where id='.$obj['id'].' ';
        $ci = & get_instance();
        $ci->db->query($sql);
    }
}