<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <table class="table table-striped table-hover table-bordered">

        <?php foreach ($order as $od) : ?>
            <tr>
                <td colspan="2"><img class="mb-4" src="<?php echo base_url('assets/pict/') . $od->foto ?>" alt="Customer tidak upload foto" style="width:20%"></td>
            </tr>
            <tr>
                <td>Id_order</td>
                <td><?php echo $od->id_order; ?></td>
            </tr>
            <tr>
                <td>Order Date</td>
                <td><?php echo $od->order_date; ?></td>
            </tr>

            <tr>
                <td>Price</td>
                <td><?php echo $od->harga; ?></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><?php echo $od->nama; ?></td>
            </tr>

            <tr>
                <td>Address</td>
                <td><?php echo $od->address; ?></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><?php echo $od->email; ?></td>
            </tr>

            <tr>
                <td>Phone Number</td>
                <td><?php echo $od->phone_number; ?></td>
            </tr>

            <tr>
                <td>Instagram</td>
                <td><?php echo $od->instagram; ?></td>
            </tr>

            <tr>
                <td>Model Name</td>
                <td><?php echo $od->nama_model; ?></td>
            </tr>

            <tr>
                <td>Upper Name</td>
                <td><?php echo $od->nama_upper; ?></td>
            </tr>

            <tr>
                <td>Lining Name</td>
                <td><?php echo $od->nama_lining; ?></td>
            </tr>

            <tr>
                <td>Construction Name</td>
                <td><?php echo $od->nama_construction; ?></td>
            </tr>

            <tr>
                <td>Outsole Name</td>
                <td><?php echo $od->nama_outsole; ?></td>
            </tr>

            <tr>
                <td>Welt Colour Name</td>
                <td><?php echo $od->nama_weltcolour; ?></td>
            </tr>

            <tr>
                <td>Edge Colour Name</td>
                <td><?php echo $od->nama_edgecolour; ?></td>
            </tr>

            <tr>
                <td>Welt Style Name</td>
                <td><?php echo $od->nama_weltstite; ?></td>
            </tr>

            <tr>
                <td>Toebox Name</td>
                <td><?php echo $od->nama_toebox; ?></td>
            </tr>

            <tr>
                <td>Heels Name</td>
                <td><?php echo $od->nama_heels; ?></td>
            </tr>

            <tr>
                <td>Size</td>
                <td><?php echo $od->size; ?></td>
            </tr>
        <?php endforeach ?>
    </table>

    <?php echo anchor('admin/order', '<div class="btn btn-sm btn-primary">Back</div>') ?><br><br><br>
</div>