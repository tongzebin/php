<?php   
    function zh($s){
        if($s/1024>=1){
            if($s/1024/1024>=1){
                if($s/1024/1024/1024>=1){
                    return round($s/1024/1024/1024,2).'gb';
                }
                return round($s/1024/1024,2).'mb';
            }
            return round($s/1024,2).'kb';
        }
         return $s.'b';
    }
    echo zh(123812761653);