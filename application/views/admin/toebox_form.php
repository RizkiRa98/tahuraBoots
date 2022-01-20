<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <form method="post" action="<?= base_url('admin/toebox/action_input') ?>">
        <div class="form-group">
            <label> ID Toebox</label>
            <input type="text" name="id_toebox" placeholder="Input ID Toebox" class="form-control">
            <?= form_error('id_toebox', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label> Toebox Name</label>
            <input type="text" name="nama_toebox" placeholder="Input Toebox Name" class="form-control">
            <?= form_error('nama_toebox', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label> Price</label>
            <input type="text" name="harga" placeholder="Input Toebox Price" class="form-control">
            <?= form_error('harga', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="<?php echo base_url('admin/toebox'); ?>" class="btn btn-secondary">
            Back
        </a>
    </form>
</div>