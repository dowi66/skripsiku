<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>E-Rekam Medis Pasien</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/cssSkripsi.css" rel="stylesheet">
    <link href="../css/Flatly.min.css" rel="stylesheet">
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php"><marquee width="250">E-Rekam Medis Pasien</marquee></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
        <li><form class="navbar-form navbar-right" action="validasilogin.php" method="post" enctype="multipart/form-data">
        <div class="input-group">
          <span class="input-group-addon" id="addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" id="basic-url" name="logemail" aria-describedby="addon" placeholder="Email Anda">
        </div>
            
        <div class="input-group">
              <span class="input-group-addon" id="addon1"><span class="glyphicon glyphicon-lock"></span></span>
                <input type="password" placeholder="Password" class="form-control" name="logpass" aria-describedby="addon1" id="basic-url">
        </div>
        <button type="submit" class="btn btn-default">Sign in</button>
          </form></li>
          <li><a href="regist/regist.php"><font class="text-default">Daftar</font></a></li>
        <li><a href="#"><?php $tanggal = Date("d-M-Y");
      $day = date('D', strtotime($tanggal));
      $dayList = array(
      'Sun' => 'Minggu',
      'Mon' => 'Senin',
      'Tue' => 'Selasa',
      'Wed' => 'Rabu',
      'Thu' => 'Kamis',
      'Fri' => 'Jumat',
      'Sat' => 'Sabtu'
      );
      echo $dayList[$day].", "."{$tanggal}";
    ?></a></li>
      </ul><!--/.navbar-collapse -->

        <!-- Collect the nav links, forms, and other content for toggling -->
      </div><!-- /.container-fluid -->
    </nav>
    <!-- Akhir Navbar -->


    <!-- Awal Jumbo Tron -->
    <div class="jumbotron">
      <div class="container">
        <div class="col-sm-8 col-sm-offset-2">
          <h2 align="center"><img src="../gambar/rekammedis.png"></h2>
            <h2 align="center"><strong><font color="#FFFFFF">E-Rekam Medis Pasien</font></strong></h2>
              <p align="center"><font color="#FFFFFF">E-Rekam Medis Pasien adalah Aplikasi untuk mempermudah dalam pengecekan dan pendaftaran data rekam medis.</font>
        </div>  
      </div>
    </div>
    <!-- Akhir Jumbo Tron -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>