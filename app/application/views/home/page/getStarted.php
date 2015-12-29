

        <div class="col-md-10">
            <div class="row">
                <?php foreach($members as $member):
                    $contacts = $this->Contact_model->getUserContacts($member->iduser);
                    ?>
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                    <div class="user_content">
                        <img src="<?php echo base_url('img/mc/mc3.jpg');?>" alt="" width="70%"  class="img-rounded" >
                        <div class="user_content_info">
                            <h1><a href="" target="">&nbsp; <?php echo $member->display_name; ?></a></h1>
                            <?php foreach($contacts as $contact): ?>
                            <h5 class=""><i class="fa fa-phone"></i>&nbsp; <?php echo $contact->value_of_contact;?></h5>
                            <?php endforeach; ?>
                            <h5 class=""><i class="fa fa-envelope"></i>&nbsp; <?php echo $member->email;?></h5>
                            <h5 class=""><i class="fa fa-globe"></i> www.mcs.com</h5>
                            <a href="<?php echo site_url();?>/view-user-profile/<?php echo $member->iduser ; ?>" class="btn btn-sm btn-danger">VIEW PROFILE</a>

                        </div>

                    </div>
                </div>
                <?php endforeach;?>

            </div><!--end second row-->

        </div><!--end col10-->

    </div><!--end first row-->
</div><!--end container-->