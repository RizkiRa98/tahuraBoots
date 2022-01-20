<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php
    echo $this->session->flashdata('message');
    $this->session->unset_userdata('message');
    $this->session->sess_destroy();
    ?>
    <?= anchor('admin/produk/input', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Create Produk</button>') ?>
    <table class="table table-bordered table-stripped table-hover">
        <tr>
            <th>NO</th>
            <th>ID Product</th>
            <th>Product Name</th>
            <th>Detail Product</th>
            <th>Price</th>
            <th>Product Image</th>
            <th colspan="3">Action</th>
        </tr>

        <?php
        $no = 1;
        foreach ($produk as $pdk) :
        ?>
            <tr>
                <td width="20px"><?= $no++ ?></td>
                <td><?= $pdk->id_produk ?></td>
                <td><?= $pdk->nama_produk ?></td>
                <td><?= $pdk->detail ?></td>
                <td>$ <?= $pdk->harga ?></td>
                <td><?= $pdk->foto ?></td>
                <td width="20px"><?= anchor('admin/produk/detail/' . $pdk->id_produk, '<div class="btn btn-sm btn-success"><i class="fa fa-search-plus"></i></div> ') ?>
                <td width="20px"><?= anchor('admin/produk/update/' . $pdk->id_produk, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div> ') ?>
                <td width="20px" onclick="javascript: return confirm('Ready to Delete?')"><?= anchor('admin/produk/delete/' . $pdk->id_produk, '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div> ') ?>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>