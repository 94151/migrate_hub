 
<?php
$title = "Register Here"; $active ='schedule-an-appointment'; include 'header.php';?>
</div>
      <!-- Page Header Start -->
      <div class="page-header" style="background: url(assets/img/banner1.jpg);">
        <div class="container">
          <div class="row">         
            <div class="col-md-12">
              <div class="breadcrumb-wrapper">
                <h2 class="product-title">Register Here</h2>
                <ol class="breadcrumb">
                  <li><a href="#"><i class="ti-home"></i> Home</a></li>
                  <li class="current">Register Here</li>
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
            <h2 class="medium-title">Register Here</h2><br>
           
              <div class="col-md-12 col-sm-12 col-xs-12">
                 <form id="contact" class="form-horizontal" action="#" >

                  <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Your Name*</label>
                      <div class="col-sm-10">
                       <span id="userName-info"></span>
                        <input type="text" name="userName" id="userName" class="form-control" placeholder="Enter Name">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Your Email*:</label>
                      <div class="col-sm-10">
                      <span id="userEmail-info"></span>
                        <input type="email" name="userEmail" id="userEmail" class="form-control" placeholder="Enter Email">
                      </div>
                    </div>
                    

                    

                    <div class="form-group">
                      <label class="control-label col-sm-2" for="pwd"> Contact Number*  </label>
                      <div class="col-sm-10">
                      <span id="contact-info"></span>          
                        <input type="tel" name="phone" id="phone" class="form-control" placeholder="Enter Contact Number">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Your Question*</label>
                      <div class="col-sm-10">
                      <span id="question-info"></span>
                        <input type="text" name="question" id="question" class="form-control" placeholder="Your Question">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2" for="date">Select Date: *</label>
                      <div class="col-sm-10">
                      <span id=""></span>
                         <input id="date" type="date" value="2018-01-01">
                      </div>
                    </div>
                    
                    <div class="form-group">        
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-common btn-rm" onClick="sendContact();">Submit</button>

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
    

     <script>
function sendContact() {
  var valid;  
  valid = validateContact();
 
var data = {
    'userName':$("#userName").val(),
    'userEmail':$("#userEmail").val(),
    'phone':$("#phone").val(),
    'question':$("#question").val()
    
}
  if(valid) {
    $.ajax({
    url: "#",
    data:data,
    method: "POST",
    success:function(data){
    $("#mail-status").html(data);
        $("#userName").val(' ');
        $("#userEmail").val(' ');
        $("#phone").val(' ');
        $("#question").val(' ');
    },
    error:function (error){}
    });
  }
}

function validateContact() {
  var valid = true; 
  $(".demoInputBox").css('background-color','');
  $(".info").html('');
  
  if(!$("#userName").val()) {
    $("#userName-info").html("(required)");
    $("#userName").css('background-color','#FFFFDF');
    valid = false;
  }
  if(!$("#userEmail").val()) {
    $("#userEmail-info").html("(required)");
    $("#userEmail").css('background-color','#FFFFDF');
    valid = false;
  }
  if(!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
    $("#userEmail-info").html("(invalid)");
    $("#userEmail").css('background-color','#FFFFDF');
    valid = false;
  }
         if(!$("#phone").val()) {
            $("#contact-info").html("(required)");
            $("#phone").css('background-color','#FFFFDF');
            valid = false;
          }
          if(!$("#question").val()) {
            $("#question-info").html("(required)");
            $("#question").css('background-color','#FFFFDF');
            valid = false;
          }
  
  return valid;
}
</script>
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