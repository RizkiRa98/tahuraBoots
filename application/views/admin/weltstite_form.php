<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <form method="post" action="<?= base_url('admin/weltstite/action_input') ?>">
        <div class="form-group">
            <label> ID Welt Stite</label>
            <input type="text" name="id_weltstite" placeholder="Input ID Welt Stite" class="form-control">
            <?= form_error('id_weltstite', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label> Welt Stite Name</label>
            <input type="text" name="nama_weltstite" placeholder="Input Welt Stite Name" class="form-control">
            <?= form_error('nama_weltstite', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label> Price</label>
            <input type="text" name="harga" placeholder="Input Welt Stite Price" class="form-control">
            <?= form_error('harga', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="<?php echo base_url('admin/weltstite'); ?>" class="btn btn-secondary">
            Back
        </a>
    </form>
</div>