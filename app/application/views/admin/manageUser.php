

<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
    <table id="manageUsers" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Full Name</th>
            <th>Display Name</th>
            <th>E-mail</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $members = $this->User_model->getAllMembers();
        foreach($members as $member) :
            ?>
            <tr>
                <td><?php echo $member->full_name ;?></td>
                <td><?php echo $member->display_name ;?></td>
                <td><?php echo $member->email ;?></td>
                <td></td>
            </tr>

        <?php endforeach;?>
        </tbody>
    </table>
</div>
</div>
</div>