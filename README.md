# 2022iji
網頁設計乙級學科答題練習系統2022

todo:
練習頁面的表格 用選擇範圍後獲得的queNum放入 顯示/隱藏所有解答的按鈕 
                                         解答(預設隱藏 
                                         和選擇相等時顯示) 
                                         你的選擇(獲取選項radio/checkbox) 
                                         題目 
                                         選項(radio/checkbox)
試前說明頁面
測驗頁面 練習差不多 但是多了現在時間 
                          剩餘時間
                          題號跳躍(連結#題號id)
                          提交評分按鈕
評分頁面


答題結果頁面 跟練習差不多但是要高亮正確答案 改變錯誤題目顏色
系統首頁外觀(可選)

   2023/2/14
   劉老師提到把選項從question資料表分離出去可以更好的簡化程式碼
   隨機陣列rand
    echo 題號$key+1
    echo 答案$opt['ans']
    echo 回答空格
    echo 題目$row['que']
    if(題目圖片存在){echo 圖片}
    
    for($i;$i<3;$i++){echo 選項$i 給編號rand[$i],if(選項圖片存在){echo 圖片}}

    獲取選項的值 遍歷已選選項陣列 有則移除 沒有則加入 然後陣列降序排列 轉成字串 


    哭阿