
<div class="col-md-10">
    <div class="panel panel-danger">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo $business->name; ?></h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-6" align="center">
                    <img alt="BUSINESS LOGO" src="<?php echo base_url('img/cake/cake2.jpg');?>" class="img-circle img-responsive">
                </div>

                <div class=" col-md-10 col-lg-10 col-sm-10 col-xs-12">
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
                    <h5 style="margin-bottom: 25px; text-align: center; font-family:cursive;">PHOTOS FOR ADVERT</h5>

                    <div class="col-md-2 col-sm-4 col-lg-3 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="img/mc/mc1.jpg" data-target="#image-gallery">
                            <img class="img-responsive" src="<?php echo base_url('img/mc/mc1.jpg');?>" alt="Short alt text">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-lg-3 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="img/mc/mc1.jpg" data-target="#image-gallery">
                            <img class="img-responsive" src="<?php echo base_url('img/mc/mc1.jpg');?>" alt="Short alt text">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-lg-3 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="img/mc/mc1.jpg" data-target="#image-gallery">
                            <img class="img-responsive" src="<?php echo base_url('img/mc/mc1.jpg');?>" alt="Short alt text">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-lg-3 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="img/mc/mc1.jpg" data-target="#image-gallery">
                            <img class="img-responsive" src="<?php echo base_url('img/mc/mc1.jpg');?>" alt="Short alt text">
                        </a>
                    </div>
                </div><!--end col6 the photo section-->


            </div><!--end row-->

        </div>

    </div>


</div><!--end second row-->

</div><!--end col10-->

</div><!--end first row-->
</div>