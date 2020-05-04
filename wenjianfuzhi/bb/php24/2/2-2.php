<?php
    $name='小慧慧';
    setCookie('name',$name,time()+2,'/');
    echo '2.php页面输出的:'.$name;
    echo '<a href="2-3.php">3.php</a>';