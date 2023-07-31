<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div class="navbar navbar-expand-lg p-3" style="background-color: #fede00">
        <div class = "container">
            <a href="index_nologin.php"><img style="width: 300px;" src="images/logo.png"></a>
        </div>
    </div>
    <div class="col-lg-8 offset-lg-2 ">
        <div class="section-heading"></div>
        <div class="search-input-container text-center mt-4">
            <div class="input-group">
              <input type="text" id="searchInput" class="form-control" placeholder="搜尋員工姓名或電話">
              <div class="input-group-append">
                <button class="btn btn-primary" onclick="searchEmployee()">員工搜尋</button>
                <div id="noResultsMessage" style="display: none;">查無此員工</div>
              </div>
            </div>
          </div>          
    <div>
        <table id="left">
            <tr>
            <th><a href="#">首頁</a></th>
            </tr>
            <tr>
            <td><a href="admin_carousel.php">輪播圖圖片</a></td>
            </tr>
            <tr>
            <td><a href="admin_news.php">最新消息</a></td>
            </tr>
            <tr>
            <td><a href="admin_popular.php">熱門品項</a></td>
            </tr>
            <tr>
            <th>商品頁</th>
            </tr>
            <tr>
            <td><a href="admin_product.html">商品管理</a></td>
            </tr>
            <tr>
            <th>員工</th>
            </tr>
            <tr>
            <td><a href="admin_employee.html">員工管理</a></td>
            </tr>    
        </table>
    </div>     
    <table id="employee-table">
    <thead>
        <tr>
        <th>員工姓名</th>
        <th>員工電話</th>
        <th>員工帳號</th>
        <th>員工密碼</th>
        <th><span id="employee-add-button">增加</span></th> 
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>王小明</td>
        <td>0912473234</td>
        <td>dxz123</td>
        <td>fjklx223</td>
        <td>
            <span id="employee-edit-button" class="employee-edit-button">編輯</span>
            <span id="employee-delete-button" class="employee-delete-button">刪除</span>
        </td>
        </tr>
        <tr>
        <!-- <td>林大雄</td>
        <td>0934432455</td>
        <td>bdsda</td>
        <td>dsfs323</td>
        <td>
            <span id="employee-edit-button2" class="employee-edit-button">編輯</span>
            <span id="employee-delete-button2" class="employee-delete-button">刪除</span>
        </td>
        </tr>
        <tr>
        <td>張三</td>
        <td>0919223004</td>
        <td>fsfdsq</td>
        <td>yuuy44</td>
        <td>
            <span id="employee-edit-button3" class="employee-edit-button">編輯</span>
            <span id="employee-delete-button3" class="employee-delete-button">刪除</span>
        </td>
        </tr> -->
    </tbody>
    </table>

<script>
// 搜尋產品
function searchEmployee() {
  var input = document.getElementById("searchInput");
  var filter = input.value.toUpperCase();
  var table = document.getElementById("employee-table");
  var tr = table.getElementsByTagName("tr");
  var noResultsMessage = document.getElementById("noResultsMessage");
  var hasResults = false;

  for (var i = 0; i < tr.length; i++) {
    var tdEmployeeName = tr[i].getElementsByTagName("td")[0]; // 員工姓名欄位
    var tdEmployeePhone = tr[i].getElementsByTagName("td")[1]; // 員工電話欄位

    if (tdEmployeeName && tdEmployeePhone) {
      var employeeName = tdEmployeeName.textContent || tdEmployeeName.innerText;
      var employeePhone = tdEmployeePhone.textContent || tdEmployeePhone.innerText;

      if (employeeName.toUpperCase().indexOf(filter) > -1 || employeePhone.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = ""; // 顯示符合條件的行
        hasResults = true;
      } else {
        tr[i].style.display = "none"; // 隱藏不符合條件的行
      }
    }
  }

  if (!hasResults) {
    noResultsMessage.style.display = "block"; // 顯示 "查無此訂單" 的訊息
  } else {
    noResultsMessage.style.display = "none"; // 隱藏訊息
  }
}

</script>
<script>
// 刪除處理函數
function handleDelete() {
  var row = this.parentNode.parentNode;
  row.remove();
}

// 綁定編輯按鈕事件處理函數
var employeeTable = document.getElementById('employee-table');
employeeTable.addEventListener('click', function(event) {
  if (event.target.classList.contains('employee-edit-button')) {
    handleEdit.call(event.target);
  }
});

// 編輯按鈕點擊事件處理
function handleEdit() {
  var row = this.parentNode.parentNode;
  var tdElements = row.getElementsByTagName('td');

  // 替換 <td> 內容為 <input> 元素
  for (var j = 0; j < tdElements.length - 1; j++) {
    var td = tdElements[j];

    // 檢查 <td> 內是否存在 <img> 元素
    if (td.querySelector('img')) {
      continue; // 如果存在 <img> 元素，跳過轉換為輸入框的步驟
    }

    td.innerHTML = `<input type="text" value="${td.textContent}" name="field${j}">`;
  }

  var saveButton = this.cloneNode(true);
  saveButton.innerText = '保存';
  saveButton.addEventListener('click', handleSave);
  this.parentNode.replaceChild(saveButton, this);
}

// 保存處理函數
function handleSave() {
  var row = this.parentNode.parentNode;
  var tdElements = row.getElementsByTagName('td');

  // 將 <input> 元素的值替換回相應的 <td> 元素的內容
  for (var j = 0; j < tdElements.length - 1; j++) {
    var td = tdElements[j];

    // 檢查 <td> 內是否存在 <img> 元素
    if (td.querySelector('img')) {
      continue; // 如果存在 <img> 元素，跳過更新值的步驟
    }

    var input = td.querySelector('input');
    td.textContent = input.value;
  }

  // 提交表單或其他保存處理...

  var editButton = row.querySelector('.employee-edit-button').cloneNode(true);
  editButton.innerText = '編輯'; // 更新保存按钮的文字为"編輯"
  editButton.addEventListener('click', handleEdit);
  this.parentNode.replaceChild(editButton, this);
}

// 增加按鈕功能部分
function handleNewsAdd() {
  var table = document.getElementById('employee-table');

  // 創建新的 HTML 代码表示的新行
  var newRowHTML =
    '<tr>' +
    '  <td>員工姓名</td>' +
    '  <td>員工電話</td>' +
    '  <td>員工帳號</td>' +
    '  <td>員工密碼</td>' +
    '  <td>' +
    '    <span class="employee-edit-button">編輯</span>' +
    '    <span class="employee-delete-button">刪除</span>' +
    '  </td>' +
    '</tr>';

  // 將新行插入到表格中
  table.insertAdjacentHTML('beforeend', newRowHTML);

  // 重新綁定增加按鈕的事件處理函數
  newsAddButton.removeEventListener('click', handleNewsAdd);
  newsAddButton.addEventListener('click', handleNewsAdd);

  // 重新綁定編輯按鈕事件處理函數
  var editButtons = table.getElementsByClassName('employee-edit-button');
  var deleteButtons = table.getElementsByClassName('employee-delete-button');

  for (var i = 0; i < editButtons.length; i++) {
    editButtons[i].addEventListener('click', handleEdit);
  }

  for (var j = 0; j < deleteButtons.length; j++) {
    deleteButtons[j].addEventListener('click', handleDelete);
  }
}

var newsAddButton = document.querySelector('#employee-table #employee-add-button');
newsAddButton.addEventListener('click', handleNewsAdd);

// 綁定刪除按鈕事件處理函數
var newsDeleteButtons = document.getElementsByClassName('employee-delete-button');
for (var i = 0; i < newsDeleteButtons.length; i++) {
  newsDeleteButtons[i].addEventListener('click', handleDelete);
}
</script>
</body>
</html>
