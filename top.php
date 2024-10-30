<?php 
session_start();

if(!isset($_SESSION['email_id'])){

    header('location:index.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Spicyo</title>
    <!-- favicon-->
    <link rel="icon" type="image/x-icon" href="\food_op\f_end\images\favicon.ico ">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

     <!-- plugins:css -->
  <link rel="stylesheet" href="/food_op/f_end/css/materialdesignicons.min.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<!-- body -->
<style>

</style>
<body class="main-layout">
    <!-- loader  -->
    <!-- <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div> -->

    <div class="wrapper">
    <!-- end loader -->

     <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>
                

                <ul class="list-unstyled components">
                    
                    <li class="active">
                        <a href="main.php">HOME</a>
                    </li>
                    <li>
                        <a href="menu2.php">MENU</a>
                    </li>
                    <li >
                                    <?php
                                    $count=0;
                                    if(isset($_SESSION['cart']))
                                    {
                                        $count=count($_SESSION['cart']);
                                    }
                                    
                                    
                                    ?>
                                <a href="mycart.php"style="margin-right:17px;margin-left: -12px;">MY CART(<?php echo $count;?>)</a></li>
                    <li>
                        <a href="aboutk.php">ABOUT</a>
                    </li>
                    <li>
                        <a href="faq.php">FAQ</a>
                    </li>
                    
                    <li>
                        <a href="profile_card.php">Profile</a>
                    </li>
                   
                    <li>
                    <a href="logout.php"><img src="img_acc/profile2.png" class="admin_top_icon">Logout</a>
                    </li>
                </ul>

            </nav>
        </div>

    <div id="content">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="full">
                        <a class="logo" href="main.php"><img src="images/logo.png" alt="#"  style="margin-top: -9px;"/></a>
                    </div>
                   
                </div>
                <div class="col-md-9">
                    <div class="full">
                        <div class="right_header_info">
                            <ul>
                            <li class="dinone">
                      

                            </li>
                            <li class="dinone"><a href="main.php"style="margin-right:22px;margin-left: 15px;">HOME</a> 
                                <a href="menu2.php" style="margin-right:14px;margin-left: 15px;">MENU</a></li>
                                <li class="dinone">
                                    <?php
                                    $count=0;
                                    if(isset($_SESSION['cart']))
                                    {
                                        $count=count($_SESSION['cart']);
                                    }
                                    
                                    
                                    ?>
                                <a href="mycart.php"style="margin-right:17px;margin-left: -12px;">MY CART(<?php echo $count;?>)</a></li>
                                <li class="dinone"><a href="aboutk.php"style="margin-right:22px;margin-left:-22px;">ABOUT</a> 
                                <a href="#" style="margin-right:0px;margin-left: 15px;" onclick="openModal()">ACCOUNT</a>
                                <div id="myModal" class="modal">
                                <div class="modal-content">
                                    <span class="close" onclick="closeModal()">&times;</span>
                                    <div class="side_bar_top_nav_account">
                                      
                                        <a class="st_profile" >User id:- <?php echo $_SESSION['email_id']?></a>
                                    </div>
                                    <div class="side_bar_top_nav_account">
                                        <a href="profile_card.php"class="st_profile" >Profile</a>
                                    </div>
                                    <div class="side_bar_top_nav_account">
                                        <a href="history_order.php"class="st_profile" >Order</a>
                                    </div>
                                    <div class="side_bar_top_nav_account">
                                        <a href="logout.php"class="st_profile" >Logout</a>
                                    </div>
                                </div>
                                </div>
                               </li>
                                <!-- Update the "search" link -->
                                
                                <li class="dinone">
                                    <a href="#" onclick="openSearchModal()"><i class="uil uil-search"></i></a>
                                </li>

                                <li class="dinone">
                                    <a href="/food_op/admin/index.php"><img src="img_acc/profile2.png" class="admin_top_icon"></a>
                                </li>
                                <li>
                                    <button type="button" id="sidebarCollapse">
                                        <img src="images/menu_icon.png" alt="#">
                                    </button>
                                </li>
 

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </header>
  <style>
/* --------------------------------------------------------------------------------------------------------------- */
 .search_button{
    margin-left: 2px;
    height: 5vh;
    width: 77px;
    border-radius: 4px;
    background: yellow;
 }

    /* ----------------------------------------------------------------------------------------------------------- */

.right_header_info ul li {
    font-size: 14px !important;
    margin-left: 43px !important;
}
/*--------------------------------------------------------------------- header ---------------------------------------------------------------------*/
header{
    border-bottom: 1px solid;
}
.admin_top_icon {
    border: 1px solid;
    max-width: 23px;
    margin-top:-1px;
    background-color: white;
    border-radius: 19px;
}
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 53rem !important;
    top: 0;
    width: 38%;
    height: 100%;
    overflow: auto;
    background: url(images/bar_bg.jpg);
    background-size:cover;
	background-position:center;
  }
  
  .modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    background: url(images/bar_bg.jpg);
    background-size:cover;
	background-position:center;
    margin-top: 6rem;
    border-radius: 30px !important;
    background: black !important;
    border: 1px solid white !important;
    width: 18rem !important;
  }


  /* Style for the close button */
  .close {
    float: right;
    font-size: 1.5rem;
    font-weight: 700;
    line-height: 1;
    color: yellow !important;
    text-shadow: 0 1px 0 #fff;
    margin-left: 14rem !important;
}

  .close:hover,
  .close:focus {
    color:red !important;
    text-decoration: none;
    cursor: pointer;
  }
  .side_bar_top_nav_account{
    color: white;
    background-color: #000000c4;
    text-align: start;
    width: 229px;
    border: 1px solid yellow;
    border-radius: 23px;
    margin-bottom: 10px;
  
  }
  .st_profile{
    margin-left:20px;
  }

/*---------------------------------------------------------------------End-header ---------------------------------------------------------------------*/

@media (max-width:575px){
    .right_header_info ul li {
    padding-top: 10px !important;
    margin-left:auto !important;
    margin-right: -170px !important;

    }

    .title_menu {
    color: white !important;
    margin-left: 141px !important;
    font-size: 20px !important;
}

.footer .img-box figure img {
    width: 100%;
   
    margin-left: 33% !important;
}
}

  </style>
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
<script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });





    // ---------------------------------------------------------------------------------------------------------------
    // ... Your existing script

    // Function to open the search modal
    function openSearchModal() {
        document.getElementById("searchModal").style.display = "block";
    }

    // Function to close the search modal
    function closeSearchModal() {
        document.getElementById("searchModal").style.display = "none";
    }


// ... Your existing script


    </script>
</body>
<!-- Add this section at the end of your HTML body -->
<div id="searchModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeSearchModal()">&times;</span>
        <div class="search-bar">
            <!-- Your search form goes here -->
            <form id="searchForm" action="search.php" method="GET" onsubmit="submitSearchForm()">
                <input type="text" id="searchQuery" name="query" placeholder="Search...">
                <button type="submit" class="search_button">Search</button>
            </form>
        </div>
    </div>
</div>

</html>