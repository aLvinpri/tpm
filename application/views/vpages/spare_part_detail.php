<?php
include "connect.php";
header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate'); //clear cache chrome
$no = 1;
$id_part=$_GET["id"];
$query= mysql_query("SELECT * FROM part where id_part = '$id_part'");
while($hasil = mysql_fetch_array($query)){
  $id_part  = $hasil['id_part'];
  $nm_part = stripslashes (strip_tags($hasil['nm_part']));
  $deskripsi = stripslashes ($hasil['deskripsi']);
  $stok = stripslashes ($hasil['stok']);
}
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
      <h5 class="card-header">Detail Spare Part</h5>
      <div class="card-body">
        <div class="card mb-3 border-0 w-75">
          <div class="row no-gutters">
            <div class="col-md-3">
              <img src="images/part/sp1.jpg" width="250px" class="img-fluid" alt="...">
            </div>
            <div class="col-md-9">
              <div class="card-body">
                <h5 class="card-title"><?php echo $nm_part ?></h5>
                <p class="card-text">Kode Sparepart : <?php echo $id_part ?></p>
                <p class="card-text">Deskripsi : <?php echo $deskripsi ?></p>
                <p class="card-text">Stok : <?php echo $stok ?></p>
                <p class="card-text"><small class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore neque dolore itaque commodi vitae animi, quasi at ipsa assumenda. Qui consectetur quam aliquam fugiat ducimus cupiditate ullam a dicta ipsum.</small></p>
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
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <form action="admin.php?page=edit_spare_part" method="post">
          <input type="text" value="<?php echo $id_part ?>" name="id_part" class="d-none">
          <input type="submit" value="Edit Stok" class="btn-info">
          </form>
        </div>
      </div>
    </div>
    <source src="style/js/jquery-3.6.0.slim.min.js" type="">
      <source src="style/js/bootstrap.bundle.min.js" type="">
      </body>
      </html>
