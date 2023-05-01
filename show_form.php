<?php
// 连接到 MySQL 数据库
$mysqli = new mysqli("localhost", "root", "", "test");

// 检查连接是否成功
if ($mysqli->connect_error) {
    die("连接失败: " . $mysqli->connect_error);
}
if(!empty($_POST['account']) && !empty($_POST['password'])) {
// 从表单中获取用户输入的数据
$account = $_POST['account'];
$password = $_POST['password'];

// 查询数据库中的数据
$sql = "SELECT * FROM users WHERE account=$account AND password=$password";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    
    echo "登入成功";
    /* 输出查询结果
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"] . "<br>";
        echo "姓名: " . $row["name"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "电话: " . $row["phone"] . "<br>";
    }*/
} else {
    echo "登入失敗";
}
}else {
    echo "表單不可空白";
}
