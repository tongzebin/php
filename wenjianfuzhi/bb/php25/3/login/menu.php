<?php
    if(@$_COOKIE['name']){
        echo '欢迎'.$_COOKIE['name'];
        echo '<a href="logout">退出</a>';
    }else{
        echo '<a href="login.php">登录</a>';
    }
    ?>
    <a href="grzx.php">个人中心</a>
    <a href="index.php">首页</a>