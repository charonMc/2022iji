<div class=" navbar fixed-top  text-center" style="font-size: small;background-color:cyan">
       <form action="./api/loadquestion.php" method="post" class="m-auto">

            <input type="radio" name="by" value="bynum" checked>依題目編號<input type="number" name="min" value="1">題 到第<input type="number" name="max" value="100">題 (1~) <br>
            <input type="radio" name="by" value="byrandom">隨機亂數抽題：共抽<input type="number" name="rand" value="50">題  (1~50)) <br>
            <input type="radio" name="by" value="byjob">依工作項目：
            <select name="job">
                <option value="1" selected>工作項目01：作業準備(242題)</option>
                <option value="2">工作項目02：應用軟體安裝及使用(405題)</option>
                <option value="3">工作項目03：系統軟體安裝及使用(124題)</option>
                <option value="4">工作項目04：資訊安全(75題)</option>
                <option value="5">資訊類共用科目-工作項目01：電腦硬體架構(20題)</option>
                <option value="6">資訊類共用科目-工作項目02：網路概論與應用(29題)</option>
                <option value="7">資訊類共用科目-工作項目03：作業系統(10題)，挑選 10 題</option>
                <option value="8">資訊類共用科目-工作項目04：資訊運算思維(20題)</option>
                <option value="9">資訊類共用科目-工作項目05：資訊安全(40題)</option>
            </select><br>
            
            <input type="radio" name="by" value="bycommon">共同科目:
            <select name="common">
                <option value="1" selected>職業安全衛生(100題)</option>
                <option value="2">工作倫理與職業道德(100題)</option>
                <option value="3">環境保護(100題)</option>
                <option value="4">節能減碳(100題)</option>
            </select>
            
            <br>
            <div>
                <input class="btn btn-info btn-sm" type="submit" value="載入題目">
                <button class="btn btn-warning btn-sm">關閉視窗</button>
            </div>

        </form>
        </div>