<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php foreach ($edgecolour as $ec) : ?>
        <form method="post" action="<?= base_url('admin/edgecolour/action_update') ?>">
            <div class="form-group">
                <label>ID Edge Colour</label>
                <input type="text" name="id_edgecolour" class="form-control" value="<?= $ec->id_edgecolour; ?>">
            </div>

            <div class="form-group">
                <label>Edge Colour Name</label>
                <input type="text" name="nama_edgecolour" class="form-control" value="<?= $ec->nama_edgecolour; ?>">
            </div>

            <div class="form-group">
                <label>Price</label>
                <input type="text" name="harga" class="form-control" value="<?= $ec->harga; ?>">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>

            <a href="<?php echo base_url('admin/edgecolour'); ?>" class="btn btn-secondary">
                Back
            </a>
        </form>
    <?php endforeach; ?>

</div>