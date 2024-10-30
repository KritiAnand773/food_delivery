<?php include('top.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <h2>Order Listings</h2>
                <div class="mb-3">
                    <label for="searchInput" class="form-label">Search:</label>
                    <input type="text" id="searchInput" class="form-control" placeholder="Type to search">
                </div>
                <table class="table table-bordered" id="order-listing">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Phone No</th>
                            <th scope="col">Address</th>
                            <th scope="col">Orders</th>
                            <th scope="col">Total/Delivery</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM `order_manager`";
                        $user_result = mysqli_query($con, $query);
                        while ($user_fetch = mysqli_fetch_assoc($user_result)) {
                            echo "
                            <tr>
                                <td>{$user_fetch['Order_Id']}</td>
                                <td>{$user_fetch['Full_Name']}</td>
                                <td>{$user_fetch['Phone_No']}</td>
                                <td>{$user_fetch['Address']}</td>
                                <td>{$user_fetch['Pay_Mode']}</td>
                                <td>
                                    <table class='table table-bordered'>
                                        <thead class='thead-light'>
                                            <tr>
                                                <th scope='col'>Item Name</th>
                                                <th scope='col'>Price</th>
                                                <th scope='col'>Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody>";
                                        $order_query = "SELECT * FROM `user_orders` WHERE `Order_Id` = '{$user_fetch['Order_Id']}'";
                                        $order_result = mysqli_query($con, $order_query);
                                        while ($order_fetch = mysqli_fetch_assoc($order_result)) {
                                            echo "
                                            <tr>
                                                <td>{$order_fetch['Item_Name']}</td>
                                                <td>{$order_fetch['Price']}</td>
                                                <td>{$order_fetch['Quantity']}</td>
                                            </tr>
                                            ";
                                        }
                                        echo "</tbody>
                                    </table>
                                </td>
                            </tr>
                            ";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
<style>
    .table-responsive {
        margin-top: 20px;
    }

    #searchInput {
        width: 300px;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#searchInput').on('keyup', function () {
            var value = $(this).val().toLowerCase();
            $('#order-listing tbody tr').filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
    });
</script>
