<?php
    function fz($y,$n){
        $f1=fopen($y,'r');
        $f2=fopen($n,'w');
        while($w=fread($f1,100)){
            fwrite($f2,$w);
        }
        fclose($f1);
        fclose($f2);
    }
    fz('a.jpg','b.jpg');
    echo '复制成功';