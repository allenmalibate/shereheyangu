
            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                <form role="form" action="<?php echo site_url('update-user-password');?>" method="POST" >
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
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
                            <div class="form-group">
                                <input type="password" name="password" class="form-control " placeholder="Enter New password">
                            </div>
                            <div class="form-group">
                                <input type="password" name="confirmPassword" id="confirmPassword" class="form-control " placeholder="Confirm New password">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success form-control"  type="submit">
                                    Update Password
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <h5>Update user password form</h5>
                            <p style="font-weight: 100;font-style: italic;">To update your password make sure new and confirmed password are the same</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>