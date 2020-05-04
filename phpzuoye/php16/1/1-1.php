<?php   
    /*
        1.正则表达式
            正则表达式的样子大概就是如下效果
            //
        2.正则表达式
            正则表达式是对字符串操作的一种逻辑公式
            正则表达式就是通过具有特定规则的魔石,与输入的
            字符串信息进行比较,分割,查找,替换等操作

        3.正则表达式可以做什么??
            操作字符串是正则表达式的唯一作用
                验证用户哦明长度是否合法
                验证密码是否符合标准
                验证邮箱是否符合标准格式
                验证手机号码是否满足条件
                验证url地址
                新闻采集器 (爬虫) 小偷程序
        4语法格式
            定界符(表达式的语法格式)
                /表达式/[修正符]
            注意:其中/表示正则表达式的定肌肤,但是也是可以其他符号
            #..# !..! |..| /../

            注意2:修正符可以省略
        5.正则表达式组成
            1.原子
            2.元字符
            3.普通转移符
            4.模式修正符
        6.preg_match('正则','字符串','引用参数,返回匹配结果')
            匹配一个字符串是否满足正则的要求
                匹配成功返回一 不成功返回0 出错返回false
    */
    //规则
    $p="/admin/";
    //字符串
    $str="1231hjsdagsasdadmin1312";
    if(preg_match($p,$str)){
        echo '满足';
    }else{
        echo '不满足';
    }
    $p="/admin/";
    $str="admin";
    echo preg_match($p,$str,$arr);
    var_dump($arr);
    /*
        特殊字符:
            \   转义字符    把具有指定功能的边没功能的, 
    */
    echo '<hr>';
    $str='131ajshasdhb12765';
    //由于在正则表达式中有特殊的功能(除换行符意外的所有字符)
    $p="/\./";
    echo preg_match($p,$str,$arr);
    var_dump($arr);

    /*
        非打印字符
            \n  \t  \r
    */
    $str="啥狂欢节奥沙 \n 路口";
    $p="/\n/";
    echo preg_match($p,$str,$arr);
	var_dump($arr);
	/*通用字符类型
		\d	表示匹配任意数字
		\D 非任意数字
	*/
	$str="##asda12123";
	$p="/\d/";
	$p="/\D/";
	echo preg_match($p,$str,$arr);
	var_dump($arr);
	/*
		\s	匹配一个非打印字符
		\S	匹配一个打印字符
	*/
		$str="aasdjh12314";
		$p="/\s/";
		
	/*
		\w	匹配任意一个数字.字母.下划线
		\W	
	*/
	$str="ausdaljASKUJA_";
	$p="/\w/";
	echo preg_match($p,$str,$arr);
	var_dump($arr);
	/*
		元字符
			[]表示单个字符的原子表
				例如[aeiou]	表示任意一个元音字母
					[0-9]
					[0123456789]
					[a-z]
					[A-Z]
	*/
	$str="asdauh";
	$p="/[a-z]/";
	echo preg_match($p,$str,$arr);
	var_dump($arr);
	
	$str="123hadlkan";
	$p="[a-z]";
	echo preg_match($p,$str,$arr);
	var_dump($arr);
	$str="asuay12313tvybn";
	$P="/[A-Za-z]/";
	echo preg_match($p,$str,$arr);
	var_dump($arr);
	/*
		[^]表示出了括号中的原子意外的任意字符	取饭的意识
			例如:
				[^0-9]	表示任意一个非数字字符
				[^a-z]	百世任意一个非转小写字母
	*/
	$str="aojda12os";
	$p="/[^0-9]/";
	echo preg_match($p,$str,$arr);
	var_dump($arr);
	/*
	{}里边的值表示的是前边原子的数量控制
		{m}表示对钱边的原子数量的控制 允许出现m次
			例如[0-9]{4}表示的是4位数 0000-9999
	{m,}表示的是前边原子出现至少m次
		{m,n}表示的是前边的原子出现m-n次
		
		
		
		
	*/
	$str="aiaushaj1123";
	$p="/[0-9]{3}/";
	$p="/[0-9a-z]{3}/";
	echo preg_match($p,$str,$arr);
	var_dump($arr);
	/*
		正则表达式中的特殊字符
			.	匹配出了换行符意外的所有字符
			*	表示对钱边的原子数量的控制,表示任意次
			+	表示对钱边的原子数量的控制,表示 至少一次
			?	表示对钱边的原子数量的控制,表示0次或1次
			常用的组合
				.*?	.+?拒绝贪婪模式
	*/
	$str="@sjabn";
	$p="/./";
	echo preg_match($p,$str,$arr);
	
	var_dump($arr);
	
	$str="abbbabbbbbba";
	$p="/a.*?a/";
	echo preg_match($p,$str,$arr);
	var_dump($arr);
	
	/*
		|	或 的意思
	*/
	$str="dvabnkm";
	$p="/abc|asd|wef/";
	echo preg_match($p,$str,$arr);
	var_dump($arr);
	
	$p="/^[1][3-9][0-9]{9}$/";
	$str="13568845865";
	echo preg_match($p,$str,$arr);
	var_dump($arr);
	
	$p="/[A-Za-z0-9]+@[0-9a-zA-Z]+(\.[a-zA-N]){2,}/";
	$str="atsyb@svbhjan.cas";
	echo preg_match($p,$str,$arr);
	var_dump($arr);
	
	
	
	
	
	
	
	
	
	
	
		
	
	