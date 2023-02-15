<div class=" navbar fixed-top  " style="font-size: small;background-color:cyan">
       <form id="queform" action="./api/loadquestion.php" method="post" class="m-auto" >

            <input type="radio" name="by" value="bynum" id="bynum" checked>依題目編號<input class="input" type="text" name="min" value="1">題 到第<input class="input" type="text" name="max" value="100">題 (1~1365) <br>
            <input type="radio" name="by" value="byrandom" id="byrand">隨機亂數抽題：共抽<input class="input" type="text" name="rand" value="50">題  (1~50)) <br>
            <input type="radio" name="by" value="byjob" id="byjob">依工作項目：
            <select class="input" name="job">
                <option value="1" selected>工作項目01：作業準備(242題)</option>
                <option value="2">工作項目02：應用軟體安裝及使用(405題)</option>
                <option value="3">工作項目03：系統軟體安裝及使用(124題)</option>
                <option value="4">工作項目04：資訊安全(75題)</option>
                <option value="5">資訊類共用科目-工作項目01：電腦硬體架構(20題)</option>
                <option value="6">資訊類共用科目-工作項目02：網路概論與應用(29題)</option>
                <option value="7">資訊類共用科目-工作項目03：作業系統(10題)</option>
                <option value="8">資訊類共用科目-工作項目04：資訊運算思維(20題)</option>
                <option value="9">資訊類共用科目-工作項目05：資訊安全(40題)</option>
            </select><br>
            
            <input type="radio" name="by" value="bycommon" id="bycommon">共同科目: 
            <select class="input" name="common">
                <option value="1" selected>職業安全衛生(100題)</option>
                <option value="2">工作倫理與職業道德(100題)</option>
                <option value="3">環境保護(100題)</option>
                <option value="4">節能減碳(100題)</option>
            </select>
            
            <br>
            <div>
                <button class="btn btn-info btn-sm" type="button" id="getQue">載入題目</button>
                <!-- <button class="btn btn-warning btn-sm" onclick="">關閉視窗</button> -->
            </div>

        </form>
        </div>