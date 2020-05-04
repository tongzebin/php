<?php
	$m=10;
	function nu(&$n){
		echo $n++;
		echo $n;
	}
	nu($m);
	echo $m;