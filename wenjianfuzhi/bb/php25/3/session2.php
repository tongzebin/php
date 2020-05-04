<?php
    session_start();
    $name=$_SESSION['name'];
    echo $name;
    echo '<a href="session.php">跳</a>';