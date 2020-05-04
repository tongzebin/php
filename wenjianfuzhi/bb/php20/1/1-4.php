<?php
    //var_dump($_FILES);
    $q=array('jpg','png','jpeg');
    $w='./123';
    function qwe($name,$type,$dir){
        switch($_FILES['pic']['error']){
            case 1:
                echo '文件上传太大';
                break;
            case 2:
                echo '文件太大';
                break;
            case 3:
                echo '部分文件上传成功';
                break;
            case 4:
                echo '没有选中文件';
                break;
            case 6:
                echo '找不到临时文件夹';
                break;
            case 7:
                echo '文件写入失败';
                break;
        }
        $hzm=pathinfo($_FILES[$name]['name'],PATHINFO_EXTENSION);

        if(!in_array($hzm,$type)){
            return '文件类型不正确';
        }
        $filename=date('Ymd').mt_rand(0,200).'.'.$hzm;
        $ndir=rtrim($dir,'/').'/'.date('Y/m/d/');
        var_dump($ndir);
       // die();
        if(!file_exists($ndir)){
            mkdir($ndir,0777,true);
        }
        $ndir.=$filename;
        var_dump($ndir);
        //die();
        if(!is_uploaded_file($_FILES[$name]['tmp_name'])){
                echo '请通过post方式传递';
        }
        var_dump($ndir);
        if(!move_uploaded_file($_FILES[$name]['tmp_name'],$ndir)){
            echo '移动失败';
        }
        return $ndir;
    }
    qwe('pic',$q,$w);