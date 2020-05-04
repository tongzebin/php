<?php
	$wj=rtrim(file_get_contents('./sjk.txt'),'@');
	$arr1=explode('@',$wj);
	$rev=$_POST['rev'];
    //var_dump($_POST);
    $user=$_POST['user'];
    $yhm=$_POST['yhm'];
    $pwd=$_POST['pwd'];
    $str2=$yhm.'#'.$user.'#'.$pwd;
	//var_dump($str2);
    $arr1[$rev]=$str2;
	//var_dump($arr1);
    $str=implode('@',$arr1).'@';
	//var_dump($str);
    file_put_contents('./sjk.txt',$str);
	echo "<a href='show.php'>浏览后台</a>\t"; 
	echo "<a href='zhuce.php'>去注册</a>\t"; 
	echo "<a href='index.php'>去登录</a>";
?>