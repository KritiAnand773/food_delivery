<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Add_To_cart'])) {
        if (isset($_SESSION['cart'])) {
            $mycart = array_column($_SESSION['cart'], 'Item_Name');
            if (in_array($_POST['Item_Name'], $mycart)) {
                echo "<script>
                alert('Item already added to cart');
                window.location.href='menu2.php';
                </script>";
            } else {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array('Item_Name' => $_POST['Item_Name'],'pass' => $_POST['pass'], 'Price' => $_POST['Price'], 'Quantity' => 1,);
                echo "<script>
                alert('Item added');
                window.location.href='menu2.php';
                </script>";
            }
        } else {
            $_SESSION['cart'][0] = array('Item_Name' => $_POST['Item_Name'],'pass' => $_POST['pass'], 'Price' => $_POST['Price'], 'Quantity' => 1);
            echo "<script>
            alert('Item added');
            window.location.href='menu2.php';
            </script>";
        }
    }
}

//------------------------ Item quantity increasing -------------------------------------------------------------------// 
if(isset($_POST['Mod_Quantity']))
{
  foreach($_SESSION['cart'] as $key => $value)
  {
    if($value['Item_Name']==$_POST['Item_Name'])
    {
        $_SESSION['cart'][$key]['Quantity']=$_POST['Mod_Quantity'];
        header('location:mycart.php');  
        exit;
     } 
  }
}
//------------------------End-Item quantity increasing -------------------------------------------------------------------// 
// ...
//------------------------Remove item from cart-------------------------------------------------------------------// 
if(isset($_POST['Remove-Item']))
{
  foreach($_SESSION['cart'] as $key => $value)
  {
    if($value['Item_Name']==$_POST['Item_Name'])
    {
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart'] = array_values($_SESSION['cart']); // Re-index the array
        echo "<script>alert('Item has been removed...!')</script>";
        echo "<script>window.location='mycart.php'</script>"; // Replace 'mycart.php' with your actual cart page
        exit;
    } 
  }
}
//------------------------End-Remove item from cart-------------------------------------------------------------------// 
// ...

?>