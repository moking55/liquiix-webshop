<?php
header('Content-Type: application/json');
require_once '../configs/database.php';
$p_name = $_POST['p_name'];
$p_price = $_POST['p_price'];
$p_detail = $_POST['p_detail'];
$p_command = $_POST['p_command'];
$pid = (empty($_POST['pid'])) ? null : $_POST['pid'];

if (!empty($p_name) && !empty($p_price) && !empty($p_command) && !empty($p_detail) && is_null($pid)) {
    if (!empty($_FILES['p_image'])) {
        $path = "../assets/img/products_images/";
        $p_image = $_FILES['p_image']['name'];
        list($filename, $extension) = explode('.', $p_image[0]);
        $ts = str_replace('.', '', strval(microtime(true)));
        $path .= "{$filename}_{$ts}.{$extension}";

        // move uploaded file
        move_uploaded_file($_FILES['p_image']['tmp_name'][0], $path);
    }
    $img = (empty($path)) ? null : substr(($path), 2);
    $qry = "INSERT INTO products VALUES (null,'" . $p_name . "','" . $img . "','" . $p_detail . "','" . $p_price . "','" . $p_command . "')";

    if ($dbcon->query($qry)) {
        echo json_encode(array('status' => '1', 'message' => 'เพิ่มข้อมูลแล้ว'));
    } else {
        echo json_encode(array('status' => '0', 'message' => 'มีบางอย่างผิดปกติ'));
    }
} else if (!empty($p_name) && !empty($p_price) && !empty($p_command) && !empty($p_detail) && !is_null($pid)) {
    $qry = "UPDATE products SET product_name='" . $p_name . "', product_detail='" . $p_detail . "', product_price='" . $p_price . "', product_command = '" . $p_command . "' WHERE pid=".$pid."";
    if ($dbcon->query($qry)) {
        echo json_encode(array('status' => '1', 'message' => 'แก้ไขข้อมูลแล้ว'));
    } else {
        echo json_encode(array('status' => '0', 'message' => 'มีบางอย่างผิดปกติ'));
    }
} else {
    echo json_encode(array('status' => '0', 'message' => 'กรอกข้อมูลไม่ครบ'));
}

$dbcon->close();
