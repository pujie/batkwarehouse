<?php
class Common{
    function setdefaultmenustatus(){
        return array(    
            'salesstatus'=>'noactive',
            'kasirstatus'=>'noactive',
            'gudangstatus'=>'noactive',
            'entrygudangstatus'=>'noactive',
            'importstatus'=>'noactive'
        );
    }
    function checksession(){
        if(is_null($_SESSION['username'])){
            redirect('/main');
        }
    }
}