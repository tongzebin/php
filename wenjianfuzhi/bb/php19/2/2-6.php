<?php
	function sz($q,$w){
		$f1=fopen($q,'r');
		$f2=fopen($w,'w');
		while($s=fread($f1,100)){
			fwrite($f2,$s);
		}
		fclose($f1);
		fclose($f2);
	}
	sz('a.jpg','b.jpg');