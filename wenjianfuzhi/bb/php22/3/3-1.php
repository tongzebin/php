<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="5">
    <tr>
        <th>学号</th>
        <th>姓名</th>
        <th>地址</th>
        <th>出生日期</th>
        <th>爱好</th>
        <th>备注</th>
        <th>操作</th>
    </tr>
   
<?php
    $q=mysqli_connect('localhost','root','','zy') or die('连接失败');
    mysqli_set_charset($q,'utf8');
    $w='select * from xs';
    $a=mysqli_query($q,$w);
    if(mysqli_num_rows($a)){
        while($e=mysqli_fetch_assoc($a)){
        echo '<tr align="center">';
        echo '<td>'.$e['xh'].'</td>';
        echo '<td>'.$e['name'].'</td>';
        echo '<td>'.$e['dz'].'</td>';
        echo '<td>'.$e['csrq'].'</td>';
        echo '<td>'.$e['ah'].'</td>';
        echo '<td>'.$e['bz'].'</td>';
        echo '<td>删除|编辑</td>';
        echo '</tr>';
    }
    }
    mysqli_free_result($a);
    mysqli_close($q);
    ?>
     </table>

</body>
</html>