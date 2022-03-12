<?php
    // function sayhello($str){
    //     echo "hello~".$str;

    //     return "hello";
    // }

    // function sumNumbers($a, $b){
    //     $c = $a + $b;
    //     return $c;
    // }
 


    // ===================  cookie  ====================
    // echo $_COOKIE["memberID"];

    session_start();
    echo $_SESSION["memberID"];   
?>