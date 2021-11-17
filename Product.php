<?php include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
  <div class="container">
     <div class="row">
       <div class="col-lg-3">
         <form action="manage_cart.php" method="POST" >
          <div class="card">
           <img src="Images/PR1.jpg" class="card-img-top">
             <div class="card-body text-center">
              <h5 class="card-title">Apple MacBook Air Core i3 10th Gen laptop</h5>
              <p class="card-text">Price: Rs.60000</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Laptop">
              <input type="hidden" name="Price" value="60000">
             </div>
           </div>
         </form>
      </div>
      <div class="col-lg-3">
         <form action="manage_cart.php" method="POST">
          <div class="card">
           <img src="Images/PR2.jpg" class="card-img-top">
             <div class="card-body text-center">
              <h5 class="card-title">ADIDAS Arcadeis Ms running shoes for men(Blue)</h5>
              <p class="card-text">Price: Rs.3000</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Shoes">
              <input type="hidden" name="Price" value="3000">
             </div>
           </div>
         </form>
      </div>
      <div class="col-lg-3">
         <form action="manage_cart.php" method="POST">
          <div class="card">
           <img src="Images/PR3.jpg" class="card-img-top">
             <div class="card-body text-center">
              <h5 class="card-title">Wildcraft spacy_melsprint night_mel 32L Bagpack</h5>
              <p class="card-text">Price: Rs.5499</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Bagpack">
              <input type="hidden" name="Price" value="5499">
             </div>
           </div>
         </form>
      </div>
      <div class="col-lg-3">
         <form action="manage_cart.php" method="POST">
          <div class="card">
           <img src="Images/PR4.jpg" class="card-img-top">
             <div class="card-body text-center">
              <h5 class="card-title">fujifilm instax mini 11 W800/BC IN5 instant camera</h5>
              <p class="card-text">Price: Rs.10000</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Camera">
              <input type="hidden" name="Price" value="10000">
             </div>
           </div>
         </form>
      </div>
   </div>
  </div>  
</body>
</html>