<?php
include_once("./api/base.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>題庫線上複習系統</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <?php
    include("practiceNav.php");
    ?>
    <div style="display:block;height:300px"></div>

    <div style="height: 150px;"></div>
    <div id="questions" class="text-center">
        <pre>



複習小技巧：

依自己需要，選擇複習內容，載入題目後遮蓋標準答案，逐題閱讀並答題。

系統會自動將答錯的題目打勾，若自已有不熟練的題目也可自行打勾。

複習完之後，將打勾的題目寄回自己的信箱，日後可針對這些題目加強即可。




    </pre>
    </div>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){

        $("#getQue").click(function getQue() {
            queform=$("input[name=by]:checked").val();
            console.log("queform",queform);

            
            
            
            
            // $.post("./api/loadquestion.php", () => {
                
                // })
            })
        })
</script>