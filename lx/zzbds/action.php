<?php
	$user=$_POST['user'];
	$pwd=$_POST['pwd'];
	@$yhm=$_POST['yhm'];
	@$qrpwd=$_POST['qrpwd'];
	$zhpd="/^[a-zA-Z][\da-zA-Z]{4,15}$/";
	$yhmpd="/[\d\D]{1,16}/";
	$mmpd="/[\w\W]{6,16}/";
	$pd=$_POST['pd'];
	@$rev=$_POST['rev'];
	var_dump($rev);
	
	// if($pwd=="{$arr2[1]}"&&$user=="{$arr2[0]}"){
							// echo "注册成功";
						// }else{
							// header("location:form.php?error=3");		
						// }
	//登录判断
	if($pd==1){
		if($user=='admin'&&$pwd=='123456'){
			echo "<a href='show.php'>去后台</a>";
			die();
		}
		if(preg_match($zhpd,$user)){									//判断账号格式
			if($pwd==$qrpwd){											//判断密码是否一致
				$sj=rtrim(file_get_contents('./sjk.txt'),'@');			
				$arr=explode('@',$sj);													
				foreach($arr as $v){									
				$arr2=explode('#',$v);
					if(($user=="{$arr2[0]}"&&$pwd=="{$arr2[0]}")){							
						echo '登陆成功';			
						die();
					}
				}
				echo "你还未注册前去<a href=\"zhuce.php\">注册</a>";
			}else{
				header("location:index.php?error=4");
			}
		}else{
			header("location:index.php?error=0");
		}
	}
	
	//注册判断
	if($pd==2){
		if(preg_match($yhmpd,$yhm)){
			$sj=rtrim(file_get_contents('./sjk.txt'),'@');	
			$arr=explode('@',$sj);											//转换数组
			if(preg_match($zhpd,$user)){									//判断账号格式是否正确
				if($pwd==$qrpwd){											//判断输入的两次密码是否一致
					foreach($arr as $v){
					$arr2=explode('#',$v);
					//var_dump($arr2);
						if(($user=="{$arr2[1]}")||($yhm=="@{$arr2[0]}")){							//判断是否存在相同的账号
							//跳转回form页(重定向)
							header("location:zhuce.php?error=1");			//返回账号/用户名已注册
							die();
						}
					}
					if(preg_match($mmpd,$pwd)){								//判断密码格式是否正确
						echo "注册成功<a href=\"index.php\">去登陆</a>";
						$str=$yhm.'#'.$user.'#'.$pwd."@";							//拼接账号密码
						file_put_contents('./sjk.txt',$str,FILE_APPEND);	//将账号密码存在数据库中
					}else{
						header("location:zhuce.php?error=2");				//返回密码格式不正确
					}
				}else{
					header("location:zhuce.php?error=4");					//返回密码不一致
				}
			}else{
				header("location:zhuce.php?error=0");						//返回账号格式不正确
			}
		}else{
			header("location:zhuce.php?error=3");							//用户名格式不正确
		}
	}
	if($pd==3){
		if(preg_match($yhmpd,$yhm)){
			$sj=rtrim(file_get_contents('./sjk.txt'),'@');	
			$arr=explode('@',$sj);											//转换数组
			foreach($arr as $v){
			$arr2=explode('#',$v);
			//var_dump($arr2);
				if($yhm=="@{$arr2[0]}"){							//判断是否存在相同的用户名
					//跳转回form页(重定向)
					header("location:revise.php?error=1&rev=\"{$rev}\"");			//返回账号/用户名已注册
					die();
				}
			}
			if(preg_match($mmpd,$pwd)){								//判断密码格式是否正确
				$str=$yhm.'#'.$user.'#'.$pwd;							//拼接账号密码
				//$wj=rtrim(file_get_contents('./sjk.txt'),'@');
				$arr1=explode('@',$sj);
				$arr1[$rev]=$str2;
				$str=implode('@',$arr1).'@';	
				file_put_contents('./sjk.txt',$str);						
			}else{
				header("location:revise.php?error=2&rev=\"{$rev}\"");				//返回密码格式不正确
			}
		}else{
			header("location:revise.php?error=3&rev=\"{$rev}\"");							//用户名格式不正确
		}
	}