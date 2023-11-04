
<!DOCTYPE html>
<?php session_start(); 
// 檢查使用者是否已登入
if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] === true) {
    $username = $_SESSION['username']; // 獲取使用者名稱
    $account = $_SESSION['account']; // 獲取帳號資訊
    $loginText =  "會員：$username"; // 將登入文字設置為使用者名稱
} else {
    $loginText = "會員登入"; // 預設為 "會員登入"
    echo '<script>';
    echo 'alert("無法獲取登入數據，請先登入");';
    echo 'window.location.href = "orders_nologin.php";';
    echo '</script>';
    exit();
}
?>  
<html lang="zh-Hant-Tw">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="image/logoicon.ico" rel="shortcut icon"/>  
    <title>台南下營鋐茶鵝</title>
    <link rel="stylesheet" href="css/meber.css?version=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/main.css?version=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/orders.css?version=<?php echo time(); ?>" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Yusei+Magic&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
</head>
<body>
    <!--navbar區塊-->
    <nav>
        <div class="navbar navbar-expand-lg p-3" style="background-color: #fede00">
            <div class = "container">
                <a href="index_login.php"><img style="width: 200px;" src="images/logo.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="about_login.php" class="text-black">關於我們</a></li>
                    <li class="nav-item"><a href="shoppage.php" class="text-black">線上訂購</a></li>
                    <li class="nav-item"><a href="common_quest_login.php" class="text-black">常見問題</a></li>
                    <li class="nav-item"><a href="contact_login.php" class="text-black">聯絡我們</a></li>
                    <li class="nav-item"><a href="#" data-bs-toggle="modal" data-bs-target="#login-modal" class="text-black"><?php echo $loginText; ?></a></li>
                    <li class="nav-item">
                        <a href="Payment.php" class="d-flex align-items-center text-black">
                            <img src="images/shopping-cart.png" width="20" height="20" class="me-2">購物車
                        </a>
                    </li>

                </ul>
            </div>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
              <!-- 左側固定欄位 -->
              <div class="list-group">
                <a href="ReviseMember.php" class="list-group-item list-group-item-action">會員中心</a>
                <a href="orders.php" class="list-group-item list-group-item-action">我的訂單</a>
                <a href="revise.php" class="list-group-item list-group-item-action">修改資料</a>
                <a href="revisepassword.php" class="list-group-item list-group-item-action">更改密碼</a>
            </div>
        </div>
        <div class="col-md-9" id="main-section">
            <!-- 右側內容 -->
            
            <?php
 // 設定資料庫連線參數
 $host = 'localhost';
 $user = 'root';
 $password = '';
 $dbname = 'hongteag_goose';

 // 建立資料庫連線
 $conn = new mysqli($host, $user, $password, $dbname);

 // 檢查連線是否成功
 if ($conn->connect_error) {
     die("連線失敗: " . $conn->connect_error);
 }
 // 執行 SQL 查詢語句

 // 只找符合目前已登入的帳戶資訊的資料
$currentAccount = $_SESSION['account'];
$sql = "SELECT Product_ID, ProductName, Purchase_OrderID, Purchase_Quantity, Purchase_Price, Status, Transfer, Date 
FROM purchase_order WHERE Account = '$currentAccount' AND Status <> '已取消' ORDER BY Date DESC";  // 使用 ORDER BY Date DESC 按日期降序排列";
$result = $conn->query($sql);
?>

                <!-- My Orders content -->
                <div class="mt-4">
                <span><h1 style="display: inline;">我的訂單</h1>下訂後請於兩天內完成付款，超過時限訂單將被自動取消
<select id="statusFilter" class="form-control status-select">
    <option value="all">所有訂單</option>
    <option value="待確認款項">待確認款項</option>
    <option value="未付款">未付款</option>
    <option value="待出貨">待出貨</option>
    <option value="已出貨">已出貨</option>
</select>
</span><br>
                <button id="deleteOrderButton">測試</button>
</div>
                
<?php 
$previousOrderID = null; // 用於跟蹤前一筆訂單編號
// 你需要在循環之前定義一個變量，用於跟蹤是否有"未付款"的訂單
$hasUnpaidOrder = false;
        while ($row = $result->fetch_assoc()) : 
            // 只有當Status為"未付款"時才設置$hasUnpaidOrder為真
if ($row["Status"] === "未付款") {
$hasUnpaidOrder = true;
}
        ?>
<?php if ($row["Purchase_OrderID"] != $previousOrderID) : ?>
    <div class="card mt-2 order"style="margin: 5px;" data-status="<?= $row["Status"] ?>">
        <div class="order-card" data-order-id="<?= $row["Purchase_OrderID"] ?>">
            <div class="card-body">
                <div class="row">
                    <div class="card-body col-md-2 d-flex justify-content-center align-items-center"><?= $row["Date"] ?></div>
                    <div class="card-body col-md-1 d-flex justify-content-center align-items-center"><?= $row["Purchase_OrderID"] ?></div>
                    <div class="card-body col-md-2 d-flex justify-content-center align-items-center inputdiv">
                        <input type="text" class="form-control transfer-input" value="<?= $row["Transfer"] ?>" placeholder="轉帳後五碼">
                    </div>

                    <div class="card-body col-md-1 d-flex justify-content-center align-items-center">
                    <button class="btn btn-warning save-btn" data-order-id="<?= $row["Purchase_OrderID"] ?>">儲存</button>

                    </div>
                    <div class="card-body col-md-1 d-flex justify-content-center align-items-center total-purchase"></div>
                    <div class="card-body col-md-1 d-flex justify-content-center align-items-center"><?= $row["Status"] ?></div>
                    <div class="card-body col-md-1 d-flex justify-content-center align-items-center">
                        <button class="btn btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $row["Purchase_OrderID"] ?>" aria-expanded="false" aria-controls="collapse<?= $row["Purchase_OrderID"] ?>">展開</button>
                    </div>
                    <?php if ($hasUnpaidOrder && $row["Status"] === "未付款") : ?> <!--根據$hasUnpaidOrder的值來決定是否顯示刪除按鈕-->
        <div class="card-body order col-md-1 d-flex justify-content-center align-items-center" data-status="<?= $row["Status"] ?>">
        <button class="btn btn-danger del-btn order" data-order-id="<?= $row["Purchase_OrderID"] ?>" data-status="<?= $row["Status"] ?>">刪除</button>
        </div>
    <?php endif; ?> 
                </div>
                <?php
// 設定總金額變數
$totalPrice = 0;
?>
    <div class="collapse" id="collapse<?= $row["Purchase_OrderID"] ?>">
        <div class="card card-body" style="margin: 10px;">
            <table>
                <thead>
                <tr>
                    <th>購買商品</th>
                    <th>數量</th>
                    <th>價格</th>
                </tr>
                </thead>
                <tbody>
                <?php
                // 查詢資料庫並插入子表格數據
                $order_id = $row["Purchase_OrderID"];
                $subSql = "SELECT ProductName, Purchase_Quantity, Purchase_Price FROM purchase_order WHERE Purchase_OrderID = ?";
                $subStmt = $conn->prepare($subSql);

                if ($subStmt) {
                    $subStmt->bind_param("i", $order_id);
                    $subStmt->execute();
                    $subResult = $subStmt->get_result();

                    while ($subRow = $subResult->fetch_assoc()) : ?>
                        <tr>
                            <td><?= $subRow["ProductName"] ?></td>
                            <td><?= $subRow["Purchase_Quantity"] ?></td>
                            <td><?= $subRow["Purchase_Price"] ?></td>
                        </tr>
                        <?php
// 將每個商品的價格加到總金額
$totalPrice += $subRow["Purchase_Price"];
?>
                    <?php endwhile;
                    // 在子表格叠代完成後，輸出總購買金額
        echo '<tr>';
        echo '<td colspan="2">總購買金額：</td>';
        echo '<td class="total-purchase-price">' . $totalPrice . '</td>';
        echo '</tr>';

                    $subStmt->close();
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>   
</div> 
            
</div>
            
</div>
       

    <?php endif; ?>
    
    <?php $previousOrderID = $row["Purchase_OrderID"]; // Update the previous order ID ?>
    
<?php endwhile; ?>
                
        
        
         <!-- 已取消訂單區塊 -->
 <?php
 // 設定資料庫連線參數
 $host = 'localhost';
 $user = 'root';
 $password = '';
 $dbname = 'hongteag_goose';

 // 建立資料庫連線
 $conn = new mysqli($host, $user, $password, $dbname);

 // 檢查連線是否成功
 if ($conn->connect_error) {
     die("連線失敗: " . $conn->connect_error);
 }
 // 執行 SQL 查詢語句

 // 只找符合目前已登入的帳戶資訊的資料
$currentAccount = $_SESSION['account'];
$sql = "SELECT Product_ID, ProductName, Purchase_OrderID, Purchase_Quantity, Purchase_Price, Status, Transfer, Date 
FROM purchase_order WHERE Account = '$currentAccount' AND Status = '已取消' ORDER BY Date DESC";  // 使用 ORDER BY Date DESC 按日期降序排列";
$result = $conn->query($sql);
?>

 <!-- My Orders content -->
 <div class="mt-4">
 <span><h1 style="display: inline;">已取消訂單</h1>已取消訂單資訊將於訂單成立時間四天後刪除</span>
</div>  
<?php 
$previousOrderID = null; // 用於跟蹤前一筆訂單編號

while ($row = $result->fetch_assoc()) : 
    if ($row["Purchase_OrderID"] != $previousOrderID) : ?>
    <div class="card mt-2" style="margin: 5px;">
        <div class="order-card" data-order-id="<?= $row["Purchase_OrderID"] ?>">
            <div class="card-body">
                <div class="row">
                    <div class="card-body col-md-2 d-flex justify-content-center align-items-center"><?= $row["Date"] ?></div>
                    <div class="card-body col-md-2 d-flex justify-content-center align-items-center"><?= $row["Purchase_OrderID"] ?></div>
                    <div class="card-body col-md-2 d-flex justify-content-center align-items-center"><?= $row["Status"] ?></div>
                    <!-- <div class="card-body col-md-1 d-flex justify-content-center align-items-center">
                        <button class="btn btn-danger del-btn" data-order-id="<?= $row["Purchase_OrderID"] ?>">刪除</button>
                    </div> -->
                    <div class="card-body col-md-1 d-flex justify-content-center align-items-center">
                        <button class="btn btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $row["Purchase_OrderID"] ?>" aria-expanded="false" aria-controls="collapse<?= $row["Purchase_OrderID"] ?>">展開</button>
                    </div>
                </div>      
                <?php
                // 設定總金額變數
                $totalPrice = 0;
                ?>
                <div class="collapse" id="collapse<?= $row["Purchase_OrderID"] ?>">
                    <div class="card card-body" style="margin: 10px;">
                        <table>
                            <thead>
                            <tr>
                                <th>購買商品</th>
                                <th>數量</th>
                                <th>價格</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            // Query the database and insert subtable data
                            $order_id = $row["Purchase_OrderID"];
                            $subSql = "SELECT ProductName, Purchase_Quantity, Purchase_Price FROM purchase_order WHERE Purchase_OrderID = ?";
                            $subStmt = $conn->prepare($subSql);

                            if ($subStmt) {
                                $subStmt->bind_param("i", $order_id);
                                $subStmt->execute();
                                $subResult = $subStmt->get_result();

                                while ($subRow = $subResult->fetch_assoc()) : ?>
                                    <tr>
                                        <td><?= $subRow["ProductName"] ?></td>
                                        <td><?= $subRow["Purchase_Quantity"] ?></td>
                                        <td><?= $subRow["Purchase_Price"] ?></td>
                                    </tr>
                                    <?php
                                    // 將每個商品的價格加到總金額
                                    $totalPrice += $subRow["Purchase_Price"];
                                endwhile;

                                $subStmt->close();
                            }
                            ?>
                            </tbody>
                        </table>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <strong>總金額: $<?= $totalPrice ?></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php $previousOrderID = $row["Purchase_OrderID"]; // Update the previous order ID ?>
<?php endwhile; ?>

<?php
// 關閉資料庫連線
$conn->close();
?>  
</div>
</div>
</div>
 <footer class="p-4 border-top mt-auto">
                    <!-- ...existing code... -->
                    <div class="p-5 text-center_time bg-light mt-4">
                        <h1>營業資訊</h1>
                        <div class="row">
                            <div class="col-md-3">
                                <h3>光復市場</h3>
                                <img src="images/Guangfu.jpg" alt="光復市場圖片" class="img-fluid rounded-circle">
                            </div>
                            <div class="col-md-3">
                                <h3>永春市場</h3>
                                <img src="images/Yongchun.jpg" alt="永春市場圖片" class="img-fluid rounded-circle">      
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
                                <div class="my-auto">
                                    <h4 class="text-center_time">營業時間：早上6:00 - 售完為止</h4>
                                    <br>
                                    <a href="shoppage.php" class="btn btn-warning">立即下單</a>
                                    <a href="#" class="btn btn-outline-warning disabled">提供宅配服務 <img src="images/delivery.png" style="width: 20px;height:20px;"></a>
                </div>
                </div>

 </footer>
        
        

       

                <!--底部欄 -->
    <footer class="p-4 border-top">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3>台南下營 鋐茶鵝</h3>
            </div>
            <div class="col-md-3">
            <h5>關於我們</h5>
                <ul class="list-unstyled">
                    <li><a href="about_login.php" class="text-decoration">關於鋐茶鵝</a></li>
                    <li><a href="index_login.php#營業資訊" class="text-decoration">營業資訊</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>購物須知</h5>
                <ul class="list-unstyled">
                   <!--<li><a href="#" class="text-decoration-none text-warning">付款方式</a></li>
                    <li><a href="#" class="text-decoration-none text-warning">運送方式</a></li>-->
                    <li><a href="common_quest_login.php" class="text-decoration">常見問題</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>聯絡資訊</h5>
                <ul class="list-unstyled">
                    <li><a href="https://lin.ee/xkDBL1w" class="text-decoration">LINE：官方LINE帳號</a></li>
                    <li><a href="https://www.facebook.com/profile.php?id=100091698824828&mibextid=ZbWKwL"target="_blank" class="text-decoration">FACEBOOK：台南下營 鋐茶鵝</a></li>
					<li><a href="mailto:angel19971314@gmail.com" class="text-decoration">E-mail：angel19971314@gmail.com</a></li>
					<li><span style="color:#FEC107">電話：0966218624</span></li>
                </ul>
            </div>
        </div>
    </div>
    </footer>
    <div class="bg-warning text-center">台南下營 鋐茶鵝 © 2023</div>

              <!-- 登入彈窗區塊，有與JS配合 -->
<div id="login-modal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Close button -->
            <div class="modal-header">
                <h5 class="modal-title">會員</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Logout form -->
            <form class="form1" action="php/logout.php" method="post" id="logout-form">
                <div class="modal-footer">
                    <!-- 顯示使用者名稱 -->
                    <span>歡迎，<?php echo $_SESSION['username']; ?></span>
                    <button type="button" class="btn btn-warning" onclick="redirectTorevise()">會員中心</button>
                    <!-- 登出按鈕 -->
                    <button type="submit" class="btn btn-outline-warning" name="action" value="logout">登出</button>
                </div>
            </form>
        </div>
    </div>
</div>
    </div>
                
     <!--側邊攔-->
<div class="sidebar">
    <a href="https://www.facebook.com/profile.php?id=100091698824828&mibextid=ZbWKwL"target="_blank"><img src="images/facebook.png" style="width: 35px;height:35px;" ></a>
    <a href="https://www.instagram.com/"><img src="images/Instagram.png" style="width: 35px;height:35px;"></a>
    <a href="https://lin.ee/xkDBL1w"><img src="images/line.png" style="width: 35px;height:35px;"></a>
    <a href="#" class="back-to-top"><img src="images/up-arrows.png" style="width: 35px;height:35px;"></a>
</div>

    </body>
   
    <script>
    function redirectTorevise() {
        window.location.href = "ReviseMember.php";
    }

    document.addEventListener("DOMContentLoaded", function() {
    var memberLoginButton = document.querySelector(".nav-item a[data-bs-target='#login-modal']");

    // 檢查使用者是否已登入
    if (<?php echo isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] === true ? 'true' : 'false'; ?>) {
        var username = <?php echo isset($_SESSION['username']) ? json_encode($_SESSION['username']) : '""'; ?>;
        memberLoginButton.textContent = "會員:"+username; // 修改按鈕文字為使用者名稱
        memberLoginButton.href = "member.html?username=" + encodeURIComponent(username); // 設定跳轉連結到會員中心
    }else {
        // 如果未登錄，顯示登錄窗口並禁用關閉按鈕
        var loginModal = document.getElementById('login-modal');
        loginModal.style.display = 'block';

        var loginCloseButton = document.getElementById('close-button');
        loginCloseButton.style.display = 'none';

        var mainpage = document.getElementById('main-section');
        mainpage.style.display = 'none';
    }
});
</script>


<script>
const toggleButtons = document.querySelectorAll('.toggle-btn');

toggleButtons.forEach(button => {
    button.addEventListener('click', () => {
        const row = button.parentElement.parentElement;
        const subRow = row.nextElementSibling;

        if (subRow && subRow.classList.contains('sub-table-row')) {
            // 子表格已存在，切換可見性以實現展開/收起
            if (subRow.style.display === 'table-row') {
                subRow.style.display = 'none'; // 收起
            } else {
                subRow.style.display = 'table-row'; // 展開
            }
}})
    });
  // 在頁面載入時執行，用於顯示所有子表格
  document.addEventListener("DOMContentLoaded", () => {
    const toggleButtons = document.querySelectorAll('.toggle-btn');

    toggleButtons.forEach(button => {
        button.addEventListener('click', () => {
            const row = button.parentElement.parentElement;
            const subRow = row.nextElementSibling;

            if (subRow && subRow.classList.contains('sub-table-row')) {
                // 子表格已存在，切換可見性以實現展開/收起
                if (subRow.style.display === 'table-row') {
                    subRow.style.display = 'none'; // 收起
                } else {
                    subRow.style.display = 'table-row'; // 展開
                }
            } 
            });
    });
});

</script>
<script>//轉帳代碼更新功能
    $(document).ready(function () {     //等待頁面完全載入
        $('.save-btn').click(function () {
            const orderID = $(this).data('order-id');//尋找當前點選的save-btn按紐的data-order-id的值
            const transferCode = $(this).closest('.row').find('.transfer-input').val();//尋找跟當前點選的save-btn按鈕最近的class=row，
            //再找他的class=transfer-input的值
            
            // 發送 AJAX 請求到後端以更新數據庫中的 transfer 欄位
            $.ajax({
                type: 'POST',
                url: 'php/update_transfer.php', // 指向處理更新的後端腳本
                data: {
                    orderID: orderID,
                    transferCode: transferCode
                },
                success: function (response) {
                    // 在成功後執行的操作，可以是刷新頁面或其他處理
                    alert('轉帳號碼已更新');
                    location.reload(); // 重整頁面
                },
                error: function () {
                    alert('更新失敗，請重試');
                    location.reload(); // 重整頁面
                }
            });
        });
    });
</script>
<script>//取消訂單功能
    $(document).ready(function() {
        $(".del-btn").click(function() {
            var orderId = $(this).data("order-id");
            if (confirm("確定要取消訂單" + orderId + "嗎？")) {
                // 發送 AJAX 請求到伺服器
                $.ajax({
                    method: "POST",
                    url: "php/cancel_order.php", // 執行刪除操作的PHP文件
                    data: { orderID: orderId },
                    success: function(response) {
                        // 在成功後，刷新頁面或者從列表中移除該訂單
                        alert("取消訂單" + orderId + "成功!");
                        location.reload(); // 刷新頁面
                    }
                });
            }
        });
    });
</script>
<!-- 每十分鐘自動重新整理頁面，確保是抓最新資料 -->
<script>
    setTimeout(function() {
    location.reload();
}, 600000); // 10分鐘 = 600000毫秒

</script>

<!-- 篩選狀態功能 -->
<script>
    // 獲取 select 元素
var statusFilter = document.getElementById("statusFilter");

// 監聽 select 元素的變化
statusFilter.addEventListener("change", function() {
    var selectedStatus = this.value;
    filterOrdersByStatus(selectedStatus);
});

// 根據選擇的狀態篩選訂單
function filterOrdersByStatus(selectedStatus) {
    // 獲取所有訂單元素
    var orders = document.querySelectorAll(".order");

    // 遍歷訂單元素，根據選擇的狀態顯示或隱藏訂單
    for (var i = 0; i < orders.length; i++) {
        var order = orders[i];
        var orderStatus = order.getAttribute("data-status");

        if (selectedStatus === "all" || orderStatus === selectedStatus) {
            // 顯示訂單
            order.style.display = "block";   
        } else {
            // 隱藏訂單
            order.style.display = "none";
        }
    }
}
</script>
<!-- 腳本測試按鈕 -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // 選取按鈕元素
        var deleteButton = document.getElementById("deleteOrderButton");

        // 添加點擊事件監聽器
        deleteButton.addEventListener("click", function() {
            // 發送 AJAX 請求來執行 autodelete_order.php(測試可更改檔案)
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "php/autocancel_order.php", true);

            // 設置請求頭，如果需要的話
            // xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // 請求成功
                    alert("已执行 autodelete_order.php");
                } else if (xhr.readyState === 4 && xhr.status !== 200) {
                    // 請求失敗
                    alert("执行 autodelete_order.php 失败");
                }
            };

            // 發送請求
            xhr.send();
        });
    });
</script>

<script>
    // 在頁面加載完畢後執行
$(document).ready(function() {
    // 遍歷所有主訂單的子表格
    $('.order-card').each(function() {
        var orderCard = $(this);
        var totalPurchasePrice = 0;

        // 查找與當前主訂單關聯的子表格中的總購買金額
        orderCard.find('.total-purchase-price').each(function() {
            totalPurchasePrice += parseFloat($(this).text()); // 將金額轉換為浮點數並累加
        });

        // 將總購買金額顯示在主訂單中
        orderCard.find('.card-body.col-md-1.d-flex.justify-content-center.align-items-center.total-purchase').text('總金額：' + totalPurchasePrice + '元');
    });
});

</script>

    </html>
  
    
    
    
    
    
    