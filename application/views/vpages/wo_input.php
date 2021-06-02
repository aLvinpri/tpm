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
                            <form method="post" action="<?php echo base_url(); ?>workorder/add">
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
                                                    <select class="form-control select2bs4">
                                                        <?php foreach ($pilihmesin as $mesin) : ?>
                                                            <option value="<?php echo $mesin['id_mesin']; ?>"><?php echo $mesin['id_mesin'] . ' - ' . $mesin['nm_mesin'] . ' - ' . $mesin['no_urut'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nomer Wo Produksi</label>
                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <select class="form-control select2bs4" name="txtbag" id="txtbag">
                                                                <option value="BGP" selected="selected">BGP</option>
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
                                                        </div>
                                                        <div class="col-sm">
                                                            <div class="form-group">
                                                                <select class="form-control select2bs4" name="txtlok" id="txtlok">
                                                                    <option value="I" selected="selected">PABRIK 1</option>
                                                                    <option value="II">PABRIK 2</option>
                                                                    <option value="III">PABRIK 3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="no" name="no" placeholder="Masukkan Nomer cth: BGP/1/1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Date and time -->
                                                <div class="form-group" style="width:40%;">
                                                    <label>Tanggal dan Waktu</label>
                                                    <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                                        <input type="text" name="tgl_a" class="form-control datetimepicker-input" data-target="#reservationdatetime" placeholder="Klik ikon disamping..." />
                                                        <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
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
                                                    <input type="text" class="form-control" id="txtdibuat" placeholder="Masukan Nama Pembuat WO...">
                                                </div>
                                                <div class="form-group">
                                                    <label>Jenis Pekerjaan</label>
                                                </div>
                                                <!-- radio -->
                                                <div class="form-group clearfix">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <div class="icheck-primary d-inline">
                                                                <input type="radio" name="txtjenis_pekerjaan" value="PERBAIKAN" id="txtjenis_pekerjaan1" checked>
                                                                <label for="txtjenis_pekerjaan1">Perbaikan
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="icheck-primary d-inline">
                                                                <input type="radio" name="txtjenis_pekerjaan" value="PERAWATAN" id="txtjenis_pekerjaan2">
                                                                <label for="txtjenis_pekerjaan2">Perawatan
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="icheck-primary d-inline">
                                                                <input type="radio" name="txtjenis_pekerjaan" value="PEMBUATAN" id="txtjenis_pekerjaan3">
                                                                <label for="txtjenis_pekerjaan3">Pembuatan
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group" style="width:40%;">
                                                    <label for="status">Status Mesin</label>
                                                    <select class="form-control select2bs4" name="status" id="status">
                                                        <option value="Running" selected="selected">Running</option>
                                                        <option value="Off">Off</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" style="width: 40%;">
                                                    <label>Diterima Oleh Maintenance</label>
                                                    <select class="form-control select2bs4" name="txtditerima">
                                                        <?php foreach ($pilihmaintenance as $mtc) : ?>
                                                            <option value="<?php echo $mtc['nama']; ?>"><?php echo $mtc['nama']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group" style="width: 40%;">
                                                    <label>Pelaksana </label>
                                                    <select class="form-control select2bs4" name="txtpelaksana">
                                                        <?php foreach ($pilihmaintenance as $mtc) : ?>
                                                            <option value="<?php echo $mtc['nama']; ?>"><?php echo $mtc['nama']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <button type="button" class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                                <button type="button" class="btn btn-primary" onclick="stepper.next()">Next</button>
                                            </div>
                                        </div>
                                        <div id="step-3" class="content" role="tabpanel" aria-labelledby="step-3-trigger">
                                            <div class="container-fluid">
                                                <div class="form-group" style="width: 40%">
                                                    <label>Permasalahan Mesin</label>
                                                    <textarea name="txtproblem" cols="40" rows="4" class="form-control" rows="3" placeholder="Masukkan Permasalahan Mesin..."></textarea>
                                                </div>
                                                <div class="form-group" style="width: 40%">
                                                    <label>Penyebab Kerusakan</label>
                                                    <textarea name="txtpenyebab" cols="40" rows="4" class="form-control" rows="3" placeholder="Masukkan Permasalahan Mesin..."></textarea>
                                                </div>
                                                <div class="form-group" style="width: 40%">
                                                    <label>Tindakan</label>
                                                    <textarea name="txttindakan" cols="40" rows="4" class="form-control" rows="3" placeholder="Masukkan Permasalahan Mesin..."></textarea>
                                                </div>
                                                <!-- Date and time -->
                                                <div class="form-group" style="width:40%;">
                                                    <label>Tanggal dan Waktu Dikerjakan</label>
                                                    <div class="input-group date" id="reservationdatetime2" data-target-input="nearest">
                                                        <input type="text" name="tgl_selesai" class="form-control datetimepicker-input" data-target="#reservationdatetime2" placeholder="Klik ikon disamping..." />
                                                        <div class="input-group-append" data-target="#reservationdatetime2" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group" style="width: 40%;">
                                                    <label>Diserahkan Oleh (Bagian Maintenance)</label>
                                                    <select class="form-control select2bs4" name="txtdiserahkan">
                                                        <?php foreach ($pilihmaintenance as $mtc) : ?>
                                                            <option value="<?php echo $mtc['nama']; ?>"><?php echo $mtc['nama']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <!-- Date and time -->
                                                <div class="form-group" style="width:40%;">
                                                    <label>Tanggal dan Waktu Diserahkan</label>
                                                    <div class="input-group date" id="reservationdatetime3" data-target-input="nearest">
                                                        <input type="text" name="tgl_diserahkan" class="form-control datetimepicker-input" data-target="#reservationdatetime3" placeholder="Klik ikon disamping..." />
                                                        <div class="input-group-append" data-target="#reservationdatetime3" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Loss Time</label>
                                                </div>
                                                <!-- radio -->
                                                <div class="form-group clearfix">
                                                    <div class="row">
                                                        <div class="col-1">
                                                            <div class="icheck-primary d-inline">
                                                                <input type="radio" name="txtlosstime" value="1" id="txtlosstime1" checked>
                                                                <label for="txtlosstime1">Ya
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-1">
                                                            <div class="icheck-primary d-inline">
                                                                <input type="radio" name="txtlosstime" value="2" id="txtlosstime2">
                                                                <label for="txtlosstime2">Tidak
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group" style="width:40%;">
                                                    <label for="txtditerima">Diterima Oleh (Bagian Produksi)</label>
                                                    <input type="text" class="form-control" id="txtditerima" placeholder="Masukan Nama Penerima...">
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