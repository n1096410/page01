<!DOCTYPE html>   
<html lang="zh-Hant-Tw">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="image/logoicon.ico" rel="shortcut icon"/>  
    <title>台南下營鋐茶鵝</title>
    <!-- <link rel="stylesheet" href="newstyle.css"> -->
    <link rel="stylesheet" type="text/css" href="newstyle.css?version=<?php echo time(); ?>">
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
            <li button onclick="document.getElementById('login-modal').style.display='block'"><a href="#">線上訂購</a></li>
            <li><a href="qanda_nologin.php">常見問題</a></li>
            <li><a href="#">聯絡我們</a></li>
            <li button onclick="document.getElementById('login-modal').style.display='block'"><a href="#">會員登入</a></li>
        </ul>
    </nav>
   </div>
  <!-- Full-width images with number and caption text -->
<div id="d1">
  <div class="mySlides fade">
    <!-- <div class="numbertext">1 / 3</div> -->
    <img src="image/slide01.jpg" style="width:100% ; height:1000px;top: 130px;">
  </div>

  <div class="mySlides fade">
    <!-- <div class="numbertext">2 / 3</div> -->
    <img src="image/slide02.png" style="width:100% ;height:1000px;top: 130px;">
  </div>

  <div class="mySlides fade">
    <!--  <div class="numbertext">3 / 3</div> -->
    <img src="image/slide03.jpg" style="width:100% ;height:1000px;top: 130px;">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

 <br>

<!-- The dots/circles -->
<div class="d2" style="text-align:center; background-color: #ffff59;" >
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
	<div class="stripes"><span></span></div>
</div>
</div>
	

		<!-- <div class="right">

			<div class="subnav">

				<ul>
					<li><a href="index.html">回首頁</a></li>
					<li><a href="index.html">公告</a></li>
					<li><a href="index.html">粉絲團</a></li>
          <li><a href="index.html">Line</a></li>
				</ul>

			</div>

		</div> -->

		<div class="clearer"><span></span></div>

	</div>


		<div class="clearer"><span></span></div>

	</div>

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
    <main>
      <h2>最新消息</h2>
      <div class="news">
        <div class="newstext">
          <p style="border-right-style:solid;border-color:white">2023/05/01</p><p>最新消息一</p><br>
          <p style="border-right-style:solid;border-color:white">2023/04/30</p><p>最新消息二</p><br>
          <p style="border-right-style:solid;border-color:white">2023/04/29</p><p>最新消息三</p><br>

        </div>
        <img src="../image/slide01.jpg" alt="廣告圖" style="height: 500px;width:600px;">
      </div>
      <h2>熱門品項</h2>
      <div class="hots">
        <div style="border: 2px solid black;">
          <p><u>品項一</u></p><br>
          <p>品項內容</p>
        </div>
        <div>
          <p><u>品項二</u></p><br>
          <p>品項內容</p>
        </div>
        <div>
          <p><u>品項三</u></p><br>
          <p>品項內容</p>
        </div>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.272404452623!2d120.26949697443848!3d23.233172408437973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e875daa903c1b%3A0xc236601c4b9dde13!2
      z5LiL54ef6Zi_5paH54e76Iy26bWd!5e0!3m2!1szh-TW!2stw!4v1682594912047!5m2!1szh-TW!2stw" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map01"></iframe>
    <div class="sidebar001">
      <a href="https://www.facebook.com.tw/"><img src="../image/Facebook_icon.png" style="width: 40px;height:40px;" ></a>
      <a href="https://www.instagram.com/"><img src="../image/Instagram.png" style="width: 40px;height:40px;"></a>
      <a href="https://line.me/zh-hant/"><img src="../image/LINE_logo.png" style="width: 40px;height:40px;"></a>
      <a href="#" class="gotop"><img src="../image/up.png" style="width: 40px;height:40px;"></a>
    </div>
    </main>
  <footer style="top: 2700px;">
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
  </body>


  <!-- Slideshow container -->


  

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
    var image = document.getElementById('image');
    var currentImage = 1;
    var totalImages = 3; // 總共的圖片數量

    // 監聽鍵盤事件
    document.addEventListener('keydown', function(event) {
      if (event.keyCode === 39) { // 判斷是否按下右方向鍵
        changeImage();
      }
    });

    function changeImage() {
      currentImage++;
      if (currentImage > totalImages) {
        currentImage = 1;
      }
      image.src = "image" + currentImage + ".jpg";
    }
    


    let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    }
    //下面是右側欄跳至最上方的按鈕的動畫效果

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