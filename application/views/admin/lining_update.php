<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php foreach ($lining as $lng) : ?>
        <form method="post" action="<?= base_url('admin/lining/action_update') ?>">
            <div class="form-group">
                <label>ID Lining</label>
                <input type="text" name="id_lining" class="form-control" value="<?= $lng->id_lining; ?>">
            </div>

            <div class="form-group">
                <label>Lining Name</label>
                <input type="text" name="nama_lining" class="form-control" value="<?= $lng->nama_lining; ?>">
            </div>

            <div class="form-group">
                <label>Price</label>
                <input type="text" name="harga" class="form-control" value="<?= $lng->harga; ?>">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>

            <a href="<?php echo base_url('admin/lining'); ?>" class="btn btn-secondary">
                Back
            </a>
        </form>
    <?php endforeach; ?>

</div>