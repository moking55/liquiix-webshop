<?php
header('Content-Type: application/json');
require_once '../configs/database.php';
$pid = (empty($_POST['id'])) ? null : $_POST['id'];

if (!is_null($pid)) {
    $qry = "DELETE FROM news WHERE id = '" . $pid . "'";
    if ($dbcon->query($qry)) {
        echo json_encode(array('status' => '1', 'message' => 'ลบข้อมูลแล้ว'));
    } else {
        echo json_encode(array('status' => '0', 'message' => 'มีบางอย่างผิดปกติ'));
    }
} else {
    echo json_encode(array('status' => '0', 'message' => 'ไม่พบข้อมูล โปรดรีเฟรชหน้า'));
}
