<?php include('index_top.php')?>
<?php include('database.inc.php');?>
<?php include ('/xampp/htdocs/food_op/admin/constant.inc.php');?>

<!DOCTYPE html>
<html>
<head>
  <title>Menu Page</title>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" /> -->
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <style>

    /* CSS for slider */
    body{
        background: black;
    }
 body .container123 {
    display: flex !important;
    overflow: auto !important;
    scroll-snap-type: x mandatory !important;
    padding: 10px !important;
    gap: 12px !important;
    scroll-padding: 10px !important;
    margin-top: 85px !important;
}
 .item345{
    flex: 0 0 100%; 
    scroll-snap-align: start !important;
    scroll-snap-stop: always !important;
    height: 84vh !important; 
    width: 100% !important;
    max-width: 1300px;
}
div::-webkit-scrollbar{
    display: none !important;
}
.card{
    margin-left: 2rem !important;
}
.card-img-top{
    max-width: 256px !important;
    height: 31vh !important;

}
.btn:not(:disabled):not(.disabled) {
    margin-left: 17px !important;
    margin-top: 25px !important;
    width: 190px !important;
    background: black !important;
    color: white !important;
}
.cc1 {
    display: flex !important;
    flex-wrap: wrap !important;
    justify-content: center !important;
    margin-top: 62px !important;
}
.head_menu {
    display: flex !important;
    flex-wrap: wrap !important;
    justify-content: center !important;
    margin-top: 32px !important;
    margin-left: -62px !important;
}
.menu_item {
    margin-left:55px !important;
    margin-top: 5px !important;
   
}

.menu_img {
    max-width: 134px !important;
    border-radius: 100% !important;
    transition: 0.9s ease !important;
    cursor: pointer !important;
    margin-left: 10px !important;
     border: 2px solid white;
}
.menu_img:hover{
    transform: scale(1.1) !important;
   
}
.title_menu{
    color: white !important;
    margin-left: 40% !important;
    margin-left: 54px !important;
}
.card-title {
    margin-bottom:-2.25rem !important;
    font-size: 15px !important;
    margin-left: -12px !important;
    color: black !important;
}
h6 {
    font-size: 1rem !important;
    margin-left: -13px !important;
    margin-top: 1rem !important;
}
.card-text-y{
    color:white !important;
    margin-left: 11rem !important;
    font-size: 11px !important;
    padding: 3px !important;
    border-radius: 7px !important;
    background: rgb(36, 150, 63 ) !important;
    border: 1px solid rgb(36, 150, 63) !important;
}

    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      /* background-image: url("kimages/back.jpg"); */
      background: black;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper {
      width: 98%;
      height: 80%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .heading{
      margin-bottom: 10px;
      color:#fff;
      text-transform:uppercase;
      text-align: center;
      font-size: 40px;
      
    }
    .title-dash{
      background-color: #f5f5f5;
      height: 5px;
      width: 50px;
      align-items: center;
      margin: auto;

    }
    .heading img {
      width: 50px;
      height: 50px;
      border-radius: 2px;
    }

    /* CSS for menu items */
    .menu {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 20px;
      
    
    }
   

    .menu-item {
      /* width: 150px; */
      margin: 20px;
      padding: 10px;
      text-align: center;
      
      /* background-color:white; Fallback color */
      border-radius: 600px;
      /* box-shadow: 0 0 5px rgba(20, 15, 17, 0.234); */
    }

    .menu-item h3 {
      font-size: 18px;
      margin-bottom: 10px;
      color:white;
    }

    .menu-item p {
      font-size: 14px;
      color: #888;
    }

    .menu-item img{
        width: 160px;
        height:160px;
       border-radius: 90px;
       border:5px solid white;
    }
    

    /* dimanding */
   
    .dimanding_items {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    margin: 2rem;
      
}

.dimand-item {
    text-align: center;
    margin: 1rem;
    padding: 1rem;
    background:white;
    border: 2px solid red;
    border-radius: 10px;
    box-shadow:.5rem .5rem .8rem rgba(255,255,255,.2);
    width: 250px;
}

.dimand-item img {
    max-width: 86%;
    border-radius:1rem;
    /* border:1px solid black; */
}

.add-to-cart {
    background-color: black;
    color: white;
    /* border: none; */
    border:2px solid red;
    box-shadow: 2 2 2px red;
    padding: 0.5rem 3rem;
    cursor: pointer;
}

.add-to-cart:hover {
    background-color: silver;
    border:2px solid black;
    color:black;
}

.price {
    font-weight: bold;
}

.rating {
    font-style: italic;
    color: #888;
}
.banner_img{
  max-width: 100%;
}
.title-dash{
        width: 50rem;
      }

    /* CSS for responsiveness */
    @media screen and (max-width: 768px) {
      .menu-item .swiper-wrapper {
        width: 100%;
      }
    
      
    }
    

    @media screen and (max-width:57px) {
     .title-dash{
      width:24rem !important;
     } 
    }

    .login_button_top {
    border-radius: 30px !important;
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
.video-container {
      position: relative;
      width: 100%;
      height: 100vh;
      overflow: hidden;
      margin-top: 42px;
  }

    #video-background {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -1;
    }
  </style>
</head>
<body>
<div class="video-container">

<video autoplay muted loop id="video-background">
    
    <source src="video/menu3.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>
</div>
<!-- <div class="swiper mySwiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide"><img src="kimages/slider14.jpg" alt="Slider Image 3"></div>
    <div class="swiper-slide"><img src="kimages/slider-ice.jpg" alt="Slider Image 3"></div>
    <div class="swiper-slide"><img src="kimages/slider15.jpg" alt="Slider Image 3"></div>
    <div class="swiper-slide"><img src="kimages/slider16.jpg" alt="Slider Image 3"></div>
    <div class="swiper-slide"><img src="kimages/slider22.jpg" alt="Slider Image 3"></div>
    <div class="swiper-slide"><img src="kimages/11.jpg" alt="Slider Image 3"></div>
    <div class="swiper-slide"><img src="kimages/slide_panner.jpg" alt="Slider Image 3"></div>
    <div class="swiper-slide"><img src="kimages/indian_daal.jpg" alt="Slider Image 3"></div>
    <div class="swiper-slide"><img src="kimages/momos_slide.jpg" alt="Slider Image 3"></div>
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-pagination"></div>
</div> -->
<h3 class="heading"> <img src="kimages/chef-image.jpeg" alt=""> welcome to our food section <img src="kimages/little-chef-logo.jpg" alt=""></h3>
  <div class="title-dash"></div> 
    <div class="head_menu">
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
    
                <!-- MOST DIMANDING ITEMS -->

  <h3 class="heading"> <img src="kimages/chef-image.jpeg" alt=""> Most Demanding Items<img src="kimages/little-chef-logo.jpg" alt=""></h3>
  <div class="title-dash" style="margin-top: 0;"></div> 

 

 <!-- -------------------------------------------------CART-MENU------------------------------------------------------------ -->
 <div class="cc1">
   
   <form method="post" action="alert_login.php">
       <div class="card" style="width: 16rem; margin-top: 10px; ">
       <img class="card-img-top" src="kimages/biryani.jpg" alt="Card image cap">
       <div class="card-body">
           <h5 class="card-title">Matka chicken biryani</h5>
           <a class="card-text-y">4.0⭐</a>
           <h6 class="card-text">RS 150</h6>
           <button class="btn"name="Add_To_cart">ADD TO CART</button>
           <input type="hidden" name="Item_Name" value="Matka chicken biryani">
           <input type="hidden" name="Price" value="150">
       </div>
       </div>
   </form>
   <form method="post" action="alert_login.php">
       <div class="card" style="width: 16rem; margin-top: 10px; ">
       <img class="card-img-top" src="kimages/cheese_pizza.jpg" alt="Card image cap">
       <div class="card-body">
           <h5 class="card-title">Cheese pizza</h5>
           <a class="card-text-y">4.0⭐</a>
           <h6 class="card-text">RS 249</h6>
           <button class="btn " name="Add_To_cart">ADD TO CART</button>
           <input type="hidden" name="Item_Name" value="Cheese pizza">
           <input type="hidden" name="Price" value="249">
       </div>
       </div>
   </form>
   <form method="post" action="alert_login.php">
       <div class="card" style="width: 16rem; margin-top: 10px;">
       <img class="card-img-top" src="kimages/chicken-momo.jpg" alt="Card image cap">
       <div class="card-body">
           <h5 class="card-title">Chicken momo</h5>
           <a class="card-text-y">4.0⭐</a>
           <h6 class="card-text">RS 119</h6>
           <button class="btn " name="Add_To_cart">ADD TO CART</button>
           <input type="hidden" name="Item_Name" value="Chicken momo">
           <input type="hidden" name="Price" value="199">
       </div>
       </div>
   </form>
   <form method="post" action="alert_login.php">
       <div class="card" style="width: 16rem; margin-top: 10px;">
       <img class="card-img-top" src="kimages/chicken.jpg" alt="Card image cap">
       <div class="card-body">
           <h5 class="card-title">Fried rice </h5>
            <a class="card-text-y">4.2⭐</a>
           <h6 class="card-text">RS 199</h6>
           <button class="btn " name="Add_To_cart">ADD TO CART</button>
           <input type="hidden" name="Item_Name" value="Fried rice">
           <input type="hidden" name="Price" value="199">
       </div>
       </div>
   </form>
   <form method="post" action="alert_login.php">
       <div class="card" style="width: 16rem; margin-top: 10px;">
       <img class="card-img-top" src="kimages/chicken-pizza.jpg" alt="Card image cap">
       <div class="card-body">
           <h5 class="card-title">Chicken pizza</h5>
           <a class="card-text-y">4.0⭐</a>
           <h6 class="card-text">RS 299</h6>
           <button class="btn " name="Add_To_cart">ADD TO CART</button>
           <input type="hidden" name="Item_Name" value="Chicken pizza">
           <input type="hidden" name="Price" value="299">
       </div>
       </div>
   </form>
   <form method="post" action="alert_login.php">
       <div class="card" style="width: 16rem; margin-top: 10px;">
       <img class="card-img-top" src="kimages/chicken_noodels.jpg" alt="Card image cap">
       <div class="card-body">
           <h5 class="card-title">Chicken noodels</h5>
           <a class="card-text-y">4.1⭐</a>
           <h6 class="card-text">RS 139</h6>
           <button class="btn " name="Add_To_cart">ADD TO CART</button>
           <input type="hidden" name="Item_Name" value="Chicken noodels">
           <input type="hidden" name="Price" value="139">
       </div>
       </div>
   </form>
   <form method="post" action="alert_login.php">
       <div class="card" style="width: 16rem; margin-top: 10px;">
       <img class="card-img-top" src="kimages/chilli_paneer_noodles.jpg" alt="Card image cap">
       <div class="card-body">
           <h5 class="card-title" >Chilli paneer</h5>
           <a class="card-text-y">4.1⭐</a>
           <h6 class="card-text">RS 149</h6>
           <button class="btn " name="Add_To_cart">ADD TO CART</button>
           <input type="hidden" name="Item_Name" value="Chilli paneer">
           <input type="hidden" name="Price" value="149">
       </div>
       </div>
   </form>
   <form method="post" action="alert_login.php">
       <div class="card" style="width: 16rem; margin-top: 10px;">
       <img class="card-img-top" src="kimages/Best-Kadai-Paneer.jpg" alt="Card image cap">
       <div class="card-body">
           <h5 class="card-title" >Kadai paneer</h5>
           <a class="card-text-y">4.1⭐</a>
           <h6 class="card-text">RS 189</h6>
           <button class="btn " name="Add_To_cart">ADD TO CART</button>
           <input type="hidden" name="Item_Name" value="Kadai paneer">
           <input type="hidden" name="Price" value="189">
       </div>
       </div>
   </form>
</div>
<?php include('index_footer.php')?>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

      // DOUBLE CLICK IMG 

var targetImage = document.getElementById('burger');

targetImage.addEventListener('dblclick', function() {
  window.location.href = 'burger.php';
});
var targetImage = document.getElementById('biryani');

targetImage.addEventListener('dblclick', function() {
  window.location.href = 'biryani.php';
});
var targetImage = document.getElementById('fish');

targetImage.addEventListener('dblclick', function() {
  window.location.href = 'fish.php';
});
var targetImage = document.getElementById('chicken');

targetImage.addEventListener('dblclick', function() {
  window.location.href = 'chicken.php';
});
var targetImage = document.getElementById('pizza');

targetImage.addEventListener('dblclick', function() {
  window.location.href = 'pizza.php';
});
var targetImage = document.getElementById('Noodles');

targetImage.addEventListener('dblclick', function() {
  window.location.href = 'noodles.php';
});
var targetImage = document.getElementById('momos');

targetImage.addEventListener('dblclick', function() {
  window.location.href = 'momoes.php';
});
var targetImage = document.getElementById('dosa');

targetImage.addEventListener('dblclick', function() {
  window.location.href = 'dosa.php';
});
var targetImage = document.getElementById('cake');
targetImage.addEventListener('dblclick', function() {
  window.location.href = 'cake.php';
});
var targetImage = document.getElementById('ice-cream');
targetImage.addEventListener('dblclick', function() {
  window.location.href = 'ice-cream.php';
});
var targetImage = document.getElementById('rice');
targetImage.addEventListener('dblclick', function() {
  window.location.href = 'rice.php';
});
var targetImage = document.getElementById('naan');
targetImage.addEventListener('dblclick', function() {
  window.location.href = 'naan.php';
});
var targetImage = document.getElementById('curry');
targetImage.addEventListener('dblclick', function() {
  window.location.href = 'curry.php';
});

</script>
</body>
</html>
