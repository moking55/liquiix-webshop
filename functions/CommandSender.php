<?php
require_once '../configs/Websend.php';
require_once '../configs/database.php';

header('Content-Type: application/json'); // IMPORTANT!
$ws = new Websend("43.229.62.176");
$ws->password = "Tawan777@";

$productID = $_POST['product_id'];
$player = $_POST['username'];

if ($ws->connect() && !empty($player)) {
    $result = $dbcon->query("SELECT product_command,product_price FROM products WHERE pid = '" . $productID . "'");
    $products = $result->fetch_assoc();

    $player_points_check = $dbcon->query("SELECT Points FROM cmi_users WHERE username = '" . $player . "'");
    $player_points = $player_points_check->fetch_assoc();

    if ($player_points['Points'] >= $products['product_price']) {
        $purchased = $dbcon->query("UPDATE cmi_users SET Points = Points - " . $products['product_price'] . " WHERE username = '" . $player . "'");
        if (!empty($products['product_command'] && $purchased)) {

            $mc_command = str_replace("[Player]", $player, $products['product_command']);
            $ws->doCommandAsConsole($mc_command);

            echo json_encode(array('status' => '1', 'message' => 'ทำรายการสำเร็จ'));
        } else {
            echo json_encode(array('status' => '0', 'message' => 'ไม่สามารถสร้างคำสั่งซื้อได้'));
        }
    } else {
        echo json_encode(array('status' => '0', 'message' => 'มียอดเงินคงเหลือไม่พอ กรุณาเติมเงินเข้าสู่ระบบ'));
    }
} else {
    echo json_encode(array('status' => '0', 'message' => 'ไม่สามารถเชื่อมต่อไปยังปลายทางได้'));
}
$dbcon->close();
$ws->disconnect();
