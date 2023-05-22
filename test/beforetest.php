<!-- 接收index來的get 顯示試前說明 -->
<?php
include_once "../api/base.php";
$queform = [];
$queform['page'] = "test";
$subjects = $Subject->all();

// dd($subjects);
// echo $_GET['sj'];
// echo number_format($_GET['sj']);

$notnum = ["all", "test"];
if (in_array($_GET['sj'], $notnum)) {
    $subject = "全部題庫內容";
} else {
    $subject = $subjects[$_GET['sj'] - 1]['subject_name'];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上測驗系統</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="../js/js.js"></script>
</head>

<body>
    <div class="col-8 text-center m-auto pt-5 ">
        <h4>測驗範圍:<?= $subject ?></h4>
        <table class="text-center mt-5 m-auto">
            <tr>
                <td>題目類型</td>
                <td>題目數量</td>
                <td>題/分</td>
                <td>答錯倒扣</td>
                <td>總分佔比</td>
            </tr>
            <?php
            if ($_GET['sj'] <= 4 || $_GET['sj']=="all") {
            ?>
                <tr>
                    <td>單選題</td>
                    <td>15</td>
                    <td>4</td>
                    <td>無</td>
                    <td>60%</td>
                </tr>
                <tr>
                    <td>複選題</td>
                    <td>5</td>
                    <td>8</td>
                    <td>無</td>
                    <td>40%</td>
                </tr>

            <?php
            }else if($_GET['sj'] == 7){
                ?>
                <tr>
                    <td>單選題</td>
                    <td>10</td>
                    <td>10</td>
                    <td>無</td>
                    <td>100%</td>
                </tr>
            <?php
            }else if($_GET['sj']=="test"){
                ?>
                <tr>
                <td>單選題</td>
                <td>60</td>
                <td>2</td>
                <td>無</td>
                <td>60%</td>
            </tr>
            <tr>
                <td>複選題</td>
                <td>20</td>
                <td>2</td>
                <td>無</td>
                <td>40%</td>
            </tr>
            <?php
            }else{
                ?>
                
                <tr>
                <td>單選題</td>
                <td>20</td>
                <td>5</td>
                <td>無</td>
                <td>100%</td>
            </tr>
            <?php
            }
            ?>
        </table>
        <div>
            <button type="button" class="btn">開始測驗</button>
            <button type="button" class="btn">算了,我再去練練</button>
        </div>
    </div>
</body>

</html>