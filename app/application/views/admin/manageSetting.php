

<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12" style="margin-bottom:2%; ">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addAdmin">
            Add Admin
        </button>
    </div>
    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
        <h5 align="center"> List Of All Admins in system</h5>
        <table id="manageUsers" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Full Name</th>
                <th>Display Name</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $admins = $this->User_model->getAdministrators();
            foreach($admins as $admin) :
                ?>
                <?php if($this->session->userdata('userId') != $admin->iduser ) : ?>
                <tr>
                    <td><?php echo $admin->full_name ;?></td>
                    <td><?php echo $admin->display_name ;?></td>
                    <td><?php echo $admin->email ;?></td>
                    <td></td>
                </tr>
                <?php endif; ?>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>


    <div class="modal fade" id="addAdmin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">New Admin Form</h4>
                </div>
                <div class="modal-body">
                    <form role="form" action="<?php echo site_url('create-admin');?>" method="POST">
                        <label>Full Name :</label>
                        <div class="form-group">
                            <input class="form-control" type="text" name = "fullName"/>
                        </div>
                        <label>Display Name :</label>
                        <div class="form-group">
                            <input class="form-control" type="text" name = "displayName"/>
                        </div>
                        <label>Username :</label>
                        <div class="form-group">
                            <input class="form-control" type="text" name = "username"/>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary form-control">
                                <i class="fa fa-floppy-o"></i> save new admin
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button>-->
                </div>
            </div>
        </div>
    </div>


</div>
</div>
</div>