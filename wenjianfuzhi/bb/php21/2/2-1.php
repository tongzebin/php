<?php
    function qq($name,$dir){
        $sum=count($_FILES[$name]['name']);
        for($i=0;$i<$sum;$i++){
            $dir1=rtrim($dir,'/').date('/Y/m/d/');
            if(!file_exists($dir1)){
                mkdir($dir1,0777,true);
            }
            $filename=$dir1.date('Ymd').mt_rand(0,9999).'.'.pathinfo($_FILES[$name]['name'][$i],PATHINFO_EXTENSION);
            if(!move_uploaded_file($_FILES[$name]['tmp_name'][$i],$filename)){
                echo '失败<br>';
            }else{
                echo '成功<br>';
            }
        }
    }
qq('pic','./file');