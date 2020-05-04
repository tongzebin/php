<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="30">
        <tr>
            <th>链接</th>
            <th>网址</th>
            <th>网站名</th>
        </tr>
        <?php
            $s='<ul>
                <li><a href="http://www.baidu.com">百度</a></li>
                <li><a href="http://www.tianmao.com">天猫</a></li>
                <li><a href="http://www.qq.com">腾讯</a></li>
                <li><a href="http://www.163.com">网易</a></li>
                <li><a href="http://www.taobao.com">淘宝</a></li>
                </ul>';
            $p="/<a href=\"(.*)\">(.*)<\/a>/";
            preg_match_all($p,$s,$a);
            foreach($a[0] as $k=>$v){
                echo "
                    <tr>
                        <td>{$a[0][$k]}</td>
                        <td>{$a[1][$k]}</td>
                        <td>{$a[2][$k]}</td>
                    </tr>
                ";
            }
        ?>
    </table>
</body>
</html>