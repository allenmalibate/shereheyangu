<div class="container" style="padding-top:70px;">
    <div class="row">
        <div class="col-md-2">
            <nav class="nav-sidebar">
                <ul class="nav tabs">
                    <?php
                    $workOptions = $this->Work_option_model->getAllWorkOptions();
                    foreach($workOptions as $workOption): ?>
                        <li class=""><a href="<?php echo site_url();?>/get-started/<?php echo  $workOption->id;?>  "><?php echo $workOption->option_name; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div><!--end col2-->