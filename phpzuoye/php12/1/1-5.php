<?php
	/*
		添加数组元素:
			方法一:
				该方法添加元素一定是索引式数组
					当前数组下标的最大值+1 就是添加数组的下标
			方法2:数组变量[键]=值
				该方法添加元素及时关联式数组
	*/
	
	$arr=['黄金卡','哈卡','获国家'];
	$arr[]='黄金卡即可';
	$arr[]='扫客户';
	$arr[]='案件来看你';
	$arr[]='分工会尽快';
	$arr[40]='厉害可不能';
	var_dump($arr);
	
	
	