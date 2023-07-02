<!DOCTYPE html>   
<html lang="zh-Hant-Tw">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/logoicon.ico" rel="shortcut icon"/>  
    <title>台南下營鋐茶鵝</title>
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <link rel="stylesheet" type="text/css" href="css/main.css?version=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/index.css?version=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/index.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Yusei+Magic&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <!-- 進度條動態區塊 -->
    <div id="progress-bar-container">
        <div id="progress-bar"></div>
      </div>

        <!--navbar區塊-->
    <nav>
        <div class="navbar navbar-expand-lg p-3" style="background-color: #fede00">
            <div class = "container">
                <a href="index_nologin.html"><img style="width: 280px;" src="images/logo.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="about_nologin.html" class="text-black">關於我們</a></li>
                    <!-- <li><a href="#">商品總覽</a></li> -->
                    <li class="nav-item"><a href="#" data-bs-toggle="modal" data-bs-target="#login-modal" class="text-black">線上訂購</a></li>
                    <li class="nav-item"><a href="common-quest_nologin.html" class="text-black">常見問題</a></li>
                    <li class="nav-item"><a href="contact_nologin.html" class="text-black">聯絡我們</a></li>
                    <li class="nav-item"><a href="#" data-bs-toggle="modal" data-bs-target="#login-modal" class="text-black">會員登入</a></li>
                    <li class="nav-item">
                        <a href="#" class="d-flex align-items-center text-black">
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
        <button id="changepic">更換圖片</button>
        <div class="carousel-item active">
            <img id="slide1" src="images/slide1.png" class="d-block w-100" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img id="slide2" src="images/slide2.png" class="d-block w-100" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img id="slide3" src="images/slide3.png" class="d-block w-100" alt="Slide 3">
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


<!-- 虛擬的input元素(更換圖片視窗需要) -->
<input type="file" id="file-input" style="display: none;" accept="image/*">

<!-- 最新消息區塊 -->
    <div class="newsdiv1">
            <h1 class="newstitle">最新消息</h1>
<div class="newsdiv2">
    <div class="news">
        <div class="newstext">
          <p class="newsdate" data-target="1">2023/05/01</p><p class="newsdata" data-target="1">最新消息一</p>
          <button id="editnewsbutton1" class="editnewsbutton" data-target="1">編輯</button><br>
          <p class="newsdate" data-target="2">2023/04/30</p><p class="newsdata" data-target="2">最新消息二</p>
          <button id="editnewsbutton2" class="editnewsbutton" data-target="2">編輯</button><br>
          <p class="newsdate" data-target="3">2023/04/29</p><p class="newsdata" data-target="3">最新消息三</p>
          <button id="editnewsbutton3" class="editnewsbutton" data-target="3">編輯</button><br>

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
            <button class="change-image-button" data-image="image1">更換圖片</button>
            <img id="image1" src="images/230505_5.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-warning">前往商品</a><br>
              <button class="edit-content-button">編輯內容</button>
            </div>
          </div>
        </div>
        <div class="col-lg">
          <div class="card lg">
            <button class="change-image-button" data-image="image2">更換圖片</button>
            <img id="image2" src="images/230505_6.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-warning">前往商品</a><br>
              <button class="edit-content-button">編輯內容</button>
            </div>
          </div>
        </div>
        <div class="col-lg">
          <div class="card lg">
            <button class="change-image-button" data-image="image3">更換圖片</button>
            <img id="image3" src="images/230505_7.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-warning">前往商品</a><br>
              <button class="edit-content-button">編輯內容</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- 隱藏的 input 元素 -->
  <input type="file" class="hidden-input" accept="image/*">
  
  <script>
    // 使用jQuery監聽編輯內容按鈕的點擊事件
$('.edit-content-button').click(function() {
  // 提示用戶輸入新的標題和內容
  var newTitle = prompt('請輸入新的標題');
  var newContent = prompt('請輸入新的內容');
  
  // 更新對應的card-title和card-text元素的文字內容
  $(this).closest('.card-body').find('.card-title').text(newTitle);
  $(this).closest('.card-body').find('.card-text').text(newContent);
});
  </script>
 


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

<!--登入彈窗區塊，有與JS配合-->
<div id="login-modal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Close button -->'
            <div class="modal-header">
                <h5 class="modal-title">會員登入</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

    
            <!-- Login form -->
            <form class="form1" action="show_form.php" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="account">帳號:</label>
                        <input type="text" id="account" name="account" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">密碼:</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-warning">會員登入</button>
                    <button type="submit" class="btn btn-warning" formaction="member.php">註冊會員</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--側邊攔-->
<div class="sidebar">
    <a href="https://www.facebook.com/profile.php?id=100091698824828&mibextid=ZbWKwL"target="_blank"><img src="images/facebook.png" style="width: 35px;height:35px;" ></a>
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
                    <li><a href="about_nologin.html" class="text-decoration">關於鋐茶鵝</a></li>
                    <li><a href="index_nologin.html" class="text-decoration">營業資訊</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>購物須知</h5>
                <ul class="list-unstyled">
                   <!--<li><a href="#" class="text-decoration-none text-warning">付款方式</a></li>
                    <li><a href="#" class="text-decoration-none text-warning">運送方式</a></li>-->
                    <li><a href="common-quest_nologin.html" class="text-decoration">常見問題</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>聯絡資訊</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-decoration">LINE：官方LINE帳號</a></li>
                    <li><a href="https://www.facebook.com/profile.php?id=100091698824828&mibextid=ZbWKwL"target="_blank" class="text-decoration">FACEBOOK：台南下營 鋐茶鵝</a></li>
					<li><a href="mailto:angel19971314@gmail.com" class="text-decoration">E-mail：angel19971314@gmail.com</a></li>
					<li><span style="color:#FEC107">電話：0966218624</span></li>
                </ul>
            </div>
        </div>
    </div>
    </footer>
    <div class="bg-warning text-center">台南下營 鋐茶鵝 © 2023</div>
    
<script>// 進度條
    
var progressBar = document.getElementById('progress-bar');// 取得進度條元素

function updateProgressBar() {  // 更新進度條的函式
  // 計算網頁的總高度
  var pageHeight = document.documentElement.scrollHeight - window.innerHeight;
  
  // 取得目前捲動的位置
  var scrollPosition = window.pageYOffset;
  
  // 計算捲動進度百分比
  var progress = (scrollPosition / pageHeight) * 100;
  
  // 設定進度條的寬度
  progressBar.style.width = progress + '%';
}

// 監聽捲動事件，當捲動時更新進度條
window.addEventListener('scroll', updateProgressBar);

// 監聽視窗大小改變事件，當視窗大小改變時更新進度條
window.addEventListener('resize', updateProgressBar);
</script>

<!-- 更換幻燈片圖片 -->
    <script>
        // 獲取按鈕元素
        var changepicButton = document.getElementById('changepic');
        
        // 獲取input元素
        var fileInput = document.getElementById('file-input');
        
        // 獲取幻燈片內容元素
        var carouselInner = document.querySelector('.carousel-inner');
        
        // 當按鈕被點擊時觸發input元素的點擊事件
        changepicButton.addEventListener('click', function () {
            fileInput.click();
        });
        
        // 當選擇文件完成時執行回調
        fileInput.addEventListener('change', function () {
            var file = fileInput.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    // 獲取當前顯示的幻燈片
                    var activeSlide = carouselInner.querySelector('.carousel-item.active img');
                    // 將所選取的圖片設定為當前幻燈片的圖片
                    activeSlide.src = e.target.result;
                    // 將圖片路徑傳送至save.php
                $.ajax({
                    url: 'save.php',
                    method: 'POST',
                    data: {
                        slide1: $('#slide1').attr('src'),
                        slide2: $('#slide2').attr('src'),
                        slide3: $('#slide3').attr('src')
                    },
                    success: function(response) {
                        $('#slide1').attr('src', response.slide1);
        $('#slide2').attr('src', response.slide2);
        $('#slide3').attr('src', response.slide3);

                        alert('圖片已成功更新！');
                    },
                    error: function() {
                        alert('更新失敗！');
                    }
                });
                };

                
                reader.readAsDataURL(file);
            }
        });
        </script>

<!-- 更改最新消息 -->
<script>
    // 獲取編輯按鈕元素
    var editButtons = document.querySelectorAll('.editnewsbutton');
    
    // 迭代編輯按鈕並綁定點擊事件處理程序
    editButtons.forEach(function (button) {
    button.addEventListener('click', function () {
    // 獲取目標編輯的編號
    var target = button.getAttribute('data-target');
    
    // 獲取對應的 newsdate 和 newsdata 元素
    var newsDate = document.querySelector('.newsdate[data-target="' + target + '"]');
    var newsData = document.querySelector('.newsdata[data-target="' + target + '"]');
    
    // 在這裡可以進行相應的修改操作
    // 例如使用 prompt() 函數來獲取新的日期和資料
    var newDate = prompt('請輸入新的日期', newsDate.textContent);
    var newData = prompt('請輸入新的資料', newsData.textContent);
    
    // 更新 newsdate 和 newsdata 元素的內容
    newsDate.textContent = newDate;
    newsData.textContent = newData;
    });
});
</script>
<!-- 更改熱門品項圖片 -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('.change-image-button').click(function() {
      var imageId = $(this).data('image');
      var imgElement = $('#' + imageId);
      var hiddenInput = $('.hidden-input');

      hiddenInput.on('change', function() {
        var file = this.files[0];
        if (file) {
          var reader = new FileReader();
          reader.onload = function(e) {
            imgElement.attr('src', e.target.result); // 更新圖片元素的 src 屬性
          };
          reader.readAsDataURL(file);
        }
      });

      hiddenInput.click(); // 觸發 input 元素的點擊事件
    });
  });
</script>
</body>

</html>