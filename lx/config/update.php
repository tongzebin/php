<?php
    $wj=file_get_contents('dbconfig.php');
    //var_dump($_GET);
    
    foreach($_GET as $k=>$v){
        $wj=preg_replace("/define\(\"{$k}\",\".*\"\)/","define(\"{$k}\",\"{$v}\")",$wj);
    }
    file_put_contents('dbconfig.php',$wj);
    echo '<a href="index.php">回去</a>';
    