1. (1) 關聯式資料庫進行「第二正規化型式」(Second Normal Form, 2NF)可以
消除何種現象？ ①非候選鍵(Non-Candidate Key)的屬性，僅讓函數相依
(Functional Dependent)於主鍵(Primary Key)的一部分 ②非候選鍵的屬
性，函數相依於別的非候選鍵屬性 ③複合候選鍵的部分屬性，僅讓函數
相依於另一個候選鍵的一部分 ④屬性值不是單一值(Atomic) 。
2. (1) SQL 語法『SELECT COUNT(*) FROM Books』之意義為何？ ①資料表
Books 的記錄筆數 ②資料表 Books 的欄位數 ③資料表 Books 的資料平均
值 ④資料表 Books 的資料總和 。
3. (2) 欲完全刪除資料庫中的資料表 Books，其 SQL 語法為何？ ①
② ③
④ 。
4. (2) SQL 語法包含：(A)SELECT、(B)GROUP BY、(C)WHERE、(D)HAVIN
G、(E)ORDER BY、(F)FROM 等子句之正確順序為何？ ①AFCEBD ②A
FCBDE ③AFDEBC ④AFECBD 。
5. (3) 欲對資料庫刪除資料表 Books 中所有資料列，其 SQL 語法為何？ ①RE
MOVE FROM Books ②DROP FROM Books ③DELETE FROM Books ④
ALTER FROM Books 。
6. (4) SQL 語法 UPDATE 之正確寫法為何？ ①UPDATE bookname FROM Boo
ks WHERE id = 2 SET bookname ='哈利波特' ②UPDATE FROM Books
WHERE id = 2 SET bookname = '哈利波特' ③UPDATE Books WHERE id
= 2 SET bookname = '哈利波特' ④UPDATE Books SET bookname = '哈
利波特' WHERE id = 2 。
7. (3) 欲使用 SQL 語法『INSERT INTO TABLE Emp(Emp_no) VALUES (NUL
L)』將資料插入資料表 Emp 時發生錯誤，何者不是發生錯誤的原因？ ①
Emp_no 欄位是主要鍵值(Primary Key)或主要鍵值之一 ②Emp_no 是 NO
T NULL 欄位 ③Emp_no 是 DEFAULT 欄位 ④資料表 Emp 裡面無 Emp_n
o 欄位 。
8. (3) 某企業(Emp)有數十個部門(Dept_name)，每個部門有數百人，吳總經理
欲知道：「除了部門主管(Is_dept_manager)之外，平均薪資(Salary)在 5
0,000 元(含)以上的部門有那些？」，最能符合上述要求之 SQL 語法為
何？ ①SELECT Dept_name, AVG(Salary) FROM Emp WHERE Is_dept_
manager=TRUE AND SUM (Salary)>=50000 GROUP BY Dept_name ②SE
LECT Dept_name, AVG(Salary) FROM Emp WHERE Is_dept_manager=T
RUE GROUP BY Dept_name HAVING AVG(Salary)>=50000 ③SELECT
Dept_name, AVG(Salary) FROM Emp WHERE Is_dept_manager=FALSE
GROUP BY Dept_name HAVING AVG(Salary)>=50000 ④SELECT Dept_
name, AVG(Salary) FROM EMP WHERE Is_dept_manager=FALSE AND
AVG(Salary)>=50000 。
Page 18 of 58
9. (1) 資料表 Emp 之欄位屬性定義：Empid INTEGER、Name CHAR(20)、Dep
tno INTEGER、Sal INTEGER；欲表列「部門代號 20 及 50 的員工平均
薪資(Sal)在 22,000 元(含)以上」之部門代號(Deptno)，最能符合要求之 S
QL 語法為何？ ①SELECT Deptno, AVG(Sal) FROM Emp WHERE Deptn
o IN (20,50) GROUP BY Deptno HAVING AVG(Sal)>=22000 ②SELECT
Deptno, AVG(Sal) FROM Emp GROUP BY Deptno HAVING AVG(Sal)>=
22000 AND Deptno IN (20,50) ③SELECT Deptno, AVG(Sal) FROM Emp
WHERE Deptno IN (20,50) AND AVG(Sal)>=22000 GROUP BY Deptno
④SELECT Deptno, AVG(Sal) FROM Emp WHERE Deptno IN (20,50) GR
OUP BY AVG(Sal) HAVING AVG(Sal)>=22000 。
10. (3) 資料表 Staff 之欄位屬性定義：Id INTEGER、Name CHAR(20)、Dept IN
TEGER、Job CHAR(20)、Years INTEGER、 Salary DECIMAL(10, 2)、C
omm DECIMAL(10,2) ；欲表列「至少有一個員工的酬金(Comm)在 5,000
元以上」之部門編號及員工總數，最能符合要求之 SQL 語法為何？ ①S
ELECT Dept, COUNT(*) FROM Staff GROUP BY Dept HAVING Comm>
5000 ②SELECT Dept, COUNT(*) FROM Staff WHERE Comm>5000 GR
OUP BY Dept, Comm ③SELECT Dept, COUNT(*) FROM Staff GROUP
BY Dept HAVING MAX(Comm)>5000 ④SELECT Dept, Comm, COUNT(i
d) FROM Staff WHERE Comm>5000 GROUP BY Dept, Comm 。
11. (3) 可以免費使用的資料庫管理系統為何？ ①Oracle ②SQL Server ③Maria
DB ④DB2 。
12. (4) 有關 MariaDB 的敘述何者錯誤？ ①可以在許多平台上執行，包括 Linux
及 Windows ②簡單易學、彈性大、執行速度快是 MariaDB 的優點 ③使
用者可以隨時檢查 MariaDB 原始檔及修正錯誤 ④MariaDB 只能在預設的
DOS 模式下使用 。
13. (4) 不能執行 MariaDB 的作業平台為何？ ①Windows ②Unix ③Linux ④Goo
gle 。
14. (3) MariaDB 預設最高管理者(Super User)帳號為何？ ①localhost ②Adminis
trator ③root ④空白 。
15. (1) MariaDB 語法「SELECT GREATEST(34.0, 3.0, 5.0, 767.0);」，其執行
結果為何？ ①767.0 ②34.0 ③5.0 ④3.0 。
16. (1) MariaDB 語法「SELECT ISNULL(1+1);」，其執行結果為何？ ①0 ②1
③2 ④3 。
17. (4) 若 MariaDB 要啟動遞增備份(Incremental Backup)，需在主程式執行時加
上-log-bin 選項，並啟動何種功能方可執行遞增備份？ ①Program loggin
g ②Database logging ③Text logging ④Binary logging 。
18. (2) MariaDB 語法「SELECT * INTO inst_X ‘file_A’ FROM table_B;」可
將 table_B 備份到 file_A，則語法中「inst_X」為何？ ①INFILE ②OUT
FILE ③REPLACE ④IGNORE 。
Page 19 of 58
19. (1) MariaDB 語法「LOAD DATA inst_X1 ‘file_A’ inst_X2 INTO TABLE
table_B;」可從 file_A 回復 table_B 且覆蓋重複的部分，則語法中「inst_
X1」及「inst_X2」分別為何？ ①INFILE、REPLACE ②INFILE、IGNO
RE ③OUTFILE、REPLACE ④OUTFILE、IGNORE 。
20. (3) MariaDB 語法中某些字串中的字元(如：單引號、雙引號)有特殊含意，
需另加跳脫符號來表示，則 MariaDB 的跳脫符號為何？ ①_ ②/ ③\ ④|
。
21. (3) Transact-SQL 語法「SELECT COALESCE(NULL, 2, NULL, 3);」，其執
行結果為何？ ①NULL ②1 ③2 ④3 。
22. (2) 在 Windows 作業環境中，MariaDB 預設的組態檔為何？ ①my.cnf ②my.
ini ③config.inc ④web.config 。
23. (1) 在 Unix 作業環境中，MariaDB 預設的組態檔為何？ ①my.cnf ②my.ini
③config.inc ④web.config 。
24. (3) 若要指定 MariaDB 組態檔的路徑及檔名，其參數為何？ ①config-file ②
setting-file ③defaults-file ④install-file 。
25. (4) 若要設定 MariaDB 的埠號，其參數為何？ ①basedir ②datadir ③defaultcharacter-set ④port 。
26. (1) 若要設定 MariaDB 的主目錄，其參數為何？ ①basedir ②maindir ③defa
ultdir ④rootdir 。
27. (4) MariaDB 語法中要刪除檢視表，其指令為何？ ①ERASE VIEW ②DELE
TE VIEW ③CANCEL VIEW ④DROP VIEW 。
28. (2) MariaDB 10.4 預設的儲存引擎為何？ ①MyISAM ②InnoDB ③Memory
④Merge 。
29. (2) 建立 MariaDB 資料表的語法
用以指定儲存引擎，則語法中「para_X」為何？ ①STORAGE ②ENGIN
E ③ORDER ④WHERE 。
30. (2) 常被用於交易處理(Transaction Processing)，並支援 ACID (Atomicity, C
onsistency, Isolation, Durability) 交易特性及外部索引鍵的 MariaDB 儲存
引擎為何？ ①MyISAM ②InnoDB ③Memory ④Merge 。
31. (1) Transact-SQL 語法中，支援資料新增、刪除、修改及查詢功能的語言為
何？ ①DML ②DCL ③DSL ④DDL 。
32. (3) 結構化查詢語言(Structure Query Language)共區分為三大類，不包括那
一類？ ①DML ②DCL ③DSL ④DDL 。
33. (4) 有關 PHP 的敘述何者有誤？ ①提供伺服器端(Server-Side)描述方式的操
作模式 ②提供命令列的操作模式，故可在作業系統下直接執行 ③提供使
用者端的應用程式，故可設計 GUI 的應用程式 ④提供操作模式屬於輸入
模式 。
34. (2) 有關 PHP 的敘述何者有誤？ ①在 Apache、MS IIS 等 Web 伺服器執行的
Script ②只能在 Linux 或 Unix 作業系統上執行，無法於 Windows 或 Mac
Page 20 of 58
OS 上執行 ③支援動態資料庫網頁 ④具有免費、穩定、快速、跨平台、
物件導向等優點 。
35. (3) 何者不是 PHP 的保留字？ ①const ②for ③my ④break 。
36. (2) phpMyAdmin 的功用為何？ ①資料庫系統 ②MariaDB 資料庫的管理軟體
③用來撰寫 PHP 程式的軟體 ④管理 PHP 權限的軟體 。
37. (4) 在 Windows 系統中執行 Apache Restart 服務，其意義為何？ ①停止 Apa
che Server ②啟動 Apache Server ③暫停 Apache Server ④重新啟動 Apac
he Server 。
38. (2) 在 Windows 系統中執行 Apache Start 服務，其意義為何？ ①停止 Apach
e Server ②啟動 Apache Server ③暫停 Apache Server ④重新啟動 Apache
Server 。
39. (3) PHP 對兩個布林運算式進行 OR 運算，其運算子為何？ ①&& ②! ③∥
④^ 。
40. (1) PHP 運算子中，優先順序最高為何？ ①++ ②&& ③>> ④+ 。
41. (1) 何者非 PHP 迴圈控制指令？ ①loop ②while ③do while ④for 。
42. (4) 建立 PHP 函數的關鍵字為何？ ①func ②sub ③define ④function 。
43. (1) PHP 中直接輸出一個圖檔到網頁，其所傳送的 Header 何者正確？ ①
②
③
④
。
44. (4) 用來製作縮圖的 PHP 影像處理函式為何？ ①imagefill() ②imagecreatefr
ompng() ③imagecharup() ④imagecopyresized() 。
45. (1) 避免 MariaDB 查詢時出現中文字亂碼問題，所使用的 PHP 指令為何？
① ②
③
④
。
46. (2) MariaDB 發生錯誤時，取回錯誤代碼的 PHP 函數為何？ ①mysql_error()
②mysql_errno() ③mysql_get_error() ④mysql_report() 。
47. (2) 取得資料表記錄數的 PHP 函數為何？ ①mysql_fetch_rows() ②mysql_nu
m_rows() ③mysql_fetch_fields() ④mysql_num_fields() 。
48. (4) 移動索引指標工作的 PHP 函數為何？ ①mysql_query() ②mysql_result()
③mysql_fetch_row() ④mysql_data_seek() 。
49. (2) 關閉資料庫連結的 PHP 函數為何？ ①mysql_connect() ②mysql_close()
③mysql_query() ④mysql_select_db() 。
50. (1) 與 MariaDB 建立資料庫連結的 PHP 函數為何？ ①mysql_connect() ②my
sql_close() ③mysql_query() ④mysql_select_db() 。
Page 21 of 58
51. (2) 何種 PHP 函數可刪除資料夾中的文件？ ①file_remove ②unlink ③del_e
xists ④rm 。
52. (4) 傳送附檔郵件資料使用的 PHP 編碼函數為何？ ①mail() ②md5() ③chuc
k_split() ④base64_encode() 。
53. (3) 取得目前工作資料夾的 PHP 函數為何？ ①mrdor() ②cd() ③getcwd() ④c
hdir() 。
54. (1) PHP 程式中 fopen()函數開啟唯讀檔案模式的參數為何？ ①r ②a ③w ④b
。
55. (2) PHP 程式中 fopen()函數開啟在檔尾新增資料檔案模式的參數為何？ ①r
②a ③w ④b 。
56. (3) 取得 Session 資料變數的 PHP 指令為何？ ①$GLOBALS ②$_SERVER
③$_SESSION ④$_COOKIE 。
57. (1) 在 PHP 程式中新增 Cookie 資料內容時，expire 參數的單位為何？ ①sec
(秒) ②min(分) ③msec(毫秒) ④day(天) 。
58. (2) PHP 新增 Cookie 時使用的內建函數為何？ ①getcookie() ②setcookie()
③addcookie() ④creatcookie() 。
59. (4) PHP 程式中，除了$_COOKIE 外，還可存取 Cookie 內容資料者為何？
①$_SESSION ②$_COOKIE ③$GETCOOKIE ④$HTTP_COOKIE_VARS
[] 。
60. (1) Cookie 變數的儲放位置為何？ ①Client Side ②Server Side ③ISP ④Prox
y 。
61. (1) 色彩的三屬性是依據光波何種特性來區別色相？ ①波長之長短 ②反射率
之高低 ③振幅之高低差 ④折射率之高低 。
62. (2) 色彩的三屬性中，何者是依據光波反射率之高低區別色彩？ ①色相 ②明
度 ③彩度 ④色系 。
63. (3) 色彩的三屬性中，何者是依據光波本身振幅之高低差區別色彩？ ①色相
②明度 ③彩度 ④色系 。
64. (1) 色彩學中常用的專有名詞 Hue 所指為何？ ①色相 ②明度 ③彩度 ④色調
。
65. (3) 色彩學中常用的專有名詞 Chroma 所指為何？ ①色相 ②明度 ③彩度 ④
色立體 。
66. (2) 色彩學中常用的專有名詞 Value 所指為何？ ①彩度 ②明度 ③色相 ④色
立體 。
67. (3) 運用 RGB 色光調色時，紅色加藍色結果為何？ ①綠色 ②咖啡色 ③洋紅
色 ④黃色 。
68. (3) RGB 色光中藍色的補色為何？ ①青色 ②洋紅色 ③黃色 ④橙色 。
69. (1) RGB 色光中紅色的補色為何？ ①青色 ②洋紅色 ③黃色 ④橙色 。
Page 22 of 58
70. (2) 色彩調色時，依純白及純黑兩色不同比例配出不同程度的灰階顏色，此
種配色方式依據的屬性為何？ ①色相 ②明度 ③彩度 ④對比 。
71. (2) 運用前進色與後退色之配色技巧，使版面產生立體感，那一個敘述較不
恰當？ ①明度高的色彩較有前進感 ②寒色色彩較有前進感 ③紅色色系
較有前進感 ④在黑色背景中，黃色與青色並列時，黃色會感覺較前面 。
72. (2) 影像處理軟體中，要提高黑白圖片的對比，需調整圖片之何種數值？ ①
亮度 ②反差 ③彩度 ④色相 。
73. (3) 影像處理軟體中，影像圖檔的色彩表示有 RGB 及 CMYK 色系，其中 CM
YK 的「C」表示為何？ ①黑色 ②黃色 ③青色 ④洋紅色 。
74. (4) 影像處理軟體中，影像圖檔的色彩表示有 RGB 及 CMYK 色系，其中 CM
YK 的「M」表示為何？ ①黑色 ②黃色 ③青色 ④洋紅色 。
75. (2) 兩個相同的禮盒，分別用鮮黃色及暗綠色包裝紙包裝，感覺上用鮮黃色
紙包裝的禮盒較輕，其主要是因為色彩的那一個屬性不同所呈現的結
果？ ①彩度 ②明度 ③色相 ④濃度 。
76. (2) 影響色彩輕重感覺最主要的屬性為何？ ①色相 ②明度 ③彩度 ④濃度 。
77. (3) 影像處理軟體中，運用色彩選擇工具取得 RGB 值為(128,128,128)，其顯
示的顏色為何？ ①淡藍色 ②淡黃色 ③灰色 ④淡紅色 。
78. (2) 搭配明視度最高之色彩為何？ ①綠底黃字 ②黑底黃字 ③紅底橙字 ④黃
底白字 。
79. (1) 明度最高之純色為何？ ①黃色 ②橙色 ③紅色 ④藍色 。
80. (4) 明度最低之純色為何？ ①黃色 ②橙色 ③紅色 ④藍色 。
81. (2) 會讓人有輕快感覺之色彩為何？ ①棗紅色 ②明黃色 ③墨綠色 ④藏青色
。
82. (3) 會讓人有較沉重感覺之色彩為何？ ①天藍色 ②翠綠色 ③藏青色 ④粉紅
色 。
83. (2) 平面上兩條粗細不同、長度相等的線，其視覺效果為何？ ①粗線感覺較
長 ②細線感覺較長 ③一樣長 ④不一定 。
84. (1) 平面上有兩個相等的圓，分別被大小不同的圓包圍時，其大圓內的圓視
覺效果為何？ ①較小 ②較大 ③一樣 ④變形 。
85. (1) 設計美學中，何者不是線的特質？ ①體積 ②粗細 ③方向 ④角度 。
86. (2) 設計美學中，自由曲線在視覺上通常具有何種感覺？ ①工整 ②活潑 ③
單調 ④刻板 。
87. (3) 設計美學中，斜角方向的線較會引起何種心理效果？ ①權威 ②靜寂 ③
動態 ④呆板 。
88. (4) 設計原理中，點置於何處最穩定且具有放射的力量？ ①上方 ②下方 ③
左方 ④中央 。
89. (4) 設計美學中，「萬綠叢中一點紅」及「鶴立雞群」是何種表現？ ①比例
②調合 ③平衡 ④對比 。
Page 23 of 58
90. (4) 在美的形式原理中，對稱不具何種特性？ ①上下 ②旋轉 ③放射 ④律動
。
91. (2) CSS 語法定義新的 class 樣式名稱，其前面須加上何種符號？ ①& ②.
③？ ④# 。
92. (3) CSS 語法「mycss: hover{color: #0000FF;}」表示該超連結文字做何種操
作會讓超連結文字變成藍色？ ①滑鼠左鍵按下且未放開時 ②滑鼠游標離
開時 ③滑鼠游標移到該連結上 ④滑鼠游標點選連結後 。
93. (1) 何種 CSS 語法可設定字體顏色的屬性？ ①color ②text-color ③font-colo
r ④foreground-color 。
94. (2) CSS 屬性何者可設定英文字首為大寫？ ①text-indent: capitalize; ②text-t
ransform: capitalize; ③text-decoration: capitalize; ④CSS 無法做到 。
95. (1) CSS 區塊模型(Box Model)是用來描述一個方型元素的結構，何種屬性不
包含在區塊模型中？ ①size ②margin ③padding ④border 。
96. (4) 何者不是 HTML 5 文件內加入 CSS 的方法？ ①Embedded Style Sheet ②
Imported Style Sheet ③Linked Style Sheet ④Browser's Own Style Sheet
。
97. (1) HTML 5 文件內加入 CSS，何種樣式被套用的順序最優先？ ①Inline Styl
e ②Embedded Style Sheet ③Linked Style Sheet ④Imported Style Sheet
。
98. (3) 關於 CSS 之敘述何者正確？ ①Embedded Style Sheet 是將 CSS 程式碼與
HTML 程式碼合併寫在一起 ②Inline Style 是將 CSS 程式碼寫在
標籤內 ③Linked Style Sheet 是透過 標籤告知
瀏覽器去載入一個外部連結的樣式檔 ④Imported Style Sheet 是當 HTML
文件內的標籤需要格式設定時，瀏覽器才會向所指定的樣式檔載入樣式
。
99. (2) 何種 CSS 語法可使網頁捲動時，背景圖案會跟著移動？ ①{backgroundattachment: move;} ②{background-attachment: scroll;} ③{background-i
mage: scroll;} ④{background-repeat: repeat;} 。
100. (3) 何種 CSS 語法屬性可設定樣式表之內容與邊框的留白範圍？ ①margin
②border ③padding ④blank 。
101. (2) 何種 CSS 語法屬性可設定樣式表的邊界？ ①border ②margin ③padding
④form 。
102. (4) 一數位影像檔，影像尺寸 6×4 英吋，解析度為 150ppi，則其像素矩陣為
多少像素？ ①6×4 ②24×150 ③640×480 ④900×600 。
103. (1) Photoshop 中使用矩形或圓形選取工具拖曳選取區域時，搭配鍵盤中的那
一個按鍵可繪出[正方形]或[正圓形]的選取區域？ ①Shift ②Alt ③Space
④Ctrl 。
104. (4) Photoshop 中使用那一種工具能自動消除照片中的紅眼狀況？ ①修復筆
刷工具 ②汙點修復筆刷工具 ③濾鏡工具 ④紅眼工具 。
Page 24 of 58
105. (2) Photoshop 中欲將一個原先用於印刷用途的影像檔案(規格：影像尺寸 3 x
3 英吋，解析度 350ppi)，在尺寸不變的條件下，改為網頁展示用，何種
的操作較適當？ ①將解析度改為 72ppi 時，且影像不重新取樣 ②將解析
度改為 72ppi 時，且影像重新取樣 ③將解析度改為 350ppi 時，且影像重
新取樣 ④將解析度改為 350ppi 時，且影像不重新取樣 。
106. (2) Photoshop 文字排版的相關名詞中，關於「均線(Mean Line)」的敘述何
者較適當？ ①介於基線(Base Line)與下降線(Descender Line)之間 ②代
表小寫字母高度的線 ③安放所有字元的基準線 ④代表大寫字母高度的線
。
107. (4) Photoshop 中使用何種濾鏡，能使數位照片產生具有速度感的效果？ ①
靜態模糊 ②邊緣模糊 ③鏡頭模糊 ④動態模糊 。
108. (3) 調整 Photoshop「色階」面板中的影像色階時，若要調整為最亮的階調應
該選擇下列何者數值？ ①0 ②10 ③255 ④256 。
109. (4) Photoshop 預設環境中數位影像的變形操作時，若要執行旋轉動作，進行
操作時按著 shift 鍵，每次旋轉增量(Step)為多少度？ ①90 ②45 ③30 ④
15 。
110. (2) Photoshop 中針對所選取的影像區域操作傾斜變形效果，使用滑鼠拖拉邊
界方框中間的控制點時，需按住那個鍵盤按鍵方可進行水平或垂直傾斜
變形？ ①Alt ②Shift ③Ctrl ④Tab 。
111. (4) Photoshop 關於濾鏡功能之敘述何者較適當？ ①濾鏡不可多重套用 ②所
有濾鏡皆能用在 CMYK 色彩模式的檔案中 ③所有濾鏡皆能用在[點陣圖]
或[索引色]的色彩模式檔案中 ④LAB 色彩模式(8 或 16 位元/色板)的檔案
中只支援部分濾鏡 。
112. (3) Photoshop 用來編輯網頁用的圖片，何種條件(影像解析度、色彩模式、
檔案格式)的組合最適合？ ①350ppi、CMYK、EPS ②72ppi、RGB、EPS
③72ppi、RGB、JPEG ④350ppi、CMYK、JPEG 。
113. (1) Photoshop 中欲將圖片的色彩模式由[RGB]轉換成[雙色調]的步驟何者較
為適當？ ①先轉成[灰階]，再轉成[雙色調] ②直接將[RGB]轉成[雙色調]
③先轉成[LAB]，再轉成[雙色調] ④先轉成[CMYK]，再轉成[雙色調]
。
114. (3) Photoshop 中一個 8 位元的灰階檔案，最多可以包含多少色階？ ①8 ②2
52 ③256 ④65536 。
115. (3) Photoshop 中何者為最常使用在印刷用途的色彩模式？ ①RGB ②LAB ③
CMYK ④索引色 。
116. (3) Photoshop 中何者不是進行 Color Correction(色彩修正與調整)時所用的
術語？ ①Saturation ②Chroma ③Alignment ④Tone 。
117. (4) Photoshop 中製作一個包含去背的透明背景及陰影效果的網頁圖片，且要
保留 Alpha 透明度，應該選擇何種檔案儲存格式？ ①GIF ②JPEG ③PN
G-8 ④PNG-24 。
Page 25 of 58
118. (3) Photoshop 預設環境中使用圖層遮色片，其遮色片內使用黑色與白色各代
表何種意義？ ①黑色顯示影像，白色隱藏影像 ②黑色羽化影像，白色反
白顯示影像 ③黑色隱藏影像，白色顯示影像 ④黑色反轉影像，白色顯示
影像 。
119. (1) Photoshop 製作使用於網頁上包含簡單線條的圖案且具有交錯式效果的圖
檔，儲存何種影像格式較適當？ ①GIF ②PDF ③TIFF ④JPEG 。
120. (2) 「網頁安全色」在 Internet Explorer 能正常顯示的顏色，其顏色數為多
少？ ①108 ②216 ③256 ④512 。
121. (3) PHP 用何種符號加上變數名稱來表示變數？ ①# ②& ③$ ④% 。
122. (2) PHP 用何種保留字來宣告常數？ ①set ②define ③var ④array 。
123. (4) 要宣告一個物件前，PHP 用那個關鍵字來定義該物件的類別？ ①set ②d
efine ③use ④class 。
124. (1) PHP 使用何種函數可將變數的資料型態轉換成整數？ ①intval ②floatval
③doubleval ④strval 。
125. (2) PHP 使用何種函數可將變數的資料型態轉換成浮點數？ ①intval ②floatv
al ③conval ④strval 。
126. (2) PHP 使用何種語法來輸出字串在網頁上？ ①type ②print ③string ④sho
w 。
127. (1) 若要顯示 2 進位的整數，可使用 PHP 的那個格式字元？ ①%b ②%c ③%
d ④%u 。
128. (2) 若要顯示字元，可使用 PHP 的那個格式字元？ ①%b ②%c ③%d ④%u
。
129. (3) 若要顯示有正負號的整數，可使用 PHP 的那個格式字元？ ①%b ②%c
③%d ④%u 。
130. (4) 若要顯示無正負號的整數，可使用 PHP 的那個格式字元？ ①%b ②%c
③%d ④%u 。
131. (1) 若要顯示浮點數，可使用 PHP 的那個格式字元？ ①%f ②%o ③%s ④%x
。
132. (2) 若要顯示 8 進位的整數，可使用 PHP 的那個格式字元？ ①%f ②%o ③%
s ④%x 。
133. (3) 若要顯示字串，可使用 PHP 的那個格式字元？ ①%f ②%o ③%s ④%x
。
134. (4) 若要顯示小寫的 16 進位整數，可使用 PHP 的那個格式字元？ ①%f ②%
o ③%s ④%x 。
135. (1) 若要顯示大寫的 16 進位整數，可使用 PHP 的那個格式字元？ ①%X ②
%H ③%h ④%x 。
136. (4) 何者陳述式不是 PHP 的條件控制語法？ ①if ②?: ③switch ④continue 。
Page 26 of 58
137. (1) 何者陳述式不是 PHP 的迴圈控制語法？ ①if…elseif…else ②break ③for
④do…while 。
138. (1) 可檢視陣列內容的 PHP 函數為何？ ①var_dump ②is_arrary ③sizeof ④i
s_array 。
139. (2) PHP 檢視陣列的函數何者可以顯示變數的內容？ ①is_arrary ②print_r ③
sizeof ④is_array 。
140. (3) PHP 檢視陣列的函數何者可以計算陣列的元素數目？ ①var_dump ②prin
t_r ③sizeof ④is_array 。
141. (4) PHP 檢視陣列的函數何者可以檢查指定的變數是否是陣列？ ①var_dump
②print_r ③sizeof ④is_array 。
142. (1) PHP 檢視陣列的函數何者可以指定陣列的元素給變數？ ①list ②isset($ar
rary[$key]) ③arrary_key_exists ④in_arrary 。
143. (2) PHP 檢視陣列的函數何者可以檢查指定的陣列鍵值是否為 ？ ①list
②isset($arrary[$key]) ③arrary_key_exists ④in_arrary 。
144. (3) PHP 檢視陣列的函數何者可以檢查指定的鍵值是否存在於陣列中？ ①lis
t ②isset($arrary[$key]) ③arrary_key_exists ④in_arrary 。
145. (4) PHP 檢視陣列的函數何者可以檢查指定的數值是否存在於陣列中？ ①lis
t ②isset($arrary[$key]) ③arrary_key_exists ④in_arrary 。
146. (1) ASP.NET 應用程式位於網站伺服器內的一個虛擬目錄中，並由一群檔
案、網頁、處理常式、模組與可執行碼所組成，何者為包含所有 ASP.NE
T 應用程式要使用的編譯過的.NET 組件(DLL 檔案)？ ①Bin ②App_Code
③App_data ④App_Themes 。
147. (2) ASP.NET 應用程式位於網站伺服器內的一個虛擬目錄中，並由一群檔
案、網頁、處理常式、模組與可執行碼所組成，何者為包含要使用在設
計者的應用程式內之動態編譯過的程式碼？ ①Bin ②App_Code ③App_d
ata ④App_Themes 。
148. (3) ASP.NET 應用程式位於網站伺服器內的一個虛擬目錄中，並由一群檔
案、網頁、處理常式、模組與可執行碼所組成，何者用來放置資料庫與
XML 等資料檔案？ ①Bin ②App_Code ③App_data ④App_Themes 。
149. (4) ASP.NET 應用程式位於網站伺服器內的一個虛擬目錄中，並由一群檔
案、網頁、處理常式、模組與可執行碼所組成，何者用來放置 ASP.NET
應用程式使用的佈景檔案？ ①Bin ②App_Code ③App_data ④App_Them
es 。
150. (1) ASP.NET 網頁的指示詞(Directive)來控制 ASP.NET 網頁的行為，何者為
其指示詞？ ①以 符號開頭，以 結尾 ②以 符號開頭，以
結尾 ③以 符號開頭，以 結尾 ④以 符號開頭，以
結尾 。
151. (1) ASP.NET 的指示詞(Directive)何者定義剖析器及編輯器使用的專用屬
性？ ①@Page ②@Control ③@Import ④@OutputCache 。
Page 27 of 58
152. (2) ASP.NET 的指示詞(Directive)何者定義使用者控制項(.ascx 檔案)的特定
屬性以供剖析器及編輯器使用？ ①@Page ②@Control ③@Import ④@O
utputCache 。
153. (3) ASP.NET 的指示詞(Directive)何者可將命名空間(Namespace)明確匯入至
ASP.NET 應用程式的檔案，能在檔案中使用該命名空間的所有類別及介
面？ ①@Page ②@Control ③@Import ④@OutputCache 。
154. (4) ASP.NET 的指示詞(Directive)何種宣告方式用來控制網頁中含 ASP.NET
Web 或使用者控制項的輸出快取原則？ ①@Page ②@Control ③@Import
④@OutputCache 。
155. (1) PHP 使用何種運算子可將字串連結？ ①﹒ ②＋ ③－ ④＆ 。
156. (4) PHP 程式 其輸出為何？ ①Hello+
World ②Hello World ③HelloWorld ④0 。
157. (2) PHP 程式 其輸出為何？ ①
② ③\escaped character\ ④
escaped character 。
158. (3) PHP 程式 其輸出為何？ ①strlen($a) ②abcd
efg ③7 ④ 。
159. (2) 何種實體網路拓樸最有可能因網路交換器(Switch Hub)故障，導致整個網
路當掉？ ①Bus ②Star ③Ring ④Mesh 。
160. (3) 要從有線的 LAN(Local Area Network)轉換成無線的乙太網路 LAN，網
路上的每台主機必須改變何者？ ①不需要作任何改變 ②每台主機將需要
新的 IP 位址 ③每台主機將需要適當的網路介面卡或轉接器 ④每台主機
將需要升級作業系統 。
161. (3) 企業要延伸 LAN(Local Area Network)到 6 個分開的建築物，為了要減少
LAN 媒體上的訊號衰減量，在建築物間使用何種傳遞媒體為最適當？ ①
Wireless ②Coaxial Cable ③Fiber ④Twisted Pair 。
162. (2) 使用者抱怨網路反應時間不佳，何種設備可用來取代集線器，且能立即
改善反應時間？ ①Router ②Switch ③Bridge ④Repeater 。
163. (4) 網路介面卡 NIC(Network Interface Card)上的 MAC 位址（Media Access
Control Address）是屬於 OSI 模式的那一層？ ①Physical ②Application
③Network ④Data Link 。
164. (3) 橋接器(Bridge)使用何種位址來作過濾和交換的決定？ ①來源 MAC 位址
(Source MAC) ②來源 IP 位址(Source IP) ③目的地 MAC 位址(Destinatio
n MAC) ④網路 IP 位址(Network IP Address) 。
165. (1) 何者可使不同的網路供應商設計的軟硬體更容易整合？ ①OSI 模式(OSI
Model) ②IP 定址策略(IP Addressing Scheme) ③標準邏輯拓樸(Standard
Logical Topology) ④標準實體拓樸(Standard Physical Topology) 。
Page 28 of 58
166. (4) 資料由應用層往實體層的協定堆疊中往下送，經過每一層均會將該層的
資訊加入原資料前(後)，然後再往下傳送，此種過程稱之為何？ ①Divisi
on ②Encoding ③Segmentation ④Encapsulation 。
167. (3) OSI 七層架構中，傳輸層的資料單元稱之為何？ ①Bit ②Packet ③Segme
nt ④Frame 。
168. (4) OSI 七層架構中，提供網路服務來處理電子郵件和檔案傳輸為何層？ ①
Data Link ②Transport ③Network ④Application 。
169. (4) 當資訊設備傳送訊息時包括：(A)區段、(B)位元、(C)封包、(D)資料、
(E)訊框，資料封裝之順序為何？ ①B-D-C-E-A ②B-A-C-E-D ③D-C-A-B
-E ④D-A-C-E-B 。
170. (1) OSI 七層架構中，實體層(Physical Layer)功能的最佳描述為何？ ①定義
終端系統間鏈路的電氣和功能規格 ②提供經實體鏈路的可靠的料傳送 ③
提供兩終端系統間的連接性和路徑選擇 ④處理實體位址、網路拓樸和媒
體存取 。
171. (3) MAC 位址（Media Access Control Address）有多少十六進位數？ ①2 ②
8 ③12 ④16 。
172. (2) MAC 位址（Media Access Control Address）屬於 OSI 七層中的那一層？
①1 ②2 ③3 ④4 。
173. (2) 路由器具有乙太網路、記號環、串列和 ISDN 等介面，那些介面會有 MA
C 位址（Media Access Control Address）？ ①串列和 ISDN 介面 ②乙太
網路和記號環介面 ③乙太網路和 ISDN 介面 ④記號環和串列介面 。
174. (4) 乙太網路之介面卡 NIC(Network Interface Card)可以傳送資料的時機為
何？ ①收到訊框時 ②收到一個記號時 ③偵測到碰撞時 ④偵測無線上訊
號時 。
175. (1) OSI 七層架構中，何者屬於實體層的網路設備？ ①Repeater ②Switch ③
Bridge ④Router 。
176. (2) 何者屬於區域網路(Local Area Network, LAN)？ ①連接廣大地理區域用
戶的網路 ②連結地理上有限區域內的工作站、終端機和其他設備的網路
③連接跨國企業各部門的網路 ④用工作群組的設定來連接設備的網路 。
177. (3) 電腦的 MAC 位址（Media Access Control Address）何時會改變？ ①移
動橋接器 ②變更網路介面卡的 PCI 匯流排位置 ③更換網路介面卡 ④網
路介面卡速度自動由 10 Mbps 切換至 100 Mbps 。
178. (4) OSI 七層架構中，傳輸層(Transport Layer)的主要功能為何？ ①Network
Media ②Representation and Encoding ③Selects Paths ④End-to-End Con
nectivity 。
179. (1) IP 位址 127.0.0.1 之敘述何者最正確？ ①保留當作迴路(Loopback)測試
②保留當作多點傳輸群組(Multicast Group)測試 ③保留當作單點傳輸(Un
icast)測試 ④屬於 B 級位址範圍 。
Page 29 of 58
180. (4) 網路中 DHCP 伺服器的功能為何？ ①解析 MAC 位址成 IP 位址 ②解析 I
P 位址成 MAC 位址 ③解析主機名稱成 IP 位址 ④動態指派 IP 位址給主
機 。
181. (1) TCP/IP 模式中，那一分層同時支援 LAN(Local Area Network)及 WAN(W
ide Area Network)的技術？ ①Network Access Layer ②Internet Layer ③
Transport Layer ④Application Layer 。
182. (4) 交換器和路由器使用何者作為轉送的依據？ ①交換器和路由器兩者使用
IP 位址 ②交換器和路由器兩者使用 MAC 位址 ③交換器使用 IP 位址，
路由器使用 MAC 位址 ④交換器使用 MAC 位址，路由器使用 IP 位址 。
183. (1) FTP 提供可靠的連結導向服務來傳送檔案，當使用 FTP 服務時，那個傳
輸層協定被用來做資料傳送？ ①TCP ②DNS ③IP ④UDP 。
184. (2) OSI 模式中，那個應用層協定允許網路設備交換管理資訊？ ①SMTP ②S
NMP ③FTP ④TFTP 。
185. (4) 何種協定被用來在電腦間傳送檔案，但被視為無連結導向(Connectionles
s)？ ①DHCP ②SNMP ③FTP ④TFTP 。
186. (4) OSI 模式中，何層能提供主機間可靠的連結導向服務進行資料傳輸？ ①
Application Layer ②Presentation Layer ③Session Layer ④Transport Lay
er 。
187. (3) 何種設備會在乙太網路內產生多個碰撞領域(Multiple Collision Domain
s)？ ①NIC ②Hub ③Router ④Repeater 。
188. (4) 若橋接器(Bridge)收到一個 MAC 位址不在橋接表內的訊框(Frame)，會對
訊框進行何種處理？ ①丟棄 ②忽略 ③傳送訊框到適當的埠 ④傳送訊框
到來源埠之外的所有的埠 。
189. (3) 何種網路設備會同時減少碰撞領域和廣播領域的大小？ ①Layer 2 Switc
h ②Hub ③Bridge ④Repeater 。
190. (4) 何種無線網路標準運作在頻率範圍 5 GHz 左右，且最高資料傳送率可達
866.7Mbps？ ①802.11a ②802.11g ③802.11n ④802.11ac 。
191. (4) 路由程序(Routing Process)的主要目的為何？ ①傳遞廣播訊息 ②對應 IP
位址成 MAC 位址 ③對應 MAC 位址成 IP 位址 ④繞送一個網路或子網路
到另一個的路徑 。
192. (1) 那個設備因不會轉送廣播而提高網路安全性？ ①Router ②Bridge ③Hub
④Repeater 。
193. (3) POP3 是設定網路連線時的何種伺服器？ ①檔案伺服器 ②網站伺服器 ③
收信伺服器 ④寄信伺服器 。
194. (4) SMTP 是設定網路連線時的何種伺服器？ ①檔案伺服器 ②網站伺服器
③收信伺服器 ④寄信伺服器 。
195. (2) 何者是「檔案傳送」所使用的通訊協定？ ①HTTP ②FTP ③ISP ④MAIL
TO 。
Page 30 of 58
196. (2) 何者是電子郵件「內收郵件」所使用的通訊協定？ ①FTP ②POP ③SMT
P ④IPX 。
197. (3) 何者是電子郵件「外寄郵件」所使用的通訊協定？ ①FTP ②POP ③SMT
P ④IMAP 。
198. (2) 在 OSI 七層協定中「網路硬體協定」，屬於那一層？ ①網路層 ②實體
層 ③應用層 ④傳輸層 。
199. (2) 在 OSI 七層協定中定義終端設備與網路間使用的介面，屬於那一層？ ①
網路層 ②實體層 ③應用層 ④傳輸層 。
200. (2) 那個 FTP 指令可以用來查看遠端 FTP 伺服器目前所在目錄之位置？ ①g
et ②pwd ③put ④bin 。
201. (2) 若要在自己設計的網頁中，將文字「故宮博物館」設定連結到故宮博物
館網站，應該使用下列那種功能來設定？ ①框架超連結 ②網站超連結
③跑馬燈 ④影像地圖 。
202. (2) 在利用「HTML 語言」撰寫網頁時，若撰寫此行＜TITLE＞勞動部的網
站＜/TITLE＞的語法，則「勞動部的網站」將會被顯示在何處？ ①瀏覽
視窗 ②瀏覽器的標題列或標籤頁 ③在這份文件內容的最上面 ④狀態列
。
203. (4) 在設計網頁時，可以利用那一種網頁製作方法，將網頁畫面分割成多個
區塊來顯示網頁？ ①佈景主題 ②超連結 ③DHTML 動態效果 ④HTML
區塊標籤 。
204. (2) HTML(Hyper Text Markup Language)標準是由那一個單位制定的？ ①IE
EE ②W3C ③ISO ④EIA 。
205. (4) 在 HTML 標籤語法中，那一種標籤可以在瀏覽器的標題列上加入標題列
文字？ ① ② ③
④ 。
206. (2) Internet 上常用 DNS(Domain Name System)的預設通訊埠號為何？ ①110
②53 ③21 ④25 。
207. (3) 目前 TCP 協定之 Well-Known Port 最大分布範圍為何？ ①0～127 ②0～
255 ③0～1023 ④0～2047 。
208. (3) 何種標準網路設備可連接 192.168.1.0 與 192.168.2.0 的 IP 網路？ ①Hub
②Bridge ③Router ④Repeater 。
209. (4) OSI 七層協定之第三層通訊協定為何？ ①Transport ②Data Link ③Physi
cal ④Network 。
210. (1) 何種聲音檔案格式最不利於網路傳輸速度的考量？ ①WAV ②MIDI ③M
P3 ④WMA 。
211. (3) 何者是動態圖形的副檔名？ ①.cgm ②.bmp ③.gif ④.jpg 。
212. (4) 何者可檢視目前電腦上的資源被網路其他 Users 使用的狀況？ ①網路安
裝精靈 ②遠端桌面連線 ③超級終端機 ④網路監控程式 。
Page 31 of 58
213. (3) 何種 FTP 指令可將本地端機器的檔案傳輸至遠端 FTP 伺服器上？ ①get
②pwd ③put ④bin 。
214. (2) 網路日誌又稱為「部落格（Blog）」，何者無法用來架設個人網路日
誌？ ①Wix ②WordPad ③WordPress ④Weebly 。
215. (2) 將 Class C 網路以網路遮罩 255.255.255.192 切割成子網路，可劃分為幾
個網路區段？ ①2 ②4 ③8 ④16 。
216. (4) 運用何種方式可以節省網頁設計所佔的空間？ ①將網頁分類 ②使用動態
GIF 檔案 ③將圖片排序 ④降低圖片的大小及解析度 。
217. (3) 何種視訊檔案格式最不適合使用於網頁上？ ①MP4 ②WebM ③VOB ④O
gg 。
218. (2) 定義網頁資料顯示、格式化、特殊效果的標準稱之為何？ ①SCC ②CSS
③SSC ④CCS 。
219. (3) FTP 服務中的傳輸層是使用何種協定？ ①IP ②UDP ③TCP ④NETBIOS
。
220. (1) 何者不是 Server Side 的 Script 語言？ ①JavaScript ②ASP.NET ③JSP ④
PHP 。
221. (4) 對於 JAVA 語言而言，運用在瀏覽器環境上的程式稱之為何？ ①MIDlet
②Spotlet ③JSP ④Applet 。
222. (4) 何者不是安裝 Web Server 的軟體？ ①Apache Server ②Apache Tomcat
③IIS ④DHCP 。
223. (2) Dreamweaver 建立網頁時，新增一個 Behavior，其實是套用何種語法？
①ASP ②JavaScript ③PHP ④ActionScript 。
224. (3) Class C 網路劃分為 4 個子網路，則可用 IP 數共有多少？ ①244 ②240
③248 ④256 。
225. (1) 何者是 HTML 送出表單資料的控制項？ ①submit ②reset ③checkbox ④t
extbox 。
226. (2) 何者不是用在網頁中以增強網頁效果或功能？ ①PHP ②QQ ③XML ④A
SP 。
227. (1) 網頁文件中欲建立內部 CSS 樣式表，應將 CSS 語法寫在那個標籤內？
① ② ③ ④ 。
228. (4) 用網路遮罩 255.255.255.248 來劃分網域，每個子網域最多有幾個 IP 位
址？ ①1 個 ②4 個 ③16 個 ④8 個 。
229. (3) 何種 HTML 語法標籤(Tag)是用來設定超連結？ ① ② ③
④ 。
230. (2) HTML 網頁文件中以「開新視窗」的方式來呈現連結的網頁，目標框架
(Taget Frame)應設定為何？ ①_top ②_blank ③_home ④_parent 。
231. (3) 網頁設計中，製作滑鼠移至圖片上會更換另一張圖片的效果需使用何種
功能？ ①插入超連結 ②跑馬燈 ③交換圖像效果 ④影像地圖 。
Page 32 of 58
232. (1) 用來傳回目前目錄字串的 PHP 函式為何？ ①string getcwd(void) ②int ge
tmygid(void) ③int getmyuid(void) ④int gettype(mixed var) 。
233. (2) 用來傳回目前 PHP 程式群體 ID 值的 PHP 函式為何？ ①string getcwd(vo
id) ②int getmygid(void) ③int getmyuid(void) ④int gettype(mixed var)
。
234. (3) 用來傳回 PHP 程式用戶識別碼的 PHP 函式為何？ ①string getcwd(void)
②int getmygid(void) ③int getmyuid(void) ④int gettype(mixed var) 。
235. (4) 用來傳回變數 var 型態的 PHP 函式為何？ ①string getcwd(void) ②int ge
tmygid(void) ③int getmyuid(void) ④int gettype(mixed var) 。
236. (3) JavaScript 程式「 」執行結果
為何？ ①0 ②1 ③2 ④3 。
237. (4) HTML 語法
「 」，其功能
表示尚未點選超連結過的物件顏色為何？ ①紅色 ②黃色 ③綠色 ④藍色
。
238. (2) HTML 語法標籤 其作用為何？ ①設定分隔線 ②設定框架
③設定文字 ④設定表格 。
239. (1) 何種圖形格式最適合用於網頁的小型圖示或按鈕？ ①gif ②tif ③bmp ④
wmf 。
240. (1) 何種網路結構，會因某部特定電腦故障可能導致整個網路都不通？ ①星
狀網路 ②雙環狀網路 ③匯流排式網路 ④樹狀網路 。
241. (4) 撥接數據機是使用下列何種信號傳送？ ①數位信號 ②光脈衝 ③語音 ④
調變音頻 。
242. (1) 10 BaseT 網路，網路介面卡到集線器（Hub）間，線材最遠距離為何？
①100 公尺 ②200 公尺 ③300 公尺 ④400 公尺 。
243. (4) 何種介質的傳輸速率最快？ ①電話線 ②同軸電纜 ③雙絞線電纜 ④光纖
纜線 。
244. (4) 何種網路資料傳輸速率最高未達 100Mbps？ ①VDSL2 ②ATM ③Wi-Fi 6
④OC-1 。
245. (2) 哪一 IP 位址被保留作迴路測試用？ ①0.0.0.1 ②127.0.0.1 ③255.255.0.0
④255.255.255.0 。
246. (3) 將 CLASS C 網路以網路遮罩 255.255.255.224 切割成子網路，可切成幾
個網路區段？ ①2 ②4 ③8 ④16 。
247. (1) 將 CLASS C 網路以網路遮罩 255.255.255.224 切割成子網路，每個子網
路中可用之網路位址數為？ ①30 ②32 ③62 ④64 。
248. (3) 何者最不可能是 XML 文件的功用？ ①儲存 HTML 顯示的文件內容 ②作
為資料交換的格式 ③作為編排處理的內容 ④作為資料儲存的格式 。
249. (1) 何者是轉換 XML 文件的技術？ ①XSLT ②XQuery ③XPath ④XLink 。
250. (4) 何者是連結資源的 XML 技術？ ①XSLT ②XQuery ③XPath ④XLink 。
Page 33 of 58
251. (2) 何者是解決 XML 文件標籤(Tag)名稱重複的最佳方式？ ①名稱宣告 ②名
稱空間 ③名稱加長 ④名稱縮寫 。
252. (1) HTML 網頁中嵌入 PHP 程式碼，何組標籤最不適用？ ① ②
③ ④ 。
253. (2) 關於 PHP 程式『 』的意義為何？ ①顯示目前的網
址訊息 ②顯示 PHP 在網頁上的相關訊息 ③顯示程式執行時產生的錯誤
訊息 ④顯示程序執行完成的訊息 。
254. (2) 關於 PHP 的 Cookie 與 Session 敘述何者最不適當？ ①Cookie 變數均儲
放在客戶端 ②Session 變數均儲放在伺服端 ③Cookie 與 Session 的生命
週期可自行設定 ④Cookie 與 Session 資料可以分別用$_COOKIE 與$_SE
SSION 取得 。
255. (1) PHP 用來建立一個新物件的關鍵字為何？ ①new ②create ③create object
④construct 。
256. (3) 關於 HTML 語法何者最不妥善？ ① ②
③ ④ 。
257. (3) 設定網頁背景色何者正確？ ① ②
③ ④
。
258. (2) 設定網頁背景圖案何者正確？ ① ②
③ ④
。
259. (2) 設定網頁中所有文字顏色(color)，何者最妥當？ ①
② ③ ④
。
260. (2) 關於 HTML 標籤無法設定那一部分的顏色？ ①超連結 ②圖片外框 ③儲
存格的背景 ④表格格線 。
261. (4) 關於 HTML 網頁欲加入註解應使用何種方式？ ① ② ③ ④
。
262. (1) 何者最不適合置於 HTML 的 標籤之中？ ① ②
③ ④ 。
263. (3) 關於 HTML 的 標籤中，欲設定超連結之基準位址的標籤為何？
① ② ③ ④ 。
264. (4) 那一個 XML 區塊是告訴 XML 剖析器不用處理此區塊的內容？ ①
② ③ ④
。
265. (2) XML 屬性是定義在 XML 元素的那一個部分？ ①元素內容 ②開始標籤
③結尾標籤 ④註解 。
266. (3) HTML 網頁中的標題文字共分為幾個層次？ ①4 ②5 ③6 ④7 。
Page 34 of 58
267. (2) HTML 網頁中欲將文字內容加上底線，其標籤為何？ ① ② ③
④ 。
268. (3) HTML 網頁中欲將文字內容強迫換行顯示，其標籤為何？ ① ②
③ ④ 。
269. (4) HTML 網頁中欲保留原始輸入的格式(如：斷行、空白)，其標籤為何？
① ② ③ ④ 。
270. (3) 那一個 HTML 標籤可使裡頭的標籤不會被瀏覽器解釋執行並直接顯示出
標籤及內容？ ① ② ③ ④ 。
271. (4) 那一個 XHTML 語法可以讓圖片(logo.gif)正確的超連結至網頁(test.htm)
中？ ① ②
③
④
。
272. (3) 利用 XHTML 語法建立網頁表格之標題，應使用那一個標籤？ ①
② ③ ④ 。
273. (2) 在 XHTML 中， 標籤的屬性何者用來指定接收表單資料之伺服器
端的程式？ ①method ②action ③name ④enctype 。
274. (1) JavaScript 函式定義在那一標籤中最合理，以便程式可呼叫使用？ ①
② ③ ④ 。
275. (4) 何者是 JavaScript 最不可能達到的功能？ ①更換背景色彩與字型大小 ②
標題跑馬燈 ③顯示線上時鐘或日曆 ④將資料直接寫入資料庫 。
276. (4) JavaScript 中那一個指令可以反覆執行一段程序，直到條件不符合時才停
止？ ①if ②if…else ③for ④while 。
277. (2) 關閉瀏覽器視窗時會觸發 JavaScript 那一個事件(Event)？ ①onLoad ②o
nUnload ③onChange ④onBlur 。
278. (2) JavaScript 中那一個不屬於文件(Document)物件的方法(Method)？ ①ope
n ②read ③write ④close 。
279. (1) JavaScript 中使用那一個指令來建構物件？ ①function ②new ③object ④
class 。
280. (2) JavaScript 中欲使網頁回到上一頁，應執行那一個指令？ ①history.back
(1) ②history.go(-1) ③history.previous(1) ④history.forward(-1) 。
281. (2) 利用 CSS 樣式設定超連結文字不出現底線，可利用那一個屬性(Property)
進行設定？ ①text-align ②text-decoration ③text-indent ④text-transform
。
282. (3) 利用 CSS 樣式設定段落字體為「微軟正黑體」，可利用那一個屬性(Prop
erty)進行設定？ ①font-style ②font-variant ③font-family ④font-weight
。
283. (4) 利用 CSS 樣式設定段落字型的粗細，可利用那一個屬性(Property)進行設
定？ ①font-style ②font-variant ③font-family ④font-weight 。
Page 35 of 58
284. (1) 在 JSP 網頁中，程式碼部分將以何種符號來標示？ ① ②
③ ④ 。
285. (14) 要修改產品（Product）資料表中主鍵「產品代號（Pcode）」為'005'的
「價錢（Price）」由 25 元改成 30 元，那些 SQL 指令可以使用？ ①
②
③
④
。
286. (1234) 有關 SOAP 函式的敘述，何者正確？ ①SoapServer->addFunction( )方
法，可用來新增一至多個處理 SOAP 需求的函式 ②SoapServer->handle
( )方法，可用來處理 SOAP 需求 ③SoapServer->setClass( )方法，可設定
類別為處理 SOAP 需求的類別 ④SoapServer->getFunction( )方法，可取
得函式列表 。
287. (124) 使用樣版的好處，何者正確？ ①美工人員與程式設計人員可以分開作業
②可以使 MVC(Model-View-Controller)的設計架構更容易實現 ③可以增
加網頁的安全 ④可以更方便的使用類似 Dreamweaver 等網頁編輯工具來
編輯畫面 。
288. (124) MariaDB 的函式敘述，何者正確？ ①mysql_creat_db( )函式可用來建立
新的資料庫 ②mysql_db_name( )函式可用來取得資料庫名稱 ③mysql_dr
op_db( )函式也可用來建立新資料庫 ④mysql_errno( )函式可取得上一次
MariaDB 運算的錯誤碼 。
289. (234) PHP 處理 MariaDB 資料庫相關函式的敘述，何者正確？ ①mysql_connec
t( )是用來開啟資料表 ②mysql_select_db( )是用來選擇要操作的資料庫
③mysql_query( )是用來下達 SQL 語法 ④mysql_close( )是用來關閉資料
庫連線 。
290. (123) SQL 語法的敘述，何者正確？ ①insert 語法可用來做資料的新增 ②updat
e 語法可用來做資料的更新 ③select 語法可用來做資料的查詢 ④insert、
update、select 等三種語法統稱為非查詢語法 。
291. (23) 欲從資料表中刪除特定條件的紀錄，需搭配那些 SQL 指令及關鍵字方能
正確完成？ ①insert ②delete ③where ④order 。
292. (24) PHP 程式中執行 mysql_fetch_row( )函數的結果，何者正確？ ①取得資
料表格的欄位數 ②取得單筆完整資料 ③會將目前資料指標移至最後一筆
④會將目前資料指標移至下一筆 。
293. (14) Windows 的環境下，可以透過 php.ini 中的那些設定，來協助 PHP 中的 e
mail 函式正常運作？ ①SMTP ②sendmail_path ③mail ④smtp_port 。
Page 36 of 58
294. (12) JavaScript 中何者是刪除 cookie 的方法？ ①修改 cookie 的 expire 參數，
將其設定為過期狀態 ②利用 setcookie 敘述，指定 cookie 名稱並忽略其
他參數，來刪除指定 cookie 檔案 ③關閉客戶端電腦 ④刪除伺服器中所
有暫存檔案 。
295. (1234) 有關 PHP 陣列常用的函數敘述，何者正確？ ①count( )可用來計算陣列
的元素個數 ②unset( )可用來刪除陣列中的元素 ③sort( )可用來執行陣列
的排序 ④empty( )可用來檢查陣列元素值是否存在 。
296. (124) PHP 的陣列敘述，何者正確？ ①宣告陣列變數時，以中括號表示，例如:
$name[5] ②陣列註標(index)由 0 起算 ③陣列中的元素必須為相同資料型
態 ④陣列視需要可動態增減元素個數 。
297. (1234) 何者是 PHP 的流程控制語法？ ①if…else 敘述 ②switch…case 敘述 ③fo
r 迴圈 ④do…while 迴圈 。
298. (123) 何者是 PHP 的基本資料型態？ ①整數(integer) ②浮點數(double) ③字串
(string) ④指標(pointer) 。
299. (124) PHP 變數的敘述，何者正確？ ①變數命名不可用數字當開頭 ②變數命名
大小寫有區分 ③任何英文均可用來當變數名稱 ④$ThisIsMyFirstVariable
是合法的變數命名 。
300. (34) MariaDB 與 phpMyAdmin 的敘述，何者正確？ ①匯入資料庫相當於資料
庫的備份 ②網路上若要管理資料庫系統的話，在瀏覽器鍵入 http://local
host/phpMyAdmin 就可以了 ③MariaDB 可以利用 console 介面來針對資
料庫下指令 ④匯出資料庫將會產生一個.sql 的檔案 。
301. (13) PHP 的 echo 敘述，何者正確？ ①可將資料輸出為 HTML 文件格式 ②將
會讓電腦發出聲音 ③與指令 print 的功能相同 ④將於執行後印出 echo 這
個字串 。
302. (14) PHP 程式(text.php)要在本機的網站根目錄下執行，何者正確？ ①http://l
ocalhost/text.php ②http:\\localhost\text.php ③http:\\127.0.0.1\text.php ④
http://127.0.0.1/text.php 。
303. (124) 網頁中要顯示字串「Hello, world!」，何者正確？ ①
② ③ ④
。
304. (123) 那些色彩配色不屬於色光的補色配對？ ①紅色與黃色 ②藍色與青色 ③
橙色與黃色 ④綠色與洋紅色 。
305. (12) 影像處理軟體中，影像圖檔的色彩表示有 RGB 及 CMYK 色系，其中 CM
YK 的說明那些正確？ ①「K」表示黑色 ②「Y」表示黃色 ③「C」表示
洋紅色 ④「M」表示青色 。
306. (124) 影像處理軟體中，運用色彩選擇工具取得 RGB 值，有關其顯示的顏色那
些敘述正確？ ①(255,0,0)呈現紅色 ②(0,255,0)呈現綠色 ③(0,0,255)呈現
紫色 ④(255,255,0)呈現黃色 。
Page 37 of 58
307. (34) 何者不為 CSS 的註解語法？ ① ②
③ ④
。
308. (134) CSS 屬性表示那些正確？ ①color: rgb(0,0,255); ②font-type: Arial; ③fon
t-style: italic; ④font-weight: 600; 。
309. (12) HTML 5 文件內，那些方法可直接將 CSS 樣式表撰寫於文件內? ①Inline
Style ②Embedded Style Sheet ③Linked Style Sheet ④Imported Style She
et 。
310. (124) CSS 自訂 class 樣式名稱為.myimage，如果要設計可讓滑鼠移動到圖片上
產生自動放大影像的效果，那些敘述不正確？ ①需要再額外增加一個樣
式.myimage: movor ②.myimage 樣式屬性的 width 要比額外新增樣式的
width 大 ③需要再額外增加一個樣式.myimage: hovor ④需要再額外增加
一個樣式.myimage: visited 。
311. (13) 關於 CSS 屬性設定圖片加上外框的效果何者正確？ ①使用 border-width
設定圖片框線的粗細 ②使用 area 設定圖片與邊框的留白範圍 ③使用 bor
der-style 設定圖片框線的樣式 ④使用 color 設定外框的顏色 。
312. (123) 關於影像平面化之敘述何者不正確？ ①只會平面化目前的圖層 ②文字圖
層平面化後，文字仍然可以編輯 ③影像經過平面化後，可以隨時回復原
先的圖層架構 ④包含文字的圖層經過平面化之後，文字圖層會消失 。
313. (123) Photoshop 文字排版的相關名詞中，何者敘述較不適當？ ①大寫高度(Ca
p Height)為從「上升線(Ascender Line)」到「下降線(Descender Line)」
之間的高度 ②字元大小(Point Size)為由「基線(Base Line)」開始至大寫
字母頂端的高度 ③基線(Base Line)代表下降部位最大下降深度的線 ④大
寫線(Cap Line)代表大寫字元最大高度的線 。
314. (124) Photoshop 中處理影像圖層時，何種的編輯動作無法保留圖層非破壞性編
輯的特性？ ①影像重新取樣 ②影像平面化 ③將圖層轉換為[智慧型物件]
④點陣化圖層 。
315. (234) Photoshop 提供何種遮色片效果？ ①背景遮色片 ②向量遮色片 ③剪裁遮
色片 ④圖層遮色片 。
316. (12) HTML Tag 對應到 HTML DOM 模型元素的關係，那些不正確？ ①HEA
D 對應到 HTMLHeadingElement ②DIV 對應到 HTMLTableDivElement
③FONT 對應到 HTMLFontElement ④MENU 對應到 HTMLMenuElement
。
317. (1234) 在 HTML DOM 模型的 document.documentElement 物件中，可合法使用
那些方法(methods)？ ①appendChild( ) ②replaceChild( ) ③insertBefore
( ) ④getAttribute( ) 。
318. (123) 在 HTML DOM 模型的 document.documentElement 物件中，那些方法(me
thods)可產生新的 node？ ①createAttribute( ) ②createElement( ) ③creat
eTextNode( ) ④createImageNode( ) 。
Page 38 of 58
319. (123) 在 HTML DOM 模型中的 document.documentElement 物件，可使用那些
方法(methods)來找到 HTML 的元件(element/node)或元件列(node list)？
①getElementById( ) ②getElementsByTagName( ) ③getElementsByClass
Name( ) ④getElementByValue( ) 。
320. (1234) 在 HTML DOM 模型的 document.documentElement 物件中，可改變 HTM
L 文件中的那些內容？ ①HTML content ②CSS styles ③HTML attributes
④event(handlers) 。
321. (124) 在 HTML DOM 模型中的 HTMLFormElement 物件，可合法使用那些方法
(methods)及屬性(properties)？ ①reset( ) ②submit( ) ③getlength( ) ④na
me 。
322. (1234) 在 HTML DOM 模型中的 HTMLImageElement 物件，可合法使用那些屬
性(properties)？ ①alt ②height ③longDesc ④lowsrc 。
323. (34) 在 HTML DOM 模型中的 HTMLTableElement 物件，可合法使用那些方
法(methods)？ ①createTitle( ) ②createTFooter( ) ③createTHead( ) ④ins
ertRow( ) 。
324. (1234) 在 HTML DOM 模型中的 HTMLLinkElement 物件，可合法使用那些屬性
(properties)？ ①hreflang ②media ③type ④charset 。
325. (123) 在 HTML DOM 模型中的 HTMLSelectElement 物件，可合法使用那些方
法(methods)及屬性(properties)？ ①add() ②remove() ③type ④selectedIn
dexNodes 。
326. (123) 在 HTML DOM 模型中的 Element 物件，可合法使用那些方法(methods)
及屬性(properties)？ ①appendChild( ) ②cloneNode( ) ③isEqualNode( )
④isParentNode( ) 。
327. (234) 何種影像格式常使用於網頁畫面？ ①TIFF ②JPG ③GIF ④PNG 。
328. (134) 何種影像格式不屬於「破壞性壓縮」的影像檔格式？ ①TIFF ②JPG ③B
MP ④PNG 。
329. (124) 那些影像格式不能產生動畫及透明效果？ ①TIFF ②JPG ③GIF ④BMP
。
330. (34) 那些影像格式能產生透明效果？ ①BMP ②JPG ③GIF ④PNG 。
331. (123) 那些是網頁製作軟體？ ①Dreamweaver ②Visual Studio Code ③SharePoi
nt ④MariaDB 。
332. (234) Dreamweaver 中網頁樣式不使用那些方式處理？ ①CSS 樣式 ②Java 程式
③PHP 程式 ④#符號 。
333. (234) PHP 不使用那些符號來表示單行該符號後之文字為註解？ ①// ②? ③&
④$ 。
334. (123) 那些方式可以用來轉換 PHP 網頁程式中變數的資料型態？ ①在變數前面
使用小括弧加上資料型態的名稱 ②使用轉換函數(如：intval)來轉換資料
型態 ③使用 settype 函數來轉換資料型態 ④使用 dim 來轉換資料型態 。
Page 39 of 58
335. (123) PHP 使用那些函數無法將變數的資料型態轉換成字串？ ①intval ②floatv
al ③doubleval ④strval 。
336. (123) PHP 可使用那些語法來輸出字串在網頁上？ ①echo ②print ③printf ④sh
ow 。
337. (234) PHP 使用那些語法無法輸出字串在網頁上？ ①echo ②type ③string ④sh
ow 。
338. (134) 在字串中使用字元“\n”語法，在那些電腦語言中輸出會產生「斷行」
的效果？ ①C ②PHP ③C++ ④Java 。
339. (12) 乙太網路功能是運作在 OSI 模式的那二層？ ①Physical ②Data link ③Ne
twork ④Transport 。
340. (123) 關於 NIC 之敘述何者正確？ ①NIC 連接 PC 到網路媒體 ②NIC 偵測乙太
網路區段的碰撞 ③NIC 傳遞選定的訊框內容給較上的 OSI 層次 ④NIC 在
資料被傳送前檢查資料格式 。
341. (34) 那些是高速乙太網路的技術？ ①100BASE-5 ②1000BASE-F ③100BASE
-FX ④100BASE-TX 。
342. (12) 關於 Gigabit 乙太網路技術之描述何者正確？ ①典型使用為骨幹佈線 ②
可以用銅線和光纖實作出 ③主要使用在工作站間 ④運作在 100Mbps 。
343. (123) 哪些是傳輸層用來管理主機間分離的資料流？ ①埠號(port numbers) ②
確認號碼(acknowledgment numbers) ③序號(sequence numbers) ④認證鑰
匙(authentication keys) 。
344. (12) 那些是 OSI 傳輸層(Transport layer)的主要目的？ ①Flow Control ②Endto-end Connectivity ③Path Determination ④Security Control 。
345. (12) 關於 127.0.0.1 的 IP 位址之敘述何者正確？ ①它屬於 A 級位址範圍 ②它
保留當作迴路測試 ③它保留當作多點傳輸群組測試 ④它屬於 B 級位址
範圍 。
346. (134) 那些為私有 IP 位址(Private Addresses)？ ①192.168.168.168 ②192.169.1
69.169 ③172.22.22.22 ④10.66.66.66 。
347. (123) 乙太網路上發生了碰撞，那些敘述可用來說明 CSMA/CD 的運作程序？
①在壅塞訊號之後，所有傳輸停止一段隨機周期 ②當後退期間到期後，
每個主機檢查看看是否網路媒體是否閒置，然後嘗試傳送 ③當碰撞被偵
測到，主機持續一段短時間以壅塞樣式傳輸來確保所有主機偵測到此碰
撞 ④當後退期間到期後，碰撞牽涉到的主機有優先權來傳輸 。
348. (12) 那些設備會延伸碰撞領域？ ①Hub ②Repeater ③Switch ④Bridge 。
349. (123) 當從高速乙太網路移植到 Gigabit 乙太網路，網路管理者應考慮那些項
目？ ①現存的 NIC 必須升級 ②現存的交換器必須升級 ③現存的 UTP 必
須測試通 CAT 5e 或 CAT 6 相容 ④現存的 UTP 佈線必須以光纖取代 。
350. (123) TCP 協定具備那些特徵？ ①強制未確認的封包之重傳 ②在終端使用者應
用程式間建立虛擬會談（Virtual Session） ③負責將訊息分割成區段(Seg
ment)且到達目的地後重組 ④被用來傳送 IP 錯誤訊息 。
Page 40 of 58
351. (12) 那些屬於 TCP/IP 的應用層協定？ ①FTP ②SMTP ③TCP ④IP 。
352. (124) B 級位址的網路與子網路遮罩那些是有效的設定？ ①255.255.252.0 ②25
5.255.255.192 ③255.0.0.0 ④255.255.0.0 。
353. (34) 那些設備會在乙太網路上產生多個碰撞領域？ ①Hub ②NIC ③Switch ④
Router 。
354. (123) 關於 CSMA/CD 的敘述何者正確？ ①它是使用在 LAN 上的媒體存取方
法 ②當設備需要傳輸，它檢查看看是否媒體可用 ③同一時間只有一個設
備能成功地傳輸 ④多個設備可同時成功地傳輸 。
355. (12) 那些是採購網路介面卡要考慮的重要特性？ ①網路上使用的媒介 ②電腦
使用的系統匯流排 ③網路上使用的安全性 ④網路上安裝的軟體 。
356. (12) 那些是 UDP 和 TCP 共通的特性？ ①使用埠號 ②歸類為傳輸層的協定
③確認資料的接收 ④歸類為無連結的協定(Connectionless Protocol) 。
357. (1234) 那些是檔案傳輸通訊協定(File Transfer Protocol,FTP)和簡單式檔案傳輸
通訊協定(Trivial File Transfer Protocol,TFTP)之間的差異？ ①FTP 可透
過互動方式執行；TFTP 允許只有單向傳輸的檔案 ②FTP 可提供使用者
驗證；TFTP 則否 ③FTP 使用 TCP 連接埠號碼為 20 及 21；TFTP 使用 U
DP 連接埠號碼為 69 ④FTP 是完整、工作階段導向、一般用途的檔案傳
輸通訊協定；TFTP 作為極簡特殊目的檔案傳輸通訊協定 。
358. (12) 那些是 TCP/IP 應用層協定？ ①TFTP ②DNS ③TCP ④UDP 。
359. (12) 何者屬於 B 級 IP 位址的子網路遮罩(subnet mask)？ ①255.255.224.0 ②2
55.255.192.0 ③255.255.0.0 ④255.192.0.0 。
360. (12) 在網路環境中使用 UTP 纜線有那些優點？ ①比光纖便宜 ②比同軸線容
易安裝 ③提供比同軸線長的距離 ④比光纖較不易受外界雜訊的影響 。
361. (34) 使用光纖佈線來代替 UTP 纜線有那些優點？ ①低成本 ②容易安裝 ③允
許更長距離 ④較不受外界訊號的影響 。
362. (34) 有線網路佈線需考慮那些因素？ ①作業系統 ②CPU 的速度 ③纜線佈線
距離 ④傳輸速度 。
363. (123) 那些可用來當作網路通訊的傳輸訊號？ ①光樣式(Light Patterns) ②電壓
(Electrical Voltages) ③調變的電磁波(Modulated Electromagnetic Waves)
④磁化的流體波(Magnetized Fluid Waves) 。
364. (12) 關於集線器(Hub)和交換器(Switch)之敘述何者正確？ ①交換器提供到 L
AN 主機的更多流通量 ②交換器提供 LAN 上的無碰撞環境 ③集線器運
作在 OSI 模式的第 3 層 ④集線器減少 LAN 上的碰撞數目 。
365. (12) 那些網路設備使用 MAC 位址來作轉送路徑的選擇？ ①Bridge ②Switch
③NIC ④Hub 。
366. (12) 那些設備用以再生資料訊號，主要用來延伸在碰撞領域內網路線的區
段？ ①Repeater ②Switch Hub ③Router ④Bridge 。
367. (123) 那些情況發生時需要安裝新的 NIC？ ①NIC 壞掉 ②需要提供第二個或備
份的 NIC 時 ③從有線媒介改成無線時 ④PC 移動到不同的地點時 。
Page 41 of 58
368. (12) 位元組(Byte)的敘述何者正確？ ①8 個二進位數的群組 ②可當作計算機
架構的定址單位(Byte Addressing) ③電腦資料的最小單位 ④0 到 128 的
數值範圍 。
369. (134) 那些是 TCP/IP 模式的分層？ ①應用層(Application) ②實體層(Physical)
③網際網路層(Internet) ④網路存取層(Network Access) 。
370. (13) 關於資料鏈結層(Data Link Layer)封裝的敘述何者正確？ ①會加上表頭
(Header)和表尾(Trailer) ②資料轉換成封包(Packets) ③封包(Packets)被
包裹成訊框(Frames) ④訊框(Frames)被分成區段(Segments) 。
371. (123) 那些是量測網路頻寬的單位？ ①Kbps ②Mbps ③Gbps ④Nbps 。
372. (12) 那些為決定網路流通量(Throughput)的因素？ ①網路拓樸 ②網路上使用
者的數目 ③伺服器使用的密碼種類 ④網路線的直徑 。
373. (234) 何者不是 Telnet 指令所提供之功能？ ①遠端登入 ②電子郵件服務 ③檔
案傳輸服務 ④電傳視訊 。
374. (23) 何者是「網路」所使用的通訊協定？ ①Ajax ②TCP/IP ③IPX/SPX ④JSP
。
375. (123) 預設情況下，Dreamweaver 提供的跑馬燈功能，可以設定那些效果？ ①
文字捲動的速度 ②改變跑馬燈的背景顏色 ③文字來回捲動的次數 ④動
態變更文字內容 。
376. (123) 網頁版面設計的方式有那些？ ①div ②iframe ③frame ④meta 。
377. (123) 何者可作為網頁編輯軟體？ ①SharePoint ②Dreamweaver ③Notepad ④P
aint 。
378. (134) 內容管理系統(Content Management System, CMS)常用來製作入口網站，
何者屬於 CMS？ ①XOOPS ②Sleipnir ③Manbo ④PHP-Nuke 。
379. (234) 何者屬於 TCP/IP 網路模型之應用層協定？ ①ICMP ②SMTP ③Telnet ④
FTP 。
380. (123) 網頁表單處理程式可以使用何種語言來撰寫？ ①ASP ②PHP ③JSP ④FO
RTRAN 。
381. (12) 何者同時具備網頁製作及網站管理的功能？ ①Dreamweaver ②SharePoin
t ③Firework ④Flash 。
382. (14) 設計網頁表單時，何種控制項為選項之應用？ ①radio ②combobox ③tex
tarea ④checkbox 。
383. (12) 何種 HTML 語法標籤(Tag)與文字格式設定有關？ ① ② ③
④ 。
384. (123) 何者為電子郵件的通訊協定？ ①IMAP ②POP ③SMTP ④IPX 。
385. (14) 何者不是專業的網頁製作軟體？ ①Excel ②Dreamweaver ③phpDesigner
④PowerPoint 。
386. (24) 何者是圖形的副檔名？ ①.xlsx ②.png ③.txt ④.jpg 。
Page 42 of 58
387. (14) 何者是數據通訊的傳輸媒介(Medium)？ ①同軸電纜 ②數據機 ③基地台
④光纖 。
388. (24) 那些是 XML 文件的驗證技術？ ①XSLT ②XML Schema ③XQuery ④DT
D 。
389. (24) 關於 PHP 的描述那些正確？ ①PHP 屬於網頁程式語言，但尚無法支援資
料庫 ②較新版的 PHP 才可使用物件導向方式來設計與撰寫 ③要架設 PH
P 網站伺服器最好利用 Windows 系統建置，其餘系統無法建置 ④PHP 可
直接嵌入在 HTML 文件中來強化網頁功能 。
390. (124) 關於 PHP 的特色那些正確？ ①開放原始碼 ②嵌入式語言 ③各版本均可
利用物件導向方式來設計與撰寫 ④能與 MS SQL 資料庫結合 。
391. (234) 關於 PHP 語法那些正確？ ①$tmp=10 ②//為單行註解 ③echo "字串資料
"; ④$a=$b++; 。
392. (124) 關於 PHP 變數名稱那些正確？ ①$var ②$myFunction ③$class ④$myBr
eak 。
393. (123) 那些是 PHP 程式之流程控制？ ①if…else ②if…elseif…else ③do…while
④select…case 。
394. (124) 關於 HTML 之敘述那些正確？ ①全名為 Hypertext Markup Language ②
W3C 組織所制定之標準 ③可用來設計網頁並存取資料庫 ④不同廠牌的
瀏覽器所解析的結果可能有差異 。
395. (24) 關於 HTML 網頁開發之敘述那些正確？ ①不可利用記事本軟體編寫 HT
ML 網頁 ②使用專業的網頁設計軟體所設計之網頁，可再使用其它文字
編輯軟體修改 ③須事先經過編譯，才能由瀏覽器顯示結果 ④須注意引用
之圖文是否涉及智慧財產權 。
396. (14) 關於 XHTML 標籤屬性之敘述那些正確？ ①標籤名稱與屬性間須至少一
個空白(Space)作間隔 ②屬性名稱大小寫皆可 ③屬性值如為字串，前後
應以雙引號括住，但雙引號可以省略 ④標籤若有多個屬性時，屬性與屬
性間須以空白作間隔 。
397. (23) 關於 HTML 標籤的 color 屬性，那些是正確的表示法？ ①
② ③ ④
。
398. (124) 關於 XML 的敘述那些正確？ ①XML 文件的內容，可轉換成 HTML 格式
②XML 文件的基本單位為元素(element)，元素使用起始標記和結束標
記 ③XML 文件無分英文大小寫 ④每個 XML 檔都有一個唯一的根(root)
元素，根元素沒有父(parent)元素 。
399. (123) HTML 網頁中 標籤可設定那些項目？ ①網頁編碼信息 ②網頁
自動換頁 ③關鍵字 ④資料庫連結 。
400. (123) 利用 XHTML 語法建立網頁表格，可能用到那些標籤？ ① ②
③ ④ 。
Page 43 of 58
401. (234) 利用 XHTML 語法建立網頁框架那些正確？ ①
②
③
④
。
402. (123) 那些是 JavaScript 的基本資料型態？ ①Number ②String ③Boolean ④Ar
ray 。
403. (123) 利用 CSS 樣式設定段落文字顏色為「藍色」那些正確？ ①p{color:#00
F;} ②p{color:blue;} ③p{color:rgb(0,0,100%);} ④p{color:rgb(00,00,F
F);} 。
404. (123) 利用 CSS 樣式設定段落文字大小那些正確？ ①p{font-size:12px;} ②p{fo
nt-size:2em;} ③p{font-size:2;} ④p{font-size:2x-large;} 。
405. (234) 利用 CSS 樣式設定網頁內元件之長度(如：圖片寬度)，那些屬於絕對單
位？ ①px ②in ③cm ④mm 。