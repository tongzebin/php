<?php
    session_start();
    $name="王宝强";
    $_SESSION['name']=$name;
    echo $name;
    echo "<a href='sessionqc.php'>跳</a>";