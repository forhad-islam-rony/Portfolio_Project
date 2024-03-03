<?php
session_start();
require_once 'db.php';
ob_start();

$id = base64_decode($_GET['id']); 

if(isset($_POST['submit'])){
	$skill_name = $_POST['skill_name'];
	$percentage = $_POST['percentage'];


	if(!empty($skill_name) &&!empty($percentage)){
		$work_insert = $dbcon->query("UPDATE skills SET skill_name='$skill_name',percentage='$percentage' WHERE id=$id");
		if($work_insert){
		
			$_SESSION['Skill_update_success'] = "Update Successfully!";
			header('location: all_skills.php');
			ob_end_flush();
		} 
	}

}

?>