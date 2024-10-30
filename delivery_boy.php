<?php 
include('top.php');


// Check if the delete button is clicked
if(isset($_GET['delete_id']) && $_GET['delete_id'] > 0) {
    $delete_id = $_GET['delete_id'];
    
    // Use prepared statement to prevent SQL injection
    $stmt = mysqli_prepare($con, "DELETE FROM delivery_boy WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $delete_id);

    if (mysqli_stmt_execute($stmt)) {
        // Redirect to the same page to refresh the data
        header("Location: delivery_boy.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
}

// Fetch data from the delivery_boy table
$result = mysqli_query($con, "SELECT * FROM delivery_boy");

// Rest of your code remains unchanged
?>

<div class="card">
    <div class="card-body">
        <h1 class="grid_title">Delivery boy</h1>
        <a href="boy_manage.php" class="add_link">Add Delivery Boy</a>
        <div class="row grid_box">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="order-listing" class="table">
                        <thead>
                            <tr>
                                <th width="10%">S.No #</th>
                                <th width="15%">Name</th>
                                <th width="15%">Mobile Number</th>
                                <th width="15%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $counter = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td><?php echo $counter++; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['mobile']; ?></td>
                                    <td>
                                        <a href="boy_manage.php?id=<?php echo $row['id']; ?>"><label class="badge badge-success">Edit</label></a>&nbsp;
                                        <a href="?delete_id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this item?');">
                                            <label class="badge badge-danger delete_red">Delete</label>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            if (mysqli_num_rows($result) == 0) {
                            ?>
                                <tr>
                                    <td colspan="4">No data found</td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
