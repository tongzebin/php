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
	var_dump($rev);
	$wj=rtrim(file_get_contents('./sjk.txt'),'@');
	$arr1=explode('@',$wj);
	$str1=$arr1[$rev];	//拿出要修改的用户数据
	$arr2=explode('#',$str1);//拆分成数组
    var_dump($arr2);
    $user=$arr2['1'];
    $pwd=$arr2['2'];
	$yhm=$arr2['0'];
	echo "<a href='show.php'>浏览后台</a>\t"; 
	echo "<a href='zhuce.php'>去注册</a>\t";
	echo "<a href='index.php'>去登录</a>";
?>
<form action="xiugai.php" method="post">
<table border="1" cellpadding="5">
    <tr>
        <th>用户名</th>
        <th>账号</th>
        <th>密码</th>
        <th>操作</th>
    </tr>
	<tr>
        <td><input type="texe" value="<?php echo $yhm;?>" name="yhm"></td>
        <td><input type="texe" value="<?php echo $user;?>" name="user" readonly></td>
        <td><input type="password" value="<?php echo $pwd?>" name="pwd"></td>
		<input type="hidden" name="rev" value="<?php echo $rev;?>">
        <td><input type="submit" value="修改"></td>
    </tr>
</table>
<form>
</body>
</html>



	
	
	
