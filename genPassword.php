<?php
// 新增一個genPassword.php
// 定義一個包含英文(a~z)和數字(0~9)的陣列
// 透過迴圈控制10碼顯示長度
// 可運用字串相加於最終顯示10碼亂數密碼

$en = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
$ma = ["0","1","2","3","4","5","6","7","8","9"];
$genpassword = array_merge($en , $ma);
// print_r($genpassword);
shuffle($genpassword);
$string = "";
for($i = 1;$i <= 10 ;$i++){
    // echo $genpassword[$i];
    $string = $string . $genpassword[$i];
}
echo "亂數密碼為" . $string;
?>