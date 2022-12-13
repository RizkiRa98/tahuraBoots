<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php
    echo $this->session->flashdata('message');
    $this->session->unset_userdata('message');
    $this->session->sess_destroy();
    ?>

    <?= anchor('admin/pegawai/input', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Create Pegawai</button>') ?>
    <table class="table table-bordered table-stripped table-hover">
        <tr>
            <th>NO</th>

            <th>Nama Pegawai</th>
            <th>Nama Pekerjaan</th>
            <th>Upah</th>
            <th colspan="3">Action</th>
        </tr>


        <?php
        $no = 1;
        $sum = 0;
        foreach ($pegawai as $pgw) :
            $sum += $pgw->upah;
        ?>
            <tr>
                <td width="20px"><?= $no++ ?></td>
                <td hidden><?= $pgw->id_pegawai ?></td>
                <td><?= $pgw->nama_pegawai ?></td>
                <td><?= $pgw->nama_pekerjaan ?></td>
                <td>$<?= $pgw->upah ?></td>


                <td width="20px"><?= anchor('admin/pegawai/update/' . $pgw->id_pegawai, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div> ') ?>
                <td width="20px" onclick="javascript: return confirm('Ready to Delete?')"><?= anchor('admin/pegawai/delete/' . $pgw->id_pegawai, '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div> ') ?>

                </td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <th colspan="3" style="text-align: end ;">TOTAL :</th>
            <th style="text-align: left ;">$<?= $sum; ?></th>
        </tr>
    </table>
</div>