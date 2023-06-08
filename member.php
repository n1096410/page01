<!DOCTYPE html>
<meta charset="utf-8" />
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="image/logoicon.ico" rel="shortcut icon"/>  
    <!-- <link rel="stylesheet" href="newstyle.css"> -->
    <link rel="stylesheet" type="text/css" href="member.css?version=&lt;?php echo time(); ?&gt;">
    <link rel="stylesheet" type="text/css" href="newstyle.css?version=&lt;?php echo time(); ?&gt;">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>註冊會員</title>    
</head>
<body>
<div class="headesize">
  <div class="header wrap">
  <a href="chang.php"><img class="logo" src="image/headlogo.png"></a>
    <nav>
        <ul class="menu">
            <li><a href="#">關於我們</a></li>
            <li><a href="#">商品總覽</a></li>
            <li><a href="#">線上訂購</a></li>
            <li><a href="#">常見問題</a></li>
            <li><a href="#">聯絡我們</a></li>
            <li button onclick="document.getElementById('login-modal').style.display='block'"><a href="#">會員登入</a>
        </ul>
    </nav>
  </div>
</div>
   <div class="memberdiv1">
      <p><b>首頁/會員註冊</b></p>
   </div>
<main>
    <div class="bigregister">
        <div class="register"> 
        <h1>註冊</h1><br>
            <form action="submit_form.php" method="post">
                <label for="account">使用者名稱：</label>
                <input type="text" id="account" name="account" required/><br><br>
                <label for="name">姓名：</label>
                <input type="text" id="name" name="name" required/><br><br>
                <label for="email">電子郵件：</label>
                <input type="email" id="email" name="email" required/><br><br>
                <label for="phone">電話號碼：</label>
                <input type="tel" id="phone" name="phone" required/><br><br>
                <label for="address">地址：</label>
                <input type="int" id="phone" name="address" required/><br><br>
                <label for="phone">密碼：</label>
                <input type="text" id="password" name="password" required/><br><br>
                <input type="submit" value="提交">
            </form>
        </div>
        <div>
            <img src="../image/slide01.jpg" alt="ad" style="height: 500px;width: 500px;">
        </div>    
    </div>
    <div id="bigmySlidesmember">
        <div class="mySlidesmember fade">
            <!-- <div class="numbertext">1 / 3</div> -->
            <img src="image/slide01.jpg" style="width:80% ; height:500px;">
        </div>

        <div class="mySlidesmember fade">
            <!-- <div class="numbertext">2 / 3</div> -->
            <img src="image/slide02.png" style="width:80% ;height:500px;">
        </div>

        <div class="mySlidesmember fade">
            <!--  <div class="numbertext">3 / 3</div> -->
            <img src="image/slide03.jpg" style="width:80% ;height:500px;">
        </div>

        <!-- Next and previous buttons -->
        <a class="prevmember" onclick="plusSlides(-1)">&#10094;</a>
        <a class="nextmember" onclick="plusSlides(1)">&#10095;</a>

        <br>
    </div>
        <!-- The dots/circles -->
        <!-- <div class="d2" style="text-align:center; background-color: #ffff59;" >
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <div class="stripes"><span></span></div>
        </div> -->
    <!-- </div> -->
</main>
<footer style="top: 1600px;">
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
  let slides = document.getElementsByClassName("mySlidesmember");
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
      scrollTop: $('.mySlides').offset().top
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