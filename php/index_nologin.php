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
    <link rel="stylesheet" type="text/css" href="css/main.css?version=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/index.css?version=<?php echo time(); ?>">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="JS/main.js"></script>
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
                <a href="index_nologin.php"><img style="width: 200px;" src="images/logo.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="#" class="text-black">關於我們</a></li>
                    <!-- <li><a href="#">商品總覽</a></li> -->
                    <li class="nav-item"><a href="shoppage.php" class="text-black">線上訂購</a></li>
                    <li class="nav-item"><a href="qanda_nologin.php" class="text-black">常見問題</a></li>
                    <li class="nav-item"><a href="#" class="text-black">聯絡我們</a></li>
                    <li class="nav-item"><a href="#" data-bs-toggle="modal" data-bs-target="#login-modal" class="text-black"><?php echo $loginText; ?></a></li>
                    <li class="nav-item">
                        <a href="register.html" class="d-flex align-items-center text-black">
                            <img src="images/shopping-cart.png" width="20" height="20" class="me-2">購物車
                        </a>
                    </li>

                </ul>
            </div>
            </div>
        </div>
    </nav>

<!--幻燈片區塊-->
<div id="carouselExample" class="carousel slide" data-bs-ride="carouse1">
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/slide1.png" class="d-block w-100" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="images/slide2.png" class="d-block w-100" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img src="images/slide3.png" class="d-block w-100" alt="Slide 3">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- 最新消息區塊 -->
    <div class="newsdiv1">
            <h1 class="newstitle">最新消息</h1>
<div class="newsdiv2">
    <div class="news">
        <div class="newstext">
          <p class="newsdate">2023/05/01</p><p class="newsdata">最新消息一</p><br>
          <p class="newsdate">2023/04/30</p><p class="newsdata">最新消息二</p><br>
          <p class="newsdate">2023/04/29</p><p class="newsdata">最新消息三</p><br>

        </div>
</div>

</div>
</div>
</div>

    <!--熱門品項區塊-->
<div class="p-5 text-center_hot">
<div class="container">
    <h1>熱門品項</h1>
    <br>
    <div class="row g-1">
        <div class="col-lg">
            <div class="card lg">
                <img src="images/230505_5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="shoppage.html" class="btn btn-warning">前往商品</a>
                </div>
            </div>
        </div>
        <div class="col-lg">
            <div class="card lg">
                <img src="images/230505_6.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="shoppage.html" class="btn btn-warning">前往商品</a>
                </div>
            </div>
        </div>
        <div class="col-lg">
            <div class="card lg">
                <img src="images/230505_7.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="shoppage.html" class="btn btn-warning">前往商品</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!--三大堅持區塊-->
<div class="p-5 text-center_3">
    <h1>三大堅持</h1>
        <br>
        <img src="images/intro.png" class="img-fluid">
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

<!-- 登入彈窗區塊，有與JS配合 -->
<div id="login-modal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Close button -->
            <div class="modal-header">
                <h5 class="modal-title">會員登入</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- Login form -->
            <?php include 'php/login.php'; ?>

            <form class="form1" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" id="member-form">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="account">帳號:</label>
                        <input type="text" id="account" name="account" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">密碼:</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <?php if ($isLoggedIn) { ?>
                        <!-- 若已登入，顯示使用者名稱 -->
                        <span>歡迎，<?php echo $_SESSION['username']; ?></span>
                        <a href="logout.php" class="btn btn-outline-warning">登出</a>
                    <?php } else { ?>
                        <!-- 若未登入，顯示登入按鈕 -->
                        <button type="submit" class="btn btn-outline-warning" name="action" value="login">會員登入</button>
                        <button type="button" class="btn btn-warning" name="action" value="register" onclick="redirectToRegister()">註冊會員</button>
                    <?php } ?>
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
    <div class="bg-warning text-center">台南下營 鋐茶鵝 © 2023</div>
</body>
<?php
    // 檢查是否存在 logout 參數
    if (isset($_GET['logout']) && $_GET['logout'] === 'success') {
        echo '<script>alert("登出成功！");</script>';
        echo '<script>window.location.href = "index_nologin.php";</script>';
        exit;
    }
?> 

<script>
     document.getElementById("member-form").addEventListener("submit", function(event) {
        var action = event.submitter.value;

        if (action === "login") {
            // 登入操作，檢查帳號和密碼是否已填寫
            var account = document.getElementById("account").value;
            var password = document.getElementById("password").value;

            if (account.trim() === "" || password.trim() === "") {
                event.preventDefault(); // 阻止表單提交
                alert("請填寫帳號和密碼！");
            }
        }
    });

    function redirectToRegister() {
        window.location.href = "register.php";
    }

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
