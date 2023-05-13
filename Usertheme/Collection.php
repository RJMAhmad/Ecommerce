<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />
   </head>
   <body class="sub_page">

   <?php require_once("Header.php") ?>


      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Product Grid</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- product section -->

   



         <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">
            <?php 
    $Category = $_GET["Name"];
    $Fetch = "SELECT * FROM `tbl_product` where Product_Category = $Category";
    $Execute_Product = mysqli_query($conn,$Fetch);
    $Check_product = mysqli_num_rows($Execute_Product);
    
    if($Check_product > 0) {
      while($Covert_Array =  mysqli_fetch_array($Execute_Product)){ ?>
               <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           <?php echo $Covert_Array[1]; ?>
                           </a>
                           <a href="" class="option2">
                           Buy Now
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="<?php echo $Covert_Array[5]; ?>" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                        <?php echo $Covert_Array[1]; ?>
                        </h5>
                        <h6>Rs
                        <?php echo $Covert_Array[2]; ?>
                        </h6>
                     </div>
                  </div>
                  </div>
                  <?php   }
   } else {
    echo "Nothing to Show";
    }
    
    
    ?>
              
              
            
            <!-- <div class="btn-box">
               <a href="">
               View All products
               </a>
            </div> -->
         

         </div>
      </section>

   
     
      <!-- end product section -->
      <!-- footer section -->
    

      <?php require_once("Footer.php") ?>

   </body>
</html>