<?php 
$title = "Migrate Now";
$active ='products'; include 'header.php';?>
</div>
      <!-- Page Header Start -->
      <div class="page-header" style="background: url(assets/img/banner1.jpg);">
        <div class="container">
          <div class="row">         
            <div class="col-md-12">
              <div class="breadcrumb-wrapper">
                <h2 class="product-title">Migrate Now</h2>
                <ol class="breadcrumb">
                  <li><a href="#"><i class="ti-home"></i> Home</a></li>
                  <li class="current">Migrate Now</li>
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
            <h2 class="medium-title">Migrate Now</h2><br>
            <h3>Sign up now to know your eligibility for migration to your dream country.</h3>
              <div class="col-md-12 col-sm-12 col-xs-12">
                 
                 <form class="form-horizontal" name="multiform" id="multiform" action="migratenow_mail.php" method="POST" enctype="multipart/form-data"  onsubmit="return ValidateContactForm();">


                  <div class="form-group">
                      <label class="control-label col-sm-2" for="name">Name*</label>
                      <div class="col-sm-10">
                      <span id="userName-info" class="info"></span>
                        <input type="text" name="userName" id="userName" class="form-control" placeholder="Enter Name">
                       
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Email*</label>
                      <div class="col-sm-10">
                      <span id="userEmail-info" class="info"></span>
                        <input type="email" name="userEmail" id="userEmail" class="form-control" placeholder="Enter email">
                        
                      </div>
                    </div>
                    

                    <div class="form-group">
                      <label class="control-label col-sm-2" for="pwd">Residing Country*</label>
                      <div class="col-sm-10">
                      <span id="country-info" class="info"></span>          
                        <input type="text" name="country" id="country" class="form-control" placeholder="Enter Residing Country">
                       
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2" for="pwd"> Mobile Number*  </label>
                      <div class="col-sm-10">
                      <span id="number-info" class="info"></span>          
                        <input type="tel" name="number" id="number"  class="form-control" placeholder="Enter Mobile Number*  ">
                       
                      </div>
                    </div>

                   

                   <div class="form-group">
                      <label class="control-label col-sm-2" for="country">Country Interested  </label>
                      <div class="col-sm-10">          
                        <span id="intrCountry-info" class="info" name="intrCountry"></span>
                        <select class="form-control" name="intrCountry" id="intrCountry">
                          <option value="australia">Australia</option>
                            <option value="canada">Canada</option>
                            <option value="uk">Uk</option>
                          </select>
                        
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2" for="service">Service Interested  </label>
                      <div class="col-sm-10"> 
                      <span id="service-info" class="info" name="service"></span>         
                        <select class="form-control" name ="service" id="service">
                          <option value="Migrate Overseas">Migrate Overseas</option>
                            <option value="Settle Abroad">Settle Abroad</option>
                            <option value="Student Visas">Student Visas</option>
                            <option value="Invest Abroad">Invest Abroad</option>
                            <option value="Evaluation">Evaluation</option>
                            <option value="Dependent Visas">Dependent Visas</option>
                            <option value="Concierge Services">Concierge Services</option>
                            <option value="Others">Others</option>
                          </select>
                      </div>
                    </div>



                    <div class="form-group">
                      <label class="control-label col-sm-2" for="Upload Resume">Upload Resume</label>
                       <div class="col-sm-10">
                      <span id="number-info" class="info"></span>          
                        <input type="file" name="resumee" id="resume"  placeholder="Upload file">
                      </div>
                    </div>
                    <div class="form-group">        
                      <div class="col-sm-offset-2 col-sm-10">
                       
                       
                          <button class="submit" type="submit" name="submit" id="multi-post" value="Submit" data-toggle="modal" data-target="#myModal">Submit</button>
                           
                           <!--  <div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h4 class="modal-title" id="myModalLabel">Thank you</h4>
                                          </div>
                                          <div class="modal-body">
                                              <p>We will contact you soon</p>                     
                                          </div>    
                                      </div>
                                  </div>
                              </div> -->

                               
                           </div>
                    </div>

 


                  </form>
               
          </div>
          
         </div> 
          <?php
          include('sidebar.php'); 
          ?>
          </div>
                
          
        </div>
        
      </div>
     
      <!-- Main container End -->  
      
      
 <?php include 'footer.php';?>

<script type="text/javascript">
$('#userEmail').blur(function() {
  debugger;
    var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    if (testEmail.test(this.value)) alert('passed');
    else alert('failed');
});


  var status = "<?= $_GET['status'] ?>";
  // debugger;
  if(status =='success'){
    alert('Your data successfully send');
  
    // $("#multi-post").click(function(){
    //     $("#myModal").modal();
    // });
 }
  else if(status== 'fail'){
   alert('Please save data again.');
  }

  function ValidateContactForm()
{
    var name = document.multiform.userName;
    var email = document.multiform.userEmail;
    var phone = document.multiform.number;
    var country = document.multiform.country;
   
   
    if (name.value == "")
    {
        alert("Please enter your name.");
        name.focus();
        return false;
    }
    
    if (email.value == "")
    {
        alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
    if (email.value.indexOf("@", 0) < 0)
    {
        alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
    if (email.value.indexOf(".", 0) < 0)
    {
        alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }

    if (country.value == "")
    {
        alert("Please enter your country name.");
        country.focus();
        return false;
    }

    if (phone.value == "")
    {
        alert("Please enter your Phone number.");
        phone.focus();
        return false;
    }

   
    return true;
}


</script>
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
    <script src="assets/alertifyjs/alertify.min.js"></script>

    <!-- alert box -->
    <!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/bootstrap.min.css"/>

<!-- 
    RTL version
-->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.rtl.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/default.rtl.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/semantic.rtl.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/bootstrap.rtl.min.css"/>
      
  </body>
</html>