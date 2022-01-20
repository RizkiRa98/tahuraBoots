<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <form method="post" action="<?= base_url('admin/edgecolour/action_input') ?>">
        <div class="form-group">
            <label> ID Edge Colour</label>
            <input type="text" name="id_edgecolour" placeholder="Input ID edgecolour" class="form-control">
            <?= form_error('id_edgecolour', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label> Edge Colour Name</label>
            <input type="text" name="nama_edgecolour" placeholder="Input Edge Colour Name" class="form-control">
            <?= form_error('nama_edgecolour', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label> Price</label>
            <input type="text" name="harga" placeholder="Input Edge Colour Price" class="form-control">
            <?= form_error('harga', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="<?php echo base_url('admin/edgecolour'); ?>" class="btn btn-secondary">
            Back
        </a>
    </form>
</div>