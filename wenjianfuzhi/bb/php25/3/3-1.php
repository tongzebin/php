<?php
    $name='小花花';
    setcookie('name',$name,time()+10,'/');
    echo $name;
    echo '<a href="3-2.php">跳</a>';