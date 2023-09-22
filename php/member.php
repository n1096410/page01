
<!DOCTYPE html>
<?php session_start(); 
// 檢查使用者是否已登入
if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] === true) {
    $username = $_SESSION['username']; // 獲取使用者名稱
    $loginText =  "會員：$username"; // 將登入文字設置為使用者名稱
} else {
    $loginText = "會員登入"; // 預設為 "會員登入"
}
?>  
<html lang="zh-Hant-Tw">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="image/logoicon.ico" rel="shortcut icon"/>  
    <title>台南下營鋐茶鵝</title>
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <link rel="stylesheet" href="css/meber.css" />
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
        <div class="navbar navbar-expand-lg p-3" style="background-color: #FFE66F">
            <div class="container">
                <a href="index_nologin.php"><img style="width: 200px;" src="images/logo.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a href="#" class="text-black">關於我們</a></li>
                        <!-- <li><a href="#">商品總覽</a></li> -->
                        <li class="nav-item"><a href="#" data-bs-toggle="modal" data-bs-target="#login-modal" class="text-black">線上訂購</a></li>
                        <li class="nav-item"><a href="qanda_nologin.php" class="text-black">常見問題</a></li>
                        <li class="nav-item"><a href="#" class="text-black">聯絡我們</a></li>
                        <li class="nav-item"><a href="#" data-bs-toggle="modal" data-bs-target="#login-modal" class="text-black"><?php echo $loginText; ?></a></li>
                        <li class="nav-item">
                            <a href="Shopping Cart.html" class="d-flex align-items-center text-black">
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
                    <a href="meber.html" class="list-group-item list-group-item-action">會員資料&修改資料</a>
                    <a href="orders.php" class="list-group-item list-group-item-action">我的訂單</a>
                    <a href="history.html" class="list-group-item list-group-item-action">歷史紀錄</a>
                    <a href="password.html" class="list-group-item list-group-item-action">更改密碼</a>
                </div>
            </div>
            <div class="col-md-9">
                   
                <!-- 右側內容 -->
                <?php if (isset($_GET['action']) && $_GET['action'] === 'member-data'): ?>
                    <div class="card">
                        <div class="card-header">會員資料</div>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="name" class="form-label">姓名</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $memberData['姓名']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">電子郵件</label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $memberData['電子郵件']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="gender" class="form-label">性別</label>
                                    <select class="form-select" id="gender" name="gender">
                                        <option value="男" <?php if ($memberData['性別'] === '男') echo 'selected'; ?>>男</option>
                                        <option value="女" <?php if ($memberData['性別'] === '女') echo 'selected'; ?>>女</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="birthday" class="form-label">生日</label>
                                    <input type="date" class="form-control" id="birthday" name="birthday" value="<?php echo $memberData['生日']; ?>">
                                </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">地址</label>
                                        <input type="text" class="form-control" id="address" name="address" value="<?php echo $memberData['地址']; ?>">
                                    </div>
                                <button type="submit" class="btn btn-primary">更新資料</button>
                            </form>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
         <!--營業時間區塊-->
         <div class="p-5 text-center_time bg-light">
            <h1>營業資訊</h1>
            <div class="container">
            <div class="row">
            <div class="col-md-3">
            <h3>光復市場</h3>
            <img src="images/Guangfu.jpg" alt="光復市場圖片" class="img-fluid rounded-circle">
            </div>
            <div class="col-md-3">
            <h3>永春市場</h3>
            <img src="images/Yongchun.jpg" alt="永春市場圖片" class="img-fluid rounded-circle">
            </div>
                <div class="col-md-6 d-flex flex-column align-items-center">
                <div class="my-auto">
                    <h4 class="text-center_time">營業時間：早上6:00 - 售完為止</h4>
                    <br>
                    <a href="#" class="btn btn-warning">立即下單</a>
                    <a href="#" class="btn btn-outline-warning disabled">提供宅配服務 <img src="images/delivery.png" style="width: 20px;height:20px;"></a>
                </div>
                </div>
        
            </div>
            </div>
        </div>
    <!--底部欄-->
    <footer class="p-4 border-top mt-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>台南下營 鋐茶鵝</h3>
                </div>
                <div class="col-md-3">
                    <h5>關於我們</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-warning">關於紘茶鵝</a></li>
                        <li><a href="#" class="text-decoration-none text-warning">營業資訊</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>購物須知</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-warning">付款方式</a></li>
                        <li><a href="#" class="text-decoration-none text-warning">運送方式</a></li>
                        <li><a href="#" class="text-decoration-none text-warning">常見問題</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>聯絡資訊</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-warning">LINE：官方LINE帳號</a></li>
                        <li><a href="#" class="text-decoration-none text-warning">FACEBOOK：台南下營 鋐茶鵝</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="bg-warning text-center fixed-bottom">台南下營 鋐茶鵝 © 2023</div>
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
                    <!-- 登出按鈕 -->
                    <button type="submit" class="btn btn-outline-warning" name="action" value="logout">登出</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!--側邊攔-->
<div class="sidebar">
    <a href="https://www.facebook.com.tw/"><img src="images/facebook.png" style="width: 35px;height:35px;" ></a>
    <a href="https://www.instagram.com/"><img src="images/Instagram.png" style="width: 35px;height:35px;"></a>
    <a href="https://line.me/zh-hant/"><img src="images/line.png" style="width: 35px;height:35px;"></a>
    <a href="#" class="back-to-top"><img src="images/up-arrows.png" style="width: 35px;height:35px;"></a>
</div>

</body>
<script>
    

    document.addEventListener("DOMContentLoaded", function() {
    var memberLoginButton = document.querySelector(".nav-item a[data-bs-target='#login-modal']");

    // 檢查使用者是否已登入
    if (<?php echo isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] === true ? 'true' : 'false'; ?>) {
        var username = <?php echo isset($_SESSION['username']) ? json_encode($_SESSION['username']) : '""'; ?>;
        memberLoginButton.textContent = "會員:"+username; // 修改按鈕文字為使用者名稱
        memberLoginButton.href = "member.html?username=" + encodeURIComponent(username); // 設定跳轉連結到會員中心
    }
});
</script>
</html>
