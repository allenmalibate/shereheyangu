

        <div class="col-md-10">
            <div class="row">
                <?php if(! $businesses):?>
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                    No business at on this category
                </div>
                <?php endif; ?>
                <?php foreach($businesses as $business):
                    //$contacts = $this->Contact_model->getUserContacts($member->iduser);
                    ?>
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                    <div class="user_content">
                        <img src="<?php echo base_url('img/mc/mc3.jpg');?>" alt="" width="70%"  class="img-rounded" >
                        <div class="user_content_info">
                            <h1><a href="<?php echo site_url();?>/view-user-business/<?php echo $business->id ; ?>" target="">&nbsp; <?php echo $business->name; ?></a></h1>
                            <h5 class=""><i class="fa fa-phone"></i>&nbsp; +255xxxxxxxx</h5>
                            <h5 class=""><i class="fa fa-envelope"></i>&nbsp; <?php echo $business->email;?></h5>
                            <h5 class=""><i class="fa fa-globe"></i>&nbsp; <?php echo $business->website;?></h5>
                            <a href="<?php echo site_url();?>/view-user-business/<?php echo $business->id ; ?>" class="btn btn-sm btn-danger">VIEW MORE</a>
                        </div>

                    </div>
                </div>
                <?php endforeach;?>

            </div><!--end second row-->

        </div><!--end col10-->

    </div><!--end first row-->
</div><!--end container-->