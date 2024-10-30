<?php include('database.inc.php');?>

<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the entered username or email
    $email = $_POST['email'];

    // Query the database for the user
    $query = "SELECT * FROM user WHERE name = '$email' OR email = '$email'";
    $result = $con->query($query);

    if ($result->num_rows > 0) {
        // User found, display the password
        $row = $result->fetch_assoc();
        $password = $row['password'];

        // JavaScript to open the modal
        echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    document.getElementById('passwordModal').style.display = 'block';
                    document.getElementById('passwordDisplay').innerText = 'Your password is: $password';
                });
              </script>";
    } else {
        // User not found
        echo "User not found. Please check your username or email.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Recovery</title>
    <style>
        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Form styles */
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
            text-align: center;
            border-radius: 8px;
            position: relative;
        }

        .close {
            position: absolute;
            top: 0;
            right: 0;
            padding: 10px;
            cursor: pointer;
        }

        /* Media queries for responsiveness */
        @media only screen and (max-width: 600px) {
            form {
                padding: 10px;
            }
        }
    </style>
</head>
<body>

    <form action="" method="post">
        <label for="username_or_email">Register Email:</label>
        <input type="text" id="username_or_email" name="email" required>
        <button type="submit">Recover Password</button>
    </form>

    <!-- The Modal -->
    <div id="passwordModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <p id="passwordDisplay"></p>
            <button onclick="backToLogin()">Back to Login</button>
        </div>
    </div>

    <script>
        // Function to close the modal
        function closeModal() {
            document.getElementById('passwordModal').style.display = 'none';
        }

        // Function to go back to login
        function backToLogin() {
            window.location.href = 'login.php'; // Change 'login.php' to the actual login page URL
        }
    </script>

</body>
</html>
