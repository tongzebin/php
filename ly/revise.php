<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
	$rev=$_GET['rev'];//接收要修改的键
	$wj=rtrim(file_get_contents('./ly.db'),'@@');//接收文件
	$arr1=explode('@@',$wj);//转换数组
	$str1=$arr1[$rev];	//拿出要修改的留言
	$arr2=explode('##',$str1);//拆分成数组
    $name=$arr2['1'];
    $bt=$arr2['0'];
    $content=$arr2['2'];
    $ip=$arr2['3'];
    $time=$arr2['4'];
	include './menu.php';
?>
<form action="xiugai.php" method="post">
<table border="1" cellpadding="5">
    <tr>
        <th>标题</th>
        <th>作者</th>
        <th>内容</th>
        <th>留言者ip</th>
        <th>上次留言时间</th>
        <th>操作</th>
    </tr>
	<tr>
        <td><input type="texe" value="<?php echo $bt;?>" name="bt"></td>
        <td><input type="texe" value="<?php echo $name;?>" name="name"></td>
        <td><input type="texe" value="<?php echo $content?>" name="content"></td>
        <td><input type="texe" value="<?php echo $ip;?>" readonly name="ip"></td>
        <td><input type="texe" value="<?php echo $time ?>" readonly></td>
		<input type="hidden" name="rev" value="<?php echo $rev;?>">
        <td><input type="submit" value="修改"></td>
    </tr>
</table>
<form>
</body>
</html>



	
	
	
