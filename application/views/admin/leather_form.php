<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <form method="post" action="<?= base_url('admin/leather/action_input') ?>">
        <div class="form-group">
            <label> ID Leather</label>
            <input type="text" name="id_leather" placeholder="Input ID Leather Sole" class="form-control">
            <?= form_error('id_leather', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label> Leather Name</label>
            <input type="text" name="nama_leather" placeholder="Input Leather Sole Name" class="form-control">
            <?= form_error('nama_leather', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label> Price</label>
            <input type="text" name="harga" placeholder="Input Leather Sole Price" class="form-control">
            <?= form_error('harga', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="<?php echo base_url('admin/leather'); ?>" class="btn btn-secondary">
            Back
        </a>
    </form>
</div>