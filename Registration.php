<?php
include('database.inc.php');
$msg = "";
$name = "";
$email = "";
$mobile = "";
$password = "";
$id = "";

function isMobileValid($mobile)
{
    return preg_match('/^[0-9]{10}$/', $mobile);
}

if (isset($_GET['id']) && $_GET['id'] > 0) {
    $id = get_safe_value($_GET['id']);
    $row = mysqli_fetch_assoc(mysqli_query($con, "select * from user where id='$id'"));
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $password = $row['password'];
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $agree = isset($_POST['agree']) ? $_POST['agree'] : 0;

    if (!isMobileValid($mobile)) {
        $msg = "Please enter a 10-digit mobile number.";
    } else if (!$agree) {
        $msg = "Please agree to the terms and conditions.";
    } else {
        if ($id == '') {
            $sql = "select * from user where name='$name' and email='$email'";
        } else {
            $sql = "select * from user where email='$email' and id!='$id'";
        }

        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            $msg = "User already exists.";
        } else {
            if ($id == '') {
                $added_on = date('Y-m-d h:i:s');
                mysqli_query($con, "insert into user(name,mobile,email,status,added_on,password) values('$name','$mobile','$email',1,'$added_on','$password')");
            } else {
                mysqli_query($con, "update user set name='$name',mobile='$mobile',email='$email' where id='$id'");
            }
            header('location:user_verify.php');
        }
    }
}

function get_safe_value($con, $val)
{
    return mysqli_real_escape_string($con, trim($val));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="rstyle.css">
</head>

<body class="video-container">
    <video autoplay muted loop id="video-background">
        
        <source src="video/ezgif-2-6823ad26c7.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="wrapper">

        <div class="form-box register">
            <h2>Registration</h2>
            <form method="post" onsubmit="return validateForm()">
            <div class="input-box">
            <span class="icon"><ion-icon name="person"></ion-icon></span>
            <input type="text" required name="name" value="<?php echo $name; ?>" oninput="allowAlphabets(event)">
            <label>Full Name</label>
            </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required name="email" value="<?php echo $email; ?>">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="call"></ion-icon></span>
                    <input type="tel" required name="mobile" oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 10)" value="<?php echo $mobile; ?> ">
                    <label>Number</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required name="password" value="<?php echo $password; ?>">
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" name="agree" id="agree"> I agree to the terms & conditions</label>
                </div>
                <button type="submit" class="btn" name="submit">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Register
                </button>
                <div class="login-register">
                    <p style="color: black;margin-left: 41px;">Already have an account?<a href="login.php" class="login-link" style="color:red;"> Login</a></p>
                </div>
                <p style="color: red;" id="errorText"><?php echo $msg; ?></p>
            </form>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        function validateForm() {
            var agreeCheckbox = document.getElementById('agree');
            if (!agreeCheckbox.checked) {
                var errorMsg = document.getElementById('errorText');
                errorMsg.innerText = "Please agree to the terms and conditions.";
                return false;
            }
            return true;
        }
    </script>
</body>

</html>

<style>
    body {
        margin: 0;
        font-family: 'Arial', sans-serif;
    }

    .video-container {
        position: relative;
        width: 100%;
        height: 100vh;
        overflow: hidden;
    }

    #video-background {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -1;
    }

    .wrapper {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        backdrop-filter:blur(1px) !important;
    }
    
</style>
<script>
     function allowAlphabets(event) {
            var input = event.target;
            var inputValue = input.value;
            var regex = /^[a-zA-Z\s]*$/; // Regular expression to allow only alphabets and spaces

            if (!regex.test(inputValue)) {
                // Remove non-alphabetic characters
                input.value = inputValue.replace(/[^a-zA-Z\s]/g, '');
            }
        }
</script>
