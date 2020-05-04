<?php   
    $q="./aa";
   echo qw('./aa/');
    function qw($ww){
        if(!is_dir($ww)){
            return "路径不正确";
        }
        $qq=opendir($ww);
        while(false!==$c=readdir($qq)){
            if($c=='.'||$c=='..'){
                continue;
            }
            $wq=rtrim($ww,'/').'/'.$c;
            if(is_file($wq)){
                unlink($wq);
            }
            if(is_dir($wq)&&count($y=scandir($wq))==2){
               rmdir($wq);
               var_dump($y);
            }else{
                qw($wq);
            }
        }
        closedir($qq);
        rmdir($ww);
        return '删除成功';
    } 
    