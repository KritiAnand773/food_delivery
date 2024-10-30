<?php include('top.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
    <title>My Cart</title>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: #ffffff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 15px;
            margin-top: 30px;
        }

        /* Updated styles for the heading */
        .custom-heading {
            font-family: 'Roboto', sans-serif;
            color: #2196f3; /* Vibrant blue color */
            margin-top: 3rem;
            font-size: 2.5rem;
            letter-spacing: 2px;
        }


        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: #007bff;
            color: #ffffff;
        }

        .btn-checkout {
            width: 100%;
            margin-top: 20px;
        }

        .btn-checkout:hover {
            background-color: #28a745;
        }

        .grand-total {
            border: 1px solid #dee2e6;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            text-align: center;
        }

        .grand-total h4 {
            margin-bottom: 10px;
        }

        .total-price {
            color: #dc3545;
            font-size: 1.5rem;
        }
    </style>
</head>

<body>
<div class="container">
        <div class="row">
            <div class="col-lg-12 text-center custom-heading">
                <h1>My Cart</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <table class="table">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th scope="col">Serial No</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(isset($_SESSION['cart'])) {
                                foreach($_SESSION['cart'] as $key => $value) {
                                    $sr=$key+1;
                                    echo "
                                        <tr>
                                            <td>$sr</td>
                                            <td>$value[Item_Name]</td>
                                            <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                                            <td>
                                                <form action='manage_cart.php' method='post'>
                                                    <input type='number' class='form-control iquantity' name='Mod_Quantity' onchange='this.form.submit();' value='$value[Quantity]' min='1' max='10'>
                                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                                </form>
                                            </td>
                                            <td class='itotal'></td>
                                            <td>
                                                <form action='manage_cart.php' method='post'>
                                                    <button name='Remove-Item' class='btn btn-danger btn-sm'>Remove</button>
                                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                                </form>
                                            </td>
                                        </tr>
                                    ";
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-4">
                <div class="grand-total">
                    <h4>Grand Total:</h4>
                    <h5 class="total-price" id="gtotal"></h5>
                </div>

                <?php if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) { ?>
                    <a href="final.php" class="btn btn-checkout btn-dark">Check Out</a>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php include('bottom.php')?>

    <script>
        var gt=0;
        var iprice=document.getElementsByClassName('iprice');
        var iquantity=document.getElementsByClassName('iquantity');
        var itotal=document.getElementsByClassName('itotal');
        var gtotal=document.getElementById('gtotal');

        function subTotal() {
            gt=0;
            for(i=0; i<iprice.length; i++) {
                itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
                gt=gt+(iprice[i].value)*(iquantity[i].value);
            }
            gtotal.innerText=gt.toFixed(2);
        }

        subTotal();
    </script>
    <script>
// Get the modal
var modal = document.getElementById("myModal");

// Function to open the modal
function openModal() {
  modal.style.display = "block";
}

// Function to close the modal
function closeModal() {
  modal.style.display = "none";
}
</script>
</body>
</html>
