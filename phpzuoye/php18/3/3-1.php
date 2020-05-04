<?php   
    $a="./1.txt";
    var_dump(is_dir($a));
    var_dump(is_readable($a));
    var_dump(is_writable($a));
    var_dump(is_executable($a));
    var_dump($qe=touch('3.txt'));
    var_dump($ee=file_exists($a));
    if(file_exists('3.txt')){
        unlink("./3.txt");
    }else{
        echo '文件不存在';
    }
    var_dump(is_file('1.txt'));
