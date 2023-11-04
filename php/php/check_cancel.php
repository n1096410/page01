<?php
session_start();

if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] === true) {
    // 連接到資料庫
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'hongteag_goose';
    $conn = new mysqli($host, $user, $password, $dbname);

    if ($conn->connect_error) {
        die("連接失敗: " . $conn->connect_error);
    }

    $account = $_SESSION['account'];

    // 查詢用戶的 cancel 值
    $sql = "SELECT cancel FROM users WHERE Account = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("預處理失敗: " . $conn->error);
    }

    $stmt->bind_param("s", $account);

    if ($stmt->execute()) {
        $stmt->bind_result($cancel);

        if ($stmt->fetch()) {
            if ($cancel >= 3) {
                echo 'cancel_limit_exceeded'; // 用戶的 cancel 值大於等於 3
            } else {
                echo 'allow_to_add_to_cart'; // 用戶的 cancel 值小於 3
            }
        } else {
            echo 'user_not_found'; // 資料表內沒找到匹配的用戶
        }
    } else {
        echo 'query_failed'; // 查詢失敗
    }
    $stmt->close();
    $conn->close();
} else {
    echo 'not_logged_in'; // 用戶未登入
}
?>
