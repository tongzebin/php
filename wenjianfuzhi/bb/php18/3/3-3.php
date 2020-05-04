<?php
    $a="./aa/";
    $d=opendir($a);
    while(false!==$w=readdir($d)){
        echo $w.'<br>';
    }
    closedir($d);
    echo '<br>';
    $e='./aa/1.txt';
    echo '文件创建时间'.date("Y-m-d H:i:s",filectime($e));
    echo '文件上次修改时间'.date("Y-m-d H:i:s",filemtime($e));
    echo '文件上次访问时间'.date('Y-m-d H:i:s',fileatime($e));