<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php foreach ($model as $mdl) : ?>
        <form method="post" action="<?= base_url('admin/model/action_update') ?>">
            <div class="form-group">
                <label>ID Model</label>
                <input type="text" name="id_model" class="form-control" value="<?= $mdl->id_model; ?>">
            </div>

            <div class="form-group">
                <label>Model Name</label>
                <input type="text" name="nama_model" class="form-control" value="<?= $mdl->nama_model; ?>">
            </div>

            <div class="form-group">
                <label>Size Model</label>
                <input type="text" name="size_model" class="form-control" value="<?= $mdl->size_model; ?>">
            </div>

            <div class="form-group">
                <label>Price</label>
                <input type="text" name="harga" class="form-control" value="<?= $mdl->harga; ?>">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>

            <a href="<?php echo base_url('admin/model'); ?>" class="btn btn-secondary">
                Back
            </a>
        </form>
    <?php endforeach; ?>

</div>