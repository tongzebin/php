<?php
	//定义一个可以实现转换文件大小的函数
	function zh($size){
		if($size/1024>=1){
			if($size/1024/1024>=1){
				if($size/1024/1024/1024>=1){
					return round($size/1024,2).'GB';
				}
				return round($size/1024,2).'MB';
			}
			return round($size/1024,2).'k';
		}
		return $size.'b';
	}