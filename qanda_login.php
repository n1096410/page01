<?php
session_start();
$account = $_SESSION['account'];
?>
<!DOCTYPE html>   
<html lang="zh-Hant-Tw">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- <meta name="viewport" content="width=device-width"> -->
    <meta name="viewport" content="width=1024">
    <link href="image/logoicon.ico" rel="shortcut icon"/>  
    <title>台南下營鋐茶鵝</title>
    <!-- <link rel="stylesheet" href="newstyle.css"> -->
    <link rel="stylesheet" type="text/css" href="newstyle.css?version=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="qanda.css?version=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>    
  <!--以下為頁首部份-->
  
  <div class="headesize">
  <div class="header wrap">
  <a href="chang.php"><img class="logo" src="image/headlogo.png"></a>

    <!-- <img class="logo" src="image/headlogo.png" width="25%"> -->
    <nav>
        <ul class="menu">
            <li><a href="#">關於我們</a></li>
            <!-- <li><a href="#">商品總覽</a></li> -->
            <li><a href="shoppingpage.php">線上訂購</a></li>
            <li><a href="qanda_nologin.php">常見問題</a></li>
            <li><a href="#">聯絡我們</a></li>
            <li id="hellomember" onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)">
                <a href="#"><img class="avatar" src="image\S__48398348.jpg" alt="Avatar"><?php echo $account; ?>會員您好</a>
                  <ul>
                    <li id="memberroom"><a href="MemberProfile.php">會員專區</a></li>
                    <li id="logout"><a href="chang.php">登出</a></li>
                  </ul>
                </li>
                <li id="cartb" button style="width: 160px;"><a href="#"><img src="../image/shoppingcart.png" alt="shopping.png">購物車</a></li>
            </ul>
        </ul>
    </nav>
   </div>
    <div class="qanda_div1">
        <p><b>首頁/Q&A</b></p>
    </div>
	 <table class="qanda_main" width="60%" border="0" align="center">
  <tbody>
    <tr>
      <td>Q:問題1</td>
    </tr>
    <tr>
      <td>A:答案1</td>
    </tr>
    <tr>
      <td>Q:問題2</td>
    </tr>
    <tr>
      <td>A:答案2</td>
    </tr>
    <tr>
      <td>Q:問題3</td>
    </tr>
    <tr>
      <td>A:答案3</td>
    </tr>
    <tr>
      <td>Q:問題4</td>
    </tr>
    <tr>
      <td>A:答案4</td>
    </tr>
    <tr>
      <td>Q:問題5</td>
    </tr>
    <tr>
      <td>A:答案5</td>
    </tr>
  </tbody>
</table>

   <title>登入</title>
  <!-- <button onclick="document.getElementById('login-modal').style.display='block'">
      登入
    </button> -->

    <!-- 登入彈跳視窗 -->
    <div id="login-modal" class="modal">
      <div class="modal-content">
        <!-- 關閉按鈕 -->
        <span class="close" onclick="document.getElementById('login-modal').style.display='none'">
          &times;
        </span>
        <!-- 登入表單 -->
        <form class="form1" action="show_form.php" method="post">
          <label for="account">帳號:</label>
          <input type="text" id="account" name="account"required><br><br>
          <label for="password" >密碼:</label>
          <input type="password" id="password" name="password" required><br><br>
        <div class="big-login-button">
          <input class="login-button" type="submit" value="會員登入"></form>
          <form class="form1" action="member.php" method="post">
          <input class="login-button" type="submit" value="註冊會員"></form>
        </div>
        </form>
      </div>
    </div>

    <div class="sidebar001">
      <a href="https://www.facebook.com.tw/"><img src="../image/Facebook_icon.png" style="width: 40px;height:40px;" ></a>
      <a href="https://www.instagram.com/"><img src="../image/Instagram.png" style="width: 40px;height:40px;"></a>
      <a href="https://line.me/zh-hant/"><img src="../image/LINE_logo.png" style="width: 40px;height:40px;"></a>
      <a href="#" class="gotop"><img src="../image/up.png" style="width: 40px;height:40px;"></a>
    </div>

<div class="qanda_footer">
<footer>
  <!-- <div>
  <img class="circle-imaged" src="image\S__48398348.jpg" alt="Avatar">
  </div> -->
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
</div>
  </body>

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

    $('.gotop').click(function(e) {
    e.preventDefault(); // 防止默認行為
    $('html, body').animate({
      scrollTop: 0 //scrollTop設定0跳到網頁最上方
    }, 500); // 持續滑動 0.5 秒
  });
  // $('.mySlides').offset().top

  var modal = document.getElementById('login-modal');
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }

  </script>
</html>