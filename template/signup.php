<?php include 'inc/header.inc.php';?>
 
<div class="signup-form-container">
<div class="signup-form">
<h1> SIGN UP...its Free! </h1>
<hr class="colorgraph">

    <form name="register" method="POST"> 
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
        <input type="text" name="displayname" id="displayname" class="form-control input-lg" placeholder="Display Name" tabindex="1">
    </div>

    <div class="form-group">   
        <input type="text" name="email" id="email" class="form-control input-lg" placeholder="Your Email" tabindex="1">
    </div>

    <div class="form-group">  
        <input type="text" name="email_confirm" id="email-confirm" class="form-control input-lg" placeholder="Confirm your email" tabindex="1">
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
    <div id="mc-form" >
    mc is here
        
    </div>
    <div id="cake-form" style="display:none;">
        cake is here
    </div>

    <div id="salon-form">
    salon here
    </div>

    <div id="photography-form">
        photo here
    </div>
    <div id="carhire-form">
        car here
    </div>
    <div id="mapambo-form">
        mapambo here
    </div>
    <div id="musichire-form">
        music here
    </div>

     </form>
</div>
</div>

<?php include 'inc/footer.inc.php';?>


<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
   

 <script type="text/javascript">

    $(document).ready(function(){
        $("select").change(function(){
            $(this).find("option:selected").each(function(){
                if($(this).attr("value")=="mc"){
                    $("#mc-form").show();
                }
                else if($(this).attr("value")=="cake"){
                   $("#cake-form").show();
                }
                else if($(this).attr("value")=="salon"){
                   $("#salon-form").show();
                }

                else{
                    $(".box").hide();

                }

            });

        }).change();

    });

    </script>


</body>
</html>