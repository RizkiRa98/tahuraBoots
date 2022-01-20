<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php foreach ($construction as $cns) : ?>
        <form method="post" action="<?= base_url('admin/construction/action_update') ?>">
            <div class="form-group">
                <label>ID construction</label>
                <input type="text" name="id_construction" class="form-control" value="<?= $cns->id_construction; ?>">
            </div>

            <div class="form-group">
                <label>construction Name</label>
                <input type="text" name="nama_construction" class="form-control" value="<?= $cns->nama_construction; ?>">
            </div>

            <div class="form-group">
                <label>Price</label>
                <input type="text" name="harga" class="form-control" value="<?= $cns->harga; ?>">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>

            <a href="<?php echo base_url('admin/construction'); ?>" class="btn btn-secondary">
                Back
            </a>
        </form>
    <?php endforeach; ?>

</div>