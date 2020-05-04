<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table width="500" border="1" align="center">
        <tr>
            <th>编号</th>
            <th>名字</th>
            <th>父id</th>
            <th>路径</th>
            <th>操作</th>
        </tr>
        <?php
            $link=mysqli_connect('localhost','root','101330','tzb');
            mysqli_set_charset($link,'utf8');
            $sql='select * from sp';
            $res=mysqli_query($link,$sql);
            while($q=mysqli_fetch_assoc($res)){
                echo '<tr>';
                echo "<td>{$q['id']}</td>";
                echo "<td>{$q['name']}</td>";
                echo "<td>{$q['pid']}</td>";
                echo "<td>{$q['path']}</td>";
                echo "<td><a href=\"add.php?id={$q['id']}&path={$q['path']}&name={$q['name']}\">添加子类别</a></td>";
                echo '</tr>';
            }

        ?>
    </table>
</body>
</html>