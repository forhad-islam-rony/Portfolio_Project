<?php
session_start(); 
require_once "db.php";

$id = base64_decode($_GET['id']);


$update_query = $dbcon->query("DELETE FROM skills WHERE id=$id");
$_SESSION['skill_delete'] = "Delete Successfully!";
header('location: all_skills.php');

?>