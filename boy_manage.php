Copy code
<?php 
include('top.php');
include('database.inc.php');
$msg="";
$name="";
$mobile="";
$password="";
$id="";
$status="";

if(isset($_GET['id']) && $_GET['id']>0){
	$id=($_GET['id']);
	$row=mysqli_fetch_assoc(mysqli_query($con,"select * from delivery_boy where id='$id'"));
	$name=$row['name'];
	$mobile=$row['mobile'];
}

if(isset($_POST['submit'])){
	$name=($_POST['name']);
	$mobile=($_POST['mobile']);
	$password=($_POST['password']);
	$added_on=date('Y-m-d h:i:s');
	
	if($id==''){
		$sql="select * from delivery_boy where name='$name' AND password='$password'";
	}else{
		$sql="select * from delivery_boy where mobile='$mobile' and id!='$id'";
	}
	
	$result = mysqli_query($con, $sql);

	if(mysqli_num_rows($result)>0){
		$msg="already added";
	}else{
		if($id==''){
			mysqli_query($con,"insert into delivery_boy(name,mobile,password,status,added_on) values('$name','$mobile','$password',1,'$added_on')");
		}else{
			mysqli_query($con,"update delivery_boy set name='$name',mobile='$mobile',password='$password' where id='$id'");
		}
		
		redirect('delivery_boy.php');
	}
}
?>






<div class="row">
			<h1 class="grid_title ml10 ml15">Delivery Boy Management</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Delivery Boy Name</label>
                      <input type="text" class="form-control" placeholder="Name" name="name" required value="<?php echo $name?>">
					  <div class="error mt8"><?php echo $msg?></div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3" required>Mobile Number</label>
                      <input type="textbox" class="form-control" placeholder=" Number" name="mobile"  value="<?php echo $mobile?>">
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail3" required>Password</label>
                      <input type="textbox" class="form-control" placeholder=" Password" name="password"  value="<?php echo $password?>">
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                  </form>
                </div>
              </div>
            </div>
            
		 </div>
        
<?php include('footer.php');?>