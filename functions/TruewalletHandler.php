<?php
session_start();
include 'giftcodetruewallet.class.php';
include '../configs/database.php';

$codeid = substr(parse_url($_POST['giftcode'], PHP_URL_QUERY),2);
$playerName = $_POST['playername'];
$timestamp = date("d-m-Y H:i:s");

header('Content-Type: application/json');
$class = new twgiftcode;
$tmdata = $class->redeem('0979415900', $codeid);

// Return Json to API
echo json_encode($tmdata);

// Save to database
if ($tmdata['status'] === "success"):
    $dbcon->query("INSERT INTO topup_history VALUES ('".$playerName."', '". $timestamp ."', '".$tmdata["amount_baht"]."', 'TrueWallet', '".$tmdata["status"]."')");
    $dbcon->query("UPDATE cmi_users SET Points = '".$tmdata["amount_baht"]."' WHERE username = '".$playerName."'");
else:
    $dbcon->query("INSERT INTO topup_history VALUES ('".$playerName."', '". $timestamp ."', 0, 'TrueWallet', '".$tmdata["status"]."')");
endif;

$dbcon->close();
?>