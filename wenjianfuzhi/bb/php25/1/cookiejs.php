<?php
    @$num=$_COOKIE['num'];
    $num++;
    setcookie('num',$num,time()+3600,'/');
    echo $num;
    echo '<a href="cookieqc.php">清除</a>';