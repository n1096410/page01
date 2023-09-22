<?php
// 取得表單提交的資料
$account = $_POST["account"];
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$password = $_POST["password"];

// 建立與 MySQL 資料庫的連線
$host = 'localhost'; // 或 '127.0.0.1'
$user = 'root'; // 使用者帳號
$dbpassword = ''; // 使用者密碼
$dbname = 'hongteag_goose'; // 資料庫名稱

$mysqli = new mysqli($host, $user, $dbpassword, $dbname);

// 檢查連線是否成功
if ($mysqli->connect_errno) {
    die('連線失敗: ' . $mysqli->connect_error);
}

// 先檢查帳號是否已存在
$checkQuery = "SELECT COUNT(*) FROM users WHERE Account = ?";
$checkStmt = $mysqli->prepare($checkQuery);
$checkStmt->bind_param("s", $account);
$checkStmt->execute();
$checkStmt->bind_result($count);
$checkStmt->fetch();
$checkStmt->close();

// 如果帳號已存在，顯示提示訊息
if ($count > 0) {
    echo "<script>alert('此帳號已有人註冊！'); history.go(-1);</script>";
    exit();
}

// 建立預備語句 (Prepared Statement) 插入資料
$query = "INSERT INTO users (Account, Name, Email, Phone, Address, Password) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($query);

// 對密碼進行哈希運算
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// 綁定參數並執行預備語句
$stmt->bind_param("ssssss", $account, $name, $email, $phone, $address, $hashedPassword);
$stmt->execute();

// 檢查是否成功插入資料
if ($stmt->affected_rows > 0) {
    echo '<script>alert("註冊成功！"); window.location.href = "../index_nologin.php";</script>';
} else {
    echo '<script>alert("註冊失敗！"); history.go(-1);</script>';
}

// 關閉連線和預備語句
$stmt->close();
$mysqli->close();
?>
