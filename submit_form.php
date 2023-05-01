<?php
// 连接到 MySQL 数据库


$mysqli = new mysqli("localhost", "root", "", "test");

// 检查连接是否成功
if ($mysqli->connect_error) {
    die("连接失败: " . $mysqli->connect_error);
}

// 从表单中获取用户输入的数据
$ID = $_POST['account'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address= $_POST['address'];
$password = $_POST['password'];

// 将数据插入到数据库中
$sql = "INSERT INTO users (account,name, email, phone, address, password) VALUES ($ID,'$name', '$email', '$phone','$address','$password')";

if ($mysqli->query($sql) === TRUE) {
    echo "表單提交成功!";
} else {
    echo "錯誤: " . $sql . "<br>" . $mysqli->error;
}

// 关闭数据库连接
$mysqli->close();
?>
