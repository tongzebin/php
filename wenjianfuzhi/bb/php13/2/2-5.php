<?php
	$qwe=array(1,2,3,4,5,6,7,8);
	$rt=array(1,3,5,7);
	$asd=array('*','*','#','#');
	$zxc=str_replace($rt,$asd,$qwe,$num);
	var_dump($zxc);
	echo $num;
	
	
	$pwd=md5(123456789);
	$pwddl=md5(123456789);
	if($pwd==$pwddl){
		echo '密码一致';
	}else{
		echo '密码不一致';
	}