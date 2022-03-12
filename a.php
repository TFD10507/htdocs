<?php
    // include("b.php");
    // // 呼叫函式
    // sayhello("嘿");

    // // 呼叫函式回傳值
    // // echo sayhello();

    // // require("b.php");

    // $x = 100; $y = 200;
    // echo $x." + ".$y." = ".sumNumbers($x,$y);


    // ===================  cookie  ====================
    // setcookie("memberID", "test123");

    session_start();
    $_SESSION["memberID"] = "test123";
?> 