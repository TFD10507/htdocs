<?php
    $member = json_decode(file_get_contents("php://input"), true);
    
    $URL = "mysql:host=localhost:3306;dbname=JAVA_FRAMEWORK";
    $USERNAME = "root";
    $PASSWORD = "password";
    // 建立PDO物件，並放入指定的相關資料
    $pdo = new PDO($URL, $USERNAME, $PASSWORD);
    
    $sql = "
            insert into MEMBER(USERNAME, PASSWORD, NICKNAME)
            values(:username, :password, :nickname)
        ";
    
    $statement = $pdo->prepare($sql); // -> 代表物件底下的屬性，跟js的.一樣
    $statement->bindValue(":username", $member["username"]);
    $statement->bindValue(":password", $member["password"]);
    $statement->bindValue(":nickname", $member["nickname"]);
    $statement->execute(); // 執行
                           // $member = $statement->fetchAll();
    $resultCount = $statement->rowCount();
    
    if ($resultCount > 0) {
        $member["successful"] = true;
        $member["message"] = "successful";
    } else {
        $member["successful"] = false;
        $member["message"] = "fail";
    }
    
    // 把JSON格式轉回前端
    echo json_encode($member);
?>                                                                    