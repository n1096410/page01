<?php
// 连接到 MySQL 数据库
$mysqli = new mysqli("localhost", "root", "", "test");

// 检查连接是否成功
if ($mysqli->connect_error) {
    die("连接失败: " . $mysqli->connect_error);
}

// 从表单中获取用户输入的数据
$account = $_POST['account'];

// 删除数据库中的数据
$sql = "DELETE FROM users WHERE account=$account";

if ($mysqli->query($sql) === TRUE) {
    echo "資料刪除成功!";
} else {
    echo "錯誤: " . $sql . "<br>" . $mysqli->error;
}

// 关闭数据库连接
$mysqli->close();
?>
