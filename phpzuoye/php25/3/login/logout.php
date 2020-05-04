<?php
    setcookie('name','',time()-1,'/');
    header('location:login.php');