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
    $a=$_GET['xg'];
    //var_dump($_GET['xg']);
?>
    <form action="xiugaiadd.php" method="post" enctype="multipart/form-data">
        <input type="file" name="pic">
        <input type="hidden" name="xg" value="<?php echo $a;?>">
        <input type="submit">
    </form>
</body>
</html>