<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        function doDel(id){
            if(confirm('确定要删除吗')){
                location.href="caozuo.php?cz=del&id="+id;
            }
        }
    </script>
</head>
<body>
    <table border="1" align="center" cellpadding="10" >
        <caption><?php include('menu.php');?></caption>
        <tr>
            <th>序号</th>
            <th>学号</th>
            <th>姓名</th>
            <th>年龄</th>
            <th>性别</th>
            <th>爱好</th>
            <th>添加时间</th>
            <th>操作</th>
        </tr>
        <?php
            include('cl.php');
            $lj=mysqli_connect(HOST,USER,PWD,DBNAME);
            mysqli_set_charset($lj,'utf8');
            $sql='select * from aa';
            $fs=mysqli_query($lj,$sql);
            $arr=array('w'=>'女','m'=>'男');
            $count=0;
            if(mysqli_num_rows($fs)){
                while($q=mysqli_fetch_assoc($fs)){
                    echo '<tr align="center">';
                        echo '<td>'.++$count.'</td>';
                        echo '<td>'.$q['xh'].'</td>';
                        echo '<td>'.$q['name'].'</td>';
                        echo '<td>'.$q['age'].'</td>';
                        echo '<td>'.$arr[$q['sex']].'</td>';
                        echo '<td>'.$q['hobby'].'</td>';
                        echo '<td>'.date('Y-m-d H:i:s',$q['time']).'</td>';
                        echo '<td><a href="update.php?id='.$q['xh'].'">编辑</a>|<a href="javascript:doDel('.$q['xh'].')">删除</a></td>';
                    echo '</tr>';
                }
            }else{
                echo '<tr align="center"><td colspan="6">暂无数据</td></tr>';
            }
        ?>
        
    </table>
</body>
</html>