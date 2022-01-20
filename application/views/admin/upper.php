<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php
    echo $this->session->flashdata('message');
    $this->session->unset_userdata('message');
    $this->session->sess_destroy();
    ?>
    <?= anchor('admin/upper/input', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Create Upper</button>') ?>
    <table class="table table-bordered table-stripped table-hover">
        <tr>
            <th>NO</th>
            <th>ID Upper</th>
            <th>Upper Name</th>
            <th>Price</th>
            <th colspan="2">Action</th>
        </tr>

        <?php
        $no = 1;
        foreach ($upper as $upr) :
        ?>
            <tr>
                <td width="20px"><?= $no++ ?></td>
                <td><?= $upr->id_upper ?></td>
                <td><?= $upr->nama_upper ?></td>
                <td>Rp. <?= $upr->harga ?></td>
                <td width="20px"><?= anchor('admin/upper/update/' . $upr->id_upper, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div> ') ?>
                <td width="20px" onclick="javascript: return confirm('Ready to Delete?')"><?= anchor('admin/upper/delete/' . $upr->id_upper, '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div> ') ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>