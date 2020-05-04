<?php
    include('cl.php');
    var_dump($_POST);
    var_dump($_GET);
    $lj=mysqli_connect(HOST,USER,PWD,DBNAME);
    mysqli_set_charset($lj,'utf8');
    $cz=$_GET['cz'];
    switch($cz){
        case 'add':
            $xm=$_POST['xm'];
            $age=$_POST['age'];
            $sex=$_POST['xb'];
            $hobby=$_POST['hobby'];
            $id=$_POST['id'];
            $sql="insert into aa values(null,'{$xm}',{$age},'{$sex}','{$hobby}')";
            mysqli_query($lj,$sql);
            if(mysqli_insert_id($lj)){
                echo "<script>alert('添加成功');location='show.php'</script>";
            }else{
                echo "<script>alert('添加失败');location='add.php'</script>";
            }
        break;
        case 'del':
            
            $id=$_GET['id'];
            $sql="delete from aa where xh=$id";
            echo $sql;
            
            mysqli_query($lj,$sql);
            if(mysqli_affected_rows($lj)){
                echo "<script>alert('删除成功');location='show.php'</script>";
            }else{
                echo "<script>alert('删除失败');location='show.php'</script>";
            }
            break;
        case 'upd':
            $xm=$_POST['xm'];
            $age=$_POST['age'];
            $sex=$_POST['xb'];
            $hobby=$_POST['hobby'];
            $id=$_POST['id'];
            $sql="update aa set name='$xm',age=$age,sex='$sex',hobby='$hobby' where xh=$id";
            echo $sql;
            mysqli_query($lj,$sql);
            if(mysqli_affected_rows($lj)){
                echo "<script>alert('修改成功');location='show.php'</script>";
            }else{
                echo "<script>alert('修改失败');location='update.php'</script>";
            }
            break;
    }