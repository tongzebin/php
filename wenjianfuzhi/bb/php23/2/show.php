<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" align="center">
        <caption><?php include('menu.php');?></caption>
        <tr>
            <th>学号</th>
            <th>姓名</th>
            <th>年龄</th>
            <th>性别</th>
            <th>爱好</th>
            <th>操作</th>
        </tr>
        <?php
            include('cl.php');
            $lj=mysqli_connect(HOST,USER,PWD,DBNAME) or die('连接失败');
            mysqli_set_charset($lj,'utf8');
            $sql='select * from aa';
            $fs=mysqli_query($lj,$sql);
            $q=array('w'=>'女','m'=>'男');
            if(mysqli_num_rows($fs)){
                while($w=mysqli_fetch_assoc($fs)){
                    echo '<tr align="center">';
                        echo '<td>'.$w['xh'].'</td>';
                        echo '<td>'.$w['name'].'</td>';
                        echo '<td>'.$w['age'].'</td>';
                        echo '<td>'.$q[$w['sex']].'</td>';
                        echo '<td>'.$w['hobby'].'</td>';
                        echo '<td><a href="update.php?id='.$w['xh'].'">编辑</a>|<a href="caozuo.php?id='.$w['xh'].'&cz=del">删除</a></td>';
                    echo '</tr>';
                }
            }
        ?>

    </table>
</body>
</html>