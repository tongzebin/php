<?php
    function fz($y,$n){
        if(!is_dir($n)||(!file_exists($n))){
            mkdir($n);
        }
        $d=opendir($y);
        while(false!==$w=readdir($d)){
            if($w=='.'||$w=='..'){
                continue;
            }
            $f1=rtrim($y,'/').'/'.$w;
            $f2=rtrim($n,'/').'/'.$w;
            if(is_file($f1)){
                copy($f1,$f2);
            }
            if(is_dir($f1)){
                fz($f1,$f2);
            }
        }
        closedir($d);

    }
    echo '复制成功';
    fz('./aa','./bb');