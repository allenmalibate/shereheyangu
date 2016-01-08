
            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                <div class="panel panel-default">
                    <div class="panel-heading">My Profile</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-9 col-sm-8 col-md-9 col-xs-12">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Full Name</td>
                                        <td><?php echo $user->full_name;?></td>
                                    </tr>
                                    <tr>
                                        <td>E-mail</td>
                                        <td><?php echo $user->email;?></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-lg-3 col-sm-4 col-md-3 col-xs-12">
                                <div style="margin: 0.5%;">
                                    <?php if($user->profile_picture) : ?>
                                        <img src="<?php echo base_url('img/mc/mc2.jpeg');?>" alt="" class="img-rounded img-responsive" />
                                    <?php else : ?>
                                        <img src="<?php echo base_url('img/mc/mc2.jpeg');?>" alt="" class="img-rounded img-responsive" />
                                    <?php endif; ?>
                                </div>

                                <div style="margin: 0.5%;">
                                    <button class="btn btn-primary form-control" data-toggle="modal" data-target="#updateProfilePicture">update profile</button>
                                </div>

                                <!-- pop up form for uploading user profile picture -->
                                <div class="modal fade" id="updateProfilePicture" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Update Profile Picture Form</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form role = "form" action="<?php echo site_url('upload-my-profile-picture');?>/<?php echo $user->iduser; ?>" method="POST">
                                                    <label>Image/picture/Photo</label>
                                                    <div class="form-group">
                                                        <input type="file" class="form-control" name="file"  placeholder="select profile" >
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

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
