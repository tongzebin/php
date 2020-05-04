<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="menu.php">
        <table align="center">
            <caption><b>用户登录</b><h5><a href="">创建用户</a> | <a href="">删除用户</a></h5></caption>
            <tr>
                <td>用户名:</td>
                <td><input type="text" name="user"></td>
            </tr>
            <tr>
                <td>密码:</td>
                <td><input type="text" name="pwd"></td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <input type="submit" value="登录">
                    <input type="reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
