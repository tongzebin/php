<?php
    //使用php链接数据库 进行数据操作
    /**
     * 1 连接数据库
     * mysqli_connect()
     * 参数1 主机名
     * 参数2 用户名
     * 参数3 密码
     * 参数4 数据库名
     * 成功 返回对象    失败false
     * mysqli_select_db()连接数据库
     * 2 设置字符集
     *  mysql_set_charset()
     * 3 定义sql语句
     *  $sql='select * from 表名';
     * 4 发送sql语句并执行
     *  mysqli_query()
     *  参数1 连接数据库返回的对象
     *  参数2 定义sql语句 -> $sql
     * 5 解析结果集
     *  mysqli_fetch_assoc();
     * 6 释放结果集
     *  mysqli_free_result
     * 参数 结果集
     * 7 关闭数据库
     * mysql_close()
     */
    $link=mysqli_connect('localhost','root','','zy');
    if(!$link){
        die('数据库连接失败');
    }
    mysqli_set_charset($link,'utf8');

    $sql ='select * from xs';

    $res=mysqli_query($link,$sql);

    if(mysqli_num_rows($res)>0){
        echo '<table border="1" cellpadding="5">';
            echo '<tr><th>学号</th><th>姓名</th><th>地址</th><th>出生日期</th><th>爱好</th><th>备注</th><th>操作</th></tr>';
            while($row=mysqli_fetch_assoc($res)){
                echo '<tr align="center">';
                echo '<td>'.$row['xh'].'</td>';
                echo '<td>'.$row['name'].'</td>';
                echo '<td>'.$row['dz'].'</td>';
                echo '<td>'.$row['csrq'].'</td>';
                echo '<td>'.$row['ah'].'</td>';
                echo '<td>'.$row['bz'].'</td>';
                echo '<td>删除|编辑</td>';
                echo '</tr>';
            }
        echo '</table>';
        mysqli_free_result($res);
        mysqli_close($link);
    }