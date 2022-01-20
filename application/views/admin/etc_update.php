<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php foreach ($etc as $et) : ?>
        <form method="post" action="<?= base_url('admin/etc/action_update') ?>">
            <div class="form-group">
                <label>ID Etc</label>
                <input type="text" name="id_etc" class="form-control" value="<?= $et->id_etc; ?>">
            </div>

            <div class="form-group">
                <label>Etc Name</label>
                <input type="text" name="nama_etc" class="form-control" value="<?= $et->nama_etc; ?>">
            </div>

            <div class="form-group">
                <label>Price</label>
                <input type="text" name="harga" class="form-control" value="<?= $et->harga; ?>">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>

            <a href="<?php echo base_url('admin/etc'); ?>" class="btn btn-secondary">
                Back
            </a>
        </form>
    <?php endforeach; ?>

</div>