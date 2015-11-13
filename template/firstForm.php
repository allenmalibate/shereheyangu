
<?php include 'inc/header.inc.php';?>
<div class="loginbox" style="padding-top:60px; width:100%; background-image:url(img/signupbox.jpg);">
<div class="container" style="padding-top:10px; width:50%;" >
        <div class="modal-header">
                <h3>Tell the world about you business ...</h3>
              </div>
              <div class="colorgraph"></div>
        <div class="modal-body" style="background-color:rgba(191,72,74,1.00); margin-bottom:20px;">
        <div class="well">
        <form>

        <div class="form-group"> 
            <input type="text" name="displayname" id="displayname" class="form-control input-lg" placeholder="Display Name" tabindex="1">
        </div>
 
        <div class="row">
        <div class="col-lg-6"> 
            <div class="form-group">
            <input type="text" name="phonenumber" id="phonenumber" class="form-control input-lg" placeholder="Phone Number" tabindex="1">
        </div>
        </div>
        <div class="col-lg-6">  
            <input type="text" name="phonenumber2" id="phonenumber2" class="form-control input-lg" placeholder="Another Number" tabindex="1">
        </div>
        </div>

        <select class="form-control input-lg" id="select">
            <option>--select category--</option>
            <option value="mc">MC</option>
            <option value="cake">CAKES</option>
            <option value="salon">SALONS&MAKEUP ARTISTS</option>
            <option value="photography">PHOTOGRAPHY/VIDEO</option>
            <option value="carhire">CAR HIRE</option>
            <option value="mapambo">MAPAMBO</option>
            <option value="musichire">MUSIC HIRE</option>
        </select>

        <center><a href="useraccount.php" class="btn btn-xl btn-success" style="margin-top:15px; margin-bottom:35px;"><i class="fa fa-sign-in"></i>  GO TO MY ACCOUNT</a> </center>

      </form>
          </div><!--well-->
          </div><!--modal body-->
</div>
</div><!--login box-->
<?php include 'inc/footer.inc.php';?>

 <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
