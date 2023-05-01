<!DOCTYPE html>
<meta charset="utf-8" />
<html>
<head>
    <title>表單範例</title>
</head>
<body>
    <h1>表單範例</h1>
    <form action="submit_form.php" method="post">
        <label for="account">帳號：</label>
        <input type="text" id="account" name="account" required><br><br>
        <label for="name">姓名：</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">電子郵件：</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="phone">電話號碼：</label>
        <input type="tel" id="phone" name="phone" required><br><br>
        <label for="address">地址：</label>
        <input type="int" id="phone" name="address" required><br><br>
        <label for="password">密碼：</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="提交">
    </form>
</body>
</html>
