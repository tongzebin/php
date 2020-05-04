<?php
	/*
		is_dir 判断是否是目录
		is_readable() 判断文件是否可读
		is_writable() 判断文件是否可写
		is_executable() 判断是否是可执行文件
		touch() 创建文件
		rename() 移动文件
		copy() 复制文件
		unlink() 删除文件
		file_exists() 判断文件或目录是否 存在
		filesize() 获取文件大小(字节)
		filetype() 获取文件类型
		is_file() 判断是否是文件
		basename() 获取路径中的文件名部分
		dirname()     获取目录中的路径部分
		pathinfo()   返回数组,数组中包含路径中的各个部分
		extension() 返回后缀名部分

		目录部分
			pathinfo(目录,PATHINFO_DIRNAME)
		文件名部分
			pathinfo(目录,PATHINFO_BASENAME)
		后缀名部分
			pathinfo(目录,PATHINFO_EXTENSION)
		不含后缀名的文件名
			pathinfo(目录,PATHINFO_FILENAME)

		打开目录
			opendir(要打开的目录)

		从目录中读取条目
			readdir(打开后的目录)

		关闭目录
			closedir(要关闭的目录)


		创建时间
			filectime()
		修改时间
			filemtime()
		访问时间
			fileatime()

	*/