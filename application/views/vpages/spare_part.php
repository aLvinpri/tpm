<?php
include "connect.php";
require_once('phpqrcode/qrlib.php');
header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate'); //clear cache chrome
?>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="style/css/bootstrap.min.css"></style>
  <title>DATA SPARE PART  PT. HSI</title>
</head>

<body>
  <div class="container-md">
    <div class="card mt-3">
      <h5 class="card-header bg-info text-white">List Spare Part</h5>
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
                    <?php
                    $no = 1;
                    $query= mysql_query("SELECT * FROM part ORDER BY id_part ASC");
                    while($hasil = mysql_fetch_array($query)){
                      $id_part  = $hasil['id_part'];
                      $nm_part = stripslashes (strip_tags($hasil['nm_part']));
                      $deskripsi = stripslashes ($hasil['deskripsi']);
                      $stok = stripslashes ($hasil['stok']);
                      //QR Code
                      $tempDir = "pdfqrcodes/";
                      $codeContents = 'ID= '.
                      $id_part. PHP_EOL . PHP_EOL .
                      'Sparepart= '.$nm_part. PHP_EOL . PHP_EOL .
                      'URL= http://tpm-dummy.pthsi.co.id/spare_part_detail.php?id='. $id_part . PHP_EOL . PHP_EOL .
                      'Deskripsi= '.($deskripsi). PHP_EOL . PHP_EOL .
                      'Stok= '.$stok;
                      $fileName = $id_part . '.png';
                      $pngAbsoluteFilePath = $tempDir.$fileName;
                      $urlRelativeFilePath = $tempDir.$fileName;
                      if (!file_exists($pngAbsoluteFilePath)) {
                        QRcode::png($codeContents, $pngAbsoluteFilePath, QR_ECLEVEL_L, 5);
                      }
                      ?>
                      <tbody>
                        <tr>
                          <th scope="row"><?php echo $no ?></th>
                          <td><?php echo $id_part ?></td>
                          <td><?php echo $nm_part ?></td>
                          <td><?php echo $stok ?></td>
                          <td><?php echo $deskripsi ?></td>
                          <td>
                            <div class="row mx-auto w-50">
                              <div class="col border border-secondary px-0 bg-white">
                                <!-- logo qrcode -->
                                <img src='images/logo-barcode.png' class="img-fluid mt-1">
                                <div class="row mx-auto">
                                  <div class="col">
                                    <center>
                                      <img src='pdfqrcodes/<?php echo $id_part ?>.png' class="img-fluid">
                                    </center>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </td>
                          <form action="" method="post">
                          <td><a href="spare_part_detail.php?id=<?php echo $id_part?>">detail</a></td>
                          </form>
                        </tr>
                      </tbody>
                      <?php $no++; } ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="row mx-auto">
            <div class="col-md-4 col-lg-3 col-sm-6">
              <!-- logo HSI
              <img src="images/part/sp1.jpg" width="250px" class="img-fluid" alt="...">
            </div>
            <div class="col-8 col-md-4 col-lg-3 col-sm-6 mt-3 mt-lg-0">
              <div class="row mx-auto">
                <div class="col border rounded">
                  <!-- logo qrcode
                  <img src='images/logo-barcode.png' class="img-fluid mt-1">
                  <div class="row mx-auto">
                    <div class="col">
                      <center>
                        <img src='pdfqrcodes/<?php echo $id_part ?>.png' class="img-fluid w-100">
                      </center>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-lg-6 col-sm-12 mt-3 mt-lg-0">
              2 of 2
          </div>
          </div> -->
        </div>
      </div>
    </div>
    <source src="style/js/jquery-3.6.0.slim.min.js" type="">
      <source src="style/js/bootstrap.bundle.min.js" type="">
      </body>
      </html>
