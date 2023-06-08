<?php
session_start();
$account = $_SESSION['account'];
?>

<!DOCTYPE html>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">  
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="image/logoicon.ico" rel="shortcut icon"/>
<link rel="stylesheet" type="text/css" href="newstyle.css?version=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="MemberSet.css?version=<?php echo time(); ?>">
<html>
<head>

</head>
<body>
<div class="headesize">
  <div class="header wrap">
  <a href="chang.php"><img class="logo" src="image/headlogo.png"></a>
    <!-- <img class="logo" src="image/headlogo.png" width="25%"> -->
    <nav>
        <ul class="menu">
            <li><a href="#">關於我們</a></li>
            <li><a href="#">商品總覽</a></li>
            <li><a href="#">線上訂購</a></li>
            <li><a href="#">常見問題</a></li>
            <li><a href="#">聯絡我們</a></li>
            <li onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)" style="width: 180px;">
              <!-- <div class="Profile-li">       -->
              <a href="#"><img class="avatar" src="image\S__48398348.jpg" alt="Avatar">
              <?php echo $account; ?> 會員您好!</a>        
              <span class="username"></span>
                <ul>
                  <li style="width: 160px;"><a href="MemberProfile.php">會員專區</a></li>
                  <li style="width: 160px;"><a href="chang.php">登出</a></li>
                </ul>
              <!-- </div> -->
            </li>
            <li button onclick="document.getElementById('shoppingcart').style.display='block'" style="width: 160px;">
            <a href="#"><img src="../image/shoppingcart.png" alt="shopping.png">購物車</a></li>
            <!-- <li class="nav-item">
              <a href="yourpage.html">
              <img class="avatar" src="image\S__48398348.jpg" alt="Avatar">
              </a>
            </li> -->
            <!-- <li button onclick="document.getElementById('login-modal').style.display='block'"><a href="#">會員登入</a> -->
        </ul>
    </nav>
   </div>
</div>
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
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
        <a class="nav-link" href="#"> <?php echo $account; ?>會員您好!</a>        
        <span class="username"></span>
      </li>
      <li class="nav-item">
        <a href="yourpage.html">
        <img class="avatar" src="image\S__48398348.jpg" alt="Avatar">
        </a>
      </li>
    </ul>
  </div>
</nav> -->

<div class="container">
  <div class="left">
    <div class="container-fluid">
      <div class="row">
        <div class="col-8">
        <div class="list-container">
          <ul class="list-unstyled">
            <br><br><br><br>
            <li><a href="MemberProfile.php">會員資料&修改資料</a><hr></li>
            <li><a href="#">訂購清單</a><hr></li>
            <li><a href="#">我的優惠券</a><hr></li>
            <li><a href="shophistory.php">歷史紀錄</a><hr></li>
            <li><a href="MemberSet.php">帳號設定</a><hr></li>
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
          <h1>修改密碼</h1>
            <td>
            <table style="border-spacing: 10px; ">
                <tr>
                  <td>舊密碼</td>
                  <td><input type="text" id="name" name="name" ></td>
                </tr>
                <tr>
                  <td>新密碼</td>
                  <td><input type="text" id="gender" name="gender" ></td>
                </tr>
                <tr>
                  <td>確認密碼</td>
                  <td><input type="text" id="birthday" name="birthday" ></td>
                </tr>
            </table>       
              <br>
              <button><a>確認修改</a></button>&nbsp;&nbsp;&nbsp;&nbsp;<button><a>取消</a></button>
            </td>
            <td style=" text-align: center;">
              <img class="square-image" src="image\S__48398348.jpg" alt="Avatar">
                <div class="avatar-upload">
                
                </div> 
            </td>
        </tr>
      </table>         
    </div>
</div>

</body>
<footer class="MemberProfilefooter" style="top:100%;">
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    function displaySubMenu(li) {

        var subMenu = li.getElementsByTagName("ul")[0];
    
        subMenu.style.display = "block";
    
    }
    
    function hideSubMenu(li) {
    
        var subMenu = li.getElementsByTagName("ul")[0];
    
        subMenu.style.display = "none";    
    }
    //下面是右側欄跳至最上方的按鈕的動畫效果

    $('.gotop').click(function(e) {
    e.preventDefault(); // 防止默認行為
    $('html, body').animate({
      scrollTop: 0  //scrollTop設定0跳到網頁最上方
    }, 500); // 持續滑動 0.5 秒
  });
  </script>
</html>
