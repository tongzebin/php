<?php
	function upload($name,$dir='./file',$type=array('jpg','png','jpeg')){
		
		$num=count($_FILES[$name]['name']);
		for($i=0;$i<$num;$i++){
			$hzm=pathinfo($_FILES[$name]['name'][$i],PATHINFO_EXTENSION);
			
			if(!in_array($hzm,$type)){
				echo '类型不正确<br>';
				continue;
			}
			$filename=date('Ymd').mt_rand(0,1000).'.'.$hzm;
			$new_dir=rtrim($dir,'/').'/'.date('Y/m/d/');
			$q=$new_dir.$filename;
			if(!file_exists($new_dir)){
				mkdir($new_dir,0777,true);
			}
			
			if(!is_uploaded_file($_FILES[$name]['tmp_name'][$i])){
				return false;
			}
			if(!move_uploaded_file($_FILES[$name]['tmp_name'][$i],$q)){
				echo '失败';
			}else{
				echo '成功</br>';
			}

		}
	}
	echo upload('pic');