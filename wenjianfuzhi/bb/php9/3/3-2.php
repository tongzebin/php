<?php
	function pd1(){
		if(413>32){
			return '啪啪啪';
		}else{
			return '啦啦啦';
		}
	}
	echo pd1();
	echo '<hr/>';
	function pd2($a,$b){
		if($a>$b){
			return true;
		}else{
			return false;
		}
	}
	echo pd2(1223,123);