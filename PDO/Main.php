<?php
session_start();

// 加上防呆，不會報錯
$account = isset($_SESSION["memberID"]) ? $_SESSION["memberID"] : "";


if($account != ""){
    echo "hi~".$account;
}else{
    // 轉址到login.html
    header("Location:login.html");
}
?>