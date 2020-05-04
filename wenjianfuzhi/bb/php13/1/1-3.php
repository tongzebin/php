<?php
	$str="FGHADHGVBNslakdjgbn";
	function demo($str){
		$str2='';
		for($i=0;$i<strlen($str);$i++){
			$a=ord($str{$i});
			if($a>=97&&$a<=122){
				$a-=32;
				$str2.=chr($a);
				
			}else{
				$str2.=chr($a);
			}
		}
		return $str2;
	}
	echo demo($str);