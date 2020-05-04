<?php
    session_start();
    @$q=$_SESSION['q'];
    $q++;
    $_SESSION['q']=$q;
    echo "第{$q}次";
    echo "<a href='qc.php'>清除</a>";