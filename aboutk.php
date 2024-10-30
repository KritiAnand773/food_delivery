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
                        <a href="main.php">HOME</a>
                    </li>
                    <li>
                        <a href="menu2.php">MENU</a>
                    </li>
                    <li>
                        <a href="aboutk.php">ABOUT</a>
                    </li>
                    <li>
                        <a href="help.php">HELP</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact Us</a>
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
                                <li class="dinone"><a href="main.php"style="margin-right:60px;margin-left: 15px;">HOME</a> 
                                <a href="menu2.php" style="margin-right:60px;margin-left: 15px;">MENU</a></li>
                                <li class="dinone">
                                <a href="aboutk.php"style="margin-right: 60px;margin-left: 15px;">ABOUT</a></li>
                                <!-- <li class="dinone">
                                <a href="faq.php"style="margin-right: 60px;margin-left: 15px;">FAQ</a></li>
                                <li class="button_user"><a class="button active" href="#">Login</a><a class="button" href="#">Register</a></li>
                                <li><img style="margin-right:30px;" src="images/search_icon.png" alt="#"></li> -->
                                <!-- <li class="dinone">
                                <a href="#">Profile</a></li>
                                <li> -->
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

    <!-- end slider section -->

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



body {
        font-family: Arial, sans-serif;
        background-color: #f7f7f7;
        color: #333;
        line-height: 1.5;
    }

    h1 {
        color: #333;
        font-size: 32px;
        margin-bottom: 10px;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 40px 20px;
        background-color: #FFFFF0;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        border-radius: 4px;

    }



    .heading h1{
        margin-top:130px;
        margin-bottom:20px;
        color:black;
        text-align:center;
    }
    .section-heading {
        color: #333;
        font-size: 28px;
        margin-top:20px;
        margin-bottom: 20px;
       
    }

    .team-member {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .team-member img {
        width: 200px;
        height: 200px;
        object-fit: cover;
        border-radius: 50%;
        margin-right: 30px;
    }

    .team-member .info {
        flex: 1;
    }

    .team-member h2 {
        color: #333;
        font-size: 24px;
        margin-bottom: 5px;
    }

    .team-member p {
        color: #666;
        font-size: 16px;
        line-height: 1.4;
    }
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







    <title>About Us - Foodie Delight</title>
   

         <div class="heading">
    
        <h1>About Us - Spicyo</h1>
    
        </div>



    <div class="container">
        <div class="content">

            <h2 class="section-heading">Our Story</h2>
            <p >
                Foodie Delight is a premium online food delivery service committed to bringing exceptional culinary
                experiences to your doorstep. We believe that great food has the power to connect people and enhance
                special moments, and we strive to create unforgettable dining experiences for our customers.
                Online ordering means more choices. Now customers can order a smorgasbord of delicious culinary options
                from their favorite local eateries, even healthy options. Want to skip chicken wings and order grilled
                chicken with steamed vegetables instead? It’s possible. Need a salad instead of scarfing down a burger
                and fries? Do it. Online food delivery services are enabling customers to stick to healthy eating plans
                even when they want to forego meal prep or dining out.
            </p>

            <h2 class="section-heading">Meet Our Team</h2>



            <div class="team-member"  style=" border-radius: 10px 10px 10px;box-shadow:2px 2px 2px 2px rgba(0, 0, 0, 0.1);" >
                <img src="kimages\kritianand.jpeg" alt="Team Member 1">
                <div class="info">
                    <h2>Kriti Anand</h2>
                    <p>Executive Chef</p>
                    <p>Preparing delectable recipes that make people remember is an art form. Chefs are incredibly
                        passionate about what they do. Chefs take immense pleasure in treating their diners with
                        delicious recipes.Having worked with food for years, chefs can easily pick even the subtle
                        differences between bad and good recipe whenever they are eating out.</p>
                </div>
            </div>

            <div class="team-member"  style=" border-radius: 10px 10px 10px;box-shadow:2px 2px 2px 2px rgba(0, 0, 0, 0.1);">
             <img src="kimages\gaurav.jpeg" alt="Team Member 2">
                <div class="info">
                    <h2>Gaurav kr Swarnakar</h2>
                    <p>Food Stylist</p>
                    <p>Jane's artistic flair and attention to detail ensure that every dish not only tastes amazing but
                        also looks visually stunning.Having worked with food for years, chefs can easily pick even the
                        subtle differences between bad and good recipe whenever they are eating out.
                    </p>
                </div>
            </div>

            <div class="team-member"  style=" border-radius: 10px 10px 10px;box-shadow:2px 2px 2px 2px rgba(0, 0, 0, 0.1);">
                <img src="kimages\bharat.jpeg" alt="Team Member 3">
                <div class="info">
                    <h2>Bharat kr Saha</h2>
                    <p>Chef</p>
                    <p>Chefs don’t work in kitchens just for the salary. They’re passionate and they want to create
                        delicious food for customers. Their goal is to make diners smile and receive compliments on
                        their food. This is their passion and guests can notice it with the presentation and taste. </p>
                </div>
            </div>
            <div class="team-member"  style=" border-radius: 10px 10px 10px;box-shadow:2px 2px 2px 2px rgba(0, 0, 0, 0.1);">
                <img src="kimages\shyamal.jpeg" alt="Team Member 4">
                <div class="info">
                    <h2>Samyel Besra</h2>
                    <p>Chef</p>
                    <p>Chefs will always try their best to accommodate their customers’ needs. Whether it’s intolerances
                        or allergies, chefs will try their best. They love customers who have a broad food palate, but
                        not those who are too picky.</p>
                </div>
            </div>
            <div class="team-member"  style=" border-radius: 10px 10px 10px;box-shadow:2px 2px 2px 2px rgba(0, 0, 0, 0.1);">
                <img src="kimages\gaurav_singh.jpeg" alt="Team Member 5">
                <div class="info">
                    <h2>Gaurav kr Singh</h2>
                    <p>Chef</p>
                    <p>They please customers and make them enjoy their meals through taste and also beautiful
                        presentations. But chefs know their masterpieces are nothing without understanding the chemistry
                        of ingredients to perfectly balance flavour combinations.</p>
                </div>
            </div>

        </div>
    </div>
   
</body>

</html>