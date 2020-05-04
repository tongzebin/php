 <?php
    include('cl.php');
    $lj=mysqli_connect(HOST,USER,PWD,DBNAME);
    mysqli_set_charset($lj,'utf8');
    $cz=$_GET['cz'];
    switch($cz){
        case 'add':
            $name=$_POST['name'];
            $age=$_POST['age'];
            $sex=$_POST['sex'];
            $hobby=$_POST['hobby'];
            $sql="insert into aa values(null,'$name',$age,'$sex','$hobby')";
            mysqli_query($lj,$sql);
            if(mysqli_insert_id($lj)){
                echo '<script>alert("添加成功");location="show.php";</script>';
            }else{
                echo '<script>alert("添加失败");location="add.php";</script>';
            }
            break;
        case 'del':
            $id=$_GET['id'];
            $sql="delete from aa where xh=$id";
            mysqli_query($lj,$sql);
            if(mysqli_affected_rows($lj)){
                echo '<script>alert("删除成功");location="show.php"</script>';
            }else{
                echo '<script>alert("删除失败");location="show.php"</script>';
            }
            break;
        case 'upd':
            $id=$_POST['id'];
            $name=$_POST['name'];
            $age=$_POST['age'];
            $sex=$_POST['sex'];
            $hobby=$_POST['hobby'];
            $sql="upadte aa set name='$name',age=$age,sex='$sex',hobby='$hobby'";
            mysqli_query($lj,$sql);
            if(mysqli_affected_rows($lj)){
                echo '<script>alert("修改成功");location="show.php"</script>';
            }else{
                echo '<script>alert("修改失败");location="show.php"</script>';
            }
            break;
    }