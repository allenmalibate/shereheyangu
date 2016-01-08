<div class="container" style="padding-top:70px;">
    <div class="row">
        <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
            <a href="<?php echo site_url('view-my-business');?>/<?php echo $business->id; ?>"><i class="fa fa-2x fa-backward"></i></a>
        </div>
    </div>
    <div class="row" style="margin-top: 1.5%;">
        <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    EDIT YOUR ADVERT
                </div>
                <div class="panel-body">
                    <?php

                    $workCategoryId = $business->work_category_option_id;
                    $workCategory = $this->Work_option_model->getWorkOptionById($workCategoryId);

                    $locationId = $business->business_location_id;
                    $location = $this->Business_location_model->getBusinessLocation($locationId);
                    ?>
                    <form role="form" action="?php echo site_url('edit-my-business');?>/<?php echo $business->id; ?>" method="POST">
                        <div style="margin-bottom: 2%;">
                            <div class="row">
                                <label class="col-md-4 col-xs-12 col-lg-4 col-sm-4">Business Category</label>
                                <div class="col-md-6 col-xs-12 col-lg-6 col-sm-6">
                                    <?php if(form_error('workCategory')): ?>
                                        <div class="alert alert-warning" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <?php echo form_error('workCategory'); ?>
                                        </div>
                                    <?php endif;?>
                                    <select class="form-control input-lg" name = "workCategory">
                                        <option value="<?php echo $business->work_category_option_id ;?>">
                                            <?php echo $workCategory->option_name;?>
                                        </option>
                                        <?php
                                        $workOptions = $this->Work_option_model->getAllWorkOptions();
                                        foreach($workOptions as $workOption):?>
                                            <option value="<?php echo $workOption->id ;?>"><?php echo $workOption->option_name ;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div style="margin-bottom: 2%;">
                            <div class="row">
                                <label class="col-md-4 col-xs-12 col-lg-4 col-sm-4">Business Name</label>
                                <div class="col-md-6 col-xs-12 col-lg-6 col-sm-6">
                                    <?php if(form_error('business_name')): ?>
                                        <div class="alert alert-warning" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <?php echo form_error('business_name'); ?>
                                        </div>
                                    <?php endif;?>
                                    <input type="text" class="form-control input-lg" name="business_name" placeholder="Business Name" value = "<?php echo $business->name;?>" >
                                </div>
                            </div>
                        </div>
                        <div style="margin-bottom: 2%;padding-bottom: 1%;border-bottom: 1px solid #e5e5e5">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
                                    <h5 align="center">BUSINESS CONTACT DETAILS</h5>
                                </div>
                            </div>
                        </div>
                        <div style="margin-bottom: 2%;">
                            <div class="row">
                                <label class="col-md-4 col-xs-12 col-lg-4 col-sm-4">Mobile Number</label>
                                <div class="col-md-6 col-xs-12 col-lg-6 col-sm-6">
                                    <?php if(form_error('business_mobile_number')): ?>
                                        <div class="alert alert-warning" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <?php echo form_error('business_mobile_number'); ?>
                                        </div>
                                    <?php endif;?>
                                    <input type="text" class="form-control input-lg" name="business_mobile_number" placeholder="Mobile Number" value = "<?php echo set_value('business_mobile_number');?>" >
                                </div>
                            </div>
                        </div>
                        <div style="margin-bottom: 2%;">
                            <div class="row">
                                <label class="col-md-4 col-xs-12 col-lg-4 col-sm-4">E-mail</label>
                                <div class="col-md-6 col-xs-12 col-lg-6 col-sm-6">
                                    <?php if(form_error('business_email')): ?>
                                        <div class="alert alert-warning" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <?php echo form_error('business_email'); ?>
                                        </div>
                                    <?php endif;?>
                                    <input type="text" class="form-control input-lg" name="business_email" placeholder="E-mail" value = "<?php echo $business->email;?>" >
                                </div>
                            </div>
                        </div>
                        <div style="margin-bottom: 2%;">
                            <div class="row">
                                <label class="col-md-4 col-xs-12 col-lg-4 col-sm-4">Website</label>
                                <div class="col-md-6 col-xs-12 col-lg-6 col-sm-6">
                                    <?php if(form_error('business_website')): ?>
                                        <div class="alert alert-warning" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <?php echo form_error('business_website'); ?>
                                        </div>
                                    <?php endif;?>
                                    <input type="text" class="form-control input-lg" name="business_website" placeholder="Business website" value = "<?php echo $business->website;?>" >
                                </div>
                            </div>
                        </div>
                        <div style="margin-bottom: 2%;">
                            <div class="row">
                                <label class="col-md-4 col-xs-12 col-lg-4 col-sm-4">Location</label>
                                <div class="col-md-6 col-xs-12 col-lg-6 col-sm-6">
                                    <?php if(form_error('business_location')): ?>
                                        <div class="alert alert-warning" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <?php echo form_error('business_location'); ?>
                                        </div>
                                    <?php endif;?>
                                    <select class="form-control input-lg" name = "business_location">
                                        <option value="<?php echo $locationId;?>"><?php echo $location->name; ?></option>
                                        <?php
                                        $businessLocations = $this->Business_location_model->getAllLocations();
                                        foreach($businessLocations as $businessLocation):?>
                                            <option value="<?php echo $businessLocation->id ;?>"><?php echo $businessLocation->name ;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div style="margin-bottom: 2%;">
                            <div class="row">
                                <label class="col-md-4 col-xs-12 col-lg-4 col-sm-4">Business Address</label>
                                <div class="col-md-6 col-xs-12 col-lg-6 col-sm-6">
                                    <input type="text" class="form-control input-lg" name="business_address" placeholder="Business Address" value = "<?php echo $business->address;?>" >
                                </div>
                            </div>
                        </div>
                        <div style="margin-bottom: 2%;">
                            <div class="row">
                                <label class="col-md-4 col-xs-12 col-lg-4 col-sm-4">Business Description</label>
                                <div class="col-md-6 col-xs-12 col-lg-6 col-sm-6">
                                    <textarea rows="5" class="form-control" name="business_description" placeholder="Business Description"><?php echo $business->description;?></textarea>
                                </div>
                            </div>
                        </div>

                        <div style="margin-bottom: 2%;">
                            <div class="row">
                                <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4"></div>
                                <div class="col-md-6 col-xs-12 col-lg-6 col-sm-6">
                                    <button type="submit" class="btn btn-primary form-control">Update Advert</button>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>