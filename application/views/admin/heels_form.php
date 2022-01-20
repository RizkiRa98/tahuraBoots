<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <form method="post" action="<?= base_url('admin/heels/action_input') ?>">
        <div class="form-group">
            <label> ID Heels</label>
            <input type="text" name="id_heels" placeholder="Input ID Heels" class="form-control">
            <?= form_error('id_heels', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label> Heels Name</label>
            <input type="text" name="nama_heels" placeholder="Input Heels Name" class="form-control">
            <?= form_error('nama_heels', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label> Price</label>
            <input type="text" name="harga" placeholder="Input Heels Price" class="form-control">
            <?= form_error('harga', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="<?php echo base_url('admin/heels'); ?>" class="btn btn-secondary">
            Back
        </a>
    </form>
</div>