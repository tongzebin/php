<?php
	/*
		数组:很多数据的组合
			语法格式:
			$list=array();
			$a=10;
			$a=20;
			$a=array(10,20);
			
	*/
	
	$list=array(10,20,30,40);
	$stu=array('奥拉克','暗示健康');
	var_dump($list);
	echo $list[1];
	
	var_dump($stu);
	echo $stu[0];
	
	//echo $stu;	注意:数组不能直接输出
	/*
		array (size=4)
		0 => int 10
		1 => int 20
		2 => int 30
		3 => int 40
		下标 => 类型 值
	*/
	/*
		对象
			类
			对象
		类是对象他妈
		先有类,再有对象
	*/
	//声明一个类
	/*
		class 类名{
			
		}
	*/
	//通过new关键字实例化一个对象
	class Person{
		var $name='张三';
		var $age=19;
		var $sex='男';
		function ganhuo(){
			
		}
		function chouyan(){
			
		}
		
	}
	$person=new Person;
	var_dump($person);
	
	
	
	