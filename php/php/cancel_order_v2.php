<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 獲取來自AJAX請求的資料
    $orderID = $_POST['orderID'];
    // 連接到資料庫（請根據您的設定修改）
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'hongteag_goose';
    $conn = new mysqli($host, $user, $password, $dbname);

    // 檢查連接是否成功
    if ($conn->connect_error) {
        die("連接失敗: " . $conn->connect_error);
    }

    // 更新SQL查詢語句以獲取Account欄位
    $sql = "SELECT Account FROM purchase_order WHERE Purchase_OrderID = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("預處理失敗: " . $conn->error);
    }

    // 綁定$orderID到查詢參數
    $stmt->bind_param("i", $orderID);

    // 執行查詢
    if ($stmt->execute()) {
        // 綁定查詢結果
        $stmt->bind_result($account);

        // 檢查是否有結果
        if ($stmt->fetch()) {
            // 查詢成功，$account現在包含了Purchase_OrderID對應的Account值
            // 可以將其存儲到一個變數中
            $accountValue = $account;
        } else {
            // 沒有找到匹配的記錄
            die("沒有找到匹配的記錄");
        }
    } else {
        die("查詢失敗: " . $stmt->error);
    }

    // 關閉第一個查詢
    $stmt->close();


    // 創建刪除訂單的SQL語句
    $deleteSql = "UPDATE purchase_order SET Status ='已取消' WHERE Purchase_OrderID = ?";

    // 使用預備語句執行刪除操作
    $deleteStmt = $conn->prepare($deleteSql);

    if ($deleteStmt) {
        // 綁定訂單號參數
        $deleteStmt->bind_param("i", $orderID);

        // 執行刪除操作
        if ($deleteStmt->execute()) {
            echo "訂單刪除成功";
             // 執行第二個 SQL 查詢來更新 user 表中的 cancel 列
             $updateSql = "UPDATE users SET cancel = cancel + 1 WHERE Account = ?";
             $updateStmt = $conn->prepare($updateSql);
             if ($updateStmt) {
                // 綁定account參數
                $updateStmt->bind_param("s", $accountValue);//s代表字串

                // 執行更新操作
                if ($updateStmt->execute()) {
                    echo "訂單刪除成功，並成功更新用戶表";
                    echo 'success'; // 返回成功響應
                } else {
                    echo "無法更新用戶表：" . $updateStmt->error;
                }

                // 關閉更新查詢
                $updateStmt->close();
            } else {
                echo "預處理更新查詢失敗：" . $conn->error;
            }
        } else {
            echo "訂單刪除失敗：" . $deleteStmt->error;
        }

        // 關閉刪除查詢
        $deleteStmt->close();
    } else {
        echo "預處理刪除查詢失敗：" . $conn->error;
    }

    // 關閉資料庫連接
    $conn->close();
}
?>
