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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="./js/js.js"></script>


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


    </pre>
    </div>
</body>

</html>

<!-- <script>
    $(document).ready(function() {
        // 禁止右鍵
        // document.oncontextmenu = function() {
        //     window.event.returnValue = false;
        // }
        // 獲得選取題目的資訊
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

            //傳到後端處理並回傳題目
            $.post("./api/loadquestion.php", queform, (que) => {
                console.log("load success");
                // que=JSON.parse(data);
                // console.log(que);
                $("#questions").html(que);
            })
        })

        // 單選顯示選項編號在作答欄
        $(document).on('click', "input[type='radio']", function(event) {
            // console.log(event);
            // console.log("radio",$(event.target).val());
            $(event.target).parent().prev().text($(event.target).val());
        })
        // 多選
        $(document).on('click', "input[type='checkbox']", function(event) {
            console.log("checkbox", $(event.target).val());
            opts = $(event.target).parent().find("input");

            // console.log("opts",opts);
            // console.log("optschild",opts.children());
            // console.log("checkbox1",opts.eq(0).prop("checked"));
            // console.log("checkbox2",opts.eq(1).prop("checked"));
            // console.log("checkbox3",opts.eq(2).prop("checked"));
            // console.log("checkbox4",opts.eq(3).prop("checked"));
            genAnsArr(opts);

        })
        // 答案對照 一樣則顯示正確答案 不一樣則變紅
        $(document).on('click', "input[type='radio'],input[type='checkbox']", function(event) {

            if ($(event.target).parent().prev().prev().children().text() == $(event.target).parent().prev().text()) {
                console.log($(event.target).parent().prev().text());
                console.log($(event.target).parent().prev().prev().children().text());
                console.log($(event.target).parent().prev().prev().children());
                console.log($(event.target).parent().prev().prev().children().attr("visibility"));
                $(event.target).parent().prev().css("color", "green");

                console.log("answer correct")
                $(event.target).parent().prev().prev().children().show();
            } else {
                console.log("answer error")
                $(event.target).parent().prev().css("color", "red");
            }

        })
        // 多選答案字串產生
        function genAnsArr(opts) {
            ansArr = [];
            opts.each(function() {
                if ($(this).prop("checked")) {
                    ansArr.push($(this).val());
                }
            })
            // console.log("ansArr",ansArr);
            $(opts).parent().prev().text(ansArr.join(""));
        }
        // 顯示答案按鈕
        $(document).on("click", "#toggleAns", function() {
            show = 0;
            $(".ans").each(function() {
                if ($(this).css("display") == "none") {
                    console.log("has ans not show")
                    $(".ans").show();
                    show = 0;
                    return false;
                }
                show = show + 1;
            })
            if (show == 100) {
                $(".ans").hide();
            }


        })
        // 點選載入題目範圍的選項時自動切換到該選擇方式
        $(".input").on("click", function() {
            switch ($(event.target).prop("name")) {

                case "min":
                    // console.log("bynum");
                    $("#bynum").prop("checked",true);
                break;
                case "max":
                    // console.log("bynum");
                    $("#bynum").prop("checked",true);
                break;
                case "rand":
                    // console.log("byrand");
                    $("#byrand").prop("checked",true);

                break;
                case "job":
                    // console.log("byjob");
                    $("#byjob").prop("checked",true);

                break;
                case "common":
                    // console.log("bycommon");
                    $(".input[type='radio'][name='by']").prop("checked",false);
                    $("#bycommon").prop("checked",true);

                break;



            }
        })

        $("#close").click(function(){
    window.close();
            });

    })
</script> -->