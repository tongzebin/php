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
            
            include('cl.php');
            $id=$_GET['id'];
            
            $lj = mysqli_connect(HOST,USER,PWD,DBNAME);
            mysqli_set_charset($lj,'utf8');
            $sql="select * from aa where xh=$id";
            $fs=mysqli_query($lj,$sql);
            $q=mysqli_fetch_assoc($fs);
            $name=$q['name'];
            $age=$q['age'];
            $sex=$q['sex'];
            $hobby=$q['hobby'];
        ?>
    <table cellpadding="10" align="center">
        <caption><?php include('menu.php');?></caption>
        <form action="caozuo.php?cz=upd" method="post">
            <input type="hidden" name="id" value="<?php echo $id?>">
        <tr>
            <td>姓名:</td>
            <td><input type="text" name="name" value="<?php echo $name?>"></td>
        </tr>
        <tr>
            <td>年龄:</td>
            <td><input type="number" name="age" value="<?php echo $age?>"></td>
        </tr>
        <tr>
            <td>性别:</td>
            <td>
                <input type="radio" name="sex" value="w" <?php echo $sex=='w'?'checked':'';?>>女
                <input type="radio" name="sex" value="m" <?php echo $sex=='m'?'checked':'';?>>男
            </td>
        </tr>
        <tr>
            <td>爱好:</td>
            <td>
                <textarea name="hobby" cols="20" rows="5">
                <?php echo $hobby?>
                </textarea>
            </td>
        </tr>
        <tr align="center">
            <td colspan="2">
                <input type="submit" value="修改">
                <input type="reset">
            </td>
        </tr>
        </form>
    </table>
</body>
</html>