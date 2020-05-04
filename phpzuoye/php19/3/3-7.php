<?php   
    
    $w=fopen('aaa.txt','r');
    while($a=fgetc($w)){
        echo $a;
    }
    readfile('aaa.txt');