<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form class="user" method="post" action="<?php echo base_url('registration/create_user'); ?>">
        <div class="form-group">
            <label>Full Name*</label>
            <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full Name" value="<?= set_value('name') ?>">
            <?= form_error('name', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <label>Email*</label>
                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email') ?>">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>');  ?>
            </div>
            <div class="col-sm-6">
                <label>Role(1.Admin, 2.Owner)*</label>
                <select name="role_id" id="role_id" placeholder="Role" class="form-control">
                    <option>1</option>
                    <option>2</option>
                </select>
                <?= form_error('role_id', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <label>Password*</label>
                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>');  ?>
            </div>
            <div class="col-sm-6">
                <label>Reapet Password*</label>
                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-user btn-block">
            Register Account
        </button>
        <a href="<?php echo base_url('registration'); ?>" class="btn btn-secondary btn-user btn-block">
            Back
        </a>
    </form>
</div>