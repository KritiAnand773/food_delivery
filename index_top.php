<?php 
session_start();
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
</head>
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
                        <a href="index.php">HOME</a>
                    </li>
                    <li>
                        <a href="no_menu.php">MENU</a>
                    </li>
                    <li>
                        <a href="aboutk.php">ABOUT</a>
                    </li>
                    <li>
                        <a href="#">HELP</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                    <li>
                        <a class="slid_bar_log_reg" href="login.php">Login</a><a class="slid_bar_log_reg_1" href="Registration.php">Register</a>
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
                        <a class="logo" href="index.html"><img src="images/logo.png" alt="#" /></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full">
                        <div class="right_header_info">
                            <ul>
                                <li class="dinone"><a href="index.php"style="margin-right:60px;margin-left: 15px;">HOME</a> 
                                <a href="no_menu.php" style="margin-right:60px;margin-left: 15px;">MENU</a></li>
                                <li class="dinone">
                                <a href="aboutk.php"style="margin-right: 60px;margin-left: 15px;">ABOUT</a></li>
                                <li class="dinone">
                                <a href="index_faq.php"style="margin-right: 60px;margin-left: 15px;">FAQs</a></li>
                                <li class="dinone" style="display: flex;">
                                    <div class="login_button_top" > <a href="login.php">Login</a></div><div class="reg_button_top"><a href="Registration.php" style="color:black;">Register</a></div>
                               
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
    <!-- end header -->
      
  <style>
/* --------------------------------------------------------------------------------------------------------------- */
    /* rotation  */
    .col-md-7 img {
    animation: imgRotate 50s linear infinite;
    }
    @keyframes imgRotate { 
        100% { 
            transform: rotate(360deg); 
        } 
    }
    /* ----------------------------------------------------------------------------------------------------------- */
     li input[type="search" i] {
    appearance: auto;
    box-sizing: border-box;
    padding: 1px 2px;
    border: none;
    background: transparent;
    border-bottom: 1px solid white;
    color: white;
    width: 19rem;
}
li form .search_butt{
    border: 0;
    margin: 0;
    padding: 0;
    cursor: pointer;
    background: yellow !important;
    width: 68px !important;
    border-radius: 6px !important;
    color: black !important;
 
}
.slid_bar_log_reg{
    border-radius: 7px;
    height: 57px !important;
    background-color: black;
    color: white;
    font-size: 21px !important;
    margin-top: 10px !important;
    font-family: 'FontAwesome';
    border: 1px solid yellow;
}
.slid_bar_log_reg_1{
    border-radius: 7px;
    height: 57px !important;
    background-color:yellow;
    color:black;
    font-size: 21px !important;
    margin-top: 10px !important;
    font-family: 'FontAwesome';
    border: 1px solid black;
}
.login_button_top {
    border-radius: 30px;
    border: 1px solid;
    width: 96px;
    text-align: center;
    height: 6vh;
    margin-right: 10px;
    /* background: yellow; */
    background-color: black;
    margin-top: -3px;
}
.reg_button_top{
   
    border: 1px solid white;
    width: 96px;
    text-align: center;
    height: 6vh;
    background-color: yellow;
    /* color: black; */
    margin-top: -3px;
    border-radius: 37px;
}
@media (max-width:575px){
    .right_header_info ul li {
    padding-top: 10px !important;
    margin-left:auto !important;
    margin-right: -170px !important;
  
    }
.slid_bar_log_reg{
    display: none;
}
}
  </style>
</body>
</html>