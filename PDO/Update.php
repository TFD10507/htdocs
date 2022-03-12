<?php

       include("connection.php");
       $pdo = Conn1();
       //---------------------------------------------------

       //建立SQL
       $sql = "UPDATE member SET PWD = 'TFD123' WHERE Name = '王小明'";

       //執行
       
       $result = $pdo->exec($sql);
       echo $result;
       // echo "更新成功";
?>