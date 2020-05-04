<?php
    session_start();
    $name=$_SESSION['name'];
    echo $name;
    echo '<a href="sessionjs.php">跳</a>';
