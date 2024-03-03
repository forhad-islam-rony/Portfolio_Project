<?php
require_once "user_auth.php";
$title = "Guest Messages";
require_once "header.php"; 
require_once "db.php";

$result = $dbcon -> query('SELECT * FROM guest_messages');

?>


<!-- Start Page content -->



<div class="card text-dark mb-3">

		<div class="card-header bg-success text-center"><h3>Guest Messages</h3></div>

		  <div class="card-body">


						<!-- table start here -->
						<table id="example" class="table table-bordered table-striped text-center mx-auto" >
							<thead>
								<tr>
									<th>Serial</th>
									<th>Name</th>
									<th>Email</th>
									<th>Subject</th>
									<th>Message</th>
									<th>Action</th>
								</tr>	
							</thead>

							<tbody>
							
							<?php
							$serial = 1; 
							foreach($result as $row){ ?>

								<tr>
									<td><?=$serial++?></td>
									<td><?=$row['name']?></td>
									<td><?=$row['email']?></td>
									<td><?=$row['subject']?></td>
									<td><?=$row['message']?></td>
									<td>
                        <div class="btn-group">
                            <a class="btn btn-sm btn-danger" href="guest_messages_delete.php?id=<?= base64_encode($row['id']) ?>">Delete</a>
                        </div>
                              </td>
								</tr>

							<?php } ?>
							</tbody>
								
								
						</table>
					</div>
				</div>

<!-- ============ footer content =============== -->
<?php 
    require_once "footer.php";
?>