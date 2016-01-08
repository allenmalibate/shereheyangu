

        <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#addWorkOptions">
                    Add work option
                </button>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                <h5 align="center"> List Of All Work Options</h5>
                <table id="manageWorkOptions" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Type </th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $workOptions = $this->Work_option_model->getAllWorkOptions();
                    foreach($workOptions as $workOption) :
                    ?>
                    <tr>
                        <td><?php echo $workOption->option_type;?></td>
                        <td><?php echo $workOption->option_name;?></td>
                        <td>
                            <button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target="#editWorkOptions<?php echo $workOption->id;?>">
                                Edit
                            </button>
                        </td>
                    </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>

            </div>

        </div>

        <!-- add new work option form-->
        <div class="modal fade" id="addWorkOptions" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Work Option forms</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" action="<?php echo site_url('add-work-option');?>" method="POST">
                            <label>Option Type :</label>
                            <div class="form-group">
                                <input class="form-control" type="text" name = "optionType"/>
                            </div>
                            <label>Option Name :</label>
                            <div class="form-group">
                                <input class="form-control" type="text" name = "optionName"/>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary form-control">
                                    <i class="fa fa-floppy-o"></i> save work option
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- edit new work option form-->
        <?php $workOptions = $this->Work_option_model->getAllWorkOptions();
        foreach($workOptions as $workOption) :
        ?>
        <div class="modal fade" id="editWorkOptions<?php echo $workOption->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Work Option forms</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" action="<?php echo site_url('edit-work-option');?>/<?php echo $workOption->id;?>" method="POST">
                            <label>Option Type :</label>
                            <div class="form-group">
                                <input class="form-control" type="text" value="<?php echo $workOption->option_type;?>" name = "optionType"/>
                            </div>
                            <label>Option Name :</label>
                            <div class="form-group">
                                <input class="form-control" type="text" name = "optionName" value="<?php echo $workOption->option_name;?>" />
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary form-control">
                                    Update work option
                                </button>
                            </div>
                        </form>
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