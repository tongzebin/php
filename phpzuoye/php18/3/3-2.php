<?php
    $a="./aa/1.txt";
    echo '当前文件的文件名'.basename($a).'<br/>';
    echo '当前文件的路径'.dirname($a).'<br/>';
    $qq=pathinfo($a);
    var_dump($qq);
    echo '当前文件的路径是'.$qq['dirname'];
    echo '当前文件的文件名是'.$qq['basename'];
    echo '当前文件的后缀名是'.$qq['extension'];
    echo '当前文件的不含后缀名的文件名是'.$qq['filename'];
    echo '<hr/>';
    echo '当前文件的路径是'.pathinfo($a,PATHINFO_DIRNAME);
    echo '当前文件的后缀名是'.pathinfo($a,PATHINFO_EXTENSION);
    echo '当前文件的不含后缀名的文件名是'.pathinfo($a,PATHINFO_FILENAME);
    echo '当前文件的文件名是'.pathinfo($a,PATHINFO_BASENAME);
    