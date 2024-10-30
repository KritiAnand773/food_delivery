<?php 
session_start();

if(!isset($_SESSION['email_id'])){

 ;
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatable" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>Check Out</title>
		<link rel="stylesheet" href="rstyle.css">
	</head>
	<body>

		<div class="wrapper">
		<div class="form-box register">
		
        <form action="purchase.php" method="post">
				<div class="input-box">
					<span class="icon"><ion-icon name="person"></ion-icon></span>
						<input type="text" required name="full_name">
						<label>Full Name</label>
				</div>
			<div class="input-box">
				<span class="icon"><ion-icon name="mail"></ion-icon></span>
					<input type="email" required name="Reg_email" readonly value="<?php echo $_SESSION['email_id']?>">
					<label> </label>
			</div>
			<div class="input-box">
				<span class="icon"><ion-icon name="call"></ion-icon></span>
					<input type="tel" required name="phone_no"oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 10)">
					<label>Mobile Number</label>
			</div>
            <div class="mb-3">
                <label for="address" style="font-size: 21px; color: red; margin-left: 10px;" >Address *</label>
                <textarea name="address" class="form-control form-control3" required placeholder="Please enter address"></textarea>
            </div>
			 
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault2" checked><br>
                <label class="form-check-label" for="flexRadioDefault2">
                    Cash On Delivery
                </label>
            </div>
            <br>
            <button class="btn btn-primary btn-block" name="purchase">Make Purchase</button>
		 </form>
		</div>
	</div>

	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
	</body>
</html>
<style>
   .form-control {
    width: 103%;
    height: 15vh;
    font-family: sans-serif;
    font-size: 17px;
    background: transparent;
    color: white;
   border-bottom: 3px solid white;
border-radius: 5px;
}
body{
	background-color:gainsboro !important;
}
</style>