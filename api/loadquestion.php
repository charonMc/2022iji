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
        // 順序排序
        for ($i = $min; $i <= $max; $i++) {
            array_push($queNum, $i);
        }
        //隨機排序 
        // for ($i = $min; $i <= $max; $i++) {
        //     $tmp = rand($min, $max);
        //     if (in_array($tmp, $queNum)) {
        //         $i--;
        //     } else {
        //         array_push($queNum, $tmp);
        //     }
        // }
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
        // echo $_POST["common"]+9;

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

echo "<table class=\"col-6  m-auto\" style=\"border-collapse:collapse\">";
echo "
<tr class=\"\" style=\"border-collapse:collapse;height:2rem;\">
    <td class=\"\" style=\"width:6%\"></td>
    <td class=\"text-center\" 
        style=\"width:7%\">
        <button class=\"btn btn-success\" 
                style=\"width:80%;height:80%;font-size:10px\" id=\"toggleAns\">顯示答案</button></td>

</tr>

<tr class=\"border border-4 rounded-1\" style=\"border-collapse:collapse;height:2rem;\">
<td class=\"border border-4 rounded-1 text-center\" style=\"width:6%\">題號</td>
 ";
if ($_POST["page"] = "practice") {
    echo "<td class=\"border border-4 rounded-1 text-center\" style=\"width:7%\">標準答案</td>";
}
echo "
<td class=\"border border-4 rounded-1 text-center\" style=\"width:7%\" >你的答案</td>
<td class=\"text-center\"style=\"width:70%;\">題目</td>";
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
    $optarr = [];
    $ansnum = [];
    if ($question['ans'] < 10) {
        // 單選
        if (file_exists("." . $opt1Pic)) {
            // 圖片選項
            for ($i = 0; $i < 4; $i++) {
                $num = $i + 1;
                $optnow = ${"opt" . $optrand[$i] . "Pic"};
                $opt[$optrand[$i]] = "<input type=\"radio\" name=\"ans" . ($key + 1) . "\" value=\"" . ($i + 1) . "\">" . "<img src=\"" . $optnow . "\">" . "<br>";
                array_push($optarr, $opt[$optrand[$i]]);
                if ($optrand[$i] == $question['ans']) {
                    $ans = $i + 1;
                }
            }
        } else {
            // 文字選項
            for ($i = 0; $i < 4; $i++) {
                $num = $i + 1;
                $tmp = "opt" . $optrand[$i];
                $optnow = htmlspecialchars($question[$tmp]);
                $opt[$optrand[$i]] = "<input type=\"radio\" name=\"ans" . ($key + 1) . "\" value=\"" . ($i + 1) . "\">" . $optnow . "<br>";
                array_push($optarr, $opt[$optrand[$i]]);
                if ($optrand[$i] == $question['ans']) {
                    $ans = $i + 1;
                }
            }
        }
    } else {
        // 多選
        if (file_exists("." . $opt1Pic)) {
            // 圖片選項
            for ($i = 0; $i < 4; $i++) {
                $num = $i + 1;
                $optnow = ${"opt" . $optrand[$i] . "Pic"};
                $opt[$optrand[$i]] = "<input type=\"checkbox\" name=\"ans" . ($key + 1) . "\" value=\"" . ($i + 1) . "\">" . "<img src=\"" . $optnow . "\">" . "<br>";
                array_push($optarr, $opt[$optrand[$i]]);
                $ansarr = array_map('intval', str_split($question['ans']));
                $ansnum = [];
                foreach ($ansarr as $row) {
                    if ($optrand[$i] == $row) {
                        array_push($ansnum, $i + 1);
                    }
                }
            }
        } else {
            // 文字選項
            for ($i = 0; $i < 4; $i++) {
                $num = $i + 1; //選項編號
                $tmp = "opt" . $optrand[$i]; //隨機選項
                $optnow = htmlspecialchars($question[$tmp]); //選項內容
                $opt[$optrand[$i]] = "<input type=\"checkbox\" name=\"ans" . ($key + 1) . "\" value=\"" . ($i + 1) . "\">" . $optnow . "<br>";
                array_push($optarr, $opt[$optrand[$i]]); //選項內容放進陣列
                $ansarr = array_map('intval', str_split($question['ans'])); //答案從數字字串拆解成整數陣列
                foreach ($ansarr as $row) {
                    //遍歷隨機選項 等於答案就把選項編號放入陣列
                    if ($optrand[$i] == $row) {
                        array_push($ansnum, $i + 1);
                    }
                }
            }
            sort($ansnum); //放入陣列的順序是隨機的 降序排列
            $ans = implode("", $ansnum); //陣列轉字串

        }
    }

    echo "
        <tr class=\"border border-4 rounded-1\" style=\"border-collapse:collapse\">
        <td class=\"border border-4 rounded-1 text-center\" style=\"width:4%\">" . ($key + 1) . "</td>
        ";
    // 練習頁面插入答案
    if ($_POST["page"] = "practice") {
        echo "<td class=\"border border-4 rounded-1 text-center \" style=\"width:4%\"><span class=\"ans\" style=\"display:none;\">" . $ans . "</td>";
    }
    echo "
        <td class=\"border border-4 rounded-1 text-center myans\" style=\"width:4%\" id=\"ans" . ($key + 1) . "\"></td>
        <td style=\"width:70%\">" .
        $question['que'] . "<br>";

    if (file_exists("." . $quePic)) {
        // 圖片題目
        echo "<img src=\"" . $quePic . "\">" . "<br>";
    }

    // 印出隨機化選項
    foreach ($optarr as $row) {
        echo $row;
    }
    echo "</td></tr>";


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
