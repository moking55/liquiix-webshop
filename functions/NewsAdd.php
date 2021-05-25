<?php

session_start();
require '../configs/database.php';
header('Content-Type: application/json');
$title = $dbcon->real_escape_string($_POST['news_title']);
$content = htmlspecialchars($_POST['news_content']);
$timestamp = date("d-m-Y");
$editor = $_SESSION['PlayerName'];
$qry = "INSERT INTO news VALUES (null,'" . $title . "','" . $content . "','" . $timestamp . "','" . $editor . "')";
$result = $dbcon->query($qry);

if ($result) {
    echo json_encode(array('status' => '1', 'message' => 'เพิ่มข้อมูลแล้ว'));
    $dbcon->close();
} else {
    echo json_encode(array('status' => '0', 'message' => 'มีบางอย่างผิดปกติ'));
}
