<?php 
require_once "user_auth.php";
$title = "Education Information";
require_once "header.php";
require_once "db.php";

// Query to fetch all records from the education table
$education_records = $dbcon->query("SELECT * FROM education ORDER BY start_year DESC");

?>

<div class="card text-dark mb-3">
  <div class="card-header bg-success text-center"><h3>Education</h3></div>
  <div class="card-body">

    <!-- Success message for adding an item -->
    <?php if (isset($_SESSION['education_add_success'])): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><?= $_SESSION['education_add_success'] ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php unset($_SESSION['education_add_success']); ?>
    <?php endif; ?>

    <!-- Success message for updating an item -->
    <?php if (isset($_SESSION['education_update_message'])): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><?= $_SESSION['education_update_message'] ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php unset($_SESSION['education_update_message']); ?>
    <?php endif; ?>

    <!-- Success message for deleting an item -->
    <?php if (isset($_SESSION['education_delete_success'])): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><?= $_SESSION['education_delete_success'] ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php unset($_SESSION['education_delete_success']); ?>
    <?php endif; ?>

    <table id='example' class="table table-bordered text-center">
        <thead>
            <tr>
                <th>Course</th>
                <th>Institution</th>
                <th>Start Year</th>
                <th>End Year</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through each education record -->
            <?php while ($result = $education_records->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($result['course']) ?></td>
                    <td><?= htmlspecialchars($result['institution']) ?></td>
                    <td><?= htmlspecialchars($result['start_year']) ?></td>
                    <td><?= $result['end_year'] ? htmlspecialchars($result['end_year']) : 'Present' ?></td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-sm btn-warning" href="education_update.php?id=<?= base64_encode($result['id']) ?>">Update</a>
                            <a class="btn btn-sm btn-danger" href="education_delete.php?id=<?= base64_encode($result['id']) ?>">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <a class="btn btn-block btn-success" href="education_edit.php">Add Another Degree</a>
  </div>
</div>

<?php require_once "footer.php"; ?>
