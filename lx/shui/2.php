<?php 
	// $nian=$_GET['nian'];
	// $yue=$_GET['yue'];
	// $ri=$_GET['ri'];

	// $a=time();
	// $b=mkdir(0,0,0,$nian,$ri,$yue);
	// $c=$a-$b;
	// $age=$c/(60*60*24*365);
	// var_dump($age);
	

	$nian=$_GET['nian'];
	@$a=date(Y,time());
	//var_dump($a);
	$age=$a-$nian;
	echo $age;

	
