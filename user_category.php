<?php 
include('top.php');
$msg="";
$name="";
$email="";
$mobile="";
$id="";

if(isset($_GET['id']) && $_GET['id']>0){
	$id=get_safe_value($_GET['id']);
	$row=mysqli_fetch_assoc(mysqli_query($con,"select * from user where id='$id'"));
	$name=$row['name'];
	$email=$row['email'];
	$mobile=$row['mobile'];
}

if(isset($_POST['submit'])){
	$name=get_safe_value($_POST['name']);
	$email=get_safe_value($_POST['email']);
	$mobile=get_safe_value($_POST['mobile']);
	
  if($id==''){
		$sql="select * from user where name='$name' email='$email'";
	}else{
		$sql="select * from user where mobile='$mobile' and id!='$id'";
		
	}
	
	if(mysqli_num_rows(mysqli_query($con,$sql))>0){
		$msg="already added";
	}else{
		if($id==''){
			mysqli_query($con,"insert into user(name,mobile,email,status,added_on) values('$name','$mobile','$email',1,'$added_on')");
		}else{
			mysqli_query($con,"update user set name='$name',mobile='$mobile',email='$email' where id='$id'");
		}
	
		
		redirect('user.php');
	}
}

?>
<div class="row">
			<h1 class="grid_title ml10 ml15">User Category</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" placeholder="Name" name="name" required value="<?php echo $name?>">
					  <div class="error mt8"><?php echo $msg?></div>
                    </div>
					<div class="form-group">
                      <label for="exampleInputName1">Email</label>
                      <input type="text" class="form-control" placeholder="Email" name="email" required value="<?php echo $email?>">
					  <div class="error mt8"><?php echo $msg?></div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3" required>Order Mobile Number</label>
                      <input type="textbox" class="form-control" placeholder="Order Number" name="mobile"  value="<?php echo $mobile?>">
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                  </form>
                </div>
              </div>
            </div>
            
		 </div>
        
<?php include('footer.php');?>