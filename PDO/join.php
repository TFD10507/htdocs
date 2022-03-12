<?php

       include("connection.php");
       $pdo = Conn1();

       //---------------------------------------------------

        echo $_POST["account"];
        echo "<br>";
        echo $_POST["password"];
        echo "<br>";

        $account = htmlspecialchars($_POST["account"]);
        $password = htmlspecialchars($_POST["password"]);

       //建立SQL
        //這裡的欄位名稱是SQL資料表裡的欄位名稱，名稱需一樣
        $sql = "INSERT INTO member(Name, PWD, CreateDate) VALUES ('$account','$password', NOW())";
        // $sql = "INSERT INTO member(account, password) VALUES ('".$account."','".$password."')"; //這個是用字串相接的方式(概念)

       //執行
       // php中->符號類似於.的作用
       $pdo->exec($sql);
       //echo "新增成功!"
       // 轉址到原本PDO範例中的Select.php
       header("Location: Select.php");

?>