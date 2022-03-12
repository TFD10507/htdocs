<?php

       include("connection.php");
       $pdo = Conn1();
       //---------------------------------------------------

       //建立SQL
       $sql = "INSERT INTO member(Name, PWD, CreateDate) VALUES ('王小明', 'abc123', NOW())";
       $sql = "INSERT INTO member(Name, PWD, CreateDate) VALUES ('王小明', 'abc123', NOW())";

       //執行
       // php中->符號類似於.的作用
       $pdo->exec($sql);

       echo "新增成功!"

?>