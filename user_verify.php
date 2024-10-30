<?php
function generateAlphanumericOTP($length = 6) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $otp = '';

    for ($i = 0; $i < $length; $i++) {
        $otp .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $otp;
}

// Initialize the generated OTP variable
$generatedOTP = '';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form is submitted

    // Simulated user input
    $userInputOTP = $_POST['otp'];

    if (!empty($userInputOTP)) {
        // User has entered an OTP

        $generatedOTP = $_POST['generated_otp'];

        if ($userInputOTP === $generatedOTP) {
            echo "<script>
            alert('Registration Successful!😀🎉✅');
            window.location.href = 'login.php';
            </script>";
        } else {
            echo "<script>
            alert('OTP did not match.❌❌❌❌');
            </script>";
        }
    } else {
        echo "<script>
            alert('Please enter the OTP.❌❌❌❌');
            </script>";
    }
} else {
    // Generate the OTP
    $generatedOTP = generateAlphanumericOTP();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>OTP-Verify</title>
</head>
<body>
    
    <form method="POST" action="">
        <div class="top_head">
            <div class="top_dow_head">
                <a style="margin-left:91px;" class="otp_hed"> Enter Captcha</a>
                <input type="text" name="generated_otp" value="<?php echo $generatedOTP; ?>" readonly>
            </div>
        </div>
        <div class="head_1">
            <div class="head_div">
                <input type="text" name="otp" placeholder="Enter Captcha">
                <br>
                <button name="submit" class="btn btn-danger">Submit</button>
            </div>
        </div>
    </form>
</body>
</html>

<style>
    body {
        background-color: #e3f1f8;
    }

    .top_head {
        display: flex;
        justify-content: center;
        margin-top: 8rem;
    }

    .top_dow_head {
        border: 1px solid black;
        width: 18rem;
        background-color: #8696df;
        border-radius: 5px;
    }

    .head_1 {
        display: flex;
        justify-content: center;
        margin-top: 2rem;
    }

    .head_div {
        border: 1px solid black;
        width: 18rem;
        height: 12rem;
        background-color: #8696df;
        border-radius: 5px;
    }

    .head_div input[type="text"] {
        margin-left: 3rem;
        margin-top: 3rem;
        width: 12rem;
        height: 2rem;
        text-align: center;
        border-radius: 10px;
    }

    .top_dow_head input[type="text"] {
        margin-top: 1rem;
        margin-bottom: 1rem;
        margin-left: 3rem;
        height: 2rem;
        text-align: center;
        background-color: #f3fcfc;
        border: none;
        border-radius: 30px;
    }

    .head_div button {
    margin-top: 2rem !important;
    margin-left: 59px !important;
    width: 11rem !important;
    height: 38px!important;
    /* background-color: #4e37cd; */
    color: white;
    border: none;
    box-shadow: 1px 2px 3px white;
    border-radius: 5px;
}
    .head_div button:hover {
        margin-top: 2rem !important;
        margin-left: 85px !important;
        width: 7rem !important;
        height: 2rem !important;
        background-color: lavender;
        color: black;
        border: none;
        box-shadow: 1px 2px 3px black;
    }

    .otp_hed {
        color: black !important;
        font-family: auto !important;
        text-decoration: none !important;
    }
    /* css */
    .form {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: space-around;
  width: 300px;
  background-color: white;
  border-radius: 12px;
  padding: 20px;
}

.title {
  font-size: 20px;
  font-weight: bold;
  color: black
}

.message {
  color: #a3a3a3;
  font-size: 14px;
  margin-top: 4px;
  text-align: center
}

.inputs {
  margin-top: 10px
}

.inputs input {
  width: 32px;
  height: 32px;
  text-align: center;
  border: none;
  border-bottom: 1.5px solid #d2d2d2;
  margin: 0 10px;
}

.inputs input:focus {
  border-bottom: 1.5px solid royalblue;
  outline: none;
}

.action {
  margin-top: 24px;
  padding: 12px 16px;
  border-radius: 8px;
  border: none;
  background-color: royalblue;
  color: white;
  cursor: pointer;
  align-self: end;
}
</style>
