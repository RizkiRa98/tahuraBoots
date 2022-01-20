<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <form method="post" action="<?= base_url('admin/outsole/action_input') ?>">
        <div class="form-group">
            <label> ID Outsole</label>
            <input type="text" name="id_outsole" placeholder="Input ID Outsole" class="form-control">
            <?= form_error('id_outsole', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label> Outsole Name</label>
            <input type="text" name="nama_outsole" placeholder="Input Outsole Name" class="form-control">
            <?= form_error('nama_outsole', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label> Price</label>
            <input type="text" name="harga" placeholder="Input Outsole Price" class="form-control">
            <?= form_error('harga', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="<?php echo base_url('admin/outsole'); ?>" class="btn btn-secondary">
            Back
        </a>
    </form>
</div>