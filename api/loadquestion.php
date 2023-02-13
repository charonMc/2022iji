<?php
include_once("base.php");

// dd($_POST);


// $_POST["by"]決定選擇題目的方式 
// $_SESSION['queNum']決定列出哪些題目 
switch($_POST["by"]){
    case "bynum":
        // echo $_POST["by"];

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
        // dd($queNum);
    break;

    case "byrandom":
        // echo $_POST["by"];
        $queNum=[];
        for($i=0;$i<$_POST['rand'];$i++){
            $tmp=rand(0,$Question->count());
            if(in_array($tmp,$queNum)){
                $i--;
            }else{
                array_push($queNum,$tmp);
            }

        }
        // dd($queNum);

    break;

    case "byjob":
        // echo $_POST["by"];
        // echo $_POST["job"];

        $queNum=[];
        $subject=$Subject->find(['id'=>$_POST["job"]]);
        $queCount=$subject['subject_end']-$subject['subject_start']+1;
        for($i=0;$i<$queCount;$i++){
            $tmp=rand($subject['subject_start'],$subject['subject_start']+$queCount-1);
            if(in_array($tmp,$queNum)){
                $i--;
            }else{
                array_push($queNum,$tmp);
            }

        }
        
        
        // echo $subject['subject_name'];
        // echo "<br>";
        // dd($queNum);



    break;

    case "bycommon":
        // echo $_POST["by"];
        // echo $_POST["common"];

        $queNum=[];
        $subjectNum=$_POST["common"]+9;
        $subject=$Subject->find(['id'=>$subjectNum]);
        $queCount=$subject['subject_end']-$subject['subject_start']+1;
        for($i=0;$i<$queCount;$i++){
            $tmp=rand($subject['subject_start'],$subject['subject_start']+$queCount-1);
            if(in_array($tmp,$queNum)){
                $i--;
            }else{
                array_push($queNum,$tmp);
            }

        }
        
        
        // echo $subject['subject_name'];
        // echo "<br>";
        // dd($queNum);


    break;


}
echo "<table class=\"col-6 border border-4 rounded-1 m-auto\" style=\"border-collapse:collapse\">";
foreach($queNum as $key => $que){
    $question=$Question->find($que);



    $quePic="./picture/".$question['id']."q.jpg";
    $ans1Pic="./picture/".$question['id']."a1.jpg";
    $ans2Pic="./picture/".$question['id']."a2.jpg";
    $ans3Pic="./picture/".$question['id']."a3.jpg";
    $ans4Pic="./picture/".$question['id']."a4.jpg";
    $hasPic=$Picture->find(['queNum'=>$question['id']]);
    // dd($hasPic);
    if($hasPic){
        // 有附圖
        echo "
    <tr class=\"border border-4 rounded-1\" style=\"border-collapse:collapse\">
        <td class=\"border border-4 rounded-1 text-center\" style=\"width:3%\">".($key+1)."</td>
        <td class=\"border border-4 rounded-1 text-center\" style=\"width:4%\">".htmlspecialchars($question['ans'])."</td>
        <td class=\"border border-4 rounded-1 text-center\" style=\"width:4%\" id=\"ans\"></td>
        <td style=\"width:70%\">".
        $question['que']."<br>";
        
        if(file_exists(".".$quePic)){
            echo "<img src=\"".$quePic."\">"."<br>";
        }else{
        }
        if(file_exists(".".$ans1Pic)){
            
            echo
            "<input type=\"radio\" name=\"ans\" value=\"1\">"."<img src=\"".$ans1Pic."\">"."<br>".
            "<input type=\"radio\" name=\"ans\" value=\"2\">"."<img src=\"".$ans2Pic."\">"."<br>".
            "<input type=\"radio\" name=\"ans\" value=\"3\">"."<img src=\"".$ans3Pic."\">"."<br>".
            "<input type=\"radio\" name=\"ans\" value=\"4\">"."<img src=\"".$ans4Pic."\">"."<br>".
            "</td>
            </tr>
            "; 

        }else{
            echo 
            "<input type=\"radio\" name=\"ans\" value=\"1\">".htmlspecialchars($question['opt1'])."<br>".
            "<input type=\"radio\" name=\"ans\" value=\"2\">".htmlspecialchars($question['opt2'])."<br>".
            "<input type=\"radio\" name=\"ans\" value=\"3\">".htmlspecialchars($question['opt3'])."<br>".
            "<input type=\"radio\" name=\"ans\" value=\"4\">".htmlspecialchars($question['opt4'])."<br>".
            "</td>
            </tr>
            ";  
        }
    }else{
        // 沒有附圖
        echo "
    <tr class=\"border border-4 rounded-1\" style=\"border-collapse:collapse\">
        <td class=\"border border-4 rounded-1 text-center\" style=\"width:3%\">".($key+1)."</td>
        <td class=\"border border-4 rounded-1 text-center\" style=\"width:4%\">".$question['ans']."</td>
        <td class=\"border border-4 rounded-1 text-center\" style=\"width:4%\" id=\"ans\"></td>
        <td style=\"width:70%\">".
        $question['que']."<br>".
        "<input type=\"radio\" name=\"ans\" value=\"1\">".htmlspecialchars($question['opt1'])."<br>".
        "<input type=\"radio\" name=\"ans\" value=\"2\">".htmlspecialchars($question['opt2'])."<br>".
        "<input type=\"radio\" name=\"ans\" value=\"3\">".htmlspecialchars($question['opt3'])."<br>".
        "<input type=\"radio\" name=\"ans\" value=\"4\">".htmlspecialchars($question['opt4'])."<br>".
        "</td>
    </tr>
    ";
    }
    




    // 題號 答案 題目 選項
    // echo "
    // <tr class=\"border border-4 rounded-1\" style=\"border-collapse:collapse\">
    //     <td class=\"border border-4 rounded-1 text-center\" style=\"width:3%\">".($key+1)."</td>
    //     <td class=\"border border-4 rounded-1 text-center\" style=\"width:4%\">".$question['ans']."</td>
    //     <td class=\"border border-4 rounded-1 text-center\" style=\"width:4%\" id=\"ans\"></td>
    //     <td style=\"width:70%\">".
    //     $question['que']."<br>".
    //     "<input type=\"radio\" name=\"ans\" value=\"1\">".$question['opt1']."<br>".
    //     "<input type=\"radio\" name=\"ans\" value=\"2\">".$question['opt2']."<br>".
    //     "<input type=\"radio\" name=\"ans\" value=\"3\">".$question['opt3']."<br>".
    //     "<input type=\"radio\" name=\"ans\" value=\"4\">".$question['opt4']."<br>".
    //     "</td>
    // </tr>
    // ";
    
}
echo "</table>";
// to("../practice.php");
?>