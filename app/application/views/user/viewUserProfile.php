<div class="container" style="padding-top:70px;">
    <div class="row">
        <div class="col-md-10"><!--col for the outer most-->
            <div class="row">
                <div class="col-md-8">
                    <div class="">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?php echo base_url();?>img/mc/mc2.jpeg" alt="" class="img-rounded img-responsive" />
                            </div>
                            <div class="col-md-8">
                                <h1><a href="<?php echo site_url();?>/view-user-profile/<?php echo $member->iduser ; ?>" target=""><?php echo $member->display_name; ?></a></h1>
                                <?php
                                $contacts = $this->Contact_model->getUserContacts($member->iduser);
                                foreach($contacts as $contact):
                                    ?>
                                    <h5 class=""><i class="fa fa-phone"></i>&nbsp; <?php echo $contact->value_of_contact;?></h5>
                                <?php endforeach; ?>
                                <h5 class=""><i class="fa fa-envelope"></i>&nbsp; <?php echo $member->email;?></h5>
                                <h5 class=""><i class="fa fa-globe"></i> www.mcs.com</h5>
                                <button type="button" class="btn btn-labeled btn-info" href="#">
                                    <span class="btn-label"><i class="fa fa-thumbs-up"></i></span>like</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--start photo section-->
            <div class="row">

                <div class="col-md-12">
                    <h3 class="page-header">My Photo Gallery</h3>

                    <div class="col-md-3 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="<?php echo base_url();?>img/mc/mc1.jpg" data-target="#image-gallery">
                            <img class="img-responsive" src="<?php echo base_url();?>img/mc/mc1.jpg" alt="Short alt text">
                        </a>
                    </div>
                    <div class="col-md-3 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="<?php echo base_url();?>img/mc/mc1.jpg" data-target="#image-gallery">
                            <img class="img-responsive" src="<?php echo base_url();?>img/mc/mc1.jpg" alt="Short alt text">
                        </a>
                    </div>
                    <div class="col-md-3 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="<?php echo base_url();?>img/mc/mc1.jpg" data-target="#image-gallery">
                            <img class="img-responsive" src="<?php echo base_url();?>img/mc/mc1.jpg" alt="Short alt text">
                        </a>
                    </div>
                    <div class="col-md-3 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="<?php echo base_url();?>img/mc/mc1.jpg" data-target="#image-gallery">
                            <img class="img-responsive" src="<?php echo base_url();?>img/mc/mc1.jpg" alt="Short alt text">
                        </a>
                    </div>
                </div>



                <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="image-gallery-title"></h4>
                            </div>
                            <div class="modal-body">
                                <img id="image-gallery-image" class="img-responsive" src="">
                            </div>
                            <div class="modal-footer">

                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
                                </div>

                                <div class="col-md-8 text-justify" id="image-gallery-caption">
                                    This text will be overwritten by jQuery
                                </div>

                                <div class="col-md-2">
                                    <button type="button" id="show-next-image" class="btn btn-default">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end col10-->
        <div class="col-md-2"><!--col for the outer most-->
        </div><!--end col2-->
    </div><!--end row for the outer most-->
</div>