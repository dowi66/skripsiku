<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <title>Bootstrap demo</title>


  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"> -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="fonts/bootstrap-icons.css">


</head>

<!-- <style type="text/css">
body {
  background: rgb(13,110,253);
  background: linear-gradient(0deg, rgba(13,110,253,0.3561799719887955) 0%, rgba(255,255,255,1) 100%);
}

.daftar hr {
  border-top: 4px solid #81bad8;
}

</style> -->
<body">

  <!-- Awal Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-dark">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">E-Rekam Medis</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <form class="d-flex" action="home.php" method="post" >
          <!-- <div class="input-group mb-3"> -->
          <span class="input-group-text bi bi-person-fill"></span>
          <input type="text" class="form-control me 2" placeholder="NIK Anda" aria-label="nik" id="nik">
          <span class="input-group-text bi bi-lock-fill""></span>
          <input type="text" class="form-control me-2" placeholder="Password Anda" aria-label="pass" id="pass">
          <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
          <button class="btn btn-success" type="submit">Masuk</button>
            <!-- </div>           -->
        </form>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <div class="container pt-5">
    <div class="row mt-4 justify-content-between">
      <div class="col-md-6">
        <!-- <h5 class="text-primary pt-4" >E-Rekam Medis dapat membantu mempermudah dan mempercepat penanganan kesehatan Anda.</h5> -->
        <h5 class="text-primary pt-4">Rekam medis adalah berkas yang berisikan catatan dan dokumen tentang identitas pasien, pemeriksaan, pengobatan, tindakan dan pelayanan lain.</h5>
        <p></p>
        <img src="img/bgweb.png" class="img-fluid pt-4">
      </div>

      <!-- akhir form kiri -->
      <!-- awal kanan -->
      <div class="col-md-5">
        <section class="daftar" id="daftar">
          <h5 class="text-primary pt-4">Daftar</h5>
          <p class="text-primary">Saat mendaftar harus sesuai dengan kartu identitas anda! </p>
          <hr>
          <form>
            <div class="row mb-3">
              <label for="nama" class="col-sm-3 col-form-label ">Nama</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda" autocomplete="off">
              </div>
            </div>
            <div class="row mb-3">
              <label for="nik" class="col-sm-3 col-form-label">NIK</label>
              <div class="col-sm-9">
                <input type="number" class="form-control" id="nik" name="nik" placeholder="NIK Anda" min="15" max="16">
              </div>
            </div>

            <div class="row mb-3">
              <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat yang Ditempati">
              </div>
            </div>

            <div class="row mb-3">
              <label for="tgllahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
              <div class="col-sm-9">
                <input type="date" class="form-control" id="tgllahir" name="tgllahir">
              </div>
            </div>
            <!-- <fieldset class="row mb-3">
              <legend class="col-form-label col-md-3 ">Jenis Kelamin</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gridRadios" id="laki" value="Laki-laki" checked>
                  <label class="form-check-label" for="laki">
                    Laki-Laki
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gridRadios" id="perempuan" value="Perempuan">
                  <label class="form-check-label" for="perempuan">
                    Perempuan
                  </label>
                </div>
              </div>
            </fieldset> -->

            <label class="col-sm-3">Jenis Kelamin</label>
            <div class="form-check form-check-inline pb-3">
              <input class="form-check-input" type="radio" name="jk" id="pria" value="Pria" checked="">
              <label class="form-check-label" for="pria">Pria</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jk" id="wanita" value="Wanita">
              <label class="form-check-label" for="wanita">Wanita</label>
            </div>

            <div class="row mb-3">
              <label for="pass" class="col-sm-3 col-form-label">Password</label>
              <div class="col-sm-9">
                <input type="Password" class="form-control" id="pass" name="pass" placeholder="Password">
              </div>
            </div>

            <div class="row mb-3">
              <label for="repass" class="col-sm-3 col-form-label">Re-Password</label>
              <div class="col-sm-9">
                <input type="Password" class="form-control" id="repass" name="repass" placeholder="Masukkan ulang Password Anda">
              </div>
            </div>



            <!-- <div class="row mb-3">
              <div class="col-sm-10 offset-sm-2">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck1">
                  <label class="form-check-label" for="gridCheck1">
                    Example checkbox
                  </label>
                </div>
              </div>
            </div> -->
            <button type="submit" class="btn btn-primary offset-sm-3">Daftar</button>
          </form>
        </section>
      </div>
      <!-- Akhir kanan -->
    </div>
  </div>


  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,256L26.7,229.3C53.3,203,107,149,160,154.7C213.3,160,267,224,320,234.7C373.3,245,427,203,480,197.3C533.3,192,587,224,640,245.3C693.3,267,747,277,800,234.7C853.3,192,907,96,960,101.3C1013.3,107,1067,213,1120,245.3C1173.3,277,1227,235,1280,208C1333.3,181,1387,171,1413,165.3L1440,160L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>

  <footer class="bg-primary text-center text-white pb-3">
    <p>Created with love by 
      <a class="text-white fw-bold" href="https://www.instagram.com/akhmadbaidilan/">Akhmad Baidowi</a>
    </p>
  </footer>



  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->

  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>


</body>
</html>