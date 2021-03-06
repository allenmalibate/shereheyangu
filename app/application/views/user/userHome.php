<div class="user-account-wrap" style="width:100%;">
    <div class="container" style="padding-top:20px;">
        <div class="row">
            <div class="col-sm-12 col-md-12 user-account-details">

                <div class="user-info-block">
                    <div class="user-heading">
                        <h3><i>Welcome,</i>  <?php echo $user->full_name; ?></h3>

                    </div>
                    <div style="font-size: 11px">
                        <ul class="navigation">
                            <li class="active">
                                <a data-toggle="tab" href="#mybusiness">
                                    <span class="fa fa-list-ul fa-2x"> My Business</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#message">
                                    <span class="fa fa-envelope fa-2x"> Messages</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#events">
                                    <span class="fa fa-calendar fa-2x"> Events</span>
                                </a>
                            </li>

                        </ul>
                    </div>

                    <div class="user-body">
                        <div class="tab-content">
                            <div id="mybusiness" class="tab-pane active">
                                <div class="row" >
                                    <div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 pull-right">
                                        <a href="<?php echo site_url('add-my-business');?>" class="btn btn-primary form-control">
                                            Add New Business
                                        </a>
                                    </div>
                                </div>
                                <div class="row" style = "margin-top: 2%;">
                                    <?php if( $businesses): ?>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">All My Business </div>
                                            <div class="panel-body">
                                                <table class="table table-responsive">
                                                    <?php foreach($businesses as $business): ?>
                                                        <tr>
                                                            <td><?php echo $business->name; ?></td>
                                                            <td><?php
                                                                if($business->description){
                                                                    echo $business->description;
                                                                }else{
                                                                    echo 'No business description at the time';
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-success" href="<?php echo site_url('view-my-business');?>/<?php echo $business->id; ?>">view</a>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteBusiness<?php echo $business->id; ?>">
                                                                    delete
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach;?>
                                                </table>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div id="message" class="tab-pane">
                                <h4>No message at moment</h4>
                            </div>
                            <div id="events" class="tab-pane">
                                <h4>Booking functionality coming soon</h4>
                            </div>
                            <div id="settings" class="tab-pane">
                                <h4>Settings</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- delete work/business option-->
        <?php foreach($businesses as $business): ?>
        <div class="modal fade" id="deleteBusiness<?php echo $business->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Delete Business Confirmation</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <p align="center">Are you sure you want to delete <?php echo $business->name;?> business?</p>
                            </div>

                        </div>
                        <div class="row" style="margin-top: 3%;">
                            <div class="col-md-3 col-lg-3 col-sm-4 col-xs-5">
                                <button type="button" class="btn btn-default form-control" data-dismiss="modal">No</button>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-4 col-xs-2"></div>
                            <div class="col-md-3 col-lg-3 col-sm-4 col-xs-5">
                                <a href="<?php echo site_url('delete-my-business');?>/<?php echo $business->id; ?>" class="btn btn-danger form-control" >Yes</a>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach;?>

    </div>
</div>
