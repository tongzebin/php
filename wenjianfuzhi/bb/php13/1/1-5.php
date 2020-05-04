<?php
	/*
		str_replace		字符串替换函数
		参数1	要查找的内容
		参数2	要替换的内容
		参数3	要操作的字符串
		参数4	替换的次数
		返回值:返回替换后的新字符串
	*/
	$str="飞机飞机打飞机";
	$arr=array('打飞机');
	$arr2=array('0.0');
	$qwe=str_replace($arr,$arr2,$str,$num);
	echo $qwe;
	echo $num;
	
	//md5 用于加密字符串	一般用于密码,不可逆(不可以把加密的结果进行解密)
	
	echo '<hr>';
	
	$pass=md5(123456);
	$passdl=md5(1234545);
	if($pass==$passdl){
		echo '登录成功';
	}else{
		echo '登录失败';
	}
	