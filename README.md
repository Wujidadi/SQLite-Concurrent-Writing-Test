# SQLite Concurrent Writing Test

SQLite 同時並發寫入測試。

本來在 Tarascanta 框架（Beta）下執行，現將相關程式單獨抽出，便於查看及參考。

## 步驟
以下執行命令位置皆以本專案根目錄為準
0. 執行 `./canta init` 初始化專案
1. 執行 `./canta migrate sqlite` 在 `storage/sqlite` 目錄下建立 `TestDB` 資料庫與其中的 `Goo` 資料表
2. 執行 `php ./cli/TestSQLite.php` 在背景啟動並發寫入程序，約 10 秒跑完
3. 使用任意 SQLite 管理或瀏覽工具（VSCode 下推薦 Florian Klampfer 的 SQLite Viewer）查看執行結果
4. 要重新測試，可執行 `rm ./storage/sqlite/TestDB.db` 刪除 `TestDB` 資料庫，然後重跑以上 1 ~ 3

## 結論
* 2022-05-01：並發量不大的情況下，應該可以透過互等的機制來寫入資料，不致於因鎖死或排他造成錯誤
