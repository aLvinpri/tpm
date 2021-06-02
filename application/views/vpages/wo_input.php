    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Semua Kolom Wajib di isi !!!</h3>
                        </div>
                        <div class="card-body p-0">
                            <form method="post" action="">
                                <div class="bs-stepper">
                                    <div class="bs-stepper-header" role="tablist">
                                        <!-- your steps here -->
                                        <div class="step" data-target="#step-1">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="step-1" id="step-1-trigger">
                                                <span class="bs-stepper-circle">1</span>
                                                <span class="bs-stepper-label">Data Mesin</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#step-2">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="step-2" id="step-2-trigger">
                                                <span class="bs-stepper-circle">2</span>
                                                <span class="bs-stepper-label">Data PIC</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#step-3">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="step-3" id="step-3-trigger">
                                                <span class="bs-stepper-circle">3</span>
                                                <span class="bs-stepper-label">Progress</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="bs-stepper-content">
                                        <!-- your steps content here -->
                                        <div id="step-1" class="content" role="tabpanel" aria-labelledby="step-1-trigger">
                                            <div class="container-fluid">
                                                <div class="form-group" style="width: 40%;">
                                                    <label>Pilih Mesin</label>
                                                    <select name="idmesin" class="form-control select2bs4">
                                                        <?php if ($idmesin == '') {
                                                            echo '<option value="" selected="selected">- Pilih -</option>';
                                                        } else {
                                                            echo '<option value="' . $idmesin . '">' . $idmesin . '</option>';
                                                        } ?>
                                                        <?php foreach ($pilihmesin as $mesin) : ?>
                                                            <option value="<?php echo $mesin['id_mesin']; ?>"><?php echo $mesin['id_mesin'] . ' - ' . $mesin['nm_mesin'] . ' - ' . $mesin['no_urut'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <small class="form-text text-danger"><?php echo form_error('idmesin'); ?></small>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nomer Wo Produksi</label>
                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <select class="form-control select2bs4" name="txtbag" id="txtbag">
                                                                <?php if ($txtbag == '') {
                                                                    echo '<option value="" selected="selected">- Pilih -</option>';
                                                                } else {
                                                                    echo '<option value="' . $txtbag . '">' . $txtbag . '</option>';
                                                                } ?>
                                                                <option value="BGP">BGP</option>
                                                                <option value="JIG">JIG</option>
                                                                <option value="CAS">CAS</option>
                                                                <option value="FIR">FIR</option>
                                                                <option value="PAD">PAD</option>
                                                                <option value="MLD">MLD</option>
                                                                <option value="GLZ">GLZ</option>
                                                                <option value="RND">RND</option>
                                                                <option value="DEC">DEC</option>
                                                                <option value="BOX">BOX</option>
                                                                <option value="DCL">WSH</option>
                                                                <option value="UTI">UTI</option>
                                                                <option value="WSH">WSH</option>
                                                                <option value="GLZ">GLZ</option>
                                                                <option value="DCL">DCL</option>
                                                                <option value="OFF">OFF</option>
                                                            </select>
                                                            <small class="form-text text-danger"><?php echo form_error('txtbag'); ?></small>
                                                        </div>
                                                        <div class="col-sm">
                                                            <div class="form-group">
                                                                <select class="form-control select2bs4" name="txtlok" id="txtlok">
                                                                    <?php if ($txtlok == '') {
                                                                        echo '<option value="" selected="selected">- Pilih -</option>';
                                                                    } else {
                                                                        echo '<option value="' . $txtlok . '">' . $txtlok . '</option>';
                                                                    } ?>
                                                                    <option value="I">PABRIK 1</option>
                                                                    <option value="II">PABRIK 2</option>
                                                                    <option value="III">PABRIK 3</option>
                                                                </select>
                                                                <small class="form-text text-danger"><?php echo form_error('txtlok'); ?></small>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="no" name="no" placeholder="Masukkan Nomer cth: BGP/1/1" value="<?= $no; ?>">
                                                                <small class="form-text text-danger"><?php echo form_error('no'); ?></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Date and time -->
                                                <div class="form-group" style="width:40%;">
                                                    <label>Tanggal dan Waktu</label>
                                                    <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                                        <input type="text" name="tgl_input" class="form-control datetimepicker-input" data-target="#reservationdatetime" placeholder="Klik ikon disamping..." value="<?php echo $tgl_input; ?>" />
                                                        <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                    <small class="form-text text-danger"><?php echo form_error('tgl_input'); ?></small>
                                                </div>
                                                <button type="button" class="btn btn-primary" onclick="stepper.next()">Next</button>
                                                <!-- Container-Fluid -->
                                            </div>
                                        </div>
                                        <div id="step-2" class="content" role="tabpanel" aria-labelledby="step-2-trigger">
                                            <!-- /.form group -->
                                            <div class="container-fluid">
                                                <div class="form-group" style="width:40%;">
                                                    <label for="txtdibuat">Dibuat Oleh</label>
                                                    <input type="text" class="form-control" name="txtdibuat" id="txtdibuat" placeholder="Masukan Nama Pembuat WO..." value="<?php echo $txtdibuat; ?>" />
                                                    <small class="form-text text-danger"><?php echo form_error('txtdibuat'); ?></small>
                                                </div>
                                                <div class="form-group">
                                                    <label>Jenis Pekerjaan</label>
                                                </div>
                                                <!-- radio -->
                                                <div class="form-group clearfix">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <div class="icheck-success d-inline">
                                                                <input type="radio" name="txtjenis_pekerjaan" value="PERBAIKAN" id="txtjenis_pekerjaan1" <?php if ($txtjenis_pekerjaan == '' | $txtjenis_pekerjaan == 'PERBAIKAN') {
                                                                                                                                                                echo 'checked';
                                                                                                                                                            } ?> />
                                                                <label for="txtjenis_pekerjaan1">Perbaikan
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="icheck-success d-inline">
                                                                <input type="radio" name="txtjenis_pekerjaan" value="PERAWATAN" id="txtjenis_pekerjaan2" <?php if ($txtjenis_pekerjaan == 'PERAWATAN') {
                                                                                                                                                                echo 'checked';
                                                                                                                                                            } ?> />
                                                                <label for="txtjenis_pekerjaan2">Perawatan
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="icheck-success d-inline">
                                                                <input type="radio" name="txtjenis_pekerjaan" value="PEMBUATAN" id="txtjenis_pekerjaan3" <?php if ($txtjenis_pekerjaan == 'PEMBUATAN') {
                                                                                                                                                                echo 'checked';
                                                                                                                                                            } ?> />
                                                                <label for="txtjenis_pekerjaan3">Pembuatan
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group" style="width:40%;">
                                                    <label for="status">Status Mesin</label>
                                                    <select class="form-control select2bs4" name="status" id="status">
                                                        <?php if ($status == '') {
                                                            echo '<option value="" selected="selected">- Pilih -</option>';
                                                        } else {
                                                            echo '<option value="' . $status . '">' . $status . '</option>';
                                                        } ?>
                                                        <option value="Running">Running</option>
                                                        <option value="Off">Off</option>
                                                    </select>
                                                    <small class="form-text text-danger"><?php echo form_error('status'); ?></small>
                                                </div>
                                                <div class="form-group" style="width: 40%;">
                                                    <label>Diterima Oleh Maintenance</label>
                                                    <select class="form-control select2bs4" name="rd_diterima">
                                                        <?php if ($rd_diterima == '') {
                                                            echo '<option value="" selected="selected">- Pilih -</option>';
                                                        } else {
                                                            echo '<option value="' . $rd_diterima . '">' . $rd_diterima . '</option>';
                                                        } ?>
                                                        <?php foreach ($pilihmaintenance as $mtc) : ?>
                                                            <option value="<?php echo $mtc['nama']; ?>"><?php echo $mtc['nama']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <small class="form-text text-danger"><?php echo form_error('rd_diterima'); ?></small>
                                                </div>
                                                <div class="form-group" style="width: 40%;">
                                                    <label>Pelaksana </label>
                                                    <select class="form-control select2bs4" name="txtpelaksana">
                                                        <?php if ($txtpelaksana == '') {
                                                            echo '<option value="" selected="selected">- Pilih -</option>';
                                                        } else {
                                                            echo '<option value="' . $txtpelaksana . '">' . $txtpelaksana . '</option>';
                                                        } ?>
                                                        <?php foreach ($pilihmaintenance as $mtc) : ?>
                                                            <option value="<?php echo $mtc['nama']; ?>"><?php echo $mtc['nama']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <small class="form-text text-danger"><?php echo form_error('txtpelaksana'); ?></small>
                                                </div>
                                                <button type="button" class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                                <button type="button" class="btn btn-primary" onclick="stepper.next()">Next</button>
                                            </div>
                                        </div>
                                        <div id="step-3" class="content" role="tabpanel" aria-labelledby="step-3-trigger">
                                            <div class="container-fluid">
                                                <div class="form-group" style="width: 40%">
                                                    <label>Permasalahan Mesin</label>
                                                    <textarea name="txtpermasalahan" cols="40" rows="4" class="form-control" rows="3" placeholder="Masukkan Permasalahan Mesin..."><?php echo $txtpermasalahan; ?></textarea>
                                                    <small class="form-text text-danger"><?php echo form_error('txtpermasalahan'); ?></small>
                                                </div>
                                                <div class="form-group" style="width: 40%">
                                                    <label>Penyebab Kerusakan</label>
                                                    <textarea name="txtpenyebab" cols="40" rows="4" class="form-control" rows="3" placeholder="Masukkan Permasalahan Mesin..."><?php echo $txtpenyebab; ?></textarea>
                                                    <small class="form-text text-danger"><?php echo form_error('txtpenyebab'); ?></small>
                                                </div>
                                                <div class="form-group" style="width: 40%">
                                                    <label>Tindakan</label>
                                                    <textarea name="txttindakan" cols="40" rows="4" class="form-control" rows="3" placeholder="Masukkan Permasalahan Mesin..."><?php echo $txttindakan; ?></textarea>
                                                    <small class="form-text text-danger"><?php echo form_error('txttindakan'); ?></small>
                                                </div>
                                                <!-- Date and time -->
                                                <div class="form-group" style="width:40%;">
                                                    <label>Tanggal dan Waktu Dikerjakan</label>
                                                    <div class="input-group date" id="reservationdatetime2" data-target-input="nearest">
                                                        <input type="text" name="tgl_dikerjakan" class="form-control datetimepicker-input" data-target="#reservationdatetime2" placeholder="Klik ikon disamping..." value="<?php echo $tgl_dikerjakan; ?>" />
                                                        <div class="input-group-append" data-target="#reservationdatetime2" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                    <small class="form-text text-danger"><?php echo form_error('tgl_dikerjakan'); ?></small>
                                                </div>
                                                <div class="form-group" style="width: 40%;">
                                                    <label>Diserahkan Oleh (Bagian Maintenance)</label>
                                                    <select class="form-control select2bs4" name="txtdiserahkan">
                                                        <?php if ($txtdiserahkan == '') {
                                                            echo '<option value="" selected="selected">- Pilih -</option>';
                                                        } else {
                                                            echo '<option value="' . $txtdiserahkan . '">' . $txtdiserahkan . '</option>';
                                                        } ?>
                                                        <?php foreach ($pilihmaintenance as $mtc) : ?>
                                                            <option value="<?php echo $mtc['nama']; ?>"><?php echo $mtc['nama']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <small class="form-text text-danger"><?php echo form_error('txtdiserahkan'); ?></small>
                                                </div>
                                                <!-- Date and time -->
                                                <div class="form-group" style="width:40%;">
                                                    <label>Tanggal dan Waktu Diserahkan</label>
                                                    <div class="input-group date" id="reservationdatetime3" data-target-input="nearest">
                                                        <input type="text" name="tgl_diserahkan" class="form-control datetimepicker-input" data-target="#reservationdatetime3" placeholder="Klik ikon disamping..." value="<?php echo $tgl_diserahkan; ?>" />
                                                        <div class="input-group-append" data-target="#reservationdatetime3" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                    <small class="form-text text-danger"><?php echo form_error('tgl_diserahkan'); ?></small>
                                                </div>
                                                <div class="form-group">
                                                    <label>Loss Time</label>
                                                </div>
                                                <!-- radio -->
                                                <div class="form-group clearfix">
                                                    <div class="row">
                                                        <div class="col-1">
                                                            <div class="icheck-success d-inline">
                                                                <input type="radio" name="txtlosstime" value="1" id="txtlosstime1" <?php if ($txtlosstime == '' | $txtlosstime == '1') {
                                                                                                                                        echo 'checked';
                                                                                                                                    } ?> />
                                                                <label for="txtlosstime1">Ya
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-1">
                                                            <div class="icheck-success d-inline">
                                                                <input type="radio" name="txtlosstime" value="2" id="txtlosstime2" <?php if ($txtlosstime == '2') {
                                                                                                                                        echo 'checked';
                                                                                                                                    } ?> />
                                                                <label for="txtlosstime2">Tidak
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group" style="width:40%;">
                                                    <label for="txtditerima">Diterima Oleh (Bagian Produksi)</label>
                                                    <input type="text" class="form-control" name="txtditerima" id="txtditerima" placeholder="Masukan Nama Penerima..." value="<?php echo $txtditerima; ?>" />
                                                    <small class="form-text text-danger"><?php echo form_error('txtditerima'); ?></small>
                                                </div>
                                                <button type="button" class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- Container Fluid -->
        </div>
        <!-- Section -->
    </section>