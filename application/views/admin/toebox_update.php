<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php foreach ($toebox as $tb) : ?>
        <form method="post" action="<?= base_url('admin/toebox/action_update') ?>">
            <div class="form-group">
                <label>ID Toebox</label>
                <input type="text" name="id_toebox" class="form-control" value="<?= $tb->id_toebox; ?>">
            </div>

            <div class="form-group">
                <label>Toebox Name</label>
                <input type="text" name="nama_toebox" class="form-control" value="<?= $tb->nama_toebox; ?>">
            </div>

            <div class="form-group">
                <label>Price</label>
                <input type="text" name="harga" class="form-control" value="<?= $tb->harga; ?>">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>

            <a href="<?php echo base_url('admin/toebox'); ?>" class="btn btn-secondary">
                Back
            </a>
        </form>
    <?php endforeach; ?>

</div>