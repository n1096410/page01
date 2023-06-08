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
  <link href="image/logoicon.ico" rel="shortcut icon" />
  <title>台南下營鋐茶鵝</title>
  <link rel="stylesheet" type="text/css" href="newstyle.css?version=<?php echo time(); ?>">
  <link rel="stylesheet" type="text/css" href="shophistory.css?version=<?php echo time(); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
  <div class="headesize">
  <div class="header wrap">
      <a id="header_a" href="chang.php">
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
          <li id="cartb" button style="width: 160px;"><a href="#"><img src="../image/shoppingcart.png"
                alt="shopping.png">購物車</a></li>
        </ul>
        <!-- onclick="document.getElementById('shoppingcart').style.display='block'" -->
      </nav>
    </div>
  </div>
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
  <!-- 表格主頁面 -->
  <div class="righttable">
    <div class="scrolltable">
      <table class="order-table">
        <thead>
          <tr class="order-nav">
            <td>訂單編號</td>
            <td>訂單狀態</td>
            <td>購買日期</td>
            <td>品項</td>
            <td>數量</td>
            <td>總金額</td>
            <td colspan="2">結帳方式</td>
          </tr>
        </thead>
        <tbody>
          <tr class="content-tr">
            <td>N0100100</td>
            <td>配送中</td>
            <td>2023/05/01</td>
            <td>2</td>
            <td>10</td>
            <td>$800</td>
            <td width="100"><button>查看明細</button></td>
            <td width="100"><button>再買一次</button></td>
          </tr>
          <tr class="content-tr">
            <td>N0100123</td>
            <td>配送中</td>
            <td>2023/05/01</td>
            <td>20</td>
            <td>5</td>
            <td>$200</td>
            <td width="100"><button>查看明細</button></td>
            <td width="100"><button>再買一次</button></td>
          </tr>
          <tr class="content-tr">
            <td>N0100123</td>
            <td>配送完成</td>
            <td>2023/05/01</td>
            <td>2</td>
            <td>10</td>
            <td>$800</td>
            <td width="100"><button>查看明細</button></td>
            <td width="100"><button>再買一次</button></td>
          </tr>
          <tr class="content-tr">
            <td>N0100123</td>
            <td>配送完成</td>
            <td>2023/05/01</td>
            <td>2</td>
            <td>10</td>
            <td>$800</td>
            <td width="100"><button>查看明細</button></td>
            <td width="100"><button>再買一次</button></td>
          </tr>
          <tr class="content-tr">
            <td>N0100123</td>
            <td>配送完成</td>
            <td>2023/05/01</td>
            <td>2</td>
            <td>10</td>
            <td>$800</td>
            <td width="100"><button>查看明細</button></td>
            <td width="100"><button>再買一次</button></td>
          </tr>
          <tr class="content-tr">
            <td>N0100123</td>
            <td>配送完成</td>
            <td>2023/05/01</td>
            <td>2</td>
            <td>10</td>
            <td>$800</td>
            <td width="100"><button>查看明細</button></td>
            <td width="100"><button>再買一次</button></td>
          </tr>
          <tr class="content-tr">
            <td>N0100110</td>
            <td>配送完成</td>
            <td>2023/05/01</td>
            <td>2</td>
            <td>10</td>
            <td>$800</td>
            <td width="100"><button>查看明細</button></td>
            <td width="100"><button>再買一次</button></td>
          </tr>
          <tr class="content-tr">
            <td>N0100110</td>
            <td>配送完成</td>
            <td>2023/05/01</td>
            <td>2</td>
            <td>10</td>
            <td>$800</td>
            <td width="100"><button>查看明細</button></td>
            <td width="100"><button>再買一次</button></td>
          </tr>
          <tr class="content-tr">
            <td>N0100110</td>
            <td>配送完成</td>
            <td>2023/05/01</td>
            <td>2</td>
            <td>10</td>
            <td>$800</td>
            <td width="100"><button>查看明細</button></td>
            <td width="100"><button>再買一次</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


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
    </div>
  </div>

  <div class="sidebar001">
    <a href="https://www.facebook.com.tw/"><img src="../image/Facebook_icon.png" style="width: 40px;height:40px;"></a>
    <a href="https://www.instagram.com/"><img src="../image/Instagram.png" style="width: 40px;height:40px;"></a>
    <a href="https://line.me/zh-hant/"><img src="../image/LINE_logo.png" style="width: 40px;height:40px;"></a>
    <a href="#" class="gotop"><img src="../image/up.png" style="width: 40px;height:40px;"></a>
  </div>


</body>
<footer style="top: 750px;">
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

  $('.gotop').click(function (e) {
    e.preventDefault(); // 防止默認行為
    $('html, body').animate({
      scrollTop: 0  //scrollTop設定0跳到網頁最上方
    }, 500); // 持續滑動 0.5 秒
  });

  
</script>
</html>
