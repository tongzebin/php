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
        include('./menu.php');
        // if($_GET['error']){
        //     echo '账号或密码不正确';
        // }
    ?>
    <form action="dologin.php" method="post">
        <table align="center" align="center">
            <tr>
            <td>账号</td>
            <td><input type="text" name="name" ></td>
            <td><?php echo @$_GET['error']==1?'账号或密码不正确':'';?></td>
            </tr>
            <tr>
            <td>密码</td>
            <td><input type="password" name="pwd" ></td>
            </tr>
            <tr align="center">
            
            <td colspan="2"><input type="submit" value="登录">
            <input type="reset">
        </td>
            </tr>
        </table>
    </form>
</body>
</html>