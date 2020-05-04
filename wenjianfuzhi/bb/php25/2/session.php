<?php
    session_start();
    $name='爱德华';
    $_SESSION['name']=$name;
    echo '1'.$name;
    echo "<a href='session2.php'>跳</a>";