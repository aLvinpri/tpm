    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <!-- iCheck -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Semua Kolom Wajib di isi !!! </h3>
                        </div>
                        <div class="card-body">
                            <form method="post" action="">
                                <!-- row -->
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group" style="width:70%;">
                                            <label>Pilih No WO</label>
                                            <select name="id_no" class="form-control select2bs4">
                                                <?php if ($id_no == '') {
                                                    echo '<option value="" selected="selected">- Pilih -</option>';
                                                } else {
                                                    echo '<option value="' . $id_no . '">' . $id_no . '</option>';
                                                } ?>
                                                <?php foreach ($pilihwo as $wo) : ?>
                                                    <option value="<?php echo $wo['id_no']; ?>"><?php echo $wo['id_no']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <small class="form-text text-danger"><?php echo form_error('id_no'); ?></small>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- Date -->
                                        <div class="form-group" style="width:70%;">
                                            <label>Tanggal Date</label>
                                            <div class="input-group date" id="reservationdatetime4" data-target-input="nearest">
                                                <input type="text" name="tgl_input" class="form-control datetimepicker-input" data-target="#reservationdatetime4" placeholder="Klik ikon disamping..." value="<?php echo $tgl_input; ?>" />
                                                <div class="input-group-append" data-target="#reservationdatetime4" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                            <small class="form-text text-danger"><?php echo form_error('tgl_input'); ?></small>
                                        </div>
                                    </div>
                                </div>
                                <!-- row -->
                                <div class="row">
                                    <div class="col-sm-5">
                                        <!-- Date -->
                                        <div class="form-group" style="width:70%;">
                                            <label>Jam Mulai</label>
                                            <div class="input-group date" id="reservationdatetime5" data-target-input="nearest">
                                                <input type="text" name="tgl_input" class="form-control datetimepicker-input" data-target="#reservationdatetime5" placeholder="Klik ikon disamping..." value="<?php echo $tgl_input; ?>" />
                                                <div class="input-group-append" data-target="#reservationdatetime5" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                            <small class="form-text text-danger"><?php echo form_error('tgl_input'); ?></small>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- Date -->
                                        <div class="form-group" style="width:70%;">
                                            <label>Jam Selesai</label>
                                            <div class="input-group date" id="reservationdatetime6" data-target-input="nearest">
                                                <input type="text" name="tgl_input" class="form-control datetimepicker-input" data-target="#reservationdatetime6" placeholder="Klik ikon disamping..." value="<?php echo $tgl_input; ?>" />
                                                <div class="input-group-append" data-target="#reservationdatetime6" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                            <small class="form-text text-danger"><?php echo form_error('tgl_input'); ?></small>
                                        </div>
                                    </div>
                                </div>
                                <!-- row -->
                                <div class="row">
                                    <div class="col-sm-5">
                                        <!-- Date -->
                                        <div class="form-group" style="width:70%;">
                                            <label>Jam Mulai Istirahat</label>
                                            <div class="input-group date" id="reservationdatetime7" data-target-input="nearest">
                                                <input type="text" name="tgl_input" class="form-control datetimepicker-input" data-target="#reservationdatetime7" placeholder="Klik ikon disamping..." value="<?php echo $tgl_input; ?>" />
                                                <div class="input-group-append" data-target="#reservationdatetime7" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                            <small class="form-text text-danger"><?php echo form_error('tgl_input'); ?></small>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- Date -->
                                        <div class="form-group" style="width:70%;">
                                            <label>Jam Selesai Istirahat</label>
                                            <div class="input-group date" id="reservationdatetime8" data-target-input="nearest">
                                                <input type="text" name="tgl_input" class="form-control datetimepicker-input" data-target="#reservationdatetime8" placeholder="Klik ikon disamping..." value="<?php echo $tgl_input; ?>" />
                                                <div class="input-group-append" data-target="#reservationdatetime8" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                            <small class="form-text text-danger"><?php echo form_error('tgl_input'); ?></small>
                                        </div>
                                    </div>
                                </div>
                                <!-- row -->
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group" style="width:70%">
                                            <label>Tindakan</label>
                                            <textarea name="txtpermasalahan" cols="100" rows="4" class="form-control" rows="3" placeholder="Masukkan Permasalahan Mesin..."><?php echo $txtpermasalahan; ?></textarea>
                                            <small class="form-text text-danger"><?php echo form_error('txtpermasalahan'); ?></small>
                                        </div>
                                    </div>
                                </div>
                                <!-- row -->
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group" style="width:70%">
                                            <label>keterangan</label>
                                            <textarea name="txtpermasalahan" cols="100" rows="4" class="form-control" rows="3" placeholder="Masukkan Permasalahan Mesin..."><?php echo $txtpermasalahan; ?></textarea>
                                            <small class="form-text text-danger"><?php echo form_error('txtpermasalahan'); ?></small>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- section -->
    </section>