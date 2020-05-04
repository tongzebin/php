<?php
    $name="小琪琪";
    setcookie('name',$name,time()+3,'/');
    echo '2.php输出的'.$name;
    echo "<a href='3-3.php'>3.php</a>";