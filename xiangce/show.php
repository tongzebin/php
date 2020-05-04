<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="duowenjian.php">添加</a>
    <table border="1" cellpadding='5' cellspacing='0' align="center">
        <?php
             $d='./img';//存储图片的目录路径
            $dd=opendir($d);//打开目录
            $count=0;//计数
            echo "<tr>";
            while(false!==$f=readdir($dd)){         //遍历目录
                if($f=='.'||$f=='..'){              //去除特殊文件/目录
                    continue;                       //跳出本次循环
                }
                $count++;
                $filedir=rtrim($d,'/').'/'.$f;          //拼接完整路径
                echo "<td><img src=\"{$filedir}\" width='100'></td><td><a href=\"del.php?del={$filedir}\">删除</a>
                <a href=\"xiugai.php?xg={$filedir}\">修改</a></td>";//显示图片,删除,修改操作
                if($count%5==0){
                     echo "</tr>";
                }
            }
            closedir($dd);//关闭路径
        ?>
    </table>
</body>
</html>