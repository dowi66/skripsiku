<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Home</title>

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="fonts/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="css/cssku.css">
  <link rel="stylesheet" type="text/css" href="css/dropzone.css" />
  <link rel="stylesheet" type="text/css" href="css/cropper.css" />

</head>

<body>

  <!-- Awal Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">E-Rekam Medis</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle bi bi-gear-fill" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Akun
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Pengaturan Akun</a></li>
              <li><a class="dropdown-item" href="#">Help</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Keluar</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- jumbotron -->
  <section class="jumbotron text-center">
    <div class="row" align="center">
      <div class="col-md-4">&nbsp;</div>
      <div class="col-md-4">
        <div class="image_area">
          <form method="post">
            <label for="upload_image">
              <img src="img/user.png" id="uploaded_image" class="img-responsive img-circle rounded-circle" />
   <!--            <div class="overlay">
                <div class="text">Upload</div>
              </div>
              <input type="file" name="image" class="image" id="upload_image" style="display:none" />
            </label>
          </form>
        </div>
      </div>
      <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Klik untuk merubah Foto Profil</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="img-container">
                <div class="row">
                  <div class="col-md-8">
                    <img src="" id="sample_image" />
                  </div>
                  <div class="col-md-4">
                    <div class="preview"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" id="crop" class="btn btn-primary">Crop</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </div>
          </div>
        </div>
      </div>  -->         
    </div>

    <h2>Selamat Datang, </h2>
  </section>
  <!-- Akhir Jumbotron -->

  <!-- data pengguna -->
  <!-- form kiri -->
  <div class="container pt-5">
    <div class="row mt-4 justify-content-between">
      <div class="col-md-6">
        <section class="daftar" id="daftar">
          <h5 class="text-primary pt-4">Data Pengguna</h5>
          <p class="text-primary">Segera Lengkapi data anda! </p>
          <hr>
          <form>
            <div class="row mb-3">
              <label for="nama" class="col-sm-4 col-form-label ">Nama</label>
              <div class="col-sm-8">
                <input class="form-control" type="text" name="nama" placeholder="Data belum Diisi" aria-label="Disabled input example" disabled>
              </div>
            </div>
            <div class="row mb-3">
              <label for="nik" class="col-sm-4 col-form-label">NIK</label>
              <div class="col-sm-8">
                <input class="form-control" name="nik" type="text" placeholder="Data belum Diisi" aria-label="Disabled input example" disabled>
              </div>
            </div>

            <div class="row mb-3">
              <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
              <div class="col-sm-8">
                <input class="form-control" name="alamat" type="text" placeholder="Data belum Diisi" aria-label="Disabled input example" disabled>
              </div>
            </div>

            <div class="row mb-3">
              <label for="tgllahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
              <div class="col-sm-8">
                <input class="form-control" name="tgllahir" type="text" placeholder="Data belum Diisi" aria-label="Disabled input example" disabled>
              </div>
            </div>

            <div class="row mb-3">
              <label for="jk" class="col-sm-4 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-8">
                <input class="form-control" name="jk" type="text" placeholder="Data belum Diisi" aria-label="Disabled input example" disabled>
              </div>
            </div>

            <div class="row mb-3">
              <label for="notel" class="col-sm-4 col-form-label">Nomor Telepon</label>
              <div class="col-sm-8">
                <input class="form-control" name="notel" type="text" placeholder="Data belum Diisi" aria-label="Disabled input example" disabled>
              </div>
            </div>

            <div class="row mb-3">
              <label for="agama" class="col-sm-4 col-form-label">Agama</label>
              <div class="col-sm-8">
                <input class="form-control" name="agama" type="text" placeholder="Data belum Diisi" aria-label="Disabled input example" disabled>
              </div>
            </div>

            <div class="row mb-3">
              <label for="stper" class="col-sm-4 col-form-label">Status Perkawinan</label>
              <div class="col-sm-8">
                <input class="form-control" name="stper" type="text" placeholder="Data belum Diisi" aria-label="Disabled input example" disabled>
              </div>
            </div>

            <div class="row mb-3">
              <label for="namkelter" class="col-sm-4 col-form-label">Nama Keluarga Terdekat</label>
              <div class="col-sm-8">
                <input class="form-control" name="namkelter" type="text" placeholder="Data belum Diisi" aria-label="Disabled input example" disabled>
              </div>
            </div>

            <div class="row mb-3">
              <label for="nampen" class="col-sm-4 col-form-label">Nama Penanggung</label>
              <div class="col-sm-8">
                <input class="form-control" name="nampen" type="text" placeholder="Data belum Diisi" aria-label="Disabled input example" disabled>
              </div>
            </div>

            <div class="row mb-3">
              <label for="jamkes" class="col-sm-4 col-form-label">Jaminan Kesehatan</label>
              <div class="col-sm-8">
                <input class="form-control" name="jamkes" type="text" placeholder="Data belum Diisi" aria-label="Disabled input example" disabled>
              </div>
            </div>

            <div class="row mb-3">
              <label for="rumsak" class="col-sm-4 col-form-label">Rumah Sakit</label>
              <div class="col-sm-8">
                <input class="form-control" name="rumsak" type="text" placeholder="Data belum Diisi" aria-label="Disabled input example" disabled>
              </div>
            </div>

            <div class="row mb-3">
              <label for="tglmasuk" class="col-sm-4 col-form-label">Tanggal Masuk</label>
              <div class="col-sm-8">
                <input class="form-control" name="tglmasuk" type="text" placeholder="Data belum Diisi" aria-label="Disabled input example" disabled>
              </div>
            </div>

            <div class="row mb-3">
              <label for="rrawat" class="col-sm-4 col-form-label">Ruang Rawat</label>
              <div class="col-sm-8">
                <input class="form-control" name="rrawat" type="text" placeholder="Data belum Diisi" aria-label="Disabled input example" disabled>
              </div>
            </div>

            <div class="row mb-3">
              <label for="foto" class="col-sm-4 col-form-label">Foto Anda</label>
              <div class="col-sm-8">
                <div class="text-center">
                  <img src="img/user.png" name="foto" class="rounded" alt="...">
                </div>
              </div>
            </div>


            <div class="row mb-3">
              <label for="upload" class="col-sm-4 col-form-label"></label>
              <div class="col-sm-8">
                <input class="form-control form-control-sm" id="formFileSm" type="file">
              </div>
            </div>
            


            <button type="submit" class="btn btn-primary float-end">Lengkapi Data</button>
            
          </form>
        </section>
      </div>

      <!-- akhir form kiri -->
      <!-- awal kanan -->
      <div class="col-md-5">

        
        <div class="row mb-3">
          <h1></h1>
        </div>

        <div class="row mb-3">
          <h3 class="text-primary text-center">Pastikan data diri anda terisi dengan benar </h3>
        </div>        
        <div class="row mb-3">
          <h1></h1>
        </div>
        <div class="row mb-3">
          <h1></h1>
        </div>

        <div class="row mb-3">
          <div class="text-center">
            <img src="img/menudokter.png" class="img-fluid mx-auto d-block col-md-6 pt-4" alt="...">
          </div>
        </div>
      </div>

    </div>
    <!-- Akhir kanan -->
  </div>
</div>
</div>  <!-- akhir data pengguna -->

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,256L26.7,229.3C53.3,203,107,149,160,154.7C213.3,160,267,224,320,234.7C373.3,245,427,203,480,197.3C533.3,192,587,224,640,245.3C693.3,267,747,277,800,234.7C853.3,192,907,96,960,101.3C1013.3,107,1067,213,1120,245.3C1173.3,277,1227,235,1280,208C1333.3,181,1387,171,1413,165.3L1440,160L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>

<!-- footer -->
<footer class="bg-primary text-center text-white pb-5">
  <p>Created with love by 
    <a class="text-white fw-bold" href="https://www.instagram.com/akhmadbaidilan/">Akhmad Baidowi</a>
  </p>
</footer>
<!-- Akhir Footer -->


<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/jsku.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/dropzone.js"></script>
<script type="text/javascript" src="js/cropper.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->
</body>
</html>
