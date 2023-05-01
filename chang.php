<!DOCTYPE html>
<html lang="zh-Hant-Tw">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="image/logoicon.ico" rel="shortcut icon"/>  
    <title>台南下營鋐茶鵝</title>
    <link rel="stylesheet" href="newstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>    
  <!--以下為頁首部份-->
  
  <div class="headesize">
  <div class="header wrap">
    <img class="logo" src="image/headlogo.png" width="25%">
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
  <button onclick="document.getElementById('login-modal').style.display='block'">
      登入
    </button>

    <!-- 登入彈跳視窗 -->
    <div id="login-modal" class="modal">
      <div class="modal-content">
        <!-- 關閉按鈕 -->
        <span class="close" onclick="document.getElementById('login-modal').style.display='none'">
          &times;
        </span>
        <!-- 登入表單 -->
       <!-- 登入表單 -->
       <?php
// 資料庫連線設定
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// 建立連線
$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查連線是否成功
if ($conn->connect_error) {
    die("連線失敗：" . $conn->connect_error);
}

// 檢查是否有 POST 資料
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 從表單接收資料
    $account = $_POST['account'];
    $password = $_POST['password'];

    // 使用參數化查詢來查詢資料庫中是否有該使用者
    $stmt = $conn->prepare("SELECT * FROM users WHERE account = ? AND password = ?");
    $stmt->bind_param("ss", $account, $password); // 將參數型態改為字串型態 (s)

    // 執行查詢
    $stmt->execute();
    $result = $stmt->get_result();

    // 檢查是否有資料
    if ($result->num_rows == 1) {
        session_start(); // 啟用 Session
        $_SESSION['account'] = $account; // 將帳號存入 Session 變數中
        header("Location: MemberProfile.php"); // 跳轉到會員中心頁面
        exit(); // 結束程式
    } else {
        $error = "帳號或密碼錯誤！"; // 設定錯誤訊息
    }
  

    // 關閉查詢和資料庫連線
    $stmt->close();
    $conn->close();
}
?>

<form class="form1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return validateForm()">
  <label for="account">帳號:</label>
  <input type="text" id="account" name="account"><br><br>
  <label for="password">密碼:</label>
  <input type="password" id="password" name="password"><br><br>
  <input class="login-button" type="submit" value="會員登入">
</form>
<form class="form1" action="member.php" method="post">
  <input class="login-button" type="submit" value="註冊會員">
</form>

<?php
// 如果有錯誤訊息則顯示
if (isset($error)) {
    echo $error;
}
?>

<script>
function validateForm() {
  var account = document.getElementById("account").value;
  var password = document.getElementById("password").value;
  if (account == "" || password == "") {
    alert("請輸入帳號和密碼");
    return false;
  }
  return true;
}
</script>



      </div>
    </div>
    <main>
      <h2>最新消息</h2>
      <div class="news">
        <div style="border: 2px solid black;">
          <p><u>消息一</u></p><br>
          <p>消息內容</p>
        </div>
        <div>
          <p><u>消息二</u></p><br>
          <p>消息內容</p>
        </div>
        <div>
          <p><u>消息三</u></p><br>
          <p>消息內容</p>
        </div>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.272404452623!2d120.26949697443848!3d23.233172408437973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e875daa903c1b%3A0xc236601c4b9dde13!2
      z5LiL54ef6Zi_5paH54e76Iy26bWd!5e0!3m2!1szh-TW!2stw!4v1682594912047!5m2!1szh-TW!2stw" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map01"></iframe>
    <!-- <div class="biglogin">
      <div class="login">
        <p>帳號</p><input type="tel" name="user" size="12" maxlength="8" placeholder="請輸入姓名">
        <p>密碼</p><input type="password" name="password" size="12" maxlength="8" placeholder="請輸入密碼">
        <button type="button" class="prompttest">送出</button>
        <input class='prompttest' type="button" value="按我">
      </div>
    </div>          -->
    <div class="sidebar001">
      <a href="https://www.facebook.com.tw/"><img src="../web-20230428-main/image/Facebook_icon.png" style="width: 40px;height:40px;" ></a>
      <a href="https://www.instagram.com/"><img src="../web-20230428-main/image/Instagram.png" style="width: 40px;height:40px;"></a>
      <a href="https://line.me/zh-hant/"><img src="../web-20230428-main/image/LINE_logo.png" style="width: 40px;height:40px;"></a>
      <a href="#" class="gotop"><img src="../web-20230428-main/image/up.png" style="width: 40px;height:40px;"></a>
    </div>
    </main>
    <footer>
      <p>台南下營 鋐茶鵝-版權所有</p>
      <span class="left">&copy; 2023 <a href="https://www.ntub.edu.tw/">NTUB.edu.tw</a>. 
				
				<div class="clearer"><span></span></div>
    </footer>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> -->
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

