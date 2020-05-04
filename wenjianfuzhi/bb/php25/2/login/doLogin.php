<?php
    session_start();
    $name=$_POST['name'];
    $pwd=$_POST['pwd'];
    $a='aaa';
    $b=123456;
    if($name==$a && $pwd==$b){
        echo '登录成功';
        $_SESSION['username']=$name;
        header('location:index.php');
    }else{
        echo '登录失败';
        header('location:login.php?error=1');
    }