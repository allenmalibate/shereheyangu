
<?php include 'inc/header.inc.php';?>


<div class="container" style="padding-top:10%;">
<div class="col-md-5">
   <div class="form-area" style="  border: 1px solid RED;  padding: 10px 40px 60px;    background-color:rgba(235,178,179,0.1);">  
        <form role="form">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">ADD YOUR ADVERT</h3>
                    <div class="form-group">                    
                    <select class="form-control">
                        <option>--select category--</option>
                        <option value="mc">MC</option>
                        <option value="cake">CAKES</option>
                        <option value="salon">SALONS&MAKEUP ARTISTS</option>
                        <option value="photography">PHOTOGRAPHY/VIDEO</option>
                        <option value="carhire">CAR HIRE</option>
                        <option value="mapambo">MAPAMBO</option>
                        <option value="musichire">MUSIC HIRE</option>
                    </select>
                    </div>             

    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Business Name" required>
					</div>
                    <div class="form-group">
                    <label class="control-label" for="filebutton">UPLOAD BUSINESS LOGO</label>                    
                    <input id="filebutton" name="filebutton" class="input-file" type="file">
                    </div><br>
                    <h5 style="margin-bottom: 25px; text-align: center; font-family:cursive;">BUSINESS CONTACT DETAILS</h5>

					<div class="form-group">
						<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
					</div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Another Mobile Number" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
					<div class="form-group">
						<input type="text" class="form-control" id="website" name="website" placeholder="Website" required>
					</div>
                     <div class="form-group">                    
                    <select class="form-control">
                        <option>--LOCATION--</option>
                        <option value="dar">DAR ES SALAAM</option>
                        <option value="arusha">ARUSHA</option>
                        <option value="mwanza">MWANZA</option>
                        <option value="mbeya">MBEYA</option>
                        <option value="morogoro">MOROGORO</option>
                        <option value="dodoma">DODOMA</option>
                        <option value="other">OTHER</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="address" placeholder="Business address" maxlength="120" rows="5"></textarea>
                    </div>
                     <div class="form-group">
                    <textarea class="form-control" type="textarea" id="description" placeholder="Business Description" maxlength="140" rows="5"></textarea>
                    </div><br>
                    <h5 style="margin-bottom: 25px; text-align: center; font-family:cursive;">SOME PHOTOS FOR YOUR ADVERT</h5>
                    <div class="form-group">
                    <label class="control-label" for="filebutton">PHOTO 1</label>                    
                    <input id="filebutton" name="filebutton" class="input-file" type="file">
                    </div>
                    <div class="form-group">
                    <label class="control-label" for="filebutton">PHOTO 2</label>                    
                    <input id="filebutton" name="filebutton" class="input-file" type="file">
                    </div>
                    <div class="form-group">
                    <label class="control-label" for="filebutton">PHOTO 3</label>                    
                    <input id="filebutton" name="filebutton" class="input-file" type="file">
                    </div>
        <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit Advert</button>
        </form>
    </div>
</div>
</div>