<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <form method="post" action="<?= base_url('admin/construction/action_input') ?>">
        <div class="form-group">
            <label> ID Construction</label>
            <input type="text" name="id_construction" placeholder="Input ID Construction" class="form-control">
            <?= form_error('id_construction', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label> Construction Name</label>
            <input type="text" name="nama_construction" placeholder="Input Construction Name" class="form-control">
            <?= form_error('nama_construction', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label> Price</label>
            <input type="text" name="harga" placeholder="Input Construction Price" class="form-control">
            <?= form_error('harga', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="<?php echo base_url('admin/construction'); ?>" class="btn btn-secondary">
            Back
        </a>
    </form>
</div>