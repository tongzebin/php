<?php
    $dir='./file/'.date('Y/m/d/');
    if(!file_exists($dir)){
        mkdir($dir,0777,true);
    }
    $filename=$dir.date('ymd').'.'.pathinfo($_FILES['pic']['name'],PATHINFO_EXTENSION);
    if(!move_uploaded_file($_FILES['pic']['tmp_name'],$filename)){
        echo '失败';
    }else{
        echo '成功';
    }