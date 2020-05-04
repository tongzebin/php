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
    <tr>
        <th>学号</th>
        <th>姓名</th>
        <th>年龄</th>
        <th>性别</th>
        <th>爱好</th>
        <th>操作</th>
    </tr>
<?php
    include('menu.php');
    include('cl.php');

    $lj=mysqli_connect(HOST,USER,PWD,DBNAME) or die('连接失败');
    mysqli_set_charset($lj,'utf8');
    $sql='select * from aa';
    $fs=mysqli_query($lj,$sql);
    $arr=array('w'=>'女','m'=>'男');
    if(mysqli_num_rows($fs)){
        while($q=mysqli_fetch_assoc($fs)){
            echo '<tr align="center">';
                echo '<td>'.$q['xh'].'</td>';
                echo '<td>'.$q['name'].'</td>';
                echo '<td>'.$q['age'].'</td>';
                echo '<td>'.$arr[$q['sex']].'</td>';
                echo '<td>'.$q['hobby'].'</td>';
                echo "<td><a href='caozuo.php?id=".$q['xh']."&cz=del'>删除</a>|<a href='update.php?id=".$q['xh']."&cz=upd'>编辑</a></td>";
            echo '</tr>';
        }
    }
    mysqli_free_result($fs);
    mysqli_close($lj);
    ?></table>
</body>
</html>
    