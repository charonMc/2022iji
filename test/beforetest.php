接收index來的get 顯示試前說明
<?php 
include_once "../api/base.php";
$queform=[];
$queform['page'] = "test";
$subjects=$Subject->all();

// dd($subjects);
echo $_GET['sj'];
// echo number_format($_GET['sj']);

$notnum=["all","test"];
if(in_array($_GET['sj'],$notnum)){
    $subject="全部題庫內容";
}else{
    $subject=$subjects[$_GET['sj']-1]['subject_name'];
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
    <script src="./js/js.js"></script>
</head>
<body>
    <div>
        <p>測驗範圍:<?=$subject?></p>
        <table class="col-6">
            <tr>
                <td>題目類型</td>
                <td>題目數量</td>
                <td>題/分</td>
                <td>答錯倒扣</td>
                <td>總分佔比</td>
            </tr>
            <?php
            if($_GET['sj']==1){
            ?>

                <tr></tr>
                <tr></tr>
                <?php
            }
            ?>
                </table>
    </div>
</body>
</html>