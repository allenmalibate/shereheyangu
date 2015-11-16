<div class="user-account-wrap" style="width:100%;">
    <div class="container" style="padding-top:70px;">
        <div class="row">
            <div class="col-sm-12 col-md-12 user-account-details">

                <div class="user-info-block">
                    <div class="user-heading">
                        <h3><i>Welcome,</i>  <?php echo $user->full_name; ?></h3>

                    </div>
                    <div style="font-size: 11px">
                        <ul class="navigation">
                            <li class="active">
                                <a data-toggle="tab" href="#information">
                                    <span class="fa fa-user fa-2x"> Account</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#mylistings">
                                    <span class="fa fa-list-ul fa-2x"> Listings</span>
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
                            <div id="information" class="tab-pane active">
                                <h4>Account Information</h4>
                                <?php print_r($user); ?>
                            </div>
                            <div id="mylistings" class="tab-pane">
                                <h4>Ad lists</h4>
                            </div>

                            <div id="message" class="tab-pane">
                                <h4>Your Messages</h4>
                            </div>
                            <div id="events" class="tab-pane">
                                <h4>Set your booked dates</h4>
                            </div>
                            <div id="settings" class="tab-pane">
                                <h4>Settings</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
