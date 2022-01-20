<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <form method="post" action="<?= base_url('admin/model/action_input') ?>">
        <div class="form-group">
            <label> ID Model</label>
            <input type="text" name="id_model" placeholder="Input ID Model" class="form-control">
            <?= form_error('id_model', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label> Model Name</label>
            <input type="text" name="nama_model" placeholder="Input Model Name" class="form-control">
            <?= form_error('nama_model', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label> Size</label>
            <input type="text" name="size_model" placeholder="Input Size with Feet" class="form-control">
            <?= form_error('nama_model', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label> Price</label>
            <input type="text" name="harga" placeholder="0" value="0" class="form-control" readonly>
            <?= form_error('harga', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="<?php echo base_url('admin/model'); ?>" class="btn btn-secondary">
            Back
        </a>
    </form>
</div>