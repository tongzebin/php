<?php   
    $q="./aa";
   echo qw('./aa/');
    function qw($ww){
        if(!is_dir($ww)){
            return "路径不正确";
        }
        $sum=0;
        $qq=opendir($ww);
        while(false!==$c=readdir($qq)){
            if($c=='.'||$c=='..'){
                continue;
            }
            $wq=rtrim($ww,'/').'/'.$c;
            if(is_file($wq)){
                $sum+=filesize($wq);
            }
            if(is_dir($wq)){
               $sum+=qw($wq);
            }
            
           
        } 
       // closedir($qq);
        return $sum;
    } 
    