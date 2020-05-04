<?php   
    @$q=$_COOKIE['q'];
    $q++;
    setcookie('q',$q,time()+100,'/');
    echo "第{$q}次";
    echo '<a href="jsqc.php">清除</a>';