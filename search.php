<?php include('top.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h2, h3, p {
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
        }

        h3 {
            color: #555;
        }

        a {
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    <title>Search...</title>
</head>

<body>

<?php
session_start();
include('database.inc.php');

// Check if the form is submitted or category_id is present in the URL
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Get the search query from the form
    $searchQuery = isset($_GET['query']) ? $_GET['query'] : '';

    // Check if category_id is present in the URL
    if (isset($_GET['category_id'])) {
        $categoryId = $_GET['category_id'];
        // Redirect to the same category section
        header("Location:menu2.php?category_id=$categoryId");
        exit;
    }

    // Perform the search logic
    $results = performSearch($searchQuery);

    // Display the search results
    echo "<div class='container'>";
    echo "<h2>Search Results</h2>";

    // Display search results in a table
    if (!empty($results)) {
        
        echo "<table>";
        echo "<tr><th>Dish</th></tr>";
        foreach ($results as $result) {
            $dishName = $result['dish'];
            echo "<tr><td><a href='menu2.php?category_id={$result['category_id']}#category_{$result['category_id']}'>$dishName</a></td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No results found.</p>";
    }

    echo "</div>";
}

// Function to perform the search
function performSearch($query) {
    global $con;

    // Escape the search query to prevent SQL injection
    $searchQuery = $con->real_escape_string($query);

    // Convert the search query to lowercase for case-insensitive search
    $searchQueryLower = strtolower($searchQuery);

    // Perform the query (replace 'dish' with your actual table name)
    $sql = "SELECT * FROM dish WHERE LOWER(dish) LIKE '%$searchQueryLower%'";
    $result = $con->query($sql);

    // Process the results
    $data = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    return $data;
}
?>

</body>

</html>
