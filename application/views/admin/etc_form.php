<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <form method="post" action="<?= base_url('admin/etc/action_input') ?>">
        <div class="form-group">
            <label> ID Etc</label>
            <input type="text" name="id_etc" placeholder="Input ID Etc" class="form-control">
            <?= form_error('id_etc', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label> Etc Name</label>
            <input type="text" name="nama_etc" placeholder="Input Etc Name" class="form-control">
            <?= form_error('nama_etc', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label> Price</label>
            <input type="text" name="harga" placeholder="Input Etc Price" class="form-control">
            <?= form_error('harga', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="<?php echo base_url('admin/etc'); ?>" class="btn btn-secondary">
            Back
        </a>
    </form>
</div>