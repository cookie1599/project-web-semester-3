
<?php


    require_once "class_overtime.php";

    $obj_seminar = new overtime();
    // tangkap request id
    $_id = $_GET['id'];

    $data = $obj_seminar->findByID2($_id);





?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

     <title>One Page Resume</title>

     <style type="text/css">
        * { margin: 0; padding: 0; }
        body { font: 16px Helvetica, Sans-Serif; line-height: 24px; background: url(images/noise.jpg); }
        .clear { clear: both; }
        #page-wrap { width: 800px; margin: 40px auto 60px; }
        #pic { float: right; margin: -30px 0 0 0; }
        h1 { margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999; }
        h2 { font-size: 20px; margin: 0 0 6px 0; position: relative; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
        p { margin: 0 0 16px 0; }
        a { color: #999; text-decoration: none; border-bottom: 1px dotted #999; }
        a:hover { border-bottom-style: solid; color: black; }
        ul { margin: 0 0 32px 17px; }
        #objective { width: 500px; float: left; }
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; }
        dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 100px; border-right: 1px solid #999;  }
        dd { width: 600px; float: right; }
        dd.clear { float: none; margin: 0; height: 15px; }
     </style>
</head>

<body>

    <div id="page-wrap">



        <div id="contact-info" class="vcard">

            <!-- Microformats!-->

            <h1 class="fn">
           <?php
            echo $data['nama'];
             ?>

            


            </h1>


        </div>



        <div class="clear"></div>
        <dl>
            <dd class="clear"></dd>

            <dt>Divisi</dt>
            <dd>


                <p><strong>NIP:</strong> <?php echo $data['nip']; ?>
                  <br />
                   <strong>Nama Divisi:</strong> <?php echo $data['divisi'];?>
                   <br>
                   <strong>Manager:</strong> <?php echo $data['manager'];?>
                </p>
            </dd>

            <dd class="clear"></dd>

            <dt>Data Lembur</dt>
            <dd> <p>
                  <strong>Tanggal Mulai:</strong> <?php echo$data['tanggal_mulai'];?>
                  <br>
                  <strong>Tanggal Akhir:</strong> <?php echo$data['tanggal_akhir'];?>
                  <br>
                   <strong>Jam Mulai:</strong> <?php echo$data['jam_mulai'];?>
                   <br>
                   <strong>Jam Akhir :</strong> <?php echo $data['jam_akhir'];?>
                   <br>
                   <strong>Keterangan :</strong> <?php echo $data['keterangan'];?>
                   <br>
                   <strong>Status :<?=$data['status'];?></strong>
                   <br>
                   <!-- <strong>Alamat :</strong> <?php echo "$wor->alamat" ?> -->
                </p>
            </dd>


            <!-- <dd class="clear"></dd>
            <dt>Jatah Cuti</dt>
            <dd> <p>
                   <strong>Tahun :</strong> <?php echo "$owr->tahun"; ?>
                   <br>
                   <strong>Jumlah :</strong> <?php echo "$owr->jumlah"; ?>
                </p>
            </dd>
            <dd class="clear"></dd>
            <dt> Data Lembur </dt>
            <dd><p>
                   <strong>Tanggal Mulai :</strong> <?php echo "$rwo->tanggal_mulai"; ?>
                   <br>
                   <strong>Tanggal Akhir :</strong> <?php echo "$rwo->tanggal_akhir"; ?>
                   <br>
                   <strong>Jam Mulai :</strong> <?php echo "$rwo->jam_mulai"; ?>
                   <br>
                   <strong>Jam Akhir :</strong> <?php echo "$rwo->jam_akhir"; ?>
                   <br>
                   <strong>Keterangan :</strong> <?php echo "$rwo->keterangan"; ?>
                   <br>
                   <strong>Status :</strong> <?php echo "$rwo->status"; ?>
                   <br>

                </p>
            </dd>-->
            <dd class="clear"></dd>

            <a href="checkdata.php?nip=<?php echo $data['nip']; ?>"> Kembali </a>


    </div>

</body>

</html>
