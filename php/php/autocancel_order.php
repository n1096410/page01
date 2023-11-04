<?php
// 連接到資料庫
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'hongteag_goose';
$conn = new mysqli($host, $user, $password, $dbname);

// 檢查連接是否成功
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 計算兩天前的日期
$twoDaysAgo = date('Y-m-d', strtotime('-2 days'));

// 查詢未付款訂單的帳戶和訂單ID
$selectSql = "SELECT Account, Purchase_OrderID FROM purchase_order WHERE Date <= ? AND Status ='未付款'";
$selectStmt = $conn->prepare($selectSql);

if ($selectStmt) {
    $selectStmt->bind_param("s", $twoDaysAgo);
    $selectStmt->execute();
    $selectStmt->store_result();
    
    if ($selectStmt->num_rows > 0) {
        $selectStmt->bind_result($account, $Purchase_OrderID);
        
        while ($selectStmt->fetch()) {
            
        }
    }
    
    $selectStmt->close();
}

// 查詢訂單並將未付款訂單取消
$sql = "UPDATE purchase_order SET Status ='已取消' WHERE Date <= ? AND Status ='未付款'";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("s", $twoDaysAgo);
    
    if ($stmt->execute()) {
        echo "成功取消未付款訂單";
    } else {
        echo "取消未付款訂單失敗";
    }

    $stmt->close();
} else {
    echo "預備語句創建失敗";
}

// 關閉資料庫連接
$conn->close();
?>
