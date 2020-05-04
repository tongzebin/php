<?php
	$a=12;
	function qwe(&$b){
		echo ++$b;
		return $b;
	}
	echo qwe($m);
	echo $m;