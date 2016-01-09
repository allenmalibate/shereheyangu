
<div class="col-md-10">
    <div class="panel panel-danger">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo $business->name; ?></h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-6" align="center">
                    <?php if($business->logo) :?>
                        <img alt="BUSINESS LOGO" src="<?php echo base_url('/upload/business').'/'.$business->logo;?>" class="img-rounded img-responsive">
                    <?php endif; ?>
                </div>

                <div class=" col-md-9 col-lg-9 col-sm-9 col-xs-12">
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
                            <td><?php
                                if($business->description){
                                    echo $business->description;
                                }else{
                                    echo 'No business description at the time';
                                }
                                ?>
                            </td>
                        </tr>

                        </tr>

                        </tbody>
                    </table>
                </div><!--end col4 the middle section-->

                <div class=" col-md-12 col-lg-12 col-xs-12 col-sm-12">
                    <?php if($photos) : ?>
                        <h5 style="margin-bottom: 25px; text-align: center; font-family:cursive;"><?php echo $business->name;?>'s Gallery</h5>
                        <?php foreach($photos as $photo) : ?>
                            <div class="col-md-4 col-sm-6 col-lg-4 col-xs-6 thumb">
                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="<?php echo $business->name;?>'s Gallery" data-caption="" data-image="<?php echo base_url('/upload/business').'/'.$photo->file_name;?>" data-target="#image-gallery">
                                    <img class="img-responsive" src="<?php echo base_url('/upload/business').'/'.$photo->file_name;?>" alt="Short alt text">
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div><!--end col6 the photo section-->

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


            </div><!--end row-->

        </div>

    </div>


</div><!--end second row-->

</div><!--end col10-->

</div><!--end first row-->
</div>