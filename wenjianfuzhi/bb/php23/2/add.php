<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="caozuo.php?cz=add" method="POST">
        <table border="0" cellpadding="10" align="center">
                <tr>
                    <td>姓名:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>年龄:</td>
                    <td><input type="number" name="age"></td>
                </tr>
                <tr>
                    <td>性别:</td>
                    <td>
                        <input type="radio" name="sex" value="w" checked>女
                        <input type="radio" name="sex" value="m">男
                    </td>
                </tr>
                <tr>
                    <td>爱好</td>
                    <td><textarea name="hobby" cols="20" rows="5"></textarea></td>
                </tr>
                <tr align="center">
                    <td colspan="2"><input type="submit" value="添加">|<input type="reset"></td>
                </tr>
        </table>
    </form>
</body>
</html>