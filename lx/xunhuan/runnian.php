<?php
	$a=$_POST['nian'];
	$b=$_POST['yue'];
	$c=0;
	if((($a%4==0)&&($a%100!=0))||($a%400==0)){
		$c++;
		echo $a.'年是闰年';
	}else{
		echo $a.'年是平年';
	}
	
	/*if(($b<1)||($b>12)){
		echo '月份输入有误';
	}else if(($b==1)||($b==3)||($b==5)||($b==7)||($b==8)||($b==10)||($b==12)){
		echo '这年'.$b.'月有31天';
	}else if(($b==2)&&($c>0)){
		echo '这年'.$b.'月有29天';
	}else if($b==2){
		echo '这年'.$b.'月有28天';
	}else{
		echo '这年'.$b.'月有30天';
	}
	$c=0;
	*/   
	switch($b){
		case 1:
			echo '这年'.$b.'月有31天';
			break;
		case 2:
			if($c>0){
				echo '这年'.$b.'月有29天';
			}else{
				echo '这年'.$b.'月有28天';
			}
			break;
		case 3:
			echo '这年'.$b.'月有31天';
			break;
		case 4:
			echo '这年'.$b.'月有30天';
			break;
		case 5:
			echo '这年'.$b.'月有31天';
			break;
		case 6:
			echo '这年'.$b.'月有30天';
			break;
		case 7:
			echo '这年'.$b.'月有31天';
			break;
		case 8:
			echo '这年'.$b.'月有31天';
			break;
		case 9:
			echo '这年'.$b.'月有30天';
			break;
		case 10:
			echo '这年'.$b.'月有31天';
			break;
		case 11:
			echo '这年'.$b.'月有30天';
			break;
		case 12:
			echo '这年'.$b.'月有31天';
			break;
		default:
			echo "请输入正确的月份";
	}	
	