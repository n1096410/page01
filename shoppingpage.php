<?php
session_start();
$account = $_SESSION['account'];
?>
<!DOCTYPE html>   
<html lang="zh-Hant-Tw">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="image/logoicon.ico" rel="shortcut icon"/>  
    <title>台南下營鋐茶鵝</title>
    <link rel="stylesheet" type="text/css" href="newstyle.css?version=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="shoppingpage.css?version=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="headesize">
    <div class="header wrap">
      <a href="chang.php">
        <img class="logo" img src="image/headlogo.png" width="60%">
      </a>

        <!-- <img class="logo" src="image/headlogo.png" width="25%"> -->
        <nav>
            <ul class="menu">
                <li><a href="#">關於我們</a></li>
                <li><a href="#">商品總覽</a></li>
                <li><a href="#">線上訂購</a></li>
                <li><a href="#">常見問題</a></li>
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
            <!-- onclick="document.getElementById('shoppingcart').style.display='block'" -->
        </nav>
    </div>
    </div>
<div class="shoppingpagediv1">
    <p><b>首頁/商品總覽</b></p>
</div>
<table class="lefttable" >
  <tbody>
    <tr>
      <th scope="row">燻茶鵝</th>
    </tr>
    <tr>
      <th scope="row">鹽水鵝</th>
    </tr>
    <tr>
      <th scope="row">其他周邊商品</th>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
    </tr>
  </tbody>
</table>
  <!-- 商品主頁面 -->
<div class="commoditypage">  
  <div><img src="../image/LINE_ALBUM_茶鵝_230505_5.jpg">
    <label>好吃1</label>
    <input type="button" onclick="addToCart('好吃1')" style="background-image:url(../image/shoppingcart.png);height:30px;width:30px;">
  </div>
  <div><img src="../image/LINE_ALBUM_茶鵝_230505_6.jpg">
    <label>好吃2</label>
    <input type="button" onclick="addToCart('好吃2')" style="background-image:url(../image/shoppingcart.png);height:30px;width:30px;">
  </div>
  <div><img src="../image/LINE_ALBUM_茶鵝_230505_7.jpg">
    <label>好吃3</label>
    <input type="button" onclick="addToCart('好吃3')" style="background-image:url(../image/shoppingcart.png);height:30px;width:30px;">
  </div>
  <div><img src="../image/LINE_ALBUM_茶鵝_230505_8.jpg">
    <label>好吃4</label>
    <input type="button" onclick="addToCart('好吃4')" style="background-image:url(../image/shoppingcart.png);height:30px;width:30px;">
  </div>
  <div><img src="../image/LINE_ALBUM_茶鵝_230505_9.jpg">
    <label>好吃5</label>
    <input type="button" onclick="addToCart('好吃5')" style="background-image:url(../image/shoppingcart.png);height:30px;width:30px;">
  </div>
  <div><img src="../image/LINE_ALBUM_茶鵝_230505_10.jpg">
    <label>好吃6</label>
    <input type="button" onclick="addToCart('好吃6')" style="background-image:url(../image/shoppingcart.png);height:30px;width:30px;">
  </div>
  <div><img src="../image/LINE_ALBUM_茶鵝_230505_11.jpg">
    <label>好吃7</label>
    <input type="button" onclick="addToCart('好吃7')" style="background-image:url(../image/shoppingcart.png);height:30px;width:30px;">
  </div>
  <div><img src="../image/LINE_ALBUM_茶鵝_230505_12.jpg">
    <label>好吃8</label>
    <input type="button" onclick="addToCart('好吃8')" style="background-image:url(../image/shoppingcart.png);height:30px;width:30px;">
  </div>
  <div><img src="../image/LINE_ALBUM_茶鵝_230505_13.jpg">
    <label>好吃9</label>
    <input type="button" onclick="addToCart('好吃9')" style="background-image:url(../image/shoppingcart.png);height:30px;width:30px;">
  </div>
</div>
<!-- li購物車按鈕彈跳視窗 -->
<!-- <div id="shoppingcart" class="shoppingcartblockpage">
      <div class="blockpage-content">
        <span class="close" onclick="document.getElementById('shoppingcart').style.display='none'">
          &times;
        </span>
          <label>購物車內容:</label>
        </div>
        </form>
      </div>
    </div> -->

<!-- 加入購物車成功提示框 -->
<div id="add-to-cart-success" style="display:none;">
  <p>加入購物車成功！</p>
</div>
<!-- 購物車彈出視窗 -->
<div id="shopping-cart-modal" class="modal" style="display:none;">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>購物車</h2>
    <p id="cart-summary"></p>
    <button onclick="clearCart()">清空購物車</button>
  </div>
</div>

<div class="sidebar001">
      <a href="https://www.facebook.com.tw/"><img src="../image/Facebook_icon.png" style="width: 40px;height:40px;" ></a>
      <a href="https://www.instagram.com/"><img src="../image/Instagram.png" style="width: 40px;height:40px;"></a>
      <a href="https://line.me/zh-hant/"><img src="../image/LINE_logo.png" style="width: 40px;height:40px;"></a>
      <a href="#" class="gotop"><img src="../image/up.png" style="width: 40px;height:40px;"></a>
</div>


</body>
<footer style="top: 1500px;">
  <div>
  <img class="circle-imaged" src="image\S__48398348.jpg" alt="Avatar">
  </div>
<div class="footer-size">
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

  var cart = {}; // 購物車物件，用於記錄已經按下的商品按鈕和它們的數量

  function addToCart(productName) {
    // 加入購物車成功提示框顯示
    // 顯示提示框
  var successBox = document.getElementById("add-to-cart-success");
  successBox.style.display = "block";

  // 設置定時器，1秒後自動隱藏提示框
  setTimeout(function() {
    successBox.style.display = "none";
  }, 1000);
    // document.getElementById('add-to-cart-success').style.display = 'block';

    // 記錄已經按下的商品按鈕和它們的數量
    if (cart[productName]) {
      cart[productName] += 1;
    } else {
      cart[productName] = 1;
    }

    // 更新購物車摘要
    updateCartSummary();

   // 取得清空按鈕元素
   var clearButton = document.getElementById("clear-cart-button");

  // 如果購物車中已經有商品，就顯示清空按鈕
  if (cart.length > 0) {
    clearButton.style.display = "block";
    }
  }

  function updateCartSummary() {
    var cartSummary = '';
    for (var productName in cart) {
      cartSummary += productName + ': ' + cart[productName] + '<br>';
    }
    document.getElementById('cart-summary').innerHTML = cartSummary;
  }

  // 購物車li的點擊事件
  document.querySelector('#cartb').addEventListener('click', function() {
    // 顯示購物車彈出視窗
    document.getElementById('shopping-cart-modal').style.display = 'block';
  });

  // 購物車彈出視窗的關閉按鈕事件
  document.querySelector('.modal .close').addEventListener('click', function() {
    // 隱藏購物車彈出視窗
    document.getElementById('shopping-cart-modal').style.display = 'none';
  });

  var modal = document.getElementById('shoppingcart');
      window.onclick = function(event) {  //當偵測到有點擊shoppingcart物件，觸發event
        if (event.target == modal) {    
          modal.style.display = "none";   //如果event的taret(shoppingcart)變量等於model，將modal元素隱藏
        }
      }

  function clearCart() {
  // 取得購物車中的商品清單
  var cartItems = document.getElementById('cart-summary');

  // 將所有商品從清單中移除
  while (cartItems.firstChild) {
    cartItems.removeChild(cartItems.firstChild);
  }

  cart = {}; // 將cart對象(購物車內的商品清單)設置為空對象

}


  </script>   
</html>
<!-- $('.logo').offset().top -->