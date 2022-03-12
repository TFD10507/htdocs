
<?php  // 等同於<script>

    for($i=0 ;$i<10;$i++){

?>  <!-- 等同於</script> -->

123<br>

<?php

}

?>

<?php
	$Name = "王小明";
    $When = "今天";
	$Action = "走路";
    $ForWhat = "上班";
	echo $Name.$When.$Action.$ForWhat;
 ?>  

<br>

 <?php
 $a = -1;
 $b = -2.5;
 echo $a+$b;
 ?>

<br>

<?php
    echo "I am good.";
    echo "<br>";

    echo 'I am good.';
    echo "<br>";

    echo "I'm good.";
    echo "<br>";

    echo 'I\'m good.';
    //  \ 為跳脫字元，把後面東西當成字串
    echo "<br>";

    $a = "1";
    $b = 2.5;
    $c = $a+$b;
    echo $c;
    echo gettype($c);
    echo "<br>";

    $a = "2a";
    $b = 5;
    $c = $a+$b;
    echo $c;
    echo gettype($c);
    echo gettype($a);
    echo "<br>";

    $a="123.5";
    var_dump( $a );
    echo "<br/>";
    settype($a,"integer");//$a型別會改變
    var_dump( $a );
    echo "<br/>";

    echo "<br/>";
    echo "14*4=". 14*4;
    echo "<br/>";
    echo "14/4=". 14/4;
    echo "<br/>";
    echo "14%4=". 14%4;

    echo "<br/>";
    echo "<br/>";
    $b = 0;
    if($b == false){
        echo "false";
    }


    echo "<br/>";
    echo "<br/>";


    $score = 72;
    // (條件判斷) ? "(yes要做的事)" : "(no要做的事)" 
    // 寫法1
    // $result = $score >= 60 ? "pass" : "no pass";
    // echo $result;

    // 寫法2
    echo $score >= 60 ? "pass" : "no pass";
    
    // 寫法3
    // if($score >= 60){
    //     echo "pass";
    // }else{
    //     echo "no pass";
    // }
    
    //=================== 0219 ==========================

    echo "<br/>";
    echo "<br/>";

    $score = 80;
    if($score >= 60){
        echo "及格";
    }else{
        echo "不及格";
    }

    echo "<br/>";
    echo "<br/>";

    if($score >= 90){
        $grade = "A";
    }else if($score >= 80){
        $grade = "B";
    }else if($score >= 70){
        $grade = "C";
    }else if($score >= 60){
        $grade = "D";
    }else{
        $grade = "E";
    }
    echo $grade;

    echo "<br/>";
    echo "<br/>";

    $type = "4";
    switch($type){
        case "1":
            $amt = 6000;
            break;
        case "2":
            $amt = 5000;
            break;
        case "3":
            $amt = 4000;
            break;
        default:
            $amt = 0;
    }
    echo "補助款為".$amt."元";

    echo "<br>";
    echo "<br>";
    
    for($i = 0 ; $i < 10 ; $i++){
        if($i > 5){
            break;
        }

        echo $i;
        echo "<br>";
    }

    echo "<br>";
    echo "<br>";

    $sum = 0;
    for($i = 0 ; $i <= 50 ; $i ++){
        $sum += $i; 
    }
    echo $sum;

    echo "<br>";
    echo "<br>";

    $sum_3 = 0;
    for($i = 0 ; $i <= 50 ; $i ++){
        if($i % 3 == 0){
            $sum_3 += $i; 
        }
    }
    echo $sum_3;

    echo "<br>";
    echo "<br>";

    $i = 0;
    do{
        echo $i;
        echo "<br>";
        $i++;
    }while($i < 10);

    echo "<br>";
    echo "<br>";

// ================== 九九乘法表 =======================
    for($i = 1 ; $i < 10 ;$i++){
        for($j = 1 ; $j < 10 ;$j ++){
            echo $i. "x" .$j. "=" .$i*$j;
            echo "<br>";
        }
        echo "<br>";
    }

    echo "<br>";
    echo "<br>";

// ===================== 陣列 =====================
    $arr = [80, 93, 45];

    var_dump($arr);
    echo "<br>";
    echo $arr[0];
    echo "<br>";
    for($i = 0 ; $i < count($arr); $i++){
        echo $arr[$i];
        echo "<br>";
    }

    echo "<br>";
    echo "<br>";

    $arr = [99,43,68,45,2,1,45];

    foreach($arr as $index => $value){
        echo $index."/".$value;
        echo "<br>";
    }

    echo "<br>";
    echo "<br>";
    $arr = ["甲" => 80 , "乙" => 70, "丙" => 45];

    print_r($arr);
    echo "<br>";
    echo array_search(80 , $arr);
    echo "<br>";
    
    foreach($arr as $index => $value){
        echo $index;
        echo "=";
        echo $value;
        echo "<br>";
    }

//請參考以下步驟將最大值為50的5的倍數封裝到一個陣列內，重新排序，最後透過print_r()顯示結果
// Step1. 先定義一個空陣列 ex: $arr = [];
// Step2. 使用For迴圈批次將5的倍數放入陣列內
// Step3. 使用shuffle()重新排序陣列內容
// Step4. 透過print_r()顯示結果如下，重新整理頁面，順序會變動 
// Array ( [0] => 40 [1] => 10 [2] => 25 [3] => 15 [4] => 20 [5] => 30 [6] => 35 [7] => 5 [8] => 50 [9] => 45 )

    echo "<br>";
    echo "<br>";
    $arr = [];
    for($i = 1 ; $i <= 50 ; $i++){
        if($i % 5 == 0){
            array_push($arr , $i);
        }
    }
    shuffle($arr);
    print_r($arr);

    echo "<br>";
    echo "<br>";

//======== 合併陣列 =========
    $arr1 = ["a" => 80, "b" => 93, "c" => 45];
    $arr2 = ["d" => 50];
    $arr3 = array_merge($arr1 + $arr2);
    print_r($arr3);
    echo "<br>";
    echo "<br>";

//======= 二維陣列 ==========
    $arr = [ [80, 75], [93, 55], [45, 92] ];

    foreach($arr as $index => $arr_sub ){
        foreach($arr_sub as $index_sub => $value){
            echo $value;
            echo ", ";
        }
        echo "<br/>";
    }

    echo "<br>";
    echo "<br>";
//------練習------


    $EN_arr = [];
    $MA_arr = [];

    $arr = [ 
        "A同學" => [ "英文" => 80, "數學" => 75], 
        "B同學" => [ "英文" => 93, "數學" => 55], 
        "C同學" => [ "英文" => 45, "數學" => 92] 
        ];

    foreach($arr as $who => $grade){
        foreach($grade as $subject => $value){
            switch ($subject) {
                case "英文":    //組成英文分數陣列
                    array_push($EN_arr, $value);
                    break;
                case "數學":    //組成數學分數陣列
                    array_push($MA_arr, $value);
                    break;
            }
        }
    }
    echo "英文最高分".max($EN_arr);
    echo "<br/>";
    echo "數學最低分".min($MA_arr);
    echo "<br/>";
    echo "英文平均分數".array_sum($EN_arr) / count($EN_arr);
    echo "<br/>";
    echo "數學平均分數".array_sum($MA_arr) / count($MA_arr);


 ?>
