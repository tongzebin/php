<?php
   //var_dump($_POST['xg']);
   //var_dump($_FILES['pic']['tmp_name']);

   if(!move_uploaded_file($_FILES['pic']['tmp_name'],$_POST['xg'])){    //替换图片,保留文件名
      echo '失败';
   }else{
      echo '成功';
   }
   echo '<a href="show.php">去查看</a>';