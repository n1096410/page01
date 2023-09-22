<?php
session_start();

// 检查用户是否已登录
if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] === true) {
    $username = $_SESSION['username'];
    $account = $_SESSION['account'];

    // 连接数据库
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'hongteag_goose';
    $conn = new mysqli($host, $user, $password, $dbname);

    // 检查连接是否成功
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    }

    if (isset($_POST['complete_order'])) {
        // 从购物车中读取相关商品信息
        $sql = "SELECT Cart_ID, Product_ID, Sales_Quantity, TotalPrice FROM shoppingcart WHERE Account = '$account'";
        $shippingAddress = $_POST['shipping-address'];
        $result = $conn->query($sql);
    

        // 将商品信息插入到 purchase_order 表中
        while ($row = $result->fetch_assoc()) {
            $orderID=$row['Cart_ID'];
            $productId = $row['Product_ID'];
            $quantity = $row['Sales_Quantity'];
            $price = $row['TotalPrice'];

         // 查询 Product 表来获取对应的 Product_name
         $productSql = "SELECT Product_name FROM product WHERE Product_ID = '$productId'";
         $productResult = $conn->query($productSql);
         $productRow = $productResult->fetch_assoc();
         $productName = $productRow['Product_name'];

            // 将商品信息插入 purchase_order 表中
            $insertSql = "INSERT INTO purchase_order (Product_ID, ProductName, Purchase_OrderID, Purchase_Quantity, Purchase_Price
            , status, Account, Address, Date) 
            VALUES ('$productId', '$productName', '$orderID', '$quantity', '$price', '未付款', '$account', '$shippingAddress', NOW())";
            $conn->query($insertSql);
        }

        //寫入訂單後將對應資訊從shoppingcart清除
         $deleteSql = "DELETE FROM shoppingcart WHERE Account = '$account'";
         $conn->query($deleteSql);

        // 关闭数据库连接
        $conn->close();

        // 重定向到订单完成页面或其他页面
        header("Location:../Payment.php");
        exit();
    }
}
?>
