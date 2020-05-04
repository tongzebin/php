<?php
    header("content-Disposition:attachment;filename={$_GET['q']}");
    $dir='./1/'.$_GET['q'];
    readfile($dir);