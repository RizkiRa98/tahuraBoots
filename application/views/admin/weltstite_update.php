<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php foreach ($weltstite as $ws) : ?>
        <form method="post" action="<?= base_url('admin/weltstite/action_update') ?>">
            <div class="form-group">
                <label>ID Welt Stite</label>
                <input type="text" name="id_weltstite" class="form-control" value="<?= $ws->id_weltstite; ?>">
            </div>

            <div class="form-group">
                <label>Welt Stite Name</label>
                <input type="text" name="nama_weltstite" class="form-control" value="<?= $ws->nama_weltstite; ?>">
            </div>

            <div class="form-group">
                <label>Price</label>
                <input type="text" name="harga" class="form-control" value="<?= $ws->harga; ?>">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>

            <a href="<?php echo base_url('admin/weltstite'); ?>" class="btn btn-secondary">
                Back
            </a>
        </form>
    <?php endforeach; ?>

</div>