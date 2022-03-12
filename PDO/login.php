<?php

     include("connection.php");
     $pdo = Conn1();
       //---------------------------------------------------
       $account = $_POST["account"];
       $password = $_POST["password"];

       //建立SQL語法
        //為了防止SQL隱碼攻擊的寫法

        // bindParam - 1
    //    $sql = "SELECT * FROM member WHERE Name = :name and PWD = :pwd"; 

        // bindParam - 2
       $sql = "SELECT * FROM member WHERE Name = ? and PWD = ?";


       //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
        
       $statement = $pdo->prepare($sql);
        //封裝
       $statement -> bindValue(1,$account); //bindParam 過濾account這個值
       $statement -> bindValue(2,$password);
        //封裝完成
       $statement->execute();

       //抓出全部且依照順序封裝成一個二維陣列

       $data = $statement->fetchAll();

       if(count($data) > 0 ){
            echo "登入成功";

            session_start();
            $_SESSION["memberID"] = $account;

          //   轉址到Main.php
            header("Location:Main.php");
       }else{
            echo "帳號或密碼錯誤！";
       }

       // print_r($data);

       // var_dump($data);

       //將二維陣列取出顯示其值
       foreach($data as $index => $row){
	        echo $row["Name"];   //欄位名稱
	        echo " / ";
	        echo $row["PWD"];    //欄位名稱
	        echo " / ";
	        echo $row["CreateDate"];    //欄位名稱
            echo "<br>";	       
       }

?>
