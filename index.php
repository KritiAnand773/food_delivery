<?php include('database.inc.php');?>
<?php include ('/xampp/htdocs/food_op/admin/constant.inc.php');?>
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
    <link rel="stylesheet" href="css/index_res.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<!-- body -->

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
                                <li class="dinone"><a href="#"style="margin-right:60px;margin-left: 15px;">HOME</a> 
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
       <!-- start slider section -->
       <div class="slider_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div id="main_slider" class="carousel vert slide" data-ride="carousel" data-interval="5000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="slider_cont">
                                                <h3>Discover a World of Flavors at Your Fingertips.</h3>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                                <a class="main_bt_border" href="#">Order Now</a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="slider_image full text_align_center">
                                                <img class="img-responsive" src="images/hero.png" alt="#" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end slider section -->

    <!-- section -->
    <section class="resip_section">
        <div class="container">
            <div class="row">
         <div class="col-md-12">
       <div class="ourheading">
    <h2>Most Selling Food</h2>
  </div>
</div>    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="owl-carousel owl-theme">

            <?php
    $sql = "SELECT * FROM `category`";
    $result = mysqli_query($con, $sql);  //run the query
    while ($row = mysqli_fetch_assoc($result)) {
        $cat = $row['category'];
        $image = $row['image']; // assuming the 'image' column exists in the 'category' table
        echo '
            <div class="menu_item">
                <a href="index_item.php?catID='. $row["id"] .'"><img src="' . SITE_DISH_IMAGE . $image . '" alt="' . $cat . '" class="menu_img"></a><br><a class="title_menu">' . $cat . '</a>
            </div>   
        ';
    }
?>
</div>
</div>
</div>
</section>
<div class="bg_bg">
<!-- about -->
<div class="about">
    <div class="container">
      <div class="row">
         <div class="col-md-12">
             <div class="title">
                <i><img src="images/title.png" alt="#"/></i>
                <h2>About Our Food & Restaurant</h2>
                <span>It is a long established fact that a reader will be distracted by the readable content of a
                   <br> page when looking at its layout. The point of using Lorem
                </span>
             </div>
          </div>
       </div>
       <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
             <div class="about_box">
                 <h3>Best Food</h3>
                 <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscureContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard </p>
                 <a href="#">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
             </div>
         </div>
          <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 about_img_boxpdnt">
             <div class="about_img">
                 <figure >&nbsp;&nbsp;&nbsp;<img src="images/about-img.jpg" alt="#/"></figure>
             </div>
         </div>      
       </div> 
    </div>
</div>
<!-- end about -->

<!-- blog -->
<div class="blog">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title">
          <i><img src="images/title.png" alt="#"/></i>
          <h2>Our Blog</h2>
          <span>OUR BLOG </span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
        <div class="blog_box">
          <div class="blog_img_box">
            <figure><img src="images/food6.webp" alt="#"/>
            
            </figure>
          </div>
          <h3>Spicy Barger</h3>
          <p>The burger's storied history can be traced back to the late 19th century when it first appeared on the American culinary scene. Legend has it that the creation of this portable delight can be attributed to Louis Lassen, a Danish immigrant who served a ground beef patty sandwiched between slices of bread at his New Haven, Connecticut</p>
        </div>
      </div>
       <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
        <div class="blog_box">
          <div class="blog_img_box">
            <figure><img src="images/food7.webp" alt="#"/>
             
            </figure>
          </div>
          <h3> Wow Momo</h3>
          <p>Momo first emerged in 2018 when an artist named Keisuke Aiso showcased a sculpture at an art gallery in Japan. The sculpture, titled "Mother Bird," featured a grotesque figure with bulging eyes, long hair, and a wide, unsettling grin. Little did Aiso know that this creation would become the catalyst for an internet sensation.</p>
        </div>
      </div>
       <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <div class="blog_box">
          <div class="blog_img_box">
            <figure><img src="images/food8.webp" alt="#"/>
         
            </figure>
          </div>
          <h3>Roll</h3>
          <p>Egg rolls have a rich history that traces back to traditional Chinese cuisine. While their exact origin is debated, they are believed to have originated in southern China, where they were prepared for special occasions and festivals. The popularity of these delightful snacks soon spread across Asia and eventually made their.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end blog -->


</div>
    <!-- footer -->
   <?php include('index_footer.php');?>
    <!-- end footer -->

    </div>
    </div>
    <div class="overlay"></div>
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
     <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
     <script src="js/jquery-3.0.0.min.js"></script>
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
    </script>

    <style>
        .slider_section{
            background-color:#212020;
        }
.menu_img {
    max-width: 134px !important;
    border-radius: 100% !important;
    transition: 0.9s ease !important;
    cursor: pointer !important;
    margin-left:67px !important;
     border: 2px solid white;
}
.menu_img:hover{
    transform: scale(1.1) !important;
   
}
.title_menu{
    color: white !important;

    margin-left: 98px !important;
    font-size: 20px !important;
}
    #owl-demo .item{
        margin: 3px;
    }
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    
    }
    .owl-carousel .owl-item img {
    display: block;
    width: 100%;
    margin-left:75px;
}
@media (max-width: 575px){

.footer .img-box figure img {
    width: 100%;
    margin-top: -28px;
    margin-left: 15%;
}
.right_header_info ul {
    float: inherit;
    float: inherit;
    text-align: center;
    display: flex;
    justify-content: center;
    width: 100%;
    margin-left:-5rem;
    margin-top:4px;
}
    }
    </style>
<style>
.owl-carousel .owl-item img {
    display: block !important;
    width: 100% !important;
    margin-left: 75px !important;
    border-radius: 100% !important;
    cursor: pointer;
}
/*--------------------------------------------------------------------- header ---------------------------------------------------------------------*/
/* ---------------------------------------------------rotate image css-------------------------------------------------------------- */
.col-md-7 img {
    animation: imgRotate 50s linear infinite;
    }
    @keyframes imgRotate { 
        100% { 
            transform: rotate(360deg); 
        } 
    }
/* ----------------------------------------------------end-rotate image css-------------------------------------------------------------- */
header{
    border-bottom: 1px solid;
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

/*---------------------------------------------------------------------End-header ---------------------------------------------------------------------*/

</style>
     
      <script>
         $(document).ready(function() {
           var owl = $('.owl-carousel');
           owl.owlCarousel({
             margin: 10,
             nav: true,
             loop: true,
             responsive: {
               0: {
                 items: 1
               },
               600: {
                 items: 2
               },
               1000: {
                 items: 5
               }
             }
           })
         })
      </script>

</body>

</html>