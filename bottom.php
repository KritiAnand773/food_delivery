<?php
function redirect($link){
	?>
	<script>
	window.location.href='<?php echo $link?>';
	</script>
	<?php
	die();
}
include('database.inc.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $added_on = date('Y-m-d h:i:s');

    $qry = "INSERT INTO call_back_request (name, number, email, message, added_on) VALUES ('$name', '$number', '$email', '$message', '$added_on')";

    $run = mysqli_query($con, $qry);
    if($run){
        redirect('thank.php'); // Redirect to a thank you page after successful submission
        exit; // Terminate the current script to prevent further execution
    } else {
        echo "<p style='color:red;text-align:center'>Insertion Problem occurred. Please try again later.</p>";
    }
}
?>







<fooetr>
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                  <div class=" col-md-12">
                    <h2>Request  A<strong class="white"> Call  Back</strong></h2>
                  </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      
                        <form class="main_form" method="post">
                            <div class="row">
                             
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Name" type="text" name="name" required>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Email" type="text" name="email"required>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Phone" type="text" name="number"required oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 10)">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="textarea" placeholder="Message" type="text" name="message"required></textarea>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <button class="send" name="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="img-box">
                            <figure><img src="images/19377202_yfv2_2i6j_210524-removebg-preview.png" alt="img" /></figure>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer_logo">
                          <a href="index.html"><img src="images/logo1.jpg" alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <ul class="lik">
                            <li class="active"> <a href="main.php">HOME</a></li>
                            <li> <a href="faq.php">FAQs</a></li>
                            <li> <a href="aboutk.php">ABOUT</a></li>
                            <!-- <li> <a href="contact.php">contact us</a></li>
                            <li> <a href="/food_op/admin/index.php">Admin</a></li> -->
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="new">
                            <!-- <h3>Newsletter</h3>
                            <form class="newtetter">
                                <input class="tetter" placeholder="Your email" type="text" name="Your email">
                                <button class="submit">Subscribe</button>
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>
         
        </div>
    </fooetr>
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
        margin: 3px !important;
    }
    #owl-demo .item img{
        display: block;
        width: 100% !important;
        height: auto;
    
    }
    .owl-carousel .owl-item img {
    display: block;
    width: 100% !important;
    margin-left:75px !important;
    
}
.footer {
     background: #d8b00f;
     padding-top:90px;
     margin-top: 20px;
}
.footer .img-box figure img {
    width: 48% !important;
    margin-top: -73px !important;
}
@media (max-width: 575px){

.footer .img-box figure img {
    width: 100%;
    margin-top: -28px;
    margin-left: 15%;
}
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

</body>
</html>