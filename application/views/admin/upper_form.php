<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <form method="post" action="<?= base_url('admin/upper/action_input') ?>">
        <div class="form-group">
            <label> ID Upper</label>
            <input type="text" name="id_upper" placeholder="Input ID Upper" class="form-control">
            <?= form_error('id_upper', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label> Upper Name</label>
            <input type="text" name="nama_upper" placeholder="Input Upper Name" class="form-control">
            <?= form_error('nama_upper', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label> Price</label>
            <input type="text" name="harga" placeholder="Input Upper Price" class="form-control">
            <?= form_error('harga', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="<?php echo base_url('admin/upper'); ?>" class="btn btn-secondary">
            Back
        </a>
    </form>
</div>