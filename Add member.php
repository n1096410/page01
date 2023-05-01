<?php

// 取得表單資料
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$password = $_POST['password'];
$username = $_POST['username'];

// 建立連線
$conn = new mysqli("localhost", "username", "password", "dbname");

// 檢查連線是否成功
if ($conn->connect_error) {
    die("連線失敗: " . $conn->connect_error);
}

// 建立新增資料的SQL語句
$sql = "INSERT INTO members (name, phone, email, address, password, username) VALUES ('$name', '$phone', '$email', '$address', '$password', '$username')";

// 執行SQL語句
if ($conn->query($sql) === TRUE) {
    echo "會員資料新增成功";
} else {
    echo "會員資料新增失敗: " . $conn->error;
}

// 關閉資料庫連線
$conn->close();

?>