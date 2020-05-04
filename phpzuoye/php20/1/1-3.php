<?php   
    //is_uploaded_file  判断文件是否是通过 post上传的
    //move_uploaded_file    将上传的文件移动到新位置
    var_dump($_FILES);
    //1定义保存路径
    $dir='./upload/'.date('Y/m/d/h/i/');
    if(!file_exists($dir)){
        mkdir($dir,0777,true);
    }
    
    $kzm=pathinfo($_FILES['pic']['name'],PATHINFO_EXTENSION);
    $filename=$dir.date('Ymdhis').mt_rand(0,100).'.'.$kzm;
    var_dump($filename);
    
    if(!is_uploaded_file($_FILES['pic']['tmp_name'])){
        echo '来源有误';
    }
   if(!move_uploaded_file($_FILES['pic']['tmp_name'],$filename)){
            echo '失败';
   }else{
       echo '成功';
   }
