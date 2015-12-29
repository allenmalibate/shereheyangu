
<?php include 'inc/header.inc.php';?>
<div class="loginbox" style="padding-top:60px; width:100%; background-image:url(img/signupbox.jpg);">
<div class="container" style="padding-top:10px; width:50%;" >
    <div class="row">
        <div class="span12">
            <div class="" id="loginModal">
              <div class="modal-header">
                <h3>Have an Account?</h3>
              </div>
              <div class="colorgraph"></div>
              <div class="modal-body" style="background-color:rgba(191,72,74,1.00); margin-bottom:20px;">
                <div class="well">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#login" data-toggle="tab"><h4>Login</h4></a></li>
                    <li><a href="#create" data-toggle="tab"><h4>Create Account</h4></a></li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active in" id="login">
                      <form class="form-horizontal" action='' method="POST" style="padding-top:33px;">
                           
                          <div class="row">
                          <div class="col-lg-6">        
                          <div class="form-group"> 
                            <input type="text" name="email" id="email" class="form-control input-lg" placeholder="Email" tabindex="1">
                          </div>
                          </div>
                          <div class="col-lg-6"> 
                            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="1">
                          </div>
                          </div>
     
                          <div class="control-group">
                            <!-- Button -->
                          <center><button type="button" class="btn btn-xl btn-success" href="index.php" style="margin-bottom: 15px;">
                            <span class="btn-label"><i class="fa fa-sign-in"></i></span>LOGIN
                    </button></center>
                          </div>
                     
                      </form>                
                    </div>
                    <div class="tab-pane fade" id="create">
                      <center><h2 style="color:rgba(191,72,74,1.00);"> Create your account, It's Free...! </h2></center>
                      <form id="tab" style="padding-top:20px;">

                        <div class="row">
                        <div class="col-lg-6">        
                        <div class="form-group"> 
                            <input type="text" name="firstname" id="firstname" class="form-control input-lg" placeholder="First Name" tabindex="1">
                        </div>
                        </div>
                        <div class="col-lg-6"> 
                            <input type="text" name="lastname" id="lastname" class="form-control input-lg" placeholder="Last Name" tabindex="1">
                        </div>
                        </div>
                        <div class="form-group">   
                            <input type="text" name="email" id="email" class="form-control input-lg" placeholder="Your Email" tabindex="1">
                        </div>

                        <div class="form-group">  
                            <input type="text" name="email_confirm" id="email-confirm" class="form-control input-lg" placeholder="Confirm your email" tabindex="1">
                        </div>

                         <center><a href="firstForm.php" class="btn btn-xl btn-info"><i class="fa fa-plus"></i> CREATE ACCOUNT</a> </center>

                      </form>
                    </div>
                </div>
              </div><!--well end-->
            </div>
        </div>
    </div>
</div>
</div>
</div><!--login box-->
<?php include 'inc/footer.inc.php';?>

 <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
