<?php
	$qwe="fghjklGHJKLvbnmuyHVvj";
	function zh($q){
		$w='';
		for($i=0;$i<strlen($q);$i++){
			$c=ord($q{$i});
			if($c>=97&&$c<=122){
				$c-=32;
				$w.=chr($c);
			}else{
				$w.=chr($c);
			}
		}
		return $w;
	}
	echo zh($qwe);