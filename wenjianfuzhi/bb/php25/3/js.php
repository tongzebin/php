<?php
    @$q=$_COOKIE['q'];
    $q++;
    setcookie('q',$q,time()+111,'/');
    echo "第{$q}次";
    echo '<a href="jsqc">清除</a>';