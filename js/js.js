$(function() {
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
        $.post("../api/loadquestion.php", queform, (que) => {
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
            // console.log($(event.target).parent().prev().text());
            // console.log($(event.target).parent().prev().prev().children().text());
            // console.log($(event.target).parent().prev().prev().children());
            // console.log($(event.target).parent().prev().prev().children().attr("visibility"));
            $(event.target).parent().prev().css("color", "green");

            // console.log("answer correct")
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
            show=1;
        })
        if (show) {
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
function gotopractice(){
    window.open("./practice/practice.php","_blank","width=960,height=900");
}

