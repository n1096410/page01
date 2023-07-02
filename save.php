<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $newContent = $_POST['newContent'];

  // 開啟原始碼的HTML檔案
  $filename = 'path/to/your/html/file.html';
  $fileContent = file_get_contents($filename);

  // 替換特定標籤中的內容
  $fileContent = str_replace('<h5 class="card-title">Card title</h5>', '<h5 class="card-title">' . $newContent . '</h5>', $fileContent);

  // 寫回HTML檔案
  file_put_contents($filename, $fileContent);

  // 回傳成功訊息
  echo '保存成功';
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $slide1 = $_POST['slide1'];
    $slide2 = $_POST['slide2'];
    $slide3 = $_POST['slide3'];

    // 讀取原始的index.html內容
    $indexContent = file_get_contents('index_nologin.html');

    // 替換幻燈片區塊的圖片路徑
    $indexContent = preg_replace('/<img id="slide1" src="images\/slide1\.png"(.*)>/', '<img id="slide1" src="' . $slide1 . '"$1>', $indexContent);
    $indexContent = preg_replace('/<img id="slide2" src="images\/slide2\.png"(.*)>/', '<img id="slide2" src="' . $slide2 . '"$1>', $indexContent);
    $indexContent = preg_replace('/<img id="slide3" src="images\/slide3\.png"(.*)>/', '<img id="slide3" src="' . $slide3 . '"$1>', $indexContent);

    // 寫入更新後的內容至index.html
    file_put_contents('index_nologin.html', $indexContent);

   // 傳回更新後的圖片路徑
   $response = [
    'slide1' => $slide1,
    'slide2' => $slide2,
    'slide3' => $slide3
];

echo json_encode($response);
} else {
echo 'error';
}
?>
