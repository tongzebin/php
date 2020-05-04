<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10">
        <th>学号</th>
        <th>姓名</th>
        <th>地址</th>
        <th>出生日期</th>
        <th>爱好</th>
        <th>备注</th>
        <th>操作</th>

<?php   
    $lj=mysqli_connect('localhost','root','','zy') or die('连接失败');
    mysqli_set_charset($lj,'utf8');
    $sql='select * from xs';
    $fs=mysqli_query($lj,$sql);
    if(mysqli_num_rows($fs)>0){
        while($rr=mysqli_fetch_assoc($fs)){
            echo '<tr align="center">';
            echo '<td>'.$rr['xh'].'</td>';
            echo '<td>'.$rr['name'].'</td>';
            echo '<td>'.$rr['dz'].'</td>';
            echo '<td>'.$rr['csrq'].'</td>';
            echo '<td>'.$rr['ah'].'</td>';
            echo '<td>'.$rr['bz'].'</td>';
            echo '<td>删除|编辑</td>';
            echo '</tr>';

        }
    }
    mysqli_free_result($fs);
    mysqli_close($lj);
    
    ?>
    </table>
    </body>
</html>