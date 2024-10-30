<?php
include('top.php');
include('database.inc.php');
$msg = "";
$category = "";
$order_number = "";
$id = "";
$image_status = 'required';
$image_error = "";
$image = "";
if (isset($_GET['id']) && $_GET['id'] > 0) {
    $id = get_safe_value($_GET['id']);
    $row = mysqli_fetch_assoc(mysqli_query($con, "select * from category where id='$id'"));
    $category = $row['category'];
    $order_number = $row['order_number'];
	
}

if (isset($_POST['submit'])) {
    $category = get_safe_value($_POST['category']);
    $order_number = get_safe_value($_POST['order_number']);
  
    $added_on = date('Y-m-d h:i:s');

    if ($id == '') {
        $sql = "select * from category where category='$category'";
    } else {
        $sql = "select * from category where category='$category' and id!='$id'";
    }
    if (mysqli_num_rows(mysqli_query($con, $sql)) > 0) {
        $msg = "Dish already added";
    } else {
		$type = isset($_FILES['image']['type']) ? $_FILES['image']['type'] : '';
		if ($id == '') {
			if ($type != 'image/jpeg' && $type != 'image/png') {
				$image_error = "Invalid image format";
			} else {
				$image = rand(111111111, 999999999) . '_' . $_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'], SERVER_DISH_IMAGE . $image);
				mysqli_query($con, "insert into category(category,order_number,image) values('$category','$order_number','$image')");
				redirect('category.php');
			}
		} else {
			$image_condition = '';
			if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
				if ($type != 'image/jpeg' && $type != 'image/png') {
					$image_error = "Invalid image format";
				} else {
					$image = rand(111111111, 999999999) . '_' . $_FILES['image']['name'];
					move_uploaded_file($_FILES['image']['tmp_name'], SERVER_DISH_IMAGE . $image);
					$image_condition = ", image='$image'";
				}
			}
			if ($image_error == '') {
				$sql = "update category set category='$category', order_number='$order_number' $image_condition where id='$id'";
				mysqli_query($con, $sql);
				redirect('category.php');
			}
		}
    }
}
$res_category = mysqli_query($con, "select * from category where status='1' order by category asc");
?>
<!-- HTML form -->
<div class="row">
    <h1 class="grid_title ml10 ml15">Manage Category</h1>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputName1">Category</label>
                        <input type="text" class="form-control" placeholder="Category" name="category" required
                            value="<?php echo $category ?>">
                        <div class="error mt8"><?php echo $msg ?></div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Order Number</label>
                        <input type="text" class="form-control" placeholder="Order Number" name="order_number"
                            value="<?php echo $order_number ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Dish Image</label>
                        <input type="file" class="form-control" placeholder="Dish Image" name="image">

                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>

<?php include('footer.php'); ?>
