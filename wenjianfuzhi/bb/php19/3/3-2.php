<?php   
    function del($dir){
        if(!file_exists($dir)){
            mkdir($dir);
        }
        if(!is_dir($dir)){
            return '输入正确的目录';
        }
        $dd=opendir($dir);
        while(false!==$f=readdir($dd)){
            if($f=='.'||$f=='..'){
                continue;
            }
            $q=rtrim($dir,'/').'/'.$f;
            if(is_file($q)){
                unlink($q);
            }
            if(is_dir($q)){
                del($q);
            }
        }
        closedir($dd);
        rmdir($dir);
    }
    del('./sdayg');