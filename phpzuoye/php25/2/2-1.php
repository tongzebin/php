<?php
    $name='张三';
    $pass=123456;
    setcookie('username',$name,time()+3600,'/');
    setcookie('pwd',$pass,time()+3600,'/');
    echo $name;
    echo '<a href="2-2.php">跳</a>';