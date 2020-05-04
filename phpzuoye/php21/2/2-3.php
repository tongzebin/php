<?php
    header("content-Disposition:attachment;filename={$_GET['q']}");
    $p='./1/'.$_GET['q'];
    readfile($p);