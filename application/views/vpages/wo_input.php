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
                                            <span class="bs-stepper-label">Step 3</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="bs-stepper-content">
                                    <!-- your steps content here -->
                                    <div id="step-1" class="content" role="tabpanel" aria-labelledby="step-1-trigger">
                                        <div class="form-group">
                                            <label>Pilih Mesin</label>
                                            <select class="form-control select2bs4" style="width: 50%;">
                                                <?php foreach ($pilihmesin as $mesin) : ?>
                                                    <option><?php echo $mesin['id_mesin'] . ' - ' . $mesin['nm_mesin'] . ' - ' . $mesin['no_urut'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                                    </div>
                                    <div id="step-2" class="content" role="tabpanel" aria-labelledby="step-2-trigger">
                                        <div class="form-group">
                                            <label for="exampleInputFile">File input</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                        <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                                    </div>
                                    <div id="step-3" class="content" role="tabpanel" aria-labelledby="step-3-trigger">
                                        <div class="form-group">
                                            <label>Pilih Mesin</label>
                                            <select class="form-control select2bs4" style="width: 50%;">
                                                <option selected="selected">Alabama</option>
                                                <option>Alaska</option>
                                                <option>California</option>
                                                <option>Delaware</option>
                                                <option>Tennessee</option>
                                                <option>Texas</option>
                                                <option>Washington</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- Container Fluid -->
        </div>
        <!-- Section -->
    </section>