<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php
    echo $this->session->flashdata('message');
    $this->session->unset_userdata('message');
    $this->session->sess_destroy();
    ?>
    <?= anchor('admin/etc/input', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Create Etc</button>') ?>
    <table class="table table-bordered table-stripped table-hover">
        <tr>
            <th>NO</th>
            <th>ID Etc</th>
            <th>Etc Name</th>
            <th>Price</th>
            <th colspan="2">Action</th>
        </tr>

        <?php
        $no = 1;
        foreach ($etc as $et) :
        ?>
            <tr>
                <td width="20px"><?= $no++ ?></td>
                <td><?= $et->id_etc ?></td>
                <td><?= $et->nama_etc ?></td>
                <td>Rp. <?= $et->harga ?></td>
                <td width="20px"><?= anchor('admin/etc/update/' . $et->id_etc, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div> ') ?>
                <td width="20px" onclick="javascript: return confirm('Ready to Delete?')"><?= anchor('admin/etc/delete/' . $et->id_etc, '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div> ') ?>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>