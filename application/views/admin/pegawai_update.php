<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php foreach ($pegawai as $pgw) : ?>
        <form method="post" action="<?= base_url('admin/pegawai/action_update') ?>">
            <div class="form-group">
                <label>ID Pegawai</label>
                <input type="text" name="id_pegawai" class="form-control" readonly value="<?= $pgw->id_pegawai; ?>">
            </div>

            <div class="form-group">
                <label>Nama Pegawai</label>
                <input type="text" name="nama_pegawai" class="form-control" value="<?= $pgw->nama_pegawai; ?>">
            </div>

            <div class="form-group">
                <label>Nama Pekerjaan</label>
                <input type="text" name="nama_pekerjaan" class="form-control" value="<?= $pgw->nama_pekerjaan; ?>">
            </div>

            <div class="form-group">
                <label>Upah</label>
                <input type="text" name="upah" class="form-control" value="<?= $pgw->upah; ?>">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>

            <a href="<?php echo base_url('admin/pegawai'); ?>" class="btn btn-secondary">
                Back
            </a>
        </form>
    <?php endforeach; ?>

</div>