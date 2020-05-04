<?php
    unlink($_GET['del']);//删除文件
    echo '<script>alert("删除成功");location="show.php";</script>';
