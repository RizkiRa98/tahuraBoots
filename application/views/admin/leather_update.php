<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php foreach ($leather as $ltr) : ?>
        <form method="post" action="<?= base_url('admin/leather/action_update') ?>">
            <div class="form-group">
                <label>ID Leather Sole</label>
                <input type="text" name="id_leather" class="form-control" value="<?= $ltr->id_leather; ?>">
            </div>

            <div class="form-group">
                <label>Leather Sole Name</label>
                <input type="text" name="nama_leather" class="form-control" value="<?= $ltr->nama_leather; ?>">
            </div>

            <div class="form-group">
                <label>Price</label>
                <input type="text" name="harga" class="form-control" value="<?= $ltr->harga; ?>">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>

            <a href="<?php echo base_url('admin/leather'); ?>" class="btn btn-secondary">
                Back
            </a>
        </form>
    <?php endforeach; ?>

</div>