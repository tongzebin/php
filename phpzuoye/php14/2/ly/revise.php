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
	$rev=$_GET['rev'];
	$wj=rtrim(file_get_contents('./sjk.txt'),'@');
	$arr1=explode('@',$wj);
	$str1=$arr1[$rev];	//拿出要修改的留言
	var_dump($str1);
	$arr2=explode('#',$str1);//拆分成数组
    var_dump($arr2);
    $name=$arr2['1'];
    $bt=$arr2['0'];
    $content=$arr2['2'];
?>
<table border="1" cellpadding="5">
    <tr>
        <th>用户名</th>
        <th>账号</th>
        <th>密码</th>
    </tr>
	<tr>
        <td><input type="texe" value="<?php echo $bt;?>" name="bt"></td>
        <td><input type="texe" value="<?php echo $name;?>" name="name"></td>
        <td><input type="texe" value="<?php echo $content?>" name="content"></td>
       <!-- <td><input type="submit" value="修改"></td>-->
       <td><a href="?qwe=1">修改</a></td>
    </tr>
</table>
</body>
</html>

	
	
	
