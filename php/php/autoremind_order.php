<?php
// 連接到資料庫
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'hongteag_goose';
$conn = new mysqli($host, $user, $password, $dbname);

// 檢查連接是否成功
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 計算兩天前的日期
$twoDaysAgo = date('Y-m-d', strtotime('-2 days'));

// 查詢未付款訂單的帳戶和訂單ID
$selectSql = "SELECT Account, Purchase_OrderID FROM purchase_order WHERE Date <= ? AND Status ='未付款'";
$selectStmt = $conn->prepare($selectSql);

if ($selectStmt) {
    $selectStmt->bind_param("s", $twoDaysAgo);
    $selectStmt->execute();
    $selectStmt->store_result();
    
    if ($selectStmt->num_rows > 0) {
        $selectStmt->bind_result($account, $orderID);
        $displayedorderID = array(); // 创建一个数组来跟踪已显示的 Purchase_OrderID
        while ($selectStmt->fetch()) {
            
            // LINE 訂單訊息傳送
        
            $linesql = "SELECT Line_ID FROM users WHERE Account = '$account'";
            $result = $conn->query($linesql);
            
            if (in_array($orderID, $displayedorderID)) {
                continue;
            }
            if ($result) {
                if ($result->num_rows > 0) {  // 此處使用 $result->num_rows
                    $row = $result->fetch_assoc();  // 此處使用 $result->fetch_assoc()
                    $lineid = $row['Line_ID'];  // 此處使用正確的欄位名稱
                    
                    $displayedorderID[] = $orderID;
                    $access_token = 'PmAFKuI7Q0plDHacuMsqdqLqUBmjM7g3jKNvyZFxlxUU60ws60gFln3DOsqg83+P6roow5o6fqL1toSBNTJO/vqdqT2XdVZXR2amIjWvPre+SAQR3Tu89T4EeER9XQ+IMkbDd6sjTW60JO0vU2HyUgdB04t89/1O/w1cDnyilFU=';
                    
                    // 建立資料庫連線
                    $lineconn = new mysqli("localhost", "root", "", "hongteag_linebot");

                    // 檢查連線是否成功
                    if ($lineconn->connect_error) {
                        die("資料庫連線失敗: " . $lineconn->connect_error);
                    }
                    

                    
                    // 執行 SQL 查詢以檢索 level=2 的 Line ID
                    $sql = "SELECT user_id FROM linedata WHERE level = 2";
                    $result = $lineconn->query($sql);

                    $to_user_ids = array();

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $to_user_ids[] = $row['user_id'];
                        }
                    } else {
                        echo "找不到符合條件的接收者。";
                    }
                    // 傳訊息給下單者
                    $message = "您的 ( 單號：" . $orderID . " ) \n訂單已被更改為已取消，如有問題請與我們聯繫，也可使用選單中訂單查詢來看其他訂單狀態";

                    $data = [
                        'to' => $lineid,
                        'messages' => [
                            [
                                'type' => 'flex',
                                'altText' => '訂單更新通知',
                                'contents' => [
                                    'type' => 'bubble',
                                    'body' => [
                                        'type' => 'box',
                                        'layout' => 'vertical',
                                        'contents' => [
                                            [
                                                'type' => 'text',
                                                'text' => $message,
                                                'wrap' => true,
                                            ],
                                        ],
                                    ],
                                    'footer' => [
                                        'type' => 'box',
                                        'layout' => 'vertical',
                                        'contents' => [
                                            [
                                                'type' => 'button',
                                                'style' => 'secondary',
                                                'color' => '#ffc107',
                                                'action' => [
                                                    'type' => 'uri',
                                                    'label' => "訂單查詢",
                                                    'uri' => 'https://hongteagoose.lionfree.net/orders.php', // 替換為實際的URL
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ];
                    

                    $ch = curl_init('https://api.line.me/v2/bot/message/push');
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
                    curl_setopt($ch, CURLOPT_HTTPHEADER, [
                        'Content-Type: application/json',
                        'Authorization: Bearer ' . $access_token,
                    ]);

                    $result = curl_exec($ch);

                    if ($result === false) {
                        echo 'Curl error: ' . curl_error($ch);
                    } else {
                        echo 'Message sent to ' . $lineid . '!';
                    }

                    curl_close($ch);

                    // 傳訊息給管理者
                    foreach ($to_user_ids as $to_user_id) {
                        $message2 = "( 單號：" . $orderID . " ) 的訂單已被更改為已取消\n如有問題請與客人聯繫";

                        $data2 = [
                            'to' => $to_user_id,
                            'messages' => [
                                [
                                    'type' => 'flex',
                                    'altText' => '訂單更新通知',
                                    'contents' => [
                                        'type' => 'bubble',
                                        'body' => [
                                            'type' => 'box',
                                            'layout' => 'vertical',
                                            'contents' => [
                                                [
                                                    'type' => 'text',
                                                    'text' => $message2,
                                                    'wrap' => true,
                                                ],
                                            ],
                                        ],
                                        'footer' => [
                                            'type' => 'box',
                                            'layout' => 'vertical',
                                            'contents' => [
                                                [
                                                    'type' => 'button',
                                                    'style' => 'secondary',
                                                    'color' => '#ffc107',
                                                    'action' => [
                                                        'type' => 'uri',
                                                        'label' => "訂單查詢",
                                                        'uri' => 'https://hongteagoose.lionfree.net/orders.php', // 替換為實際的URL
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ];

                        $ch2 = curl_init('https://api.line.me/v2/bot/message/push');
                        curl_setopt($ch2, CURLOPT_POST, true);
                        curl_setopt($ch2, CURLOPT_POSTFIELDS, json_encode($data2));
                        curl_setopt($ch2, CURLOPT_HTTPHEADER, [
                            'Content-Type: application/json',
                            'Authorization: Bearer ' . $access_token,
                        ]);

                        $result2 = curl_exec($ch2);

                        if ($result2 === false) {
                            echo 'Curl error: ' . curl_error($ch2);
                        } else {
                            echo 'Message sent to ' . $to_user_id . '!';
                        }

                        curl_close($ch2);
                    }              

                } else {
                    echo "找不到符合的資料。";
                }
            } else {
                echo "SQL 查詢出現錯誤：" . $conn->error;
            }

            // 關資料庫
            $lineconn->close();
        }
    }
    
    $selectStmt->close();
}


// 關閉資料庫連接
$conn->close();
?>
