<?php
	/*
		php中所有的数据类型
			分为三大类
				标量(4种)
					整型 int 0123456789
					浮点型	float	3.14
					字符串	string	ajhbnjkas
					布尔型	boolean		true	false
				复合类型(2种)
					数组	array
					对象	object
				特殊类型(2种)
					资源
					null
					
	*/
	/*
		布尔类型
		布尔类型就是真(true)和	加(false)
		注意事项
			在定义布尔类型的时候,不能加单引号或者是双引号,因为如果加了就是变成了字符串类型
			布尔类型不区分大小写	true	TRUE	false	FALSE
	*/
	$bool=true;
	echo $bool;
	$bool=false;
	echo $bool;
	//分支结构
	/*
		if(){
			
		}else{
			
		}
		如果(){
			
		}否则{
			
		}
		
	*/
	$q=true;
	if($q){
		echo '十几年';
	}else{
		echo '阿萨金';
	}
	var_dump(3>4);
	
?>