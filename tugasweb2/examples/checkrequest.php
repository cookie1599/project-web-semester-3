<?php

    require_once "class_overtime.php";

    $obj_seminar = new overtime();
    // tangkap request id
    $_id = $_GET['nip'];


    if($_GET['nip'] && $_GET['id']=='terima') {
      $data2[]='1';
      $data2[]=$_GET['nip'];
      $obj_seminar->update2($data2);
    }
    else if($_GET['nip'] && $_GET['id']=='tolak') {
        $data2[]='2';
        $data2[]=$_GET['nip'];
        $obj_seminar->update2($data2);
    }

    $data = $obj_seminar->getALL();






?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Blk• Design System by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="register-page">
  <!-- Navbar -->
  <?php include_once 'top.php'; ?>



          <div class="container d-flex justify-content-center" style="margin-top:10%">
          <!-- contoh register   -->
          <h1 class="display-2"> Check Request Lembur </h1>

        </div>
        <div class="container d-flex justify-content-center" >
        <!-- contoh register   -->


      </div>


      <div class="container mt-5">
	<div class="row">
		<div class="col-md-12">
			<table class="table text-center">
				<thead>
					<tr>
						<th>
							NIP
						</th>
            <th>
							Nama
						</th>
            <th>
							Divisi
						</th>
            <th>
							Manager
						</th>
						<th>
							Tanggal Mulai
						</th>
						<th>
							Tanggal Akhir
						</th>
            <th>
							Jam Mulai
						</th>
						<th>
							Jam Akhir
						</th>
						<th>
							Keterangan
						</th>
						<th>
							Status
						</th>
            <th>
              Action
            </th>


					</tr>
				</thead>
				<tbody>
          <?php

              foreach($data as $row){ //buka
          ?>
              <tr>

                  <td><?=$row['nip'];?></td>
                  <td><?=$row['nama'];?></td>
                  <td><?=$row['divisi'];?></td>
                  <td><?=$row['manager'];?></td>
                  <td><?=$row['tanggal_mulai'];?></td>
                  <td><?=$row['tanggal_akhir'];?></td>
                  <td><?=$row['jam_mulai'];?></td>
                  <td><?=$row['jam_akhir'];?></td>
                  <td><?=$row['keterangan'];?></td>
                  <?php if($row['status']==0){ ?>
                  <td>
                  <a href="checkrequest.php?id=terima&nip=<?php echo $row['nip'] ?>"> Terima </a>
                  |
                  <a href="checkrequest.php?id=tolak&nip=<?php echo $row['nip'] ?>"> Tolak </a>

                  </td>
                <?php  }
                else {?>
                <td><?=$row['status'];?></td>
              <?php } ?>
                  <td>
                      <a href="cv.php?id=<?=$_id?>"><i class="fa fa-eye"></i></a>
                      <a href="del_overtime.php?id=<?=$_id?>"><i class="fa fa-trash"></i></a>
                      <a href="pengajuanlembur.php?id=<?=$_id?>"><i class="far fa-edit"></i></a>
                  </td>
              </tr>

            <?php } ?>

				</tbody>
			</table>
		</div>
	</div>
</div>





  <?php include_once 'bottom.php'; ?>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>
</body>

</html>
