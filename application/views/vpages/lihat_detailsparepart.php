    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Lihat Spare Part -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Detail</h3>
                        </div>
                        <div class="card-body">
                            <div class="card border-0">
                                <div class="row no-gutters">
                                    <div class="col-md-12">
                                        <div class="col-md-3">
                                            <img src="<?= base_url(); ?>assets/img/part/sp1.jpg" width="250px" class="img-fluid" alt="...">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <?php
                                                foreach ($detailsparepart as $part) : ?>
                                                    <h3 class="card-title text-primary text-bold mb-2"><?php echo $part['nm_part']; ?></h3>
                                                    <p class="card-text">Kode Sparepart : <?php echo $part['id_part']; ?></p>
                                                    <p class="card-text">Deskripsi : <?php echo $part['deskripsi']; ?></p>
                                                    <p class="card-text">Stok : <?php echo $part['stok']; ?></p>
                                                    <p class="card-text"><small class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore neque dolore itaque commodi vitae animi, quasi at ipsa assumenda. Qui consectetur quam aliquam fugiat ducimus cupiditate ullam a dicta ipsum.</small></p>
                                                <?php endforeach; ?>
                                                <h5 class="card-title">Special title treatment</h5>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <form action="admin.php?page=edit_spare_part" method="post">
                                                    <input type="text" value="<?php echo $part['id_part'] ?>" name="id_part" class="d-none">
                                                    <input type="submit" value="Edit Stok" class="btn-info">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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