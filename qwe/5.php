<?php
    $lj=mysqli_connect('localhost','root','','lx');
    mysqli_set_charset($lj,'utf8');
    $sql='select * from lx';
    $fs=mysqli_query($lj,$sql);
    $q=mysqli_fetch_assoc($fs);
    var_dump($q);