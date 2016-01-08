
            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                <div class="row">
                    <div class="col-lg-7 col-sm-7 col-md-7 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                List Of All Mobile Contacts
                            </div>
                            <div class="panel-body">
                                <?php
                                $userId = $this->session->userdata('userId');
                                $contacts = $this->Contact_model->getUserContacts($userId);
                                ?>

                                <?php if($contacts): ?>
                                    <table class="table table-responsive">
                                        <?php $count = 0; foreach($contacts as $contact): $count ++;?>
                                            <tr>
                                                <td><?php echo $count; ?></td>
                                                <td><?php echo $contact->value_of_contact;?><td>
                                                <td>
                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#editMobileNumber<?php echo $contact->id; ?>">edit</button>
                                                <td>
                                                <td>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#deleteMobileNumber<?php echo $contact->id; ?>">Delete</button>
                                                <td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                <?php else: ?>
                                    <p style="font-weight: 100">
                                        No Mobile contacts at moment
                                    </p>
                                <?php endif; ?>

                                <?php foreach($contacts as $contact): ?>
                                    <!-- edit pop up form for user contact-->
                                    <div class="modal fade" id="editMobileNumber<?php echo $contact->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Edit Mobile contacts</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form role = "form" action="<?php echo site_url('edit-mobile-contact');?>/<?php echo $contact->id; ?>" method="POST">
                                                        <label>Mobile Number</label>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="editMobileNumber" value="<?php echo $contact->value_of_contact;?>" placeholder="Mobile Number" >
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="submit" value="save" class="btn btn-primary form-control">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- delete user contact pop up confirmation -->
                                    <div class="modal fade" id="deleteMobileNumber<?php echo $contact->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Delete Business Confirmation</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                            <p align="center">Are you sure you want to delete <?php echo $contact->value_of_contact;?> ?</p>
                                                        </div>

                                                    </div>
                                                    <div class="row" style="margin-top: 3%;">
                                                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-5">
                                                            <button type="button" class="btn btn-default form-control" data-dismiss="modal">No</button>
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 col-sm-4 col-xs-2"></div>
                                                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-5">
                                                            <a href="<?php echo site_url('delete-mobile-contact');?>/<?php echo $contact->id; ?>" class="btn btn-danger form-control" >Yes</a>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Add New Mobile contacts
                            </div>
                            <div class="panel-body">
                                <form role = "form" action="<?php echo site_url('add-mobile-contact');?>" method="POST">
                                    <?php if(form_error('mobileNumber')): ?>
                                        <div class="alert alert-warning" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <?php echo form_error('mobileNumber'); ?>
                                        </div>
                                    <?php endif;?>
                                    <label>Mobile Number</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="mobileNumber" placeholder="Mobile Number" >
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="save" class="btn btn-primary form-control">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>