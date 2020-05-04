<?php   
    session_start();
    $name=$_SESSION['name'];
    echo '2'.$name;
    echo '<a href="session.php">跳</a>';