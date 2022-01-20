<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <form method="post" action="<?= base_url('admin/weltcolour/action_input') ?>">
        <div class="form-group">
            <label> ID Welt Colour</label>
            <input type="text" name="id_weltcolour" placeholder="Input ID weltcolour" class="form-control">
            <?= form_error('id_weltcolour', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label> Welt Colour Name</label>
            <input type="text" name="nama_weltcolour" placeholder="Input weltcolour Name" class="form-control">
            <?= form_error('nama_weltcolour', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label> Price</label>
            <input type="text" name="harga" placeholder="Input weltcolour Price" class="form-control">
            <?= form_error('harga', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="<?php echo base_url('admin/weltcolour'); ?>" class="btn btn-secondary">
            Back
        </a>
    </form>
</div>