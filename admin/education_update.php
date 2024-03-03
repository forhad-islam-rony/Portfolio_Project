<?php
ob_start(); 
require_once "user_auth.php";
$title="Edit Education Information";
require_once "header.php";
require_once "db.php";

$id = base64_decode($_GET['id']);

$education_data_from_db = $dbcon->query("SELECT * FROM education WHERE id=$id");
$education_data = $education_data_from_db->fetch_assoc();

if(isset($_POST['submit'])){
	$course       = $_POST['course'];
	$institution              = $_POST['institution'];
	$start       = $_POST['start_year'];
	$end       = $_POST['end_year'];
	

	if(!empty($course) &&!empty($institution) && !empty($start) && !empty($end)){
		$education_update = $dbcon->query("UPDATE education SET course='$course',instiution='$institution',start_year='$start',end_year='$end' WHERE id='$id'");
			$_SESSION['education_update_message'] = "Update successfully!";
			header("location: education.php");
			ob_end_flush();
		}
	// isset end	
	}

?>


<!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-6 m-auto">
                                <div class="card-box">
                                    <h4 class="header-title mb-4">Add Degree</h4>

																			<form action="" method="post" >
																				<div class="form-group">
																					<label for="project_name">Course Name</label>
																					<input type="text" class="form-control" name="course" value="<?=$education_data['course']?>">
																				</div>
																				<div class="form-group">
																					<label for="project_name">Institution Name</label>
																					<input type="text" class="form-control" name="institution" value="<?=$education_data['institution']?>">
																				</div>

																				<div class="form-group">
																					<label for="project_catagory">Start Year</label>
																					<input type="text" class="form-control" name="start_year" value="<?=$education_data['start_year']?>">
																				</div>

																				<div class="form-group">
																					<label for="project_catagory">End Year</label>
																					<input type="text" class="form-control" name="end_year" value="<?=$education_data['end_year']?>">
																				</div>


																				
																				
																				<div class="form-group">
																					<input class="btn btn-block btn-success" type="submit" value="Update" name="submit">
																				</div>

																			</form>


                                </div>
                            </div>
                        </div>
                    </div> <!-- container -->

                </div> <!-- content -->




<!-- ============ footer content =============== -->
<?php 
    require_once "footer.php";
?>
