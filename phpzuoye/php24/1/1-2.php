<?php
    $name="小翠翠";
    setCookie('username',$name,time()+2,'/');
    echo '2.php页面输出的:'.$name;
    echo '<a href="./1-3.php">3.php</a>';