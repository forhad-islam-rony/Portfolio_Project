<?php
session_start();
require_once "db.php"; 
$id = base64_decode($_GET['id']);
$dbcon->query("DELETE FROM guest_messages WHERE id=$id");
$_SESSION['education_delete_success'] = "Delete Successfully";
header('location: all_guest_message.php');


?>