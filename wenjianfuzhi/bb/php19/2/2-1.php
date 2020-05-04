<?php
	function zh($d){
		if($d/1024>=1){
			if($d/1024/1024>=1){
				if($d/1024/1024/1024>=1){
					return round($d/1024/1024/1024).'gb';
				}	
				return round($d/1024/1024).'mb';
			}
			return round($d/1024).'kb';
		}			
		return $d.'b';
	}
	echo zh(1231332);