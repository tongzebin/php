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
        $path='0,';
        $pid=0;
        $name='根类别';
        if(isset($_GET['id'])){
            $pid=$_GET['id'];
            $path=$_GET['path'].$pid;
            $name=$_GET['name'];
        }

    ?>
    <center>
        <form action="action.php?a=add" method="post">
            父类别:<?php echo $name;?><br/>
            <input type="hidden" name="pid" value="<?php echo $pid;?>">
            <input type="hidden" name="path" value="<?php echo $path;?>">
            类别名:<input type="text" name="name"/>
            <input type="submit">
        </form>
    </center>
</body>
</html>