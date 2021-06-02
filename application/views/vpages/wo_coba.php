<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>INPUT WORKORDER (WO)</title>
  <script type="text/JavaScript">
    <!--
function MM_displayStatusMsg(msgStr) { //v1.0
  status=msgStr;
  document.MM_returnValue = true;
}
//-->
  </script>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link href="file:///Z|/maintenance/style.css" rel="stylesheet" type="text/css" />
</head>
<script language="javascript">
  function buka_tgl(s_url) {
    s_param = "width=300,height=300,scrollbars=1,resizable=1";
    new_window = window.open(s_url, "tgl", s_param);
    new_window.focus();
  }
</script>

<body>
  <form id="tgl_coba" name="tgl_coba" method="post" action="">
    <table width="1106" height="944" border="0" align="center">
      <tr>
        <th width="1100" height="940" scope="col">
          <table width="1091" border="0" align="center">
            <tr>
              <td colspan="7"> </td>
            </tr>
            <tr>
              <td colspan="7">
                <div align="left"><strong>INPUT WO (WORK ORDER ) </strong></div>
              </td>
            </tr>
            <tr>
              <td colspan="7">
                <div align="center">
                  <p align="center">
                    <?php
                    //edit 25-11-2019
                    include "connect.php";
                    $cmd1 = "SELECT nik,nama from kar";
                    $query1 = mysql_query($cmd1, $connection);

                    $teststr = "SELECT MAX(id_no)AS maksi FROM maintenance_dummy.doc_wo;";
                    $testquery = mysql_query($teststr);
                    $testresult = mysql_result($testquery, 0);
                    if ($_POST['tgl_a']) { //and txtlok txtbag
                      //($_POST['no'])and($_POST['txtlok'])and($_POST['txtbag'])and ($_POST['txtmesin'])and($_POST['tgl_a'])
                      //and($_POST['txtproblem'])and($_POST['txtpenyebab']) and ($_POST['txttindakan']) /**and ($_POST['tgl_selesai22'])**/
                      //and/**($_POST['jam4'])and($_POST['txtdiserahkan'])and($_POST['tgl_selesai224'])**/
                      ///**and($_POST['jam5'])**//**and($_POST['txtditerima_oleh'])**/($_POST['txtjenis_pekerjaan'])and($_POST['status'])
                      /**and ($_POST['txtid_lostime'])**/

                      //$id_no			  = $_POST['id_no'];
                      $txtno        = $_POST['no'];
                      $lok        = $_POST['txtlok'];
                      $bag        = $_POST['txtbag'];
                      $no        = "$bag/$lok/$txtno";
                      $txtmesin      = $_POST['txtmesin'];
                      $txtid_lostime            = $_POST['txtid_lostime'];
                      $txtdibuat      = $_POST['txtdibuat'];
                      $txtditerima              = $_POST['txtditerima'];
                      $txtpelaksana              = $_POST['txtpelaksana'];
                      $txtproblem      = $_POST['txtproblem'];
                      $txtpenyebab              = $_POST['txtpenyebab'];
                      $txttindakan              = $_POST['txttindakan'];
                      $tgl_a        = $_POST['tgl_a'];
                      $jam1          = $_POST['jam1'];
                      $tgl_selesai22            = $_POST['tgl_selesai22'];
                      $jam4        = $_POST['jam4'];
                      $diserahkan      = $_POST['txtdiserahkan'];
                      $tgl_selesai224           = $_POST['tgl_selesai224'];
                      $jam5        = $_POST['jam5'];
                      $jama        = "$tgl_a $jam1";
                      $jamb        = "$tgl_selesai22 $jam4";
                      $jamc        = "$tgl_selesai224 $jam5";
                      $txtditerima_oleh         = $_POST['txtditerima_oleh'];
                      $jenis_pekerjaan          = $_POST['txtjenis_pekerjaan'];
                      $status                   = $_POST['status'];
                      $bd   = "BELUM DIKERJAKAN-";
                      $kosong   = "-";
                      $teststr = "SELECT MAX(id_no)AS maksi FROM maintenance.doc_wo";
                      $testquery = mysql_query($teststr);
                      $testresult = mysql_result($testquery, 0);
                      $id_nox   = $testresult + 1;


                      if (
                        (isset($tgl_a))

                        //(isset($no))and (isset($txtmesin))and(isset($jama))
                        //and(isset($txtdibuat))and(isset($txtditerima))and(isset($txtproblem))
                        //and (isset($txtpenyebab))and(isset($txttindakan))and(isset($jamb))
                        //and(isset($diserahkan))and(isset($jamc))
                        /**and(isset($txtditerima_oleh))and(isset($jenis_pekerjaan)) and (isset($txtid_lostime))**/
                      ) {
                        //$no_wo= 100001;
                        $cmd = "INSERT INTO doc_wo VALUES        ('$id_no','$no','$txtmesin','$txtid_lostime','$jama','$txtdibuat','$txtditerima','$txtproblem','$txtpenyebab','$txttindakan','$jamb','$diserahkan','$jamc','$jenis_pekerjaan','$status','$txtditerima_oleh','$txtpelaksana')";
                        $cmd2 = "INSERT INTO wo_jam VALUES        ('','$id_nox','$jama','$jama','$jama','$jama','$bd','$kosong')";
                        $cmd3 = "INSERT INTO nik_wo VALUES        ('$id_nox','00000')";
                        $query  = mysql_query($cmd);
                        $query2  = mysql_query($cmd2);
                        $query3  = mysql_query($cmd3);
                        $query4  = mysql_query($cmd4);
                        if ($query && $query2 && $query3 && $query4) {
                          echo "<h2><font color='blue' size='5'><blink>WORK ORDER BERHASIL DI TAMBAHKAN
			<p><div align='center'> NO WORK ORDER: $testresult </div></p></font></blink></h2>";
                        } else {
                          echo "<h2><font color=blue size=3>WORK ORDER SUDAH DI ISI</font></h2>
      <p><div align='center'> NO WORK ORDER: $testresult </div></p></font></blink></h2>";
                        }
                      } else {
                        echo "<h2><font color=blue size=3>DATA KOSONG </font></h2>";
                      }
                    } else {
                      echo "<p><div align='center'> <font color='red' size='5'><blink>ISI SEMUA FORM YANG ADA...!!!!! </blink></p></font>
	<p><div align='center'> <font color='blue'>NO WORK ORDER: $testresult </div></p></font></h2>";
                      echo mysql_error();
                    }
                    ?>
                  </p>
                </div>
              </td>
            </tr>
            <tr>
              <td width="265">
                <div align="left"></div>
              </td>
              <td width="9">&nbsp;</td>
              <td colspan="5">
                <div align="left"></div>
              </td>
            </tr>
            <tr>
              <td>
                <div align="left">Mesin</div>
              </td>
              <td>
                <div align="left">: </div>
              </td>
              <td width="188">
                <div align="left">
                  <select name="txtmesin" id="txtmesin">
                    <option value="">-PILIH-</option>
                    <?php
                    include "connect.php";
                    $cmd6 = "select id_mesin,no_urut,nm_mesin from mesin ORDER BY id_mesin";
                    $query6  = mysql_query($cmd6, $connection);
                    while ($result6 = mysql_fetch_array($query6)) {
                      echo "<option value='$result6[id_mesin]'>$result6[id_mesin] - $result6[nm_mesin]  $result6[no_urut]</option>";
                    }
                    ?>
                  </select>
                </div>
              </td>
            </tr>
            <!-- Row Mesin -->
            <td width="30">
              <div align="left"></div>
            </td>
            <tr>
              <td width="146">
                <div align="left"><strong>No. Wo Produksi</strong></div>
              </td>
              <td width="5">
                <div align="left"><strong>:</strong></div>
              </td>
              <td width="418">
                <div align="left">
                  <select name="txtbag" id="txtbag">
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
                  &nbsp;&nbsp;
                  <select name="txtlok" id="txtlok">
                    <option value="I">PABRIK 1</option>
                    <option value="II">PABRIK 2</option>
                    <option value="III">PABRIK 3</option>
                  </select>
                  &nbsp;&nbsp;
                  <input name="no" size="2" type="text" />
                  &nbsp;ex. BGP/1/1
                </div>
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>
                <div align="left"></div>
              </td>
              <td>
                <div align="left"></div>
              </td>
              <td>
                <div align="left"></div>
              </td>
              <td>
                <div align="left"></div>
              </td>
            </tr>
            <tr>
              <td>
                <div align="left">Tanggal</div>
              </td>
              <td>
                <div align="left">:</div>
              </td>
              <td colspan="5">
                <div align="left">
                  <input type="text" name="tgl_a" size="10" value="" id="tgl_a" />
                  <a href="javascript:buka_tgl('kalender.php?tgl_init='+document.tgl_coba.tgl_a.value+'&amp;balik=tgl_coba.tgl_a&amp;balik_format=yyy-mm-dd')"><img src="tgl.png" border="0" /></a> Jam
                  <input type="text" name="jam1" id="jam1" size="8" />
                  &nbsp;&nbsp;&nbsp;format. 09:20:30
                </div>
                <div align="left"></div>
                <div align="left"></div>
                <div align="left"></div>
                <div align="left"></div>
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>
                <div align="left">Di Buat Oleh Produksi </div>
              </td>
              <td>
                <div align="left"></div>
              </td>
              <td>
                <div align="left">
                  <input name="txtdibuat" type="text" id="txtdibuat" onmouseover="MM_displayStatusMsg('Pihak Bag. Produksi');return document.MM_returnValue" />
                </div>
              </td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td colspan="5">&nbsp;</td>
            </tr>
            <tr>
              <td>
                <div align="left">Jenis Pekerjaaan </div>
              </td>
              <td>:</td>
              <td colspan="5">
                <div align="left">
                  <input type="radio" name="txtjenis_pekerjaan" id="txtjenis_pekerjaan" value="PERBAIKAN">
                  PERBAIKAN

                </div>
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td colspan="3"><input type="radio" name="txtjenis_pekerjaan" id="txtjenis_pekerjaan" value="PERAWATAN" />
                PERAWATAN
              </td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td colspan="3"><input type="radio" name="txtjenis_pekerjaan" id="txtjenis_pekerjaan" value="PEMBUATAN" />
                PEMBUATAN</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>

            <tr>
              <td>
                <div align="left">Status Mesin</div>
              </td>
              <td>
                <div align="left">:</div>
              </td>
              <td>
                <div align="left">
                  <select name="status" id="status">
                    <option value="Running">Running</option>
                    <option value="Off">Off</option>
                  </select>
                </div>
              </td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <tr>
              <td>
                <div align="left">Di Terima Oleh Maintenance </div>
              </td>
              <td>
                <div align="left">:</div>
              </td>
              <td>
                <div align="left">
                  <select name="txtditerima" id="txtditerima" onmouseover="MM_displayStatusMsg('Pihak Bag. Maintenance');return document.MM_returnValue">
                    <option value="">-PILIH-</option>
                    <?php
                    include "connect.php";
                    $cmd3 = "SELECT nik,nama from kar";
                    $query3 = mysql_query($cmd3, $connection);
                    while ($result3 = mysql_fetch_array($query3)) {
                      echo "<option value='$result3[nama]'>$result3[nama]</option>";
                    }
                    ?>
                  </select>
                </div>
              </td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>

            <!--EDIT 25-11-2019-->
            <tr>
              <td>
                <div align="left">Pelaksana</div>
              </td>
              <td>
                <div align="left">:</div>
              </td>
              <td>
                <div align="left">
                  <select name="txtpelaksana" id="txtpelaksana" onmouseover="MM_displayStatusMsg('Pihak Bag. Maintenance');return document.MM_returnValue">
                    <option value="">-PILIH-</option>
                    <?php
                    include "connect.php";
                    $cmd4 = "SELECT nik,nama from kar";
                    $query4 = mysql_query($cmd4, $connection);
                    while ($result4 = mysql_fetch_array($query4)) {
                      echo "<option value='$result4[nama]'>$result4[nama]</option>";
                    }
                    ?>
                  </select>
                </div>
              </td>
              <!--  End -->
              <!--Pelaksana 2-->
              <!-- <td><div align="left"></div></td>
          <td><div align="left"></div></td> -->
              <td>
                <div align="left">
                  <select name="txtpelaksana" id="txtpelaksana" onmouseover="MM_displayStatusMsg('Pihak Bag. Maintenance');return document.MM_returnValue">
                    <option value="">-PILIH-</option>
                    <option value="">UNDER MAINTENANCE</option>
                    <?php
                    //   include "connect.php";
                    //   $cmd4 = "SELECT nik,nama from kar";
                    //   $query4 = mysql_query($cmd4,$connection);
                    // while($result4 = mysql_fetch_array($query4)){
                    // echo "<option value='$result4[nama]'>$result4[nama]</option>";
                    // }
                    ?>
                  </select>
                </div>
              </td>
              <!--  End -->
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <!--Pelaksana 3-->
              <td>
                <div align="left"></div>
              </td>
              <td>
                <div align="left"></div>
              </td>
              <td>
                <div align="left">
                  <select name="txtpelaksana" id="txtpelaksana" onmouseover="MM_displayStatusMsg('Pihak Bag. Maintenance');return document.MM_returnValue">
                    <option value="">-PILIH-</option>
                    <option value="">UNDER MAINTENANCE</option>
                    <?php
                    //   include "connect.php";
                    //   $cmd4 = "SELECT nik,nama from kar";
                    //   $query4 = mysql_query($cmd4,$connection);
                    // while($result4 = mysql_fetch_array($query4)){
                    // echo "<option value='$result4[nama]'>$result4[nama]</option>";
                    // }
                    ?>
                  </select>
                </div>
              </td>
              <!--  End -->
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <!--BATAS END-->
            <tr>
              <td>
                <div align="left">Permasalahan Mesin </div>
              </td>
              <td>
                <div align="left">:</div>
              </td>
              <td colspan="5" rowspan="2"><label>
                  <div align="left">
                    <textarea name="txtproblem" cols="40" rows="4" id="txtproblem" style="background-position:center"></textarea>
                  </div>
                </label></td>
            </tr>
            <tr>
              <td height="53">
                <div align="left"></div>
              </td>
              <td>
                <div align="left"></div>
              </td>
            </tr>
            <tr>
              <td height="21">
                <div align="left">Penyebab Kerusakan </div>
              </td>
              <td>
                <div align="left">:</div>
              </td>
              <td colspan="5" rowspan="2">
                <div align="left">
                  <textarea name="txtpenyebab" cols="40" rows="4" wrap="physical" id="txtpenyebab" style="background-position:center"></textarea>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div align="left"></div>
              </td>
              <td>
                <div align="left"></div>
              </td>
            </tr>
            <tr>
              <td height="21">
                <div align="left">Tindakan</div>
              </td>
              <td>
                <div align="left">:</div>
              </td>
              <td colspan="5" rowspan="2">
                <div align="left">
                  <textarea name="txttindakan" cols="40" rows="4" wrap="physical" id="txttindakan" style="background-position:center"></textarea>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div align="left"></div>
              </td>
              <td>
                <div align="left"></div>
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>
                <div align="left">Tanggal Di Kerjakan </div>
              </td>
              <td>:</td>
              <td>
                <div align="left">
                  <input type="text" name="tgl_selesai22" id="tgl_selesai220" size="10" value="" />
                  <a href="javascript:buka_tgl('kalender1.php?tgl_init='+document.tgl_coba.tgl_selesai22.value+'&amp;balik=tgl_coba.tgl_selesai22&amp;balik_format=yyy-mm-dd')"><img src="tgl.png" border="0" /></a>
                </div>
              </td>
              <td>
                <div align="left">Jam</div>
              </td>
              <td colspan="3">
                <div align="left">
                  <input name="jam4" type="text" id="jam4" size="8" />
                  format. 09:20:30
                </div>
              </td>
            </tr>

            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>
                <div align="left">Di Serahkan Oleh (Bag. Maintenance </div>
              </td>
              <td>
                <div align="left">:</div>
              </td>
              <td>
                <div align="left">
                  <select name="txtdiserahkan" id="txtdiserahkan" onmouseover="MM_displayStatusMsg('Pihak Maintenance (Setelah Selesai Repair)');return document.MM_returnValue">
                    <option value="">-PILIH-</option>
                    <?php
                    include "connect.php";
                    $cmd8 = "SELECT nik,nama from kar";
                    $query8  = mysql_query($cmd8, $connection);
                    while ($result8 = mysql_fetch_array($query8)) {
                      echo "<option value='$result8[nama]'>$result8[nama]</option>";
                    }
                    ?>
                  </select>
                </div>
              </td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>
                <div align="left">Tanggal</div>
              </td>
              <td>:</td>
              <td>
                <div align="left">
                  <input type="text" name="tgl_selesai224" id="tgl_selesai224" size="10" value="" />
                  <a href="javascript:buka_tgl('kalender2.php?tgl_init='+document.tgl_coba.tgl_selesai224.value+'&amp;balik=tgl_coba.tgl_selesai224&amp;balik_format=yyy-mm-dd')"><img src="tgl.png" border="0" /></a>
                </div>
              </td>
              <td>
                <div align="left">Jam</div>
              </td>
              <td colspan="3">
                <div align="left">
                  <input name="jam5" type="text" id="jam5" size="8" />
                  format. 09:20:30
                </div>
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Lost Time</td>
              <td>:</td>
              <td colspan="5"><input type="radio" name="txtid_lostime" id="txtid_lostime" value="1" />
                YA
                <input type="radio" name="txtid_lostime" id="txtid_lostime" value="2" />
                TIDAK
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>
                <div align="left">Di Terima Oleh (Bag. Produksi) </div>
              </td>
              <td>
                <div align="left">:</div>
              </td>
              <td colspan="5">
                <div align="left">
                  <input name="txtditerima_oleh" type="text" id="txtditerima_oleh" onmouseover="MM_displayStatusMsg('Pihak Produksi');return document.MM_returnValue" />
                </div>
              </td>
            </tr>

            <tr>
              <td>
                <div align="left"></div>
              </td>
              <td>
                <div align="left"></div>
              </td>
              <td>
                <div align="left"></div>
              </td>
              <td>
                <div align="left"></div>
              </td>
              <td>
                <div align="left"></div>
              </td>
              <td>
                <div align="left"></div>
              </td>
              <td>
                <div align="left"></div>
              </td>
            </tr>
            <tr>
              <td>
                <div align="left"></div>
              </td>
              <td>
                <div align="left"></div>
              </td>
              <td>
                <div align="left">
                  <input name="Submit" type="submit" value="SIMPAN" />
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
              </td>
              <td>
                <div align="left"></div>
              </td>
              <td>
                <div align="left">
                  <input type="reset" name="Submit2" value="HAPUS" />
                </div>
              </td>
              <td>
                <div align="left"></div>
              </td>
              <td>
                <div align="left"></div>
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
        </th>
      </tr>
    </table>
    <p>&nbsp;</p>
  </form>
</body>

</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Untitled Document</title>
</head>

<body>
</body>

</html>