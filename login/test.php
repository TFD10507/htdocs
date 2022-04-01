<?php
    $member = json_decode(file_get_contents("php://input"), true); //解碼：把前端傳來的一串文字變成物件

    // TODO 加入nickname
    // $member['successful'] = true;
    // $member['nickname'] = 'Williams';
    // echo json_encode($member);

    $pdo = new PDO( //連線：把資料insert資料庫
        "mysql:host=10.2.0.84:3306;dbname=JAVA_FRAMEWORK",
        "tfd105",
        "password"
    );
    $sql = " select * from MEMBER where USERNAME = :username and PASSWORD = :password";
    $statement = $pdo->prepare($sql); // -> 代表物件底下的屬性，跟js的.一樣
    $statement -> bindValue(":username", $member["username"]);
    $statement -> bindValue(":password", $member["password"]);
    $statement -> execute(); //執行
    $members = $statement->fetchAll();

    $resultMember = $members[0];
    if($resultMember != null ){
        $resultMember['successful'] = true;
    }

    echo json_encode($resultMember);
?>