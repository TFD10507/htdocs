<?php
// ============== get =============
// echo $_GET["account"];    //html input的name
// echo "<br>";
// echo $_GET["account2"];
// echo isset($_GET["account2"]) ? $_GET["account2"] : "none";


// ============== post =============
// echo $_POST["account"]; 



// 練習 ================================

echo "姓名：";
echo isset($_GET["name"]) ? $_GET["name"] : "none";
echo "<br>";
echo "性別：";
echo isset($_GET["sex"]) ? $_GET["sex"] : "none";
echo "<br>";
echo "交通工具：";
// $trans_arr = $_GET["car"];
for($i = 0; $i < 2 ;$i++){
    echo $_GET["car"][$i] ." " ;
}
echo "<br>";

?>