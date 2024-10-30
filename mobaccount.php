<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css1/mob_acc.css">
    <title>Account</title>
</head>
<body>

<div class="top_bar">
   <div class="top_box">
   <a><a style="color: black; font-size:33px; " class="text_box_text">Profile</a><img src="/food_op/f_end/img_acc/profile_i.png" class="top_img"></a>
   </div>
    
</div>
<div class="container">
    <div class="mid_bar">
        <img src="img_acc/order2.png" class="mid_img">
    </div>
    <div class="mid_bar">
        <img src="img_acc/pay3.png" class="mid_img">
    </div>
    <div class="mid_bar">
        <img src="img_acc/setting.png" class="mid_img">
    </div>
</div>
<div>
    <div class="bar">
        <a><img src="img_acc/order2.png" class="bar_img"><a class="box-text"href="#">Your order</a></a>
    </div>
</div>
<div>
    <div class="bar">
        <a><img src="img_acc/home2.png" class="bar_img"><a class="box-text"href="#">Address book</a></a>
    </div>
</div>
<div>
    <div class="bar">
        <a><img src="img_acc/hart.png" class="bar_img"><a class="box-text"href="#">Favorite order</a></a>
    </div>
</div>
<div>
    <div class="bar">
        <a><img src="img_acc/help.png" class="bar_img"><a class="box-text" href="#">Online ordering help</a></a>
    </div>
</div>
<div>
    <div class="bar">
        <a><img src="img_acc/log2.png" class="bar_img"><a class="box-text" href="logout.php">Logout</a></a>
    </div>
</div>
<style>
    @media (max-width: 575px){

.container{
    display: flex;
    justify-content: space-around;
    
}
.box_container{
    display: flex;
    justify-content: center;
}
.top_box{
    display: flex;
    align-items: center;
    margin-left:37px;
}
div.top_bar {
    border: 1px solid;
    margin-top: 8%;
    height: 18vh;
    border-radius: 16px;
    box-shadow: 0px 1px 5px 1px black;
    color: white;
}
.mid_bar {
    border: 1px solid;
    margin-top: 15%;
    width: 110px;
    border-radius: 64px;
    box-shadow: 0px 1px 3px 1px black;
    color: white;
}
.top_img {
    margin-left: 102px;
    width: 140px;
    margin-top: 3%;
}
.mid_img{
   width: 104px;
   margin-left: 3px;
}
.img_box{
    width: 71px;
margin-bottom: -15px;
margin-left: -49%;
}
.bar {

    margin-top:57px;
    height: 6vh;
    border-radius:8px;
    box-shadow: 0px 1px 5px 1px black;
    color:white;
}
.bar_img {
    width: 69px;
    margin-top: -9px;
    margin-bottom: -17px;
    margin-left: 19px;
}
.box-text{
    font-size: 30px;
    font-family: cursive;
    color: black;
    text-decoration:none;
}

}  
</style>

</body>
</html>