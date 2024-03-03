<?php 
require_once "user_auth.php";
ob_start();
$title="Update Testimonials";
require_once "header.php";
require_once "db.php";



$id = base64_decode($_GET['id']);

$skill_data_from_db = $dbcon->query("SELECT * FROM skills WHERE id=$id");
$skill_data = $skill_data_from_db->fetch_assoc(); 


?>


<!-- Start Page content -->


<div class="row">
	<!-- col for first form -->
	<div class="col-6">
			<div class="card text-dark mb-3" >
				<div class="card-header bg-success text-center"><h2>Skill Information</h2></div>
					<div class="card-body">

        			<form action="skill_update_check.php?id=<?=base64_encode($id)?>" method="post">
								<div class="form-group">
									<label for="project_name">Skill Name</label>
									<input type="text" class="form-control" name="skill_name" value="<?=$skill_data['skill_name']?>">
								</div>

								<div class="form-group">
									<label for="project_catagory">Percentage</label>
									<input type="text" class="form-control" name="percentage" value="<?=$skill_data['percentage']?>">
								</div>


								
								<div class="form-group">
									<input class="btn btn-block btn-success" type="submit" value="Update" name="submit">
								</div>

							</form>
						</div>
					</div>

      </div>
     <!-- end first col -->
                                    

																			

</div>
<!-- ============ footer content =============== -->
<?php 
    require_once "footer.php";
?>
