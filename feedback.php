
<?php
include('database.inc.php');


// Debugging: Output the contents of the $_POST array
var_dump($_POST);

// Get data from the feedback form
$username = isset($_POST['username']) ? $_POST['username'] : '';
$text = isset($_POST['feedback']) ? $_POST['feedback'] : '';

// Validate data (you may want to add more validation)
if (empty($username) || empty($text)) {
    die("Please fill in all fields");
}

// Sanitize data to prevent SQL injection
$username = mysqli_real_escape_string($con, $username);
$text = mysqli_real_escape_string($con, $text);

// Construct and execute the SQL insert query
$sql = "INSERT INTO feedback (username, text) VALUES ('$username', '$text')";

if ($con->query($sql) === TRUE) {
    echo "Feedback submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

// Close the database connection
$con->close();

?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input,
    textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
  <title>Feedback Page</title>
</head>
<body>

  <div class="container">
    <h1>Feedback Page</h1>
    <form id="feedbackForm" action="feedback.php" method="post">
  <label for="username">Your Name:</label>
  <input type="text" id="username" name="username" required>

  <label for="feedback">Your Feedback:</label>
  <textarea id="feedback" name="feedback" rows="4" required></textarea>

  <button type="submit">Submit Feedback</button>
</form>

  </div>

  <script>
    function submitFeedback() {
      var username = document.getElementById('username').value;
      var feedbackText = document.getElementById('feedback').value;

      // Validate if username and feedback are not empty
      if (username.trim() === '' || feedbackText.trim() === '') {
        alert('Please fill in all fields');
        return;
      }

      // Construct the feedback object
      var feedbackData = {
        username: username,
        feedback: feedbackText,
      };

      // Send feedback data to the server (for demonstration purposes, alerting the data)
      alert('Submitting feedback:\n' + JSON.stringify(feedbackData));

      // Now you can make an AJAX request to your server to store the data in the database
      // Example SQL insert query: INSERT INTO feedback (username, feedback) VALUES ('John Doe', 'Great food!')
    }
  </script>
 
</body>
</html>
