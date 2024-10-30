<?php 
include('top.php');
$msg="";
$image="";
$heading="";
$sub_heading="";
$link="";
$link_txt="";
$order_number="";
$id="";
$image_status='required';
$image_error="";
if(isset($_GET['id']) && $_GET['id']>0){
	$id=get_safe_value($_GET['id']);
	$row=mysqli_fetch_assoc(mysqli_query($con,"select * from banner where id='$id'"));
	$image=$row['image'];
}

if(isset($_POST['submit'])){

	
		
	if($id==''){
		$type=$_FILES['image']['type'];
		if($type!='image/jpeg' && $type!='image/png'){
			$image_error="Invalid image format";
		}else{		
			$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'],SERVER_BANNER_IMAGE.$image);
			mysqli_query($con,"insert into banner(image) values('$image')");
			redirect('banner.php');
		}
	}else{
		if($_FILES['image']['type']==''){
			mysqli_query($con,"where id='$id'");
			redirect('banner.php');
		}else{
			$type=$_FILES['image']['type'];	
			if($type!='image/jpeg' && $type!='image/png'){
				$image_error="Invalid image format";
			}else{
				$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'],SERVER_BANNER_IMAGE.$image);
			
				mysqli_query($con,"update banner set image='$image' where id='$id'");
				redirect('banner.php');
			}
		}
	}
	
	
}
?>
<div class="row">
			<h1 class="grid_title ml10 ml15">Manage Banner</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" method="post" enctype="multipart/form-data">
					<div class="form-group">
                      <label for="exampleInputName1">Image</label>
                      <input type="file" class="form-control" placeholder="Image" name="image" <?php echo $image_status?>>
					  <div class="error mt8"><?php echo $image_error?></div>
                    </div>  
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                  </form>
                </div>
              </div>
            </div>
            
		 </div>
        
<?php include('footer.php');?>