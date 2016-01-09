<div class="container" style="padding-top:70px;">
    <div class="row">
        <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
            <a href="<?php echo site_url('user-home');?>"><i class="fa fa-2x fa-home"></i></a>
        </div>
    </div>
    <div class="row" style="margin-top: 1.5%;">
        <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $business->name; ?></h3>
                </div>
                <div class="panel-body" style="padding:2%;">

                    <?php if (isset($error)) :?>
                        <div class="row">
                            <div class="alert alert-warning col-xs-12 col-sm-12 col-md-12 col-lg-12" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <p><?php print_r($error); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="row">
                        <div class="pull-right">
                            <a href="<?php echo site_url('edit-my-business');?>/<?php echo $business->id; ?>" class="btn btn-primary"><i class="fa fa-edit"></i> EDIT AD</a>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteBusiness<?php echo $business->id; ?>">
                                <i class="fa fa-remove"></i> REMOVE AD
                            </button>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#updateBusinessPhoto"><i class="fa fa-plus"></i> ADD PHOTOS</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-6" align="center">
                            <?php if($business->logo) :?>
                                <img alt="BUSINESS LOGO" src="<?php echo base_url('/upload/business').'/'.$business->logo;?>" class="img-rounded img-responsive">
                                <button type="button" class="btn-primary btn form-control" data-toggle="modal" data-target="#updateBusinessLogo" style = "margin-top:5%;max-width: 95%;"> Update Logo</button>
                            <?php else : ?>
                                <button type="button" class="btn-primary btn" data-toggle="modal" data-target="#updateBusinessLogo"> Add Logo</button>
                            <?php endif; ?>

                        </div>

                        <div class=" col-md-4 col-lg-4 col-sm-10 col-xs-12">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>CATEGORY:</td>
                                    <td>
                                        <?php
                                        $workCategoryId = $business->work_category_option_id;
                                        $workCategory = $this->Work_option_model->getWorkOptionById($workCategoryId);

                                        echo $workCategory->option_name;
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PHONE:</td>
                                    <td>0713366303 'not real'</td>
                                </tr>
                                <tr>
                                    <td>EMAIL:</td>
                                    <td><?php echo $business->email;?></td>
                                </tr>
                                <tr>
                                    <td>WEBSITE:</td>
                                    <td><?php echo $business->website;?></td>
                                </tr>
                                <tr>
                                    <td>LOCATION:</td>
                                    <td>
                                        <?php
                                        $locationId = $business->business_location_id;
                                        $location = $this->Business_location_model->getBusinessLocation($locationId);

                                        echo $location->name;
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ADDRESS:</td>
                                    <td><?php
                                        if($business->address){
                                            echo $business->address;
                                        }else{
                                            echo 'No business address at the time';
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                <tr>
                                    <td>DESCRIPTION:</td>
                                    <td><?php if($business->description) : ?>
                                            <span style="text-align: justify">
                                        <?php echo $business->description;?>
                                    </span>
                                        <?php else: echo 'No business description at the time'; ?>
                                        <?php endif;?>
                                    </td>
                                </tr>

                                </tr>

                                </tbody>
                            </table>
                        </div><!--end col4 the middle section-->

                        <div class=" col-md-6 col-lg-6 col-xs-12 col-sm-12">
                            <?php if($photos) : ?>
                                <h5 style="margin-bottom: 25px; text-align: center; font-family:cursive;"><?php echo $business->name;?>'s Gallery</h5>
                                <?php foreach($photos as $photo) : ?>
                                    <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 thumb">
                                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="<?php echo $business->name;?>'s Gallery" data-caption="<?php echo $photo->description;?>" data-image="<?php echo base_url('/upload/business').'/'.$photo->file_name;?>" data-target="#image-gallery">
                                            <img class="img-responsive" src="<?php echo base_url('/upload/business').'/'.$photo->file_name;?>" alt="Short alt text">
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div><!--end col6 the photo section-->
                    </div><!--end row-->
                </div>
            </div>
        </div>
    </div>

    <!-- slider for view images -->
    <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="image-gallery-title">
                    </h4>
                </div>
                <div class="modal-body">
                    <img id="image-gallery-image" class="img-responsive" src="">
                </div>
                <div class="modal-footer">

                    <div class="col-md-2">
                        <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
                    </div>

                    <div class="col-md-8 text-justify" id="image-gallery-caption">
                    </div>

                    <div class="col-md-2">
                        <button type="button" id="show-next-image" class="btn btn-default">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- pop up form for uploading photos for a business-->
    <div class="modal fade" id="updateBusinessPhoto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Update Business Photo Form</h4>
                </div>
                <div class="modal-body">

                    <form role = "form" enctype="multipart/form-data" action="<?php echo site_url('upload-my-business-photo');?>/<?php echo $business->id; ?>" method="POST">
                        <label>Image/picture/Photo</label>
                        <div class="form-group">
                            <input type="file" class="form-control" name="businessPhoto" size="20" >
                        </div>
                        <div class="form-group">
                            <textarea name="descriptionOfGallery" class="form-control" rows="5" placeholder="Description on photo"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Upload" class="btn btn-primary form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- pop up form for uploading logo for a business-->
    <div class="modal fade" id="updateBusinessLogo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Update Business Logo Form</h4>
                </div>
                <div class="modal-body">
                    <form role = "form" enctype="multipart/form-data" action="<?php echo site_url('upload-my-business-logo');?>/<?php echo $business->id; ?>" method="POST">
                        <label>Image/picture/Photo</label>
                        <div class="form-group">
                            <input type="file" class="form-control" name="businessLogo" size="20">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Upload" class="btn btn-primary form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- delete work/business -->
    <div class="modal fade" id="deleteBusiness<?php echo $business->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Delete Business Confirmation</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <p align="center">Are you sure you want to delete <?php echo $business->name;?> business?</p>
                        </div>

                    </div>
                    <div class="row" style="margin-top: 3%;">
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-5">
                            <button type="button" class="btn btn-default form-control" data-dismiss="modal">No</button>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-4 col-xs-2"></div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-5">
                            <a href="<?php echo site_url('delete-my-business');?>/<?php echo $business->id; ?>" class="btn btn-danger form-control" >Yes</a>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div></div>