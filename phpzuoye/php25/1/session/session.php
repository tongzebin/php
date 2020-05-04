<?php
    session_start();
    @$num=$_SESSION['num'];
    $num++;
    $_SESSION['num']=$num;
    echo "第{$num}次访问";
    echo '<a href="clearsession.php">清除</a>';