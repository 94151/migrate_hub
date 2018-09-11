<?php 
$title = "Products";
$active ='products'; include 'header.php';?>
</div>
      <!-- Page Header Start -->
      <div class="page-header" style="background: url(assets/img/banner1.jpg);">
        <div class="container">
          <div class="row">         
            <div class="col-md-12">
              <div class="breadcrumb-wrapper">
                <h2 class="product-title">Products</h2>
                <ol class="breadcrumb">
                  <li><a href="#"><i class="ti-home"></i> Home</a></li>
                  <li class="current">Products</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Page Header End -->        

      <!-- Main container Start -->  
      <div class="about section">
        <div class="container">
          <div class="row">
           <div class="col-md-9">   
            <?php
            include('product1.php');
            ?>
          </div>
          <?php
          include('sidebar.php'); 
          ?>
          </div>
                
          
        </div>
        
      </div>
     
      <!-- Main container End -->  
      
      
 <?php include 'footer.php';?>
    <!-- Main JS  -->
    <script src="assets/js/jquery-min.js"></script>      
    <script src="assets/js/bootstrap.min.js"></script>    
    <script src="assets/js/material.min.js"></script>
    <script src="assets/js/material-kit.js"></script>
    <script src="assets/js/jquery.parallax.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jasny-bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>    
    <script src="assets/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/js/jquery.themepunch.tools.min.js"></script>
      
  </body>
</html>