<?php
    if(empty($_SESSION['username'])){
        echo '<a href="">登录</a>';
    }else{
        echo '欢迎'.$_SESSION['username'];
        echo '<a href="logout">退出</a>';
    }
    ?>
    <a href="index.php">首页</a>
    <a href="grzx.php">个人中心</a>