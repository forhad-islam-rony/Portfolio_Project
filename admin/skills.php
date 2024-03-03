<?php 
require_once "user_auth.php";
ob_start();
$title="Add Skills";
require_once "header.php";
require_once "db.php";

if(isset($_POST['submit'])){
	$skill_name = $_POST['skill_name'];
	$percentage = $_POST['percentage'];

	if(!empty($skill_name) &&!empty($percentage)){
		$work_insert = $dbcon->query("INSERT INTO skills (skill_name,percentage) VALUES('$skill_name','$percentage')");
		if($work_insert){

			$last_id = $dbcon->insert_id;
			// $photo_name = $last_id.".".end($photo_ext);
			// $dbcon->query("UPDATE testimonials SET photo='$photo_name' WHERE id=$last_id");
			// move_uploaded_file($_FILES['photo']['tmp_name'], 'image/customers/'.$photo_name);
			header('location: all_skills.php');
			ob_end_flush();
		} 
	}

}




?>


<!-- Start Page content -->
	<div class="card text-dark mb-3" >
		<div class="card-header bg-success text-center"><h2>Add  Skills</h2></div>
			<div class="card-body">

					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="project_name">Skill Name</label>
							<input type="text" class="form-control" name="skill_name">
						</div>

						<div class="form-group">
							<label for="project_catagory">Percentage</label>
							<input type="int" class="form-control" name="percentage">
						</div>
						
						<div class="form-group">
							<input class="btn btn-block btn-success" type="submit" value="Add Skill" name="submit">
						</div>

					</form>
				</div>
			</div>





<!-- ============ footer content =============== -->
<?php 
    require_once "footer.php";
?>
