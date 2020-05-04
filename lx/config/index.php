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
        $wj=file_get_contents('dbconfig.php');
        $p="/define\(\"(.*)\",\"(.*)\"\)/";
        preg_match_all("$p",$wj,$arr);
        //var_dump($arr);
    ?>
    <table border="1" align="center">
    <form action="update.php">
        <?php
            foreach($arr[2] as $k=>$v){
                echo "
                    <tr>
                        <td>{$arr[1][$k]}</td>
                        <td><input type=\"text\" name=\"{$arr[1][$k]}\" value=\"{$v}\"/></td>
                    </tr>
                ";
            }
        ?>
        <tr align="center"><td colspan="2"><input type="submit" value="修改"/></td></tr>
        </form>
    </table>
</body>
</html>