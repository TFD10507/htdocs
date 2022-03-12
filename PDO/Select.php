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

       // **php會變成資料提供者，提供json格式傳出去
       // echo json_encode($data);

       // **之後就不用在php跑以下迴圈，讓前端去跑迴圈就好傳出值就好

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
