<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php foreach ($heels as $hls) : ?>
        <form method="post" action="<?= base_url('admin/heels/action_update') ?>">
            <div class="form-group">
                <label>ID Heels</label>
                <input type="text" name="id_heels" class="form-control" value="<?= $hls->id_heels; ?>">
            </div>

            <div class="form-group">
                <label>Heels Name</label>
                <input type="text" name="nama_heels" class="form-control" value="<?= $hls->nama_heels; ?>">
            </div>

            <div class="form-group">
                <label>Price</label>
                <input type="text" name="harga" class="form-control" value="<?= $hls->harga; ?>">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>

            <a href="<?php echo base_url('admin/heels'); ?>" class="btn btn-secondary">
                Back
            </a>
        </form>
    <?php endforeach; ?>

</div>