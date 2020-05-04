<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8"/><title>数组函数自考</title>
<style>
	#daan{
		background:#000;
		width:200px;
	}
	#daan:hover{
		background:#fff;
	}
</style>
</head>
<body>
<?php
	
	$szhsyw=array('array_values（）','array_keys（）',' array_flip',' in_array',' array_search()',' array_key_exists()',' current()',' next',' prev()',' end',' reset',' key()',' array_slice',' array_splice',' array_pad','）aray_push','array_pop','array_shift',' array_unshift',' sort','rsort',' asort','arsort',' ksort',' krsort',' natsort','natcasesort',' array_sum',' array_merge',' array_diff',' array_diff_assoc',' array_interseat',' array_interseat_assoc',' array_comdine',' array_unique',' shuffle',' array_rand',' compact',' substr_count');
	//$szhsyw=array('返回数组中所有的值array_values（）','返回数组中所有的键名array_keys（）','交换数组中的键和值（如果有重复前面的会被后面的覆盖 array_flip','检查数组中是否存在某个值 in_array','在数组中搜索给定的值，如果成功则返回相应的键名 array_search()','检查给定的键名或索引是否存在于数组中 array_key_exists()','返回数组中的当前单元 current()','将数组中的内部指针向前移动一位 next','将数组的内部指针倒回一位 prev()','将数组的内部指针指向最后一个单元 end','将数组的内部指针指向第一个单元 reset','返回数组内部指针当前指向元素的键名 key()','从数组中取出一段 array_slice','把数组中的一部分去掉并用其它值取代 array_splice','用值将数组填补到指定长度 array_pad','将一个或多个单元压入数组的末尾（入栈）aray_push','将数组最后一个单元弹出（出栈）array_pop','将数组开头的单元移出数组 array_shift','在数组开头插入一个或多个单元 array_unshift','本函数对数组进行排序。当本函数结束时数组单元将被从最低到最高重新安排。 不保持索引关系 sort','对数组逆向排序 rsort','对数组进行排序并保持索引关系 asort','对数组进行逆向排序并保持索引关系 arsort','对数组按照键名排序 ksort','对数组按照键名逆向排序 krsort','用“自然排序”算法对数组排序 natsort','用“自然排序”算法对数组进行不区分大小写字母的排序 natcasesort','计算数组中所有值的和 array_sum','合并一个或多个数组 array_merge','计算数组的差集 array_diff','带索引检查计算数组的差集 array_diff_assoc','计算数组的交集 array_interseat','带索引检查计算数组的交集 array_interseat_assoc','创建一个数组，用一个数组的值作为其键名，另一个数组的值作为其值 array_comdine','移除数组中重复的值 array_unique','将数组打乱 shuffle','从数组中随机取出一个或多个单元 array_rand','建立一个数组，包括变量名和它们的值 compact','计算子串出现的次数 substr_count');
	$szhszw=array('返回数组中所有的值','返回数组中所有的键名','交换数组中的键和值（如果有重复前面的会被后面的覆盖 ','检查数组中是否存在某个值 ','在数组中搜索给定的值，如果成功则返回相应的键名 ','检查给定的键名或索引是否存在于数组中 ','返回数组中的当前单元 ','将数组中的内部指针向前移动一位 ','将数组的内部指针倒回一位 ','将数组的内部指针指向最后一个单元 ','将数组的内部指针指向第一个单元 ','返回数组内部指针当前指向元素的键名 ()','从数组中取出一段 ','把数组中的一部分去掉并用其它值取代 ','用值将数组填补到指定长度 ','将一个或多个单元压入数组的末尾（入栈）','将数组最后一个单元弹出（出栈）','将数组开头的单元移出数组 ','在数组开头插入一个或多个单元 ','本函数对数组进行排序。当本函数结束时数组单元将被从最低到最高重新安排。 不保持索引关系 ','对数组逆向排序 ','对数组进行排序并保持索引关系 ','对数组进行逆向排序并保持索引关系 ','对数组按照键名排序 ','对数组按照键名逆向排序 ','用“自然排序”算法对数组排序 ','用“自然排序”算法对数组进行不区分大小写字母的排序 ','计算数组中所有值的和 ','合并一个或多个数组 ','计算数组的差集 ','带索引检查计算数组的差集 ','计算数组的交集 ','带索引检查计算数组的交集 ','创建一个数组，用一个数组的值作为其键名，另一个数组的值作为其值 ','移除数组中重复的值 ','将数组打乱 ','从数组中随机取出一个或多个单元 ','建立一个数组，包括变量名和它们的值 ','计算子串出现的次数 ');
	//shuffle($szhszw);
	$zfhszw=array('去除字符串首尾处的空白字符（或者其他字符','删除字符串末端的空白字符（或者其他字符）','删除字符串开头的空白字符（或其他字符）','把一些预定义的字符转换为 HTML 实体','把一些预定义的HTML实体转换为字符','从字符串中去除HTML和 PHP 标记','返回文件路径的信息','返回路径中的目录部分','使用另一个字符串填充字符串为指定长度','重复一个字符串','反转字符串','随机打乱一个字符串','将字符串解析成多个变量','解析 URL，返回其组成部分','返回相对应于ASCII所指定的单个字符','返回字符串 string 第一个字符的 ASCII 码值。','将字符串转化为小写','将字符串转化为大写','将字符串的首字母转换为大写','将字符串中每个单词的首字母转换为大写','使用一个字符串分割另一个字符串','将一个一维数组的值转化为字符串','子字符串替换（字符串替换）','返回字符串的子串,截取字符串','替换字符串的子串（替换字符串中某串为另一个字符串）','查找字符串的首次出现，并返回字符串的剩余部分','查找指定字符在字符串中的最后一次出现','查找字符串在另一字符串中第一次出现的位置','查找字符串在另一字符串中最后一次出现的位置','返回字符串的长度','计算字符串的 MD5 散列值（加密）');
	$zfhsyw=array('trim','rtrim','ltrim','htmlspecialchars','htmlspecialchars_decode','strip_tags','pathinfo','dirname','str_pad','str_repeat','strrev','str_shuffle','parse_str','parse_url','chr','ord','strtolower','strtoupper','ucfirst','ucwords','explode','implode','str_replace','substr','substr_replace','strstr','strrchr','strpos','strrpos','strlen','md5');
	//for($i=0;$i<=38;$i++){
		//echo ($i+1).'.'.$szhszw[$i].'<br/>';
	//}
	$q=mt_rand(0,38);$w=mt_rand(0,38);$e=mt_rand(0,38);$r=mt_rand(0,38);$t=mt_rand(0,38);$y=mt_rand(0,30);$u=mt_rand(0,30);$i=mt_rand(0,30);$o=mt_rand(0,30);$p=mt_rand(0,30);
	     echo $szhszw[$q].'<input type="text"/><br/>';
	     echo $szhszw[$w].'<input type="text"/><br/>';
	     echo $szhszw[$e].'<input type="text"/><br/>';
	     echo $szhszw[$r].'<input type="text"/><br/>';
	     echo $szhszw[$t].'<input type="text"/><br/>';
		 echo '<br>';
	     echo $zfhszw[$y].'<input type="text"/><br/>';
	     echo $zfhszw[$u].'<input type="text"/><br/>';
	     echo $zfhszw[$i].'<input type="text"/><br/>';
	     echo $zfhszw[$o].'<input type="text"/><br/>';
	     echo $zfhszw[$p].'<input type="text"/><br/>';
		 echo '<br/><br/><br/><br/><br/>';
		 echo '<div id="daan">';
		 echo $szhsyw[$q].'<br/>';
		 echo $szhsyw[$w].'<br/>';
		 echo $szhsyw[$e].'<br/>';
		 echo $szhsyw[$r].'<br/>';
		 echo $szhsyw[$t].'<br/>';
		 //字符串
		 echo '<br/>';
		 echo $zfhsyw[$y].'<br/>';
		 echo $zfhsyw[$u].'<br/>';
		 echo $zfhsyw[$i].'<br/>';
		 echo $zfhsyw[$o].'<br/>';
		 echo $zfhsyw[$p].'<br/>';
		 echo '</div>';
	// $q=mt_rand(0,38);$w=mt_rand(0,38);$e=mt_rand(0,38);$r=mt_rand(0,38);$t=mt_rand(0,38);	
	// echo $szhszw[$q].'<input type="text"/>'.$szhsyw[$q].'<br/>';
	     // echo $szhszw[$w].'<input type="text"/>'.$szhsyw[$w].'<br/>';
	     // echo $szhszw[$e].'<input type="text"/>'.$szhsyw[$e].'<br/>';
	     // echo $szhszw[$r].'<input type="text"/>'.$szhsyw[$r].'<br/>';
	     // echo $szhszw[$t].'<input type="text"/>'.$szhsyw[$t].'<br/>';
		 
		 
		 // echo '<form action="hanshu.php" method="get">';
		 // for($i=1;$i<=10;$i++){
			 // $q=mt_rand(0,38);
			 // $y=mt_rand(0,30);
			 // $pd=mt_rand(1,2);
			 // if($pd==1){
				 // echo $szhszw[$q]."<input type='text' name=\"sz\"/><a href=\"hanshu.php?szxb={$q}\">提交</a><br/><br/>";
			 // }else{
				 // echo $zfhszw[$y]."<input type='text'name=\"zf\"/><a href=\"hanshu.php?zfxb={$y}\">提交</a><br/><br/>";
			 // }
		 // }
		 // if($_GET){
		 // $szpd=$_GET['szxb'];
		 // $sztj=$GET['sz'];
		 // $zfpd=$_GET['zfxb'];
		 // $zftj=$GET['zf'];
		 // var_dump($_GET);
		 // if($sztj){
			 // if($sztj==$szyw['$szpd']){
				 // echo '正确';
			 // }else{
				 // echo '错误';
			 // }
		 // }
		 // if($zftj){
			  // if($sztj==$zfyw['$zfpd']){
			 // echo '正确';
		 // }else{
			 // echo '错误';
		 // }
		 // }
		 // }
		 
		 
		 ?>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
</body>
</html>