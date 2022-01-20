<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php foreach ($order as $od) : ?>
        <form method="post" action="<?= base_url('admin/order/update') ?>">
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control" value="<?php echo $od->address ?>">
            </div>
            <div class="form-group">
                <input type="hidden" name="id_order" class="form-control" value="<?php echo $od->id_order ?>">
                <label>Select Model</label>
                <select id="nama_model" name="nama_model" onchange="changeValue()" class="form-control">


                    <?php foreach ($model as $mdl) : ?>
                        <option value="<?php echo $mdl->nama_model . "/" . $mdl->harga . "/" . $mdl->size_model ?>" <?php if ($mdl->nama_model == $od->nama_model) echo 'selected="selected"'; ?>>
                            <?php echo $mdl->nama_model ?>
                        </option>
                    <?php endforeach ?>
                </select>

            </div>

            <div class="form-group">
                <label>Select Upper</label>
                <select id="nama_upper" name="nama_upper" class="form-control" onchange="changeValue()">


                    <?php foreach ($upper as $upr) : ?>
                        <option value="<?php echo $upr->nama_upper . "/" . $upr->harga ?>" <?php if ($upr->nama_upper == $od->nama_upper) echo 'selected="selected"'; ?>>
                            <?php echo $upr->nama_upper ?>
                        </option>
                    <?php endforeach ?>
                </select>

            </div>

            <div class="form-group">
                <label>Select Lining</label>
                <select id="nama_lining" name="nama_lining" onchange="changeValue()" class="form-control">

                    <?php foreach ($lining as $lng) : ?>
                        <option value="<?php echo $lng->nama_lining . "/" . $lng->harga ?>" <?php if ($lng->nama_lining == $od->nama_lining) echo 'selected="selected"'; ?>>
                            <?php echo $lng->nama_lining ?>
                        </option>
                    <?php endforeach ?>
                </select>

            </div>

            <div class="form-group">
                <label>Select Construction</label>
                <select id="nama_construction" name="nama_construction" onchange="changeValue()" class="form-control">

                    <?php foreach ($construction as $cns) : ?>
                        <option value="<?php echo $cns->nama_construction . "/" . $cns->harga ?>" <?php if ($cns->nama_construction == $od->nama_construction) echo 'selected="selected"'; ?>>
                            <?php echo $cns->nama_construction ?>
                        </option>
                    <?php endforeach ?>
                </select>

            </div>

            <div class="form-group">
                <label>Select Outsole</label>
                <select id="nama_outsole" name="nama_outsole" onchange="changeValue()" class="form-control">

                    <?php foreach ($outsole as $osl) : ?>
                        <option value="<?php echo $osl->nama_outsole . "/" . $osl->harga ?>" <?php if ($osl->nama_outsole == $od->nama_outsole) echo 'selected="selected"'; ?>>
                            <?php echo $osl->nama_outsole ?>
                        </option>
                    <?php endforeach ?>
                </select>

            </div>

            <div class="form-group">
                <label>Select Welt Colour</label>
                <select id="nama_weltcolour" name="nama_weltcolour" onchange="changeValue()" class="form-control">

                    <?php foreach ($weltcolour as $wc) : ?>
                        <option value="<?php echo $wc->nama_weltcolour . "/" . $wc->harga ?>" <?php if ($wc->nama_weltcolour == $od->nama_weltcolour) echo 'selected="selected"'; ?>>
                            <?php echo $wc->nama_weltcolour ?>
                        </option>
                    <?php endforeach ?>
                </select>

            </div>

            <div class="form-group">
                <label>Select Edge Colour</label>
                <select id="nama_edgecolour" name="nama_edgecolour" onchange="changeValue()" class="form-control">

                    <?php foreach ($edgecolour as $ec) : ?>
                        <option value="<?php echo $ec->nama_edgecolour . "/" . $ec->harga ?>" <?php if ($ec->nama_edgecolour == $od->nama_edgecolour) echo 'selected="selected"'; ?>>
                            <?php echo $ec->nama_edgecolour ?>
                        </option>
                    <?php endforeach ?>
                </select>

            </div>
            <div class="form-group">
                <label>Select Welt Style</label>
                <select id="nama_weltstite" name="nama_weltstite" onchange="changeValue()" class="form-control">

                    <?php foreach ($weltstite as $ws) : ?>
                        <option value="<?php echo $ws->nama_weltstite . "/" . $ws->harga ?>" <?php if ($ws->nama_weltstite == $od->nama_weltstite) echo 'selected="selected"'; ?>>
                            <?php echo $ws->nama_weltstite ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>

            <div class="form-group">
                <label>Select Toebox</label>
                <select id="nama_toebox" name="nama_toebox" onchange="changeValue()" class="form-control">

                    <?php foreach ($toebox as $tb) : ?>
                        <option value="<?php echo $tb->nama_toebox . "/" . $tb->harga ?>" <?php if ($tb->nama_toebox == $od->nama_toebox) echo 'selected="selected"'; ?>>
                            <?php echo $tb->nama_toebox ?>
                        </option>
                    <?php endforeach ?>
                </select>

            </div>

            <div class="form-group">
                <label>Select Heels</label>
                <select id="nama_heels" name="nama_heels" onchange="changeValue()" class="form-control">

                    <?php foreach ($heels as $hs) : ?>
                        <option value="<?php echo $hs->nama_heels . "/" . $hs->harga ?>" <?php if ($hs->nama_heels == $od->nama_heels) echo 'selected="selected"'; ?>>
                            <?php echo $hs->nama_heels ?>
                        </option>
                    <?php endforeach ?>
                </select>

            </div>

            <div class="form-group">
                <label>Select Size</label>
                <select name="size" class="form-control">
                    <option <?php if ($od->size == "35") echo 'selected = selected' ?>>35</option>
                    <option <?php if ($od->size == "36") echo 'selected = selected' ?>>36</option>
                    <option <?php if ($od->size == "37") echo 'selected = selected' ?>>37</option>
                    <option <?php if ($od->size == "38") echo 'selected = selected' ?>>38</option>
                    <option <?php if ($od->size == "39") echo 'selected = selected' ?>>39</option>
                    <option <?php if ($od->size == "40") echo 'selected = selected' ?>>40</option>
                    <option <?php if ($od->size == "41") echo 'selected = selected' ?>>41</option>
                    <option <?php if ($od->size == "42") echo 'selected = selected' ?>>42</option>
                    <option <?php if ($od->size == "43") echo 'selected = selected' ?>>43</option>
                    <option <?php if ($od->size == "44") echo 'selected = selected' ?>>44</option>
                    <option <?php if ($od->size == "45") echo 'selected = selected' ?>>45</option>
                </select>
            </div>
            <div class="form-group">
                <label>Total Price :</label>
                <input type="text" id="harga" name="harga" placeholder="" class="form-control" readonly value="<?= $od->harga; ?>">
            </div>
            <br>

            <button type="submit" class="btn btn-primary" style="margin-bottom: 20px;">Save</button>

            <a href="<?php echo base_url('admin/order'); ?>" class="btn btn-secondary" style="margin-bottom: 20px;">
                Back
            </a>
        </form>
    <?php endforeach; ?>
</div>
<script>
    function changeValue() {
        var value = document.getElementsByName("nama_model")[0].value;
        var value_upper = document.getElementsByName("nama_upper")[0].value;
        var value_lining = document.getElementsByName("nama_lining")[0].value;
        var value_construction = document.getElementsByName("nama_construction")[0].value;
        var value_outsole = document.getElementsByName("nama_outsole")[0].value;
        var value_weltcolour = document.getElementsByName("nama_weltcolour")[0].value;
        var value_edgecolour = document.getElementsByName("nama_edgecolour")[0].value;
        var value_weltstite = document.getElementsByName("nama_weltstite")[0].value;
        var value_toebox = document.getElementsByName("nama_toebox")[0].value;
        var value_heels = document.getElementsByName("nama_heels")[0].value;
        var nama_mdl = value.split("/")[0];
        var harga_mdl = parseFloat(value.split("/")[1]);
        var size_mdl = parseFloat(value.split("/")[2]);
        var nama_upper = value_upper.split("/")[0];
        var harga_upper = parseFloat(value_upper.split("/")[1]);
        var nama_lining = value_lining.split("/")[0];
        var harga_lining = parseFloat(value_lining.split("/")[1]);
        var nama_construction = value_construction.split("/")[0];
        var harga_construction = parseFloat(value_construction.split("/")[1]);
        var nama_outsole = value_outsole.split("/")[0];
        var harga_outsole = parseFloat(value_outsole.split("/")[1]);
        var nama_weltcolour = value_weltcolour.split("/")[0];
        var harga_weltcolour = parseFloat(value_weltcolour.split("/")[1]);
        var nama_edgecolour = value_edgecolour.split("/")[0];
        var harga_edgecolour = parseFloat(value_edgecolour.split("/")[1]);
        var nama_weltstite = value_weltstite.split("/")[0];
        var harga_weltstite = parseFloat(value_weltstite.split("/")[1]);
        var nama_toebox = value_toebox.split("/")[0];
        var harga_toebox = parseFloat(value_toebox.split("/")[1]);
        var nama_heels = value_heels.split("/")[0];
        var harga_heels = parseFloat(value_heels.split("/")[1]);

        if (isNaN(harga_mdl)) {
            harga_mdl = 0;
        }
        if (isNaN(harga_upper)) {
            harga_upper = 0;
        }
        if (isNaN(harga_lining)) {
            harga_lining = 0;
        }
        if (isNaN(harga_construction)) {
            harga_construction = 0;
        }
        if (isNaN(harga_outsole)) {
            harga_outsole = 0;
        }
        if (isNaN(harga_weltcolour)) {
            harga_weltcolour = 0;
        }
        if (isNaN(harga_edgecolour)) {
            harga_edgecolour = 0;
        }
        if (isNaN(harga_weltstite)) {
            harga_weltstite = 0;
        }
        if (isNaN(harga_toebox)) {
            harga_toebox = 0;
        }
        if (isNaN(harga_heels)) {
            harga_heels = 0;
        }

        var tot_harga = 0 + size_mdl * (harga_upper + harga_lining) + harga_construction + harga_outsole + harga_weltcolour + harga_edgecolour + harga_weltstite + harga_heels;
        // alert(document.getElementsByName("size").value);
        if (isNaN(tot_harga)) {
            document.getElementsByName("harga")[0].value = 0;
        } else {
            document.getElementsByName("harga")[0].value = tot_harga;

        }

    }
</script>