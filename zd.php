<?php
	header("content-type:text/html;charset=utf-8");
	function sz($q,$w){
		$f1=fopen($q,'r');
		$f2=fopen($w,'w');
		while($s=fread($f1,3)){
			fwrite($f2,$s);
		sleep(1.5);		}
		fclose($f1);
		fclose($f2);
	}
	sz('lx.php','./qwe/4.php');