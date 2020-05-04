<?php
    session_start();
    $name=$_POST['user'];
    $pwd=$_POST['pwd'];
    $user='aaa';
    $mima='123456';
    if($name==$user && $pwd==$mima){
        $_SESSION['username']=$name;
        header('location:index.php');
    }else{
        header('location:login.php?error=1');
    }