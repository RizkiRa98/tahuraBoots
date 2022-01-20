<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php foreach ($outsole as $osl) : ?>
        <form method="post" action="<?= base_url('admin/outsole/action_update') ?>">
            <div class="form-group">
                <label>ID Outsole</label>
                <input type="text" name="id_outsole" class="form-control" value="<?= $osl->id_outsole; ?>">
            </div>

            <div class="form-group">
                <label>Outsole Name</label>
                <input type="text" name="nama_outsole" class="form-control" value="<?= $osl->nama_outsole; ?>">
            </div>

            <div class="form-group">
                <label>Price</label>
                <input type="text" name="harga" class="form-control" value="<?= $osl->harga; ?>">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>

            <a href="<?php echo base_url('admin/outsole'); ?>" class="btn btn-secondary">
                Back
            </a>
        </form>
    <?php endforeach; ?>

</div>