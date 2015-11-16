<div class="loginbox" style="padding-top:60px; width:100%; background-image:url(img/signupbox.jpg);">
    <div class="container" style="padding-top:10px; width:50%;" >
        <div class="row">
            <div class="span12">
                <div class="" id="loginModal">
                    <div class="modal-header">
                        <h3>Have an Account?</h3>

                        <!-- general message for error during submission of login or register forms -->
                        <div class="row">
                            <?php if(isset($loginError)): ?>
                                <div class="alert alert-warning" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <?php echo $loginError; ?>
                                </div>
                            <?php endif;?>
                            <?php if(isset($createAccountError)): ?>
                                <div class="alert alert-warning" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <?php echo $createAccountError; ?>
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="colorgraph">

                    </div>
                    <div class="modal-body" style="background-color:rgba(191,72,74,1.00); margin-bottom:20px;">

                        <div class="well">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#login" data-toggle="tab"><h4>Login</h4></a></li>
                                <li><a href="#create" data-toggle="tab"><h4>Create Account</h4></a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane active in" id="login">
                                    <form class="form-horizontal" style="padding-top:33px;" action ="<?php echo site_url('login'); ?>" method = "POST" >

                                        <!-- specific errors during submission of login form -->
                                        <div class="row">
                                            <?php if(form_error('email')): ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <?php echo form_error('email'); ?>
                                                </div>
                                            <?php endif;?>
                                            <?php if(form_error('password')): ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <?php echo form_error('password'); ?>
                                                </div>
                                            <?php endif;?>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" value = "<?php echo set_value('email');?>"  name="email" id="email" class="form-control input-lg" placeholder="Email" tabindex="1">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
                                                <input type="password"  name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="1">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <!-- Button -->
                                            <center><button type="submit" class="btn btn-xl btn-success" style="margin-bottom: 15px;">
                                                    <span class="btn-label"><i class="fa fa-sign-in"></i></span>LOGIN
                                                </button></center>
                                        </div>

                                    </form>
                                </div>
                                <div class="tab-pane fade" id="create">
                                    <center><h2 style="color:rgba(191,72,74,1.00);"> Create your account, It's Free...! </h2></center>
                                    <form id="tab" style="padding-top:20px;" action="<?php echo site_url('create-account'); ?>" method="POST" >

                                        <!-- specific errors during submission of register member form -->
                                        <div class="row">
                                            <?php if(form_error('firstname')): ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <?php echo form_error('firstname'); ?>
                                                </div>
                                            <?php endif;?>
                                            <?php if(form_error('lastname')): ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <?php echo form_error('lastname'); ?>
                                                </div>
                                            <?php endif;?>
                                            <?php if(form_error('emailRegister')): ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <?php echo form_error('emailRegister'); ?>
                                                </div>
                                            <?php endif;?>
                                            <?php if(form_error('email_confirm')): ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <?php echo form_error('email_confirm'); ?>
                                                </div>
                                            <?php endif;?>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" value = "<?php echo set_value('firstname');?>" name="firstname" id="firstname" class="form-control input-lg" placeholder="First Name" tabindex="1">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
                                                <input type="text" value = "<?php echo set_value('lastname');?>" name="lastname" id="lastname" class="form-control input-lg" placeholder="Last Name" tabindex="1">
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: 2%;">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group">
                                                    <input type="text" value = "<?php echo set_value('emailRegister');?>" name="emailRegister" id="emailRegister" class="form-control input-lg" placeholder="Your Email" tabindex="1">
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" value = "<?php echo set_value('email_confirm');?>" name="email_confirm" id="email-confirm" class="form-control input-lg" placeholder="Confirm your email" tabindex="1">
                                                </div>
                                            </div>
                                        </div>


                                        <center>
                                            <button class="btn btn-xl btn-info" type="submit">
                                                <i class="fa fa-plus"></i> CREATE ACCOUNT
                                            </button>
                                        </center>

                                    </form>
                                </div>
                            </div>
                        </div><!--well end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>