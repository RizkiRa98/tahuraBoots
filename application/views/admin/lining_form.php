<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <form method="post" action="<?= base_url('admin/lining/action_input') ?>">
        <div class="form-group">
            <label> ID Lining</label>
            <input type="text" name="id_lining" placeholder="Input ID Lining" class="form-control">
            <?= form_error('id_lining', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label> Lining Name</label>
            <input type="text" name="nama_lining" placeholder="Input Lining Name" class="form-control">
            <?= form_error('nama_lining', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label> Price</label>
            <input type="text" name="harga" placeholder="Input Lining Price" class="form-control">
            <?= form_error('harga', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="<?php echo base_url('admin/lining'); ?>" class="btn btn-secondary">
            Back
        </a>
    </form>
</div>