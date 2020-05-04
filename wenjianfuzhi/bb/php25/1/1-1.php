<?php   
    $name='小莉莉';
    $pass='123123';
    setcookie('name',$name,time()+300,'/');
    setcookie('pwd',$pass,time()+300,'/');
    echo '1.php输出的'.$name;
    echo "<a href='1-2.php'>跳</a>";