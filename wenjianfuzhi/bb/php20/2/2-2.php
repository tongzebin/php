<?php
    $dir='./img/'.date('Y/m/d/');
    if(!file_exists($dir)){
        mkdir($dir,0777,true);
    }
    $hzm=pathinfo($_FILES['pic']['name'],PATHINFO_EXTENSION);
    $filename=$dir.date('Ymd').'.'.$hzm;
    if(!move_uploaded_file($_FILES['pic']['tmp_name'],$filename)){
        echo '移动失败';
    }
    echo '成功';
