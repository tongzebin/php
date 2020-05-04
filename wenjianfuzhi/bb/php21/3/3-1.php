<?php
    var_dump($_FILES);
    function upload($name,$type=array('jpg','jpeg','png'),$dir='./file'){
       
        $sum=count($_FILES[$name]['size']);
        for($q=0;$q<$sum;$q++){
            $hzm=pathinfo($_FILES[$name]['name'][$q],PATHINFO_EXTENSION);
            var_dump($hzm);
           
            if(!in_array($hzm,$type)){
                echo '文件类型不正确';
                continue;
            }
            $ndir=rtrim($dir,'/').'/'.date('Y/m/d/');
            if(!file_exists($ndir)){
                mkdir($ndir,0777,true);
            }
            if(!is_uploaded_file($_FILES[$name]['tmp_name'][$q])){
                return '传输方式有误';
            }
            $filename=$ndir.date('Ymd').mt_rand(0,999).'.'.$hzm;
            if(!move_uploaded_file($_FILES[$name]['tmp_name'][$q],$filename)){
                echo '失败';
            }else{
                echo '成功';
            }
        }
    }
    echo upload('pic');