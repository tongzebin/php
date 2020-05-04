<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #l{
            width:500px;
            margin:0px auto;
            float:left;
        }
        #r{
            width:500px;
            margin:18px auto;
            float:left;
        }
        .hui{
            color:#ccc;
        }
    </style>
</head>
<body>
    
    <div id="l">               <!--WIN7 日历-->
    <table border="1" width="500">
    <?php  
        if($_GET){
            $nian=$_GET['Y'];
        }else {
            $nian=date('Y');
        }
        if($_GET){
            $yue2=$yue=$_GET['M'];
        }else {
            $yue2=$yue=date('m');
        }
        echo "<caption><h1>WIN 7日历</h1></caption>"; 
        echo "<caption><h2>{$nian}年{$yue}月<h2></caption>";  ?>
    <tr>
        <th>星期日</th>
        <th>星期一</th>
        <th>星期二</th>
        <th>星期三</th>
        <th>星期四</th>
        <th>星期五</th>
        <th>星期六</th>
    </tr>
<?php   
    $week=date('w',mktime(0,0,0,$yue,1,$nian));
    $dd=date('t',mktime(0,0,0,$yue,1,$nian));
    $q=0;
    $yue2-=1;
    $nextdd=date('t',mktime(0,0,0,$yue2,1,$nian));
    $qian=$nextdd-$week;
    for($d=1;$d<=$dd;){
        echo '<tr>';
        for($i=0;$i<7;$i++){
            if(($d==1&&$i<$week) || $d>$dd){
                if($d>$dd){
                    $q++;
                    echo "<th class='hui'>{$q}</th>";
                }else{
                    $qian++;
                    echo "<th class='hui'>$qian</th>";
                   
                }
            }else{
                echo "<th>$d</th>";
                $d++;
            }
        }
        
    }
    $xyue=$yue+1;
    $syue=$yue-1;
    $xnian=$snian=$nian;
    if($xyue>12){
        $xyue=1;
        $xnian+=1;
    }
    if($syue<1){
        $syue=12;
        $snian-=1;
    }
    echo "<a href='?M={$syue}&Y={$snian}'>上一月</a>";
    echo "<a href='?M={$xyue}&Y={$xnian}'>下一月</a>";




?>
</table>
            <!--WIN7 日历结束-->
</div>
<div id="r">
            <!--WIN10日历开始 -->



    <table border="1" width="500">
    <?php
        echo "<caption><h1>WIN10日历</h1></caption>"; 
        echo "<caption><h2>{$nian}年{$yue}月<h2></caption>";  ?>
    <tr>
        <th>星期一</th>
        <th>星期二</th>
        <th>星期三</th>
        <th>星期四</th>
        <th>星期五</th>
        <th>星期六</th>
        <th>星期日</th>
    </tr>
<?php   
    $week=date('N',mktime(0,0,0,$yue,1,$nian));
    $dd=date('t',mktime(0,0,0,$yue,1,$nian));
    $q=0;
    $yue2-=1;
    $nextdd=date('t',mktime(0,0,0,$yue2,1,$nian));
    $qian=$nextdd-$week+1;
    for($d=1;$d<=$dd;){
        echo '<tr>';
        for($i=1;$i<=7;$i++){
            if(($d==1&&$i<$week) || $d>$dd){
                if($d>$dd){
                    $q++;
                    echo "<th class='hui'>{$q}</th>";
                }else{
                    $qian++;
                    echo "<th class='hui'>$qian</th>";
                   
                }
            }else{
                echo "<th>$d</th>";
                $d++;
            }
        }
        
    }
 
   
?>
</table>



            <!--WIN10日历结束 -->

<div>

</body>
</html>

    
