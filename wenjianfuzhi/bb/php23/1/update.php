<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        include('menu.php');
        include('cl.php');
        $id=$_GET['id'];
        $lj=mysqli_connect(HOST,USER,PWD,DBNAME) or die('连接失败');
        mysqli_set_charset($lj,'utf8');
        $sql="select * from aa where xh={$id}";
        echo $sql;
        $fs=mysqli_query($lj,$sql);
        $q=mysqli_fetch_assoc($fs);
        var_dump($q);
    ?>
    <form action="caozuo.php?cz=upd" method="post">
            <input type="hidden" name="id" value="<?php echo $q['xh']?>">
        <table border="1" cellpadding="10">
                <tr>
                        <td>姓名:</td>
                        <td><input type="text" name="xm" value="<?php echo $q['name']?>"></td>
                    </tr>
                    <tr>
                        <td>年龄:</td>
                        <td><input type="text" name="age" value="<?php echo $q['age']?>"></td>
                    </tr>
                    <tr>
                        <td>性别:</td>
                        <td>
                            <input type="radio" name="xb" value="w" <?php echo $q['sex']=='w'?'checked':'';?> >女
                            <input type="radio" name="xb" value="m" <?php echo $q['sex']=='m'?'checked':'';?> >男
                        </td>
                    </tr>
                    <tr>
                        <td>爱好:</td>
                        <td><textarea name="hobby" cols="20" rows="5"><?php echo $q['hobby']?></textarea></td>
                    </tr>
                    <tr align="center">
                        <td colspan="2">
                            <input type="submit" value="修改">
                            <input type="reset">
                        </td>
                    </tr>
        </table>
    </form>
</body>
</html>