<!DOCTYPE html>   
<html lang="zh-Hant-Tw">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=1024">
    <link href="image/logoicon.ico" rel="shortcut icon"/>  
    <title>台南下營鋐茶鵝</title>
    <!-- <link rel="stylesheet" href="newstyle.css"> -->
    <link rel="stylesheet" type="text/css" href="newstyle.css?version=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="contact_us.css?version=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>    
  <!--以下為頁首部份-->
  
  <div class="headesize">
  <div class="header wrap">
    <a href="chang.php"><img class="logo" src="image/headlogo.png" ></a>
    <nav>
        <ul class="menu">
            <li><a href="#">關於我們</a></li>
            <!-- <li><a href="#">商品總覽</a></li> -->
            <li button onclick="document.getElementById('login-modal').style.display='block'"><a href="#">線上訂購</a></li>
            <li><a href="qanda_nologin.php">常見問題</a></li>
            <li><a href="#">聯絡我們</a></li>
            <li button onclick="document.getElementById('login-modal').style.display='block'"><a href="#">會員登入</a></li>
        </ul>
    </nav>
   </div>
    <div class="contact_us_div1">
        <p><b>首頁/聯絡我們</b></p>
    </div>
    <div class="contact_us_main">
        <div class="information">
            <h2>客服資訊</h2>
                <p>電話：06-2923511/07010005910</p>
                <p>客服時間：週一至週五08:00-17:00</p>
            <div class="fbandline">
                <div>
                    <img src="../image/Facebook_icon.png" alt="fb">
                    <p>鋐茶鵝粉絲專頁</p>
                </div>
                <div>
                    <img src="../image/LINE_logo.png" alt="line">
                    <p>鋐茶鵝LINE官方帳號</p>
                </div>  
            </div>
        </div>
        <div class="contact_form">
            <h2>聯絡表單</h2>
            <div class="contact_table">
                <table style="border-spacing: 10px; align:center">
                    <tr>
                    <td>姓名</td>
                    <td><input type="text" id="name" name="name" ></td>
                    </tr>
                    <tr>
                    <td>性別</td>
                    <td><input type="text" id="gender" name="gender" ></td>
                    </tr>
                    <tr>
                    <td>電話號碼</td>
                    <td><input type="tel" id="phone" name="phone" ></td>
                    </tr>
                    <tr>
                    <td>電子信箱</td>
                    <td><input type="text" id="email" name="email"></td>
                    </tr>
                </table>
				<table width="50%" border="0">
                    <tbody>
                        <tr>
                        <td>問題內容</td>
                        <td colspan="3"><input type="text" id="question" name="question"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                <br>
                <button><a>送出</a></button>
        </div> 
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.272404452623!2d120.26949697443848!3d23.233172408437973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e875daa903c1b%3A0xc236601c4b9dde13!2
      z5LiL54ef6Zi_5paH54e76Iy26bWd!5e0!3m2!1szh-TW!2stw!4v1682594912047!5m2!1szh-TW!2stw" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="contact_us_map"></iframe>



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

<div class="contact_us_footer">
<footer>
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

  var modal = document.getElementById('login-modal');
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }

  </script>
</html>