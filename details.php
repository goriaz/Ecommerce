<!DOCTYPE html>

<?php     

include("functions/functions.php");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Shopping</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/details.css">
    <link rel="stylesheet" href="style/responsive.css">
</head>
<body>
    <div class="main-wrapper">


     <div class="header">
                 

             <h1>   E-Badarganj 
            </h1>
         

     </div>










     <div class="menu">
        <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand" href="#">G-Collection</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">My Accounts</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Shopping Cart</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                  </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Products
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0" method="GET" action="result.php" enctype="multipart/form-data">
                <input class="form-control mr-sm-2" type="text" name="user_query" placeholder="Search Any Product" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" name="search" type="submit">Search</button>
              </form>
            </div>
          </nav>
     </div>
     <div class="content-wrapper container ">
            
        <div class="row">







        <div class="sidebar">
        
             
            <div id="cats">
                 <h4>Categories</h4>
                 <ul>
                   
                    <?php     getCats();?>
                 
                 </ul>
                 
 
             </div>
 
 
             <div id="brands">
                 <h4>Brands</h4>
 
                 <ul id="brands-item">
                 <?php     getBrands();?>
                 
                 </ul>
 
 
             </div>
 
 
 
         </div>

        <div class="content-area"> 
              <div class="container" id="product_chart">

                 <span>Welocme Guest! <b>Shopping Chart-</b> Total Items- Total Price- <a href="chart.php" style="color: yellow;">Go to chart</a> </span>

             
              </div>

             


              <div id="product_box">


<?php

if(isset($_GET['pro_id'])){

  $pro_id=$_GET['pro_id'];

$get_pro ="select * from products where product_id='$pro_id'";

$run_pro=mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){

$pro_id=$row_pro['product_id'];
$pro_cat=$row_pro['product_cat'];
$pro_brand=$row_pro['product_brand'];
$pro_title=$row_pro['product_title'];
$pro_price=$row_pro['product_price'];
$pro_desc=$row_pro['product_desc'];
$pro_image=$row_pro['product_image'];
echo "



<div id='productdetails'>
  <h4> $pro_title</h4>
 <img src='admin_area/product_images/$pro_image'>
     <p id='p'>$pro_price TK</p>
     <a id='goback' href='index.php' style='float:left;'>Go Back</a>


     <a href='index.php?pro_id=$pro_id'><button  id='addtochart'>Add to chart</button></a>   

     <p class='desc'>$pro_desc </p>

</div>







";



}
}

?>




           </div>


      
        </div>

       








        </div>

        
     </div>
     
     









    </div>

    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>