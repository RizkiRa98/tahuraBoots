<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php foreach ($weltcolour as $wc) : ?>
        <form method="post" action="<?= base_url('admin/weltcolour/action_update') ?>">
            <div class="form-group">
                <label>ID Welt Colour</label>
                <input type="text" name="id_weltcolour" class="form-control" value="<?= $wc->id_weltcolour; ?>">
            </div>

            <div class="form-group">
                <label>Welt Colour Name</label>
                <input type="text" name="nama_weltcolour" class="form-control" value="<?= $wc->nama_weltcolour; ?>">
            </div>

            <div class="form-group">
                <label>Price</label>
                <input type="text" name="harga" class="form-control" value="<?= $wc->harga; ?>">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>

            <a href="<?php echo base_url('admin/weltcolour'); ?>" class="btn btn-secondary">
                Back
            </a>
        </form>
    <?php endforeach; ?>

</div>