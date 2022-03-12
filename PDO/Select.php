<?php

       include("connection.php");
       $pdo = Conn1();
       //---------------------------------------------------

       //建立SQL語法
       $sql = "SELECT * FROM member ORDER BY CreateDate desc";
       

       //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
       $statement = $pdo->query($sql);

       //抓出全部且依照順序封裝成一個二維陣列
       $data = $statement->fetchAll();

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
