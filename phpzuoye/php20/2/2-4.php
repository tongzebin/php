<?php
    $dir='./file/';
    function qq($name,$dir){
        $ndir=$dir.date('Y/m/d/');
        $hzm=pathinfo($_FILES[$name]['name'],PATHINFO_EXTENSION);
        $file=$ndir.date('Ymd').mt_rand(0,9999).'.'.$hzm;
        if(!file_exists($ndir)){
            mkdir($ndir,0777,true);
        }
        if(!move_uploaded_file($_FILES[$name]['tmp_name'],$file)){
            return '失败';
        }
        return '成功';
    }
    echo qq('pic',$dir);