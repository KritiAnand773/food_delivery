<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "spiyco_db");

// Check database connection
if (mysqli_connect_error()) {
    echo "<script>
            alert('Database connection failed: " . mysqli_connect_error() . "');
            window.location.href='mycart.php';
          </script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['purchase'])) {
        // Insert general order information
        $query1 = "INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Reg_email`, `Address`, `Pay_Mode`) 
                   VALUES ('$_POST[full_name]','$_POST[phone_no]','$_POST[Reg_email]','$_POST[address]','$_POST[pay_mode]')";
        
        if (mysqli_query($con, $query1)) {
            $Order_Id = mysqli_insert_id($con);
            $added_on=date('Y-m-d');

            $query2 = "INSERT INTO `user_orders`(`Order_id`, `Item_Name`, `Price`, `Quantity`, `pass`,`added_on`) VALUES ";

            // Insert item-specific details using regular SQL queries
            foreach ($_SESSION['cart'] as $key => $values) {
                $Item_Name = $values['Item_Name'];
                $Price = $values['Price'];
                $Quantity = $values['Quantity'];
                $pass = $values['pass'];
                $added_on=date('Y-m-d');

                // Append values to the query
                $query2 .= "($Order_Id, '$Item_Name', $Price, $Quantity, '$pass','$added_on'), ";
            }

            // Remove the trailing comma and execute the query
            $query2 = rtrim($query2, ', ');
            if (!mysqli_query($con, $query2)) {
                echo "<script>
                        alert('Error placing order: " . mysqli_error($con) . "');
                        window.location.href='mycart.php';
                      </script>";
                exit();
            }

            // Unset the cart session
            unset($_SESSION['cart']);

            echo "<script>
                    alert('Order Placed');
                    window.location.href='order_success.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Error placing order: " . mysqli_error($con) . "');
                    window.location.href='mycart.php';
                  </script>";
        }
    }
}
?>
