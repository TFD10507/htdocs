<?php
    $member = json_decode(file_get_contents("php://input"), true);
    // TODO 加入nickname
    // $member['successful'] = true;
    // $member['nickname'] = 'Williams';
    // echo json_encode($member);

    $pdo = new PDO(
        "mysql:host=10.2.0.84:3306;dbname=JAVA_FRAMEWORK",
        "tfd105",
        "password"
    );
    $sql = " select * from MEMBER where USERNAME = :username and PASSWORD = :password";
    $statement = $pdo->prepare($sql);
    $statement -> bindValue(":username", $member["username"]);
    $statement -> bindValue(":password", $member["password"]);
    $statement -> execute();
    $members = $statement->fetchAll();

    $resultMember = $members[0];
    if($resultMember != null ){
        $resultMember['successful'] = true;
    }

    echo json_encode($resultMember);
?>