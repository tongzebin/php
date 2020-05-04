<?php
    $f=fopen("aaa.txt",'a+');
    fwrite($f,'asdayhtf12312');
    rewind($f);
    while($e=fread($f,2)){
        echo $e;
    }