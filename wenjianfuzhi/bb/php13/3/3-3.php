<?php
	$str='avhbajnjHSBNM';
	function zh($q){
		$w='';
		for($i=0;$i<strlen($q);$i++){
			$e=ord($q{$i});
			if($e>=97&&$e<=122){
				$e-=32;
				$w.=chr($e);
			}else{
				$w.=chr($e);
			}
		}
		return $w;
	}
	echo zh($str);
