<?php
	/*
		文件的打开方式
			r模式 只读 该文件必须存在
			r+模式 打开可读写的文件,改文件必须存在
				(注意:从文件头开始写,保留源文件中没有被覆盖的内容)
			w模式
				只写模式打开文件,如果文件不存在,尝试创建改文件,
				如果文件存在文件长度清除0(该文件内容会消失)清空写
			w+模式 打开可读可写文件
				只写模式文件(如果文件不粗来,尝试常见改文件)
				如果文件存在长度清零清空写
			a模式:以追加的方式只写文件打开
				光标在尾部,会保留原有项目
					=如果文件不出来,尝试常见文件
			a+模式:以追加的方式读写文件,若文件不存在尝试创建
				如果文件存在写入的数据会在原有数据的后边进行追加
			t模式:表示的是text mode 文本模式
			b模式:表示的是binary mode	二进制方式	
	*/
	//$f=fopen('./aaa.txt','r+');
	//while($str=fread($f,2)){
	//	echo $str;
	//}
	//向文件写入数据
	//fwrite($f,'php');
	//fclose($f);
	//$f=fopen('aaa.txt',"w");
	//var_dump($f);
	// while($str=fread($f,2)){
		// echo $str;
	// }
	// fwrite($f,'gvs');
	$f=fopen('./aaa.txt','a+');
	fwrite($f,'asdhtf');
	rewind($f);
	while($str=fread($f,2)){
		echo $str;
	}
	fclose($f);