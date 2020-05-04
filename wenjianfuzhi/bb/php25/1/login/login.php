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
        @$error=$_GET['error'];
        if($error==1){
            echo '账号或密码不正确';
        }
    ?>
    <form action="doLogin.php" method="post" >
        <table align="center" border="1">
            <tr>
                <td>账号:</td>
                <td><input type="text" name="user"></td>
            </tr>
            <tr>
                <td>密码:</td>
                <td><input type="text" name="pwd"></td>
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