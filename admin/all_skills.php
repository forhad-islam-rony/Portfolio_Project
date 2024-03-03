<?php 
require_once "user_auth.php";
$title="Skills";
require_once "header.php";
require_once "db.php";

$skill = $dbcon->query("SELECT * FROM skills");
?>

      

<div class="card text-dark mb-3">
	<div class="card-header bg-success text-center"><h3>About Skills</h3></div>

	<div class="card-body">

																			
		  	<!-- update message alert  -->

		  	<?php if(isset($_SESSION['testimonial_update_success'])){ ?>
						
						<div class="alert alert-success alert-dismissible fade show" role="alert">
					  <strong><?=$_SESSION['testimonial_update_success']?></strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>


		  	<?php }
		  	unset($_SESSION['Skill_update_success']);
		  	?>

		  	<!-- aleart end -->



		  	<!-- delete message alert  -->

		  	<?php if(isset($_SESSION['Skill_delete'])){ ?>
						
						<div class="alert alert-success alert-dismissible fade show" role="alert">
					  <strong><?=$_SESSION['skill_delete']?></strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>


		  	<?php }
		  	unset($_SESSION['skill_delete']);
		  	?>

		  	<!-- aleart end -->

				<table id="example" class="table table-striped table-bordered mx-auto">
					<thead>
						<tr>
							<th>Skill Name</th>
							<th>Percentage</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>

					<!-- php code -->
					<?php foreach ($skill as $result) {
						
					 ?>


						<tr>
							<td><?=$result['skill_name']?></td>

							<td><?=$result['percentage']?></td>

							<td>
								<div class="btn-group">
									<a class="btn btn-sm btn-warning" href="skill_update.php?id=<?=base64_encode($result['id'])?>">Update</a>

									<a class="btn btn-sm btn-danger" href="skill_delete.php?id=<?=base64_encode($result['id'])?>">Delete</a>
								</div>
							</td>
						</tr>

						<!-- end foreach -->
					<?php } ?>
					</tbody>
					

				</table>
				<a class="btn btn-block btn-success" href="skills.php">Add Another Skill</a>
			</div>
		</div>



<!-- ============ footer content =============== -->
<?php 
    require_once "footer.php";
?>
