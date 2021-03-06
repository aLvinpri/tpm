    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Lihat Spare Part -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">List Spare Part</h3>
                        </div>
                        <div class="card-body">
                            <div class="card border-0">
                                <div class="row no-gutters">
                                    <div class="col-md-12">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead class="bg-light  ">
                                                        <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Kode Sparepart</th>
                                                            <th scope="col">Nama Sparepart</th>
                                                            <th scope="col">Stok</th>
                                                            <th scope="col">Deskripsi</th>
                                                            <th scope="col" class="text-center">QR Code</th>
                                                            <th scope="col">Detail</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/qrcode/phpqrcode/qrlib.php';
                                                        $no = 0;
                                                        foreach ($sparepart as $part) :
                                                            $no++;
                                                            $id_part = $part['id_part'];
                                                            $nm_part = $part['nm_part'];
                                                            $stok = $part['stok'];
                                                            $deskripsi = $part['deskripsi'];

                                                            //QR Code
                                                            $tempDir = $_SERVER['DOCUMENT_ROOT'] . "/assets/qrcode/pdfqrcodes/";
                                                            $codeContents = 'ID= ' .
                                                                $id_part . PHP_EOL . PHP_EOL .
                                                                'Sparepart= ' . $nm_part . PHP_EOL . PHP_EOL .
                                                                'URL= http://tpm-dummy.pthsi.co.id/spare_part_detail.php?id=' . $id_part . PHP_EOL . PHP_EOL .
                                                                'Deskripsi= ' . ($deskripsi) . PHP_EOL . PHP_EOL .
                                                                'Stok= ' . $stok;
                                                            $fileName = $id_part . '.png';
                                                            $pngAbsoluteFilePath = $tempDir . $fileName;
                                                            $urlRelativeFilePath = $tempDir . $fileName;
                                                            if (!file_exists($pngAbsoluteFilePath)) {
                                                                QRcode::png($codeContents, $pngAbsoluteFilePath, QR_ECLEVEL_L, 5);
                                                            }
                                                        ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $no; ?></th>
                                                                <td><?php echo $id_part; ?></td>
                                                                <td><?php echo $nm_part; ?></td>
                                                                <td><?php echo $stok; ?></td>
                                                                <td><?php echo $deskripsi; ?></td>
                                                                <td>
                                                                    <div class="row mx-auto w-25">
                                                                        <div class="col border border-secondary px-0 bg-white">
                                                                            <!-- logo qrcode -->
                                                                            <img src='<?= base_url() ?>assets/img/logo-barcode.png' class="img-fluid mt-1">
                                                                            <div class="row mx-auto">
                                                                                <div class="col">
                                                                                    <center>
                                                                                        <img src='<?php echo base_url('assets/qrcode/pdfqrcodes/' . $id_part . '.png') ?>' class="img-fluid">
                                                                                    </center>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <form action="" method="post">
                                                                    <td><a href="<?= base_url('lihatdata/detailsparepart/' . $id_part) ?>">detail</a></td>
                                                                </form>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
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