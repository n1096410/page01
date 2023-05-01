<?php
session_start();
$account = $_SESSION['account'];
?>

<!DOCTYPE html>
<meta charset="utf-8" />
<link rel="stylesheet" href="MemberProfileDesign.css">
<html>
<head>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#">LOGO</a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">首頁</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">最新消息</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">關於鋐茶鵝</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">商品總覽</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">購物須知</a>
      </li>
      <li class="nav-item">      
        <img class="avatar" src="image\S__48398348.jpg" alt="Avatar">
        <a class="nav-link" href="#"> <?php echo $account; ?> 會員您好!</a>        
        <span class="username"></span>
      </li>
      <li class="nav-item">
        <a href="yourpage.html">
        <img class="avatar" src="image\S__48398348.jpg" alt="Avatar">
        </a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="left">
    <div class="container-fluid">
      <div class="row">
        <div class="col-8">
        <div class="list-container">
          <ul class="list-unstyled">
            <br><br><br><br>
            <li><a href="#">會員資料&修改資料</a><hr></li>
            <li><a href="#">訂購清單</a><hr></li>
            <li><a href="#">我的優惠券</a><hr></li>
            <li><a href="#">歷史紀錄</a><hr></li>
            <li><a href="#">帳號設定</a><hr></li>
          </ul>
        </div>
        </div>
      </div>
    </div>
  </div>
    <div class= "right">
      <br><br><br>
        <table>
        <tr>
            <td style=" text-align: center;">
              <img class="circle-image" src="image\S__48398348.jpg" alt="Avatar">
                <div class="avatar-upload">
                <button class="change-avatar-btn" onclick="changeAvatar()"><a href="#">更換頭貼</a></button>
                </div> 
            </td>
            <td>
            <table style="border-spacing: 10px; ">
                <tr>
                  <td>姓名</td>
                  <td><input type="text" id="name" name="name" ></td>
                </tr>
                <tr>
                  <td>性別</td>
                  <td><input type="text" id="gender" name="gender" ></td>
                </tr>
                <tr>
                  <td>生日</td>
                  <td><input type="text" id="birthday" name="birthday" ></td>
                </tr>
                <tr>
                  <td>電子信箱</td>
                  <td><input type="text" id="email" name="email"></td>
                </tr>
            </table>       
              <br>
              <button><a>修改資料</a></button>
            </td>
        </tr>
      </table>         
    </div>
</div>

</body>
<footer class="footer">
  <div>
  <img class="circle-imaged" src="image\S__48398348.jpg" alt="Avatar">
  </div>
  <div class="about">
    <h3>關於我們</h3>
    <ul>
      <li><a href="#">公司簡介</a></li>
      <li><a href="#">人才招募</a></li>
      <li><a href="#">隱私權政策</a></li>
    </ul>
  </div>
  <div class="shopping">
    <h3>購物須知</h3>
    <ul>
      <li><a href="#">配送方式</a></li>
      <li><a href="#">退貨政策</a></li>
      <li><a href="#">付款方式</a></li>
    </ul>
  </div>
  <div class="contact">
    <h3>聯絡我們</h3>
    <ul>
      <li><a href="#">客服中心</a></li>
      <li><a href="#">服務據點</a></li>
      <li><a href="#">線上諮詢</a></li>
    </ul>
  </div>
</footer>
</html>
