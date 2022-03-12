<?php

     include("connection.php");
     $pdo = Conn1();
       //---------------------------------------------------
       $name = $_POST["keyword"];

       
        //建立SQL語法
        //為了防止SQL隱碼攻擊的寫法
       $sql = "SELECT * FROM member WHERE Name like ? ";


       //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
        
       $statement = $pdo->prepare($sql);
       $statement -> bindValue(1,'%'.$name.'%'); 
       $statement -> execute();

       //抓出全部且依照順序封裝成一個二維陣列

       $data = $statement->fetchAll();
       if(count($data) > 0 ){
            echo "登入成功";
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
