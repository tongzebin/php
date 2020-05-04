<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="5">
        <tr>
            <th>文件名</th>
            <th>大小</th>
            <th>类型</th>
            <th>创建时间</th>
        </tr>
        <?php
            $q="./aa";
            $qq=opendir($q);
            while(false!==$w=readdir($qq)){
                if($w=='.'||$w=='..'){
                    continue;
                }
                $ss=rtrim($q,'/').'/'.$w;
                echo "<tr>";
                    echo "<td>{$w}</td>";
                    echo "<td>".filesize($ss)."</td>";
                    echo "<td>".filetype($ss)."</td>";
                    echo "<td>".date("Y-m-d H:i:s",filectime($ss))."</td>";
                echo "</tr>";
            }
            closedir($qq);
        ?>
    </table>
</body>
</html>