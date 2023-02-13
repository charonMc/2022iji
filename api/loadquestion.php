<?php
include_once("base.php");

dd($_POST);


// $_POST["by"]決定選擇題目的方式 
// $_SESSION['queNum']決定列出哪些題目 
switch($_POST["by"]){
    case "bynum":
        echo $_POST["by"];

        $queNum=[];
        $min=$_POST['min'];
        $max=$_POST['max'];

        for($i=$min;$i<=$max;$i++){
            $tmp=rand($min,$max);
            if(in_array($tmp,$queNum)){
                $i--;
            }else{
                array_push($queNum,$tmp);
            }
        }
        dd($queNum);
        // $_POST['queNum']=$queNum;
        // echo json_encode($queNum);
    break;

    case "byrandom":
        echo $_POST["by"];
        $queNum=[];
        for($i=0;$i<$_POST['rand'];$i++){
            $tmp=rand(0,$Question->count());
            if(in_array($tmp,$queNum)){
                $i--;
            }else{
                array_push($queNum,$tmp);
            }

        }
        dd($queNum);
        $_SESSION['queNum']=$queNum;

    break;

    case "byjob":
        echo $_POST["by"];
        echo $_POST["job"];
        $queNum=[];
        $subject=$Subject->find(['subject_name'=>$_POST["job"]]);
        $queCount=$subject['subject_end']-$subject['subject_start']+1;
        for($i=0;$i<$queCount;$i++){
            $tmp=rand(0,$queCount-1);
            if(in_array($tmp,$queNum)){
                $i--;
            }else{
                array_push($queNum,$tmp);
            }

        }
        
        dd($queNum);
        echo $subject['subject_name'];
        echo "<br>";

        $_SESSION['queNum']=$queNum;


    break;

    case "bycommon":
        echo $_POST["by"];
        echo $_POST["common"];
        $queNum=[];
        $subject=$Subject->find(['subject_name'=>$_POST["common"]]);
        $queCount=$subject['subject_end']-$subject['subject_start']+1;
        for($i=0;$i<$queCount;$i++){
            $tmp=rand(0,$queCount-1);
            if(in_array($tmp,$queNum)){
                $i--;
            }else{
                array_push($queNum,$tmp);
            }

        }
        
        dd($queNum);
        echo $subject['subject_name'];
        echo "<br>";

        $_SESSION['queNum']=$queNum;

    break;
}
// to("../practice.php");
?>