<?php
    session_start();
    $name='下水道';
    $_SESSION['name']=$name;
    echo $name;
    echo '<a href="session2.php">跳</a>';