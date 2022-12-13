<style>
    .container5 {
        font-family: 'Poppins', sans-serif;
        background-color: #E0C097;
        box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);
        max-width: 1000px;
        border-radius: 10px;
    }

    .row1 {
        width: 80%;
        margin-left: 100px;
    }

    h1 {
        margin-top: 10px;
    }

    .btn {
        align-content: center;
        margin: auto;
        max-width: 20%;
    }

    select {
        margin-top: 4px;
        padding: 1.5rem;
        border-radius: 4px;
        background-color: white;
        width: 100%;
        align-items: center;
        justify-content: space-between;
        font-size: 1.6rem;
        cursor: pointer;
    }

    select.form-control {
        -webkit-appearance: menulist;
    }

    @media (min-width: 992px) {
        .container5 {
            margin: 50px auto;
            padding: 25px 30px;

        }


    }

    @media (max-width: 768px) {
        label {
            margin-left: 5px;
            margin-top: 5px;
            width: 100%;
        }

        .row1 {
            width: 70%;
            margin-left: 100px;
        }

        .form-display {
            width: 100%;
        }
    }
</style>

<div class="container5">
    <div class="row1">

        <h1 class="h3 text-gray-900 mt-6 text-center" style="font-family:viga;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);">Order Form</h1>
        <small class="text" style="font-size: 18px;">Fields With Sign(*) Must Be Filled In or Selected</small>
        <form method="post" action="<?php echo base_url('order/action_input') ?>" class="form-display" enctype="multipart/form-data">
            <div class="form-group">
                <label>Name*</label>
                <input type="text" name="nama" placeholder="Input Your Name" class="form-control">
                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>');  ?>
            </div>
            <div class="form-group">
                <label>Address*</label>
                <input type="text" name="address" placeholder="Input Your Address" class="form-control">
                <?= form_error('address', '<small class="text-danger pl-3">', '</small>');  ?>
            </div>
            <div class="form-group">
                <label>Email*</label>
                <input type="text" name="email" placeholder="Input Your Email" class="form-control">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>');  ?>
            </div>
            <div class="form-group">
                <label>Phone Number*</label>
                <input type="text" name="phone_number" placeholder="Input Your Phone Number" class="form-control">
                <?= form_error('phone_number', '<small class="text-danger pl-3">', '</small>');  ?>
            </div>
            <div class="form-group">
                <label>Instragram(Optional)</label>
                <input type="text" name="instagram" placeholder="Input Your Instagram" class="form-control">

            </div>
            <hr>
            <div class="form-group">
                <label>Select Model*</label>
                <select id="nama_model" name="nama_model" onchange="changeValue()" class="form-control">
                    <option value="">---Select Model---</option>
                    <?php foreach ($model as $mdl) : ?>
                        <option value="<?php echo $mdl->nama_model . "/" . $mdl->harga . "/" . $mdl->size_model ?>">
                            <?php echo $mdl->nama_model ?>
                        </option>
                    <?php endforeach ?>
                </select>
                <?= form_error('nama_model', '<small class="text-danger pl-3">', '</small>');  ?>
            </div>

            <div class="form-group">
                <label>Select Upper*</label>
                <select id="nama_upper" name="nama_upper" class="form-control" onchange="changeValue()">
                    <option value="">---Select Upper---</option>
                    <?php foreach ($upper as $upr) : ?>
                        <option value="<?php echo $upr->nama_upper . "/" . $upr->harga ?>">
                            <?php echo $upr->nama_upper ?>
                        </option>
                    <?php endforeach ?>
                </select>
                <?= form_error('nama_upper', '<small class="text-danger pl-3">', '</small>');  ?>
            </div>

            <div class="form-group">
                <label>Select Lining*</label>
                <select id="nama_lining" name="nama_lining" onchange="changeValue()" class="form-control">
                    <option value="">---Select Lining---</option>
                    <?php foreach ($lining as $lng) : ?>
                        <option value="<?php echo $lng->nama_lining . "/" . $lng->harga ?>">
                            <?php echo $lng->nama_lining ?>
                        </option>
                    <?php endforeach ?>
                </select>
                <?= form_error('nama_lining', '<small class="text-danger pl-3">', '</small>');  ?>
            </div>

            <div class="form-group">
                <label>Select Construction*</label>
                <select id="nama_construction" name="nama_construction" onchange="changeValue()" class="form-control">
                    <option value="">---Select Construction---</option>
                    <?php foreach ($construction as $cns) : ?>
                        <option value="<?php echo $cns->nama_construction . "/" . $cns->harga ?>">
                            <?php echo $cns->nama_construction ?>
                        </option>
                    <?php endforeach ?>
                </select>
                <?= form_error('nama_construction', '<small class="text-danger pl-3">', '</small>');  ?>
            </div>

            <div class="form-group">
                <label>Select Outsole*</label>
                <select id="nama_outsole" name="nama_outsole" onchange="changeValue()" class="form-control">
                    <option value="">---Select Outsole---</option>
                    <?php foreach ($outsole as $osl) : ?>
                        <option value="<?php echo $osl->nama_outsole . "/" . $osl->harga ?>">
                            <?php echo $osl->nama_outsole ?>
                        </option>
                    <?php endforeach ?>
                </select>
                <?= form_error('nama_outsole', '<small class="text-danger pl-3">', '</small>');  ?>
            </div>

            <div class="form-group">
                <label>Select Welt Colour*</label>
                <select id="nama_weltcolour" name="nama_weltcolour" onchange="changeValue()" class="form-control">
                    <option value="">---Select Welt Colour---</option>
                    <?php foreach ($weltcolour as $wc) : ?>
                        <option value="<?php echo $wc->nama_weltcolour . "/" . $wc->harga ?>">
                            <?php echo $wc->nama_weltcolour ?>
                        </option>
                    <?php endforeach ?>
                </select>
                <?= form_error('nama_weltcolour', '<small class="text-danger pl-3">', '</small>');  ?>
            </div>

            <div class="form-group">
                <label>Select Edge Colour*</label>
                <select id="nama_edgecolour" name="nama_edgecolour" onchange="changeValue()" class="form-control">
                    <option value="">---Select Edge Colour---</option>
                    <?php foreach ($edgecolour as $ec) : ?>
                        <option value="<?php echo $ec->nama_edgecolour . "/" . $ec->harga ?>">
                            <?php echo $ec->nama_edgecolour ?>
                        </option>
                    <?php endforeach ?>
                </select>
                <?= form_error('nama_edgecolour', '<small class="text-danger pl-3">', '</small>');  ?>
            </div>
            <div class="form-group">
                <label>Select Welt Style*</label>
                <select id="nama_weltstite" name="nama_weltstite" onchange="changeValue()" class="form-control">
                    <option value="">---Select Welt Style---</option>
                    <?php foreach ($weltstite as $ws) : ?>
                        <option value="<?php echo $ws->nama_weltstite . "/" . $ws->harga ?>">
                            <?php echo $ws->nama_weltstite ?>
                        </option>
                    <?php endforeach ?>
                </select>
                <?= form_error('nama_weltstite', '<small class="text-danger pl-3">', '</small>');  ?>
            </div>

            <div class="form-group">
                <label>Select Toebox*</label>
                <select id="nama_toebox" name="nama_toebox" onchange="changeValue()" class="form-control">
                    <option value="">---Select Toebox---</option>
                    <?php foreach ($toebox as $tb) : ?>
                        <option value="<?php echo $tb->nama_toebox . "/" . $tb->harga ?>">
                            <?php echo $tb->nama_toebox ?>
                        </option>
                    <?php endforeach ?>
                </select>
                <?= form_error('nama_toebox', '<small class="text-danger pl-3">', '</small>');  ?>
            </div>

            <div class="form-group">
                <label>Select Heels*</label>
                <select id="nama_heels" name="nama_heels" onchange="changeValue()" class="form-control">
                    <option value="">---Select Heels---</option>
                    <?php foreach ($heels as $hs) : ?>
                        <option value="<?php echo $hs->nama_heels . "/" . $hs->harga ?>">
                            <?php echo $hs->nama_heels ?>
                        </option>
                    <?php endforeach ?>
                </select>
                <?= form_error('nama_heels', '<small class="text-danger pl-3">', '</small>');  ?>
            </div>

            <div class="form-group">
                <label>Select Size*</label>
                <select name="size" class="form-control">
                    <option value="">---Select Size---</option>
                    <option>35</option>
                    <option>36</option>
                    <option>37</option>
                    <option>38</option>
                    <option>39</option>
                    <option>40</option>
                    <option>41</option>
                    <option>42</option>
                    <option>43</option>
                    <option>44</option>
                    <option>45</option>
                    <option>46</option>
                    <option>47</option>
                    <option>48</option>
                    <option>49</option>
                    <option>50</option>
                </select>
                <?= form_error('size', '<small class="text-danger pl-3">', '</small>');  ?>
            </div>
            <div class="form-group">
                <label>Input Size Image (Optional)</label>
                <input type="file" id="foto" name="foto" class="form-control">
            </div>
            <div class="form-group">
                <label>Worker(USD) :</label>
                <input type="text" name="biaya_pegawai" placeholder="" class="form-control" readonly value="<?= $get_total; ?>">
            </div>
            <div class="form-group">
                <label>Total Price(USD) :</label>
                <input type="text" name="harga" placeholder="Dolar" class="form-control" readonly value="">
            </div>
            <br>

            <button type="submit" class="btn btn-primary mb-4" onclick="submit()">Submit</button>
            <br>
            <small class="text-danger" style="font-size: 18px;">*If price not appear please back to Home page first!</small><br>
            <small class="text-danger" style="font-size: 18px;">*Jika angka price tidak muncul harap kembali ke home page terlebih dahulu!</small>
        </form>
    </div>
</div>
</div>
<!-- <script type="text/javascript">
    function submit() {
        if (submit) {
            alert("Submit successfully");
        } else {
            document.location.href = <?php base_url('order') ?>
        }
    }
</script> -->

<script>
    function changeValue() {
        var value = $("#nama_model").val();
        var value_upper = $("#nama_upper").val();
        var value_lining = $("#nama_lining").val();
        var value_construction = $("#nama_construction").val();
        var value_outsole = $("#nama_outsole").val();
        var value_weltcolour = $("#nama_weltcolour").val();
        var value_edgecolour = $("#nama_edgecolour").val();
        var value_weltstite = $("#nama_weltstite").val();
        var value_toebox = $("#nama_toebox").val();
        var value_heels = $("#nama_heels").val();
        var value_worker = parseFloat(document.getElementsByName("biaya_pegawai")[0].value);
        //var value_worker = $("#biaya_pegawai").val();
        //alert(value_worker);

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


        var tot_harga = 0 + (size_mdl * (harga_upper + harga_lining)) + harga_construction + harga_outsole + harga_weltcolour + harga_edgecolour + harga_weltstite + harga_heels + value_worker;
        //alert(value_worker);
        if (isNaN(tot_harga)) {
            document.getElementsByName("harga")[0].value = 0;
        } else {
            document.getElementsByName("harga")[0].value = tot_harga;

        }

    }
</script>