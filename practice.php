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
    <!-- <div style="display:block;height:300px"></div> -->

    <div style="height: 150px;"></div>
    <div id="questions">
        <pre class="text-center">

複習小技巧：

依自己需要，選擇複習內容，載入題目後遮蓋標準答案，逐題閱讀並答題。

系統會自動將答錯的題目打勾，若自已有不熟練的題目也可自行打勾。

複習完之後，將打勾的題目寄回自己的信箱，日後可針對這些題目加強即可。
<input type="radio" name="ans1" id=""><input type="radio" name="ans1" id=""><input type="radio" name="ans1" id="">

<img src="./picture/906q.jpg">

    </pre>
    </div>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        // 禁止右鍵
        document.oncontextmenu = function() {
            window.event.returnValue = false;
        }

        $("#getQue").click(function getQue() {
            queform = {};
            queform['by'] = $("input[name=by]:checked").val();
            queform['min'] = $("input[name=min]").val();
            queform['max'] = $("input[name=max]").val();
            queform['rand'] = $("input[name=rand]").val();
            queform['job'] = $("select[name=job]").val();
            queform['common'] = $("select[name=common]").val();
            queform['page'] = "practice";
            // console.log("queform", queform);

            // by min max rand job common

            $.post("./api/loadquestion.php", queform, (que) => {
                console.log("load success");
                // que=JSON.parse(data);
                // console.log(que);
                $("#questions").html(que);
                
            })
        })
        // 單選顯示選項編號在作答欄
        $(document).on('change',"input[type='radio']",function(event){
            console.log(event);
            console.log("radio",$(event.target).val());
            $(event.target).parent().prev().text($(event.target).val());
        })
        // 多選
        ansArr=[];
        $(document).on('change',"input[type='checkbox']",function(event){
            console.log("checkbox",$(event.target).val());
            console.log($(event.target));
            opts=$(event.target).parent().find("input");
            console.log("opts",opts);

            console.log("optschild",opts.children());
            console.log("checkbox1",opts.eq(0).prop("checked"));
            console.log("checkbox2",opts.eq(1).prop("checked"));
            console.log("checkbox3",opts.eq(2).prop("checked"));
            console.log("checkbox4",opts.eq(3).prop("checked"));

             asnArr.push($(event.target).val());

            // if($(event.target).prop("checked")){
            //     console.log("checkbox",$(event.target).val(),"checked");
            //     console.log("checkbox1",opts.eq(0).prop("checked"));
            //     console.log("checkbox2",opts.eq(1).prop("checked"));
            //     console.log("checkbox3",opts.eq(2).prop("checked"));
            //     console.log("checkbox4",opts.eq(3).prop("checked"));
            //     // asnArr.push($(event.target).val());
            // }else{
            //     console.log("checkbox",$(event.target).val(),"checked");
            //     console.log("checkbox1",opts.eq(0).prop("checked"));
            //     console.log("checkbox2",opts.eq(1).prop("checked"));
            //     console.log("checkbox3",opts.eq(2).prop("checked"));
            //     console.log("checkbox4",opts.eq(3).prop("checked"));
            //     }
        })


    })
</script>