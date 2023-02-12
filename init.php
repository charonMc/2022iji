<?php
include_once("./api/base.php");

// 從PDF複製 照順序轉義反斜線\ 單引號' 雙引號" 美元符號$
$question=htmlspecialchars("


");

$question=str_replace("
","",$question);
$questionArray=explode("。",$question);
unset($questionArray[count($questionArray)-1]);
$option=["①","②","③","④"];
// print_r($option);

$qAnd1=explode($option[0],$questionArray[0]);
$questionArrays=[];
foreach($questionArray as $key => $row){
    $tmpArray=explode($option[0],$row);
    // q 1234
    $tmpArray2=explode($option[1],$tmpArray[1]);
    // 1 234
    $tmpArray3=explode($option[2],$tmpArray2[1]);
    // 2 34
    $tmpArray4=explode($option[3],$tmpArray3[1]);
    // 3 4
    $queAnsStart=strpos($tmpArray[0],"(");
    $queAnsEnd=strpos($tmpArray[0],")");
    $queAns=substr($tmpArray[0],$queAnsStart+1,$queAnsEnd-$queAnsStart-1);
    // $tmpArrayque=explode(")",$tmpArray[0]);
    $tmpArrayque=substr($tmpArray[0],$queAnsEnd+1);
    $questionArrays[$key]=[$tmpArrayque,$queAns,$tmpArray2[0],$tmpArray3[0],$tmpArray4[0],$tmpArray4[1]];
}

// echo "<pre>";
// print_r($questionArray);
// echo "</pre>";
// echo "<pre>";
// print_r($qAnd1);
// echo "</pre>";

echo "<pre>";
print_r($questionArrays);
echo "</pre>";



// 存入db指令 慎用
// foreach($questionArrays as $row){

//     $Question->save(['que'=>$row[0], 'ans'=>$row[1], 'opt1'=>$row[2], 'opt2'=>$row[3], 'opt3'=>$row[4], 'opt4'=>$row[5]]);
// }
?>


