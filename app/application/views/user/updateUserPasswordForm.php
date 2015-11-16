<div class="loginbox" style="padding-top:60px; width:100%; background-image:url(img/signupbox.jpg);">
    <div class="container" style="padding-top:10px; width:50%;" >
        <div class="modal-header">
            <h3>Update User password</h3>
        </div>
        <div class="colorgraph"></div>
        <div class="modal-body" style="background-color:rgba(191,72,74,1.00); margin-bottom:20px;">
            <div class="well">
                <form role="form" action="<?php echo site_url('update-user-password');?>" method="POST" >

                    <div class="row">
                        <?php if(form_error('password')): ?>
                            <div class="alert alert-warning" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <?php echo form_error('password'); ?>
                            </div>
                        <?php endif;?>
                        <?php if(form_error('confirmPassword')): ?>
                            <div class="alert alert-warning" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <?php echo form_error('confirmPassword'); ?>
                            </div>
                        <?php endif;?>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Enter New password" tabindex="1">
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <input type="password" name="confirmPassword" id="confirmPassword" class="form-control input-lg" placeholder="Confirm New password" tabindex="1">
                        </div>
                    </div>

                    <center>
                        <button class="btn btn-xl btn-success" style="margin-top:15px; margin-bottom:35px;" type="submit">
                            <i class="fa fa-sign-in"></i> Update Password
                        </button>
                    </center>

                </form>
            </div><!--well-->
        </div><!--modal body-->
    </div>
</div><!--login box-->