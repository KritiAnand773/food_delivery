<?php include('database.inc.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        .menu-container {
            display: flex;
            flex-wrap: wrap;
        }

        .menu-item {
            width: 50%;
            padding: 10px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="menu-container">
        <?php
        $sql = "SELECT * FROM `category`";
        $result = mysqli_query($con, $sql);  //run the query
        while ($row = mysqli_fetch_assoc($result)) {
            $cat = $row['category'];
            echo '
            <div class="menu-item">
                <a href="briyani.php"><img src="menu_img/briyani.avif" alt="' . $cat . '" class="menu-img"><br><span class="title-menu">' . $cat . '</span></a>
            </div>';
        }
        ?>
    </div>
</body>
</html>
<style>
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
</style>