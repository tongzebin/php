<?php
    set_error_handler('myError');
    function myError($error_no,$error_str,$error_file,$error_line){
        $error="错误号".$error_no."错误内容".$error_str."错误文件".$error_file."错误行号"
        .$error_line;
        switch($error_no){
            case 2:
                file_put_contents('warning.txt',$error);
                break;
            case 8:
                file_put_contents('notice.txt',$error);
                break;
        }
    }

    echo $name;
    function fun($q){

    }
    fun();