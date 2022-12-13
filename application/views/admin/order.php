<style>
    .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table thead tr td {
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 0.35px;
        opacity: 1;
        padding: 12px;
        vertical-align: top;
    }

    .table tbody tr td {
        font-size: 14px;
        letter-spacing: 0.35px;
        font-weight: normal;
        padding: 8px;
    }

    .table tbody tr td .btn {
        text-decoration: none;
        line-height: 25px;
        display: inline-block;
        vertical-align: middle;
    }

    @media (max-width: 1409px) {
        .table thead {
            display: none;
        }

        .table .table tbody,
        .table tr,
        .table td {
            display: block;
            width: 100%;
        }

        .table tr {
            margin-bottom: 15px;
        }

        .table tbody tr td {
            text-align: right;
            padding-left: 50%;
            position: relative;
        }

        .table td::before {
            content: attr(data-label);
            position: absolute;
            left: 0;
            width: 50%;
            padding-left: 15px;
            font-weight: 600;
            font-size: 14px;
            text-align: left;
        }

    }
</style>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php
    echo $this->session->flashdata('message');
    $this->session->unset_userdata('message');
    $this->session->sess_destroy();
    ?>
    <table>
        <tr>
            <td>
                <div class="navbar-form navbar-left" style="width: 200px;">
                    <?php echo form_open('admin/order/search') ?>
                    <input type="text" name="keyword" class="form-control" placeholder="Search">
                </div>
            </td>
            <td> <button type="submit" class="btn btn-success">Search</button>
                <?php form_close(); ?></td>
        </tr>
    </table>
    <br>
    <table class="table table-bordered table-stripped table-hover">
        <thead>
            <tr>
                <th>ID Order</th>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Instagram</th>
                <th>Model</th>
                <th>Order Date</th>
                <th>Price</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($order as $od) :
            ?>
                <tr>
                    <input type="hidden" value="<?= $od->id_order; ?>"></input>
                    <td width="20px" data-label="No"><?= $no++ ?></td>
                    <td data-label="Name"><?= $od->nama ?></td>
                    <td data-label="Address"><?= $od->address ?></td>
                    <td data-label="Email"><?= $od->email ?></td>
                    <td data-label="Phone Number"><?= $od->phone_number ?></td>
                    <td data-label="Instagram"><?= $od->instagram ?></td>
                    <td data-label="Model Name"><?= $od->nama_model ?></td>
                    <td data-label="Order Date"><?= $od->order_date ?></td>
                    <td data-label="Price">Rp. <?= $od->harga ?></td>
                    <td data-label="Status"><?= $od->status ?></td>
                    <td width="20px" data-label="Detail"><?= anchor('admin/order/detail/' . $od->id_order, '<div class="btn btn-sm btn-success"><i class="fa fa-search-plus"></i></div> ') ?> </td>
                    <td width="20px" data-label="Edit"><?= anchor('admin/order/edit/' . $od->id_order, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div> ') ?> </td>
                    <td width="20px" data-label="Delete" onclick="javascript: return confirm('Ready to Delete?')"><?= anchor('admin/order/delete/' . $od->id_order, '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div> ') ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>