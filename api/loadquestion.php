<?php
include_once("base.php");

// dd($_POST);


// $_POST["by"]決定選擇題目的方式 
// $_SESSION['queNum']決定列出哪些題目 
switch ($_POST["by"]) {
    case "bynum":
        // echo $_POST["by"];

        $queNum = [];
        $min = $_POST['min'];
        $max = $_POST['max'];

        for ($i = $min; $i <= $max; $i++) {
            $tmp = rand($min, $max);
            if (in_array($tmp, $queNum)) {
                $i--;
            } else {
                array_push($queNum, $tmp);
            }
        }
        // dd($queNum);
        break;

    case "byrandom":
        // echo $_POST["by"];
        $queNum = [];
        for ($i = 0; $i < $_POST['rand']; $i++) {
            $tmp = rand(0, $Question->count());
            if (in_array($tmp, $queNum)) {
                $i--;
            } else {
                array_push($queNum, $tmp);
            }
        }
        // dd($queNum);

        break;

    case "byjob":
        // echo $_POST["by"];
        // echo $_POST["job"];

        $queNum = [];
        $subject = $Subject->find(['id' => $_POST["job"]]);
        $queCount = $subject['subject_end'] - $subject['subject_start'] + 1;
        for ($i = 0; $i < $queCount; $i++) {
            $tmp = rand($subject['subject_start'], $subject['subject_start'] + $queCount - 1);
            if (in_array($tmp, $queNum)) {
                $i--;
            } else {
                array_push($queNum, $tmp);
            }
        }


        // echo $subject['subject_name'];
        // echo "<br>";
        // dd($queNum);



        break;

    case "bycommon":
        // echo $_POST["by"];
        // echo $_POST["common"];

        $queNum = [];
        $subjectNum = $_POST["common"] + 9;
        $subject = $Subject->find(['id' => $subjectNum]);
        $queCount = $subject['subject_end'] - $subject['subject_start'] + 1;
        for ($i = 0; $i < $queCount; $i++) {
            $tmp = rand($subject['subject_start'], $subject['subject_start'] + $queCount - 1);
            if (in_array($tmp, $queNum)) {
                $i--;
            } else {
                array_push($queNum, $tmp);
            }
        }


        // echo $subject['subject_name'];
        // echo "<br>";
        // dd($queNum);


        break;
}
// 隨機選項用的陣列
$optrand = [];
for ($i = 0; $i < 4; $i++) {
    $tmp = rand(1, 4);
    if (in_array($tmp, $optrand)) {
        $i--;
    } else {
        array_push($optrand, $tmp);
    }
}

echo "<table class=\"col-6 border border-4 rounded-1 m-auto\" style=\"border-collapse:collapse\">";
foreach ($queNum as $key => $que) {
    $question = $Question->find($que);



    $quePic = "./picture/" . $question['id'] . "q.jpg";
    $opt1Pic = "./picture/" . $question['id'] . "a1.jpg";
    $opt2Pic = "./picture/" . $question['id'] . "a2.jpg";
    $opt3Pic = "./picture/" . $question['id'] . "a3.jpg";
    $opt4Pic = "./picture/" . $question['id'] . "a4.jpg";
    // 對照資料表檢查有無附圖
    $hasPic = $Picture->find(['queNum' => $question['id']]);

    // 選項隨機化 把選項按照1,2,3,4填入陣列使索引跟選項錯開 再把陣列用索引1,2,3,4取出達到隨機效果 答案的數字跟隨選項的value獲得索引
    // optrand       =>      若答案是opt1 則顯示的答案是3
    //     [0]3   opt1     1 opt2
    //     [1]1   opt2     2 opt4
    //     [2]4   opt3     3 opt1
    //     [3]2   opt4     4 opt3
    $optarr=[];
    if (file_exists("." . $opt1Pic)){

        for($i=0;$i<4;$i++){
            $num=$i+1;
            $optnow=${"opt".$optrand[$i]."Pic"};
            $opt{$optrand[$i]}="<input type=\"radio\" name=\"ans".($key + 1)."\" value=\"".($i+1)."\">" . "<img src=\"" . $optnow . "\">" . "<br>" ;
            array_push($optarr,$opt{$optrand[$i]});
            if($optrand[$i]==$question['ans']){
                $ans=$i+1;
            }
            
        }
    }else{
        for($i=0;$i<4;$i++){
            $num=$i+1;
            $tmp="opt".$optrand[$i];
            $optnow=htmlspecialchars($question[$tmp]);
            $opt{$optrand[$i]}="<input type=\"radio\" name=\"ans".($key + 1)."\" value=\"".($i+1)."\">" . $optnow . "<br>" ;
            array_push($optarr,$opt{$optrand[$i]});
            if($optrand[$i]==$question['ans']){
                $ans=$i+1;
            }
            
        }
    }
    // 印出隨機化選項
    // foreach($optarr as $row){
    //     echo $row;
    // }            
    // echo "</td></tr>";
    

    



    if ($hasPic) {
        // 有附圖
        
        echo "
        <tr class=\"border border-4 rounded-1\" style=\"border-collapse:collapse\">
        <td class=\"border border-4 rounded-1 text-center\" style=\"width:3%\">" . ($key + 1) . "</td>
        ";

        // 練習頁面插入答案
        if ($_POST["page"] = "practice") {
            echo "<td class=\"border border-4 rounded-1 text-center\" style=\"width:4%\">" . $ans . "</td>";
        }

        echo "
        <td class=\"border border-4 rounded-1 text-center\" style=\"width:4%\" id=\"ans" . ($key + 1) . "\"></td>
        <td style=\"width:70%\">" .
            $question['que'] . "<br>";

        if (file_exists("." . $quePic)) {
            // 圖片題目
            echo "<img src=\"" . $quePic . "\">" . "<br>";
        }
        if (file_exists("." . $opt1Pic)) {
            // 圖片選項

            foreach($optarr as $row){
                echo $row;
            }            
            echo "</td></tr>";
            // echo
            // "<input type=\"radio\" name=\"ans" . ($key + 1) . "\" value=\"1\">" . "<img src=\"" . $opt1Pic . "\">" . "<br>" .
            // "<input type=\"radio\" name=\"ans" . ($key + 1) . "\" value=\"2\">" . "<img src=\"" . $opt2Pic . "\">" . "<br>" .
            // "<input type=\"radio\" name=\"ans" . ($key + 1) . "\" value=\"3\">" . "<img src=\"" . $opt3Pic . "\">" . "<br>" .
            // "<input type=\"radio\" name=\"ans" . ($key + 1) . "\" value=\"4\">" . "<img src=\"" . $opt4Pic . "\">" . "<br>" .
            // "</td>
            // </tr>
            // ";
        } else {
            // 文字選項
            echo
                "<input type=\"radio\" name=\"ans" . ($key + 1) . "\" value=\"1\">" . htmlspecialchars($question['opt1']) . "<br>" .
                "<input type=\"radio\" name=\"ans" . ($key + 1) . "\" value=\"2\">" . htmlspecialchars($question['opt2']) . "<br>" .
                "<input type=\"radio\" name=\"ans" . ($key + 1) . "\" value=\"3\">" . htmlspecialchars($question['opt3']) . "<br>" .
                "<input type=\"radio\" name=\"ans" . ($key + 1) . "\" value=\"4\">" . htmlspecialchars($question['opt4']) . "<br>" .
                "</td>
            </tr>
            ";
        }
    } else {
        // 沒有附圖
        echo "
    <tr class=\"border border-4 rounded-1\" style=\"border-collapse:collapse\">
        <td class=\"border border-4 rounded-1 text-center\" style=\"width:3%\">" . ($key + 1) . "</td>";
        // 練習頁面插入答案
        if ($_POST["page"] = "practice") {
            echo "<td class=\"border border-4 rounded-1 text-center\" style=\"width:4%\">" . $ans . "</td>";
        }
            echo "
            <td class=\"border border-4 rounded-1 text-center\" style=\"width:4%\" id=\"ans" . ($key + 1) . "\"></td>
            <td style=\"width:70%\">" .
                $question['que'] . "<br>";

                foreach($optarr as $row){
                    echo $row;
                }            
                echo "</td></tr>";
        //         echo 
        //         "<input type=\"radio\" name=\"ans" . ($key + 1) . "\" value=\"1\">" . htmlspecialchars($question['opt1']) . "<br>" .
        //         "<input type=\"radio\" name=\"ans" . ($key + 1) . "\" value=\"2\">" . htmlspecialchars($question['opt2']) . "<br>" .
        //         "<input type=\"radio\" name=\"ans" . ($key + 1) . "\" value=\"3\">" . htmlspecialchars($question['opt3']) . "<br>" .
        //         "<input type=\"radio\" name=\"ans" . ($key + 1) . "\" value=\"4\">" . htmlspecialchars($question['opt4']) . "<br>" .
        //         "</td>
        // </tr>
        // ";
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
