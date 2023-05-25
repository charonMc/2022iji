<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>土炮版乙級技術士網頁設計乙級學科題庫線上測驗系統</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="./js/js.js"></script>
</head>
<body>
    <div class="col-md-6 mt-5 m-auto">
        <h2 class="md-3">乙級【網頁設計乙級】學科(173002)測驗</h2>
        <div>
        <span>線上複習：</span> 自行選取一段題庫範圍，逐題練習
        <p><button class="btn btn-success" onclick="gotopractice()" >進入練習</button></p>
        </div>
        <div>
        <span>分類測驗：從指定科目挑選20題</span> 
        <p><a href="./test/beforetest.php?sj=1"> 第 1 題組</a>   工作項目01：作業準備(242題)，挑選 20 題</p>
        <p><a href="./test/beforetest.php?sj=2"> 第 2 題組</a>   工作項目02：應用軟體安裝及使用(405題)，挑選 20 題</p>
        <p><a href="./test/beforetest.php?sj=3"> 第 3 題組</a>   工作項目03：系統軟體安裝及使用(124題)，挑選 20 題</p>
        <p><a href="./test/beforetest.php?sj=4"> 第 4 題組</a>   工作項目04：資訊安全(75題)，挑選 20 題</p>
        <p><a href="./test/beforetest.php?sj=5"> 第 5 題組</a>   資訊類共用科目-工作項目01：電腦硬體架構(20題)，挑選 20 題</p>
        <p><a href="./test/beforetest.php?sj=6"> 第 6 題組</a>   資訊類共用科目-工作項目02：網路概論與應用(29題)，挑選 20 題</p>
        <p><a href="./test/beforetest.php?sj=7"> 第 7 題組</a>   資訊類共用科目-工作項目03：作業系統(10題)，挑選 10 題</p>
        <p><a href="./test/beforetest.php?sj=8"> 第 8 題組</a>   資訊類共用科目-工作項目04：資訊運算思維(20題)，挑選 20 題</p>
        <p><a href="./test/beforetest.php?sj=9"> 第 9 題組</a>   資訊類共用科目-工作項目05：資訊安全(40題)，挑選 20 題</p>
        <p><a href="./test/beforetest.php?sj=10"> 共同科目 90006</a>   職業安全衛生(100題)，挑選 20 題</p>
        <p><a href="./test/beforetest.php?sj=11"> 共同科目 90007</a>   工作倫理與職業道德(100題)，挑選 20 題</p>
        <p><a href="./test/beforetest.php?sj=12"> 共同科目 90008</a>   環境保護(100題)，挑選 20 題</p>
        <p><a href="./test/beforetest.php?sj=13"> 共同科目 90009</a>   節能減碳(100題)，挑選 20 題</p>
        </div>
        <div>
            <span>不分類測驗：</span>職業安全衛生、職業道德與工作倫理、環境保護、節能減碳各佔5%
            <p><a href="./test/beforetest.php?sj=all">平時練習</a>  (網頁設計選擇846題＋資訊類共同科目119題)共965題，挑選20題(單選15題，對1題得4分，複選5題，對1題得8分)</p>
            <p><a href="./test/beforetest.php?sj=test">模擬乙檢測驗</a>  (網頁設計選擇846題＋資訊類共同科目119題)共965題，挑選80題(單選60題，對1題得1分，複選20題，對1題得2分)</p>
        </div>

    </div> 
        
    
</body>
</html>


