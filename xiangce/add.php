<?php
    //var_dump($_FILES);
    $dir='./img/';
    echo dwjsc('pic',$dir);
    function dwjsc($name,$dir){
            //判断是否是post形式传过来的
            // if(!is_uploaded_file($_FILES[$name]["tmp_name"][0]){
            //     echo '传输方式有误';
            // }
           
        foreach($_FILES[$name]['tmp_name'] as $k=>$v){
            $m=$k;
            //var_dump($k);
            //错误文件跳出
            if($_FILES[$name]['error'][$k]>0){
                echo '第'.($m+1).'个文件未完成上传';
                echo '<a href="show.php">前去查看</a>';
                continue;
            }
            //整理路径
                if(!file_exists($dir)){
                    mkdir($dir,0777,true);
                }
           
            $filename=$dir.date('Ymd').mt_rand(0,100).'.'.pathinfo($_FILES[$name]['name'][$k],PATHINFO_EXTENSION);
            
            //var_dump($filename);
            
                if(!move_uploaded_file($v,$filename)){
                    echo '第'.($m+1).'个文件未完成移动';
                }
                echo '添加成功<a href="show.php">前去查看</a>';
        }
        
    } 
