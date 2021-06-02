<?php
session_start();
require '../configs/database.php';
header('Content-Type: application/json');
$username = $dbcon->real_escape_string($_POST['u_playername']);
$password = $dbcon->real_escape_string($_POST['u_password']);
$qry = "SELECT username,password,is_admin FROM authme WHERE username = '" . $username . "'";
$result = $dbcon->query($qry);
$data = $result->fetch_assoc();

if (password_verify($password, $data['password']) && $result->num_rows > 0) {
    $_SESSION['PlayerName'] = $data['username'];
    $_SESSION['isLogin'] = true;
    $isAdmin = ($data['is_admin'] === "1") ? $_SESSION['is_admin'] = 1 : $_SESSION['is_admin'] = 0 ;
    echo json_encode(array('status' => '1', 'message' => 'เข้าสู่ระบบแล้ว'));
    $dbcon->close();
} else {
    echo json_encode(array('status' => '0', 'message' => 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง'));
}
