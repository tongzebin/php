<?php

    if(@$_SESSION['username']){
        echo '欢迎:'.$_SESSION['username'];
        echo '<a href="logout.php">退出</a>';
    }else{
        echo '<a href="login.php">登录</a>';
    }
?>
<a href="index.php">首页</a>
<a href="grzx.php">个人中心</a>