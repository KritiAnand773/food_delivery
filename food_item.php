<?php include ('/xampp/htdocs/food_op/admin/constant.inc.php');?>
<?php  include("database.inc.php"); ?>
<?php include('top.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Briyani</title>
</head>
<body>
    <img src="images/banner_1.jpg" style="margin-top: 90px;">

        <div class="banner-container">

            <span id="banner-text">🤩Swift 20-minute delivery, guaranteed satisfaction awaits you!🤩</span>
            
        </div>
    
</body>
</html>

<div class="cc1">

    <?php
    if (isset($_GET['catID'])) {
        $id = $_GET['catID'];

        // Use a prepared statement to prevent SQL injection
        $sql = "SELECT * FROM dish WHERE category_id=?";
        
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);

        $res = mysqli_stmt_get_result($stmt);

        while ($row = mysqli_fetch_assoc($res)) {
            $image = $row['image'];
            
            echo '
            <form method="post" action="manage_cart.php">
            <div class="card" style="width: 18rem; margin-top:5px; margin-left:3px; height:97%;">
                <img class="card-img-top"src="' . SITE_DISH_IMAGE . $image . '" alt=" " style="width:100%; height:192px;">
                <div class="card-body">
                    <h5 class="card-title">' . $row['dish'] . '</h5>
                    <p class="card-text">'.$row['dish_detail'].'</p>
                    <p class="card-text" style="font-weight:bold;">Price: ' . $row['price'] . '</p>
                    <input type="hidden" name="Item_Name" value="' . $row['dish'] . '">
                    <input type="hidden" name="Price" value="' . $row['price'] . '">
                    <input type="hidden" name="pass"value="'. $_SESSION["email_id"].'">
                    <button class="button_cart btn"name="Add_To_cart">ADD TO CART</button>
                </div>
            </div>
            </form>
            ';
        
        }
    }
    ?>
</div>
<?php include('bottom.php')?>
<style>
    img{
        max-width: 100%;
    }
    .cc1 {
    display: flex !important;
    flex-wrap: wrap !important;
    justify-content: center !important;
    margin-top: 62px !important;
}
.button_cart {
    background-color: black;
    width: 100% !important;
    border: 1px solid black !important;
    color: white;
}
.text-banner{
    background-color:black;
    border: 2px solid red;
}
.banner-container {
      position: absolute;
      top:96%;
      left: 0;
      white-space: nowrap;
      font-size: 24px;
      animation: scrollText 10s linear infinite;
      color:white;
      background-color: black;
      border: 2px solid yellow;
      border-radius: 10px;
      font-size: 21px;

   
    }

    @keyframes scrollText {
      from {
        transform: translateX(90%);
      }
      to {
        transform: translateX(-90%);
      }
    }
</style>


