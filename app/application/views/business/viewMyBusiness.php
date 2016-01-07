<div class="container" style="padding-top:70px;">
    <div class="row">
        <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
            <a href="<?php echo site_url('user-home');?>"><i class="fa fa-2x fa-home"></i></a>
        </div>
    </div>
    <div class="row" style="margin-top: 1.5%;">

        <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">SWEET CAKES</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-2 col-lg-2 col-sm-3 col-xs-6" align="center">
                        <img alt="BUSINESS LOGO" src="<?php echo base_url('img/cake/cake2.jpg');?>" class="img-circle img-responsive">
                    </div>

                    <div class=" col-md-4 col-lg-4 col-sm-10 col-xs-12">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>CATEGORY:</td>
                                <td>CAKES</td>
                            </tr>
                            <tr>
                                <td>PHONE:</td>
                                <td>0713366303</td>
                            </tr>
                            <tr>
                                <td>EMAIL:</td>
                                <td>sweetcakes@gmail.com</td>
                            </tr>
                            <tr>
                                <td>WEBSITE:</td>
                                <td>www.sweetcakes.com</td>
                            </tr>
                            <tr>
                                <td>LOCATION:</td>
                                <td>ARUSHA</td>
                            </tr>
                            <tr>
                                <td>ADDRESS:</td>
                                <td>P.o Box 42879, ARUSHA</td>
                            </tr>
                            <tr>
                            <tr>
                                <td>DESCRIPTION:</td>
                                <td>Get the sweet cakes from us, cz we are the sweetest</td>
                            </tr>

                            </tr>

                            </tbody>
                        </table>
                    </div><!--end col4 the middle section-->

                    <div class=" col-md-6 col-lg-6 col-xs-12 col-sm-12">
                        <h5 style="margin-bottom: 25px; text-align: center; font-family:cursive;">PHOTOS FOR ADVERT</h5>

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
                        <div class="col-md-3 col-sm-4 col-lg-3 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="img/mc/mc1.jpg" data-target="#image-gallery">
                                <img class="img-responsive" src="<?php echo base_url('img/mc/mc1.jpg');?>" alt="Short alt text">
                            </a>
                        </div>
                    </div><!--end col6 the photo section-->


                </div><!--end row-->

            </div>
            <div class="panel-footer pull-right">
                <a href="<?php echo site_url('edit-my-business');?>/3" class="btn btn-primary"><i class="fa fa-edit"></i> EDIT AD</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteBusiness">
                    <i class="fa fa-remove"></i> REMOVE AD
                </button>
                <a href="#" class="btn btn-success"><i class="fa fa-plus"></i> ADD PHOTOS</a>
            </div>

        </div>

    </div>

    <!-- delete work/business option-->
    <div class="modal fade" id="deleteBusiness" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Delete Business Confirmation</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <p align="center">Are you sure you want to delete ..... business?</p>
                        </div>

                    </div>
                    <div class="row" style="margin-top: 3%;">
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-5">
                            <button type="button" class="btn btn-default form-control" data-dismiss="modal">No</button>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-4 col-xs-2"></div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-5">
                            <a href="<?php echo site_url('delete-my-business');?>/3" class="btn btn-danger form-control" >Yes</a>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>