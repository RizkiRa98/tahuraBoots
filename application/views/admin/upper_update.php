<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php foreach ($upper as $upr) : ?>
        <form method="post" action="<?= base_url('admin/upper/action_update') ?>">
            <div class="form-group">
                <label>ID Upper</label>
                <input type="text" name="id_upper" class="form-control" value="<?= $upr->id_upper; ?>">
            </div>

            <div class="form-group">
                <label>Upper Name</label>
                <input type="text" name="nama_upper" class="form-control" value="<?= $upr->nama_upper; ?>">
            </div>

            <div class="form-group">
                <label>Price</label>
                <input type="text" name="harga" class="form-control" value="<?= $upr->harga; ?>">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>

            <a href="<?php echo base_url('admin/upper'); ?>" class="btn btn-secondary">
                Back
            </a>
        </form>
    <?php endforeach; ?>

</div>