<div class="loginbox" style="padding-top:60px; width:100%; background-image:url(img/signupbox.jpg);">
    <div class="container" style="padding-top:10px; width:50%;" >
        <div class="modal-header">
            <h3>Tell the world about you business ...</h3>
        </div>
        <div class="colorgraph"></div>
        <div class="modal-body" style="background-color:rgba(191,72,74,1.00); margin-bottom:20px;">
            <div class="well">
                <form role="form" action="<?php echo site_url('contacts-work');?>" method="POST" >

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

                    <select class="form-control input-lg" id="select" name = "workCategory">
                        <option>--select category--</option>
                        <?php
                        $workOptions = $this->Work_option_model->getAllWorkOptions();
                        foreach($workOptions as $workOption):?>
                            <option value="<?php echo $workOption->id ;?>"><?php echo $workOption->option_name ;?></option>
                        <?php endforeach; ?>
                    </select>

                    <center>
                        <button class="btn btn-xl btn-success" style="margin-top:15px; margin-bottom:35px;" type="submit">
                            <i class="fa fa-sign-in"></i> GO TO MY ACCOUNT
                        </button>
                    </center>

                </form>
            </div><!--well-->
        </div><!--modal body-->
    </div>
</div><!--login box-->