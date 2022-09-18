<!doctype html>
<html lang="en">

<head>
  <title>PPDB | Home</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="{{asset('assets/css/home.css')}}" rel="stylesheet">
  <link href="{{asset('assets/fontawesome/css/all.css')}}" rel="stylesheet">
  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- google font -->
  <!-- kanit -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- roboto -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">

  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>

  <header id="header" class="header">
    <div class="header-content">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img class="logo" src="img/ts3 1.png" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item putih">
                <a class="nav-link text-danger" aria-current="page" href="#">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#jalurpendaftaran">JALUR PENDAFTARAN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#jadwal">JADWAL</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/login">LOGIN</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <main>
    <div class="container mt-4">
      <div class="row rata-tengah">
        <div class="col-lg-6 mb-4">
          <div class="text-container" data-aos="fade-up">
            <h2>
              <span class="text-uppercase text-danger fw-bold judul1">Perisai Stelk 2022</span>
            </h2>
            <h3 class="hitam fw-bold judul2">SMK TELKOM MAKASSAR</h3>
            <p class="mb-3 text">Selamat datang di website penerimaan siswa baru Telkom School tahun ajaran 2022/2023.
            </p>
            <p class="mb-4" style="line-height: 0; font-weight: bold;"><a data-toggle="modal"
                data-target="#persayaratanModal" class="text-decoration-none syarat" href="">*Syarat Pendaftaran</a></p>
            <form action="dashboard.html">
              <button class="btn btn-danger button fw-bold">DAFTAR SEKARANG!</button>
            </form>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="image-container" data-aos="fade-left">
            <img class="img-fluid" src="https://yt3.ggpht.com/ytc/AMLnZu-O72-JEukpvB1E5bAD2sGslLz-vh40ccuwq_sJ=s900-c-k-c0x00ffffff-no-rj" alt="alternative" style="width: 500px;">
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-5 mb-5" id="jalurpendaftaran">
      <div class="text-jpen" data-aos="fade-up">
        <h2 class="text-center jpen fw-bold">JALUR <span class="text-danger">PENDAFTARAN</span></h2>
        <p class="text-center fs-5 fw-light jpen-p">Berikut merupakan jalur pendaftaran yang kami tawarkan kepada calon
          pendaftar.</p>
      </div>
    </div>

    <!-- jalur prestasi -->
    <div class="container mb-5">
      <div class="row rata-tengah">
        <div class="col-lg-6" data-aos="fade-up">
          <h2 class="fw-bold media-title">Jalur Prestasi</h2>
          <p class="media-p">Berikut merupakan persyaratan untuk jalur prestasi:</p>
          <ul class="list-unstyled">
            <li class="media">
              <i class="fas fa-check"></i>
              <div class="media-body">Bidang prestasi meliputi Akademik dan Non Akademik</div>
            </li>
            <li class="media">
              <i class="fas fa-check"></i>
              <div class="media-body">Nilai Raport Kelas VIII</div>
            </li>
            <li class="media">
              <i class="fas fa-check"></i>
              <div class="media-body">Tahap 1: Verifikasi Berkas</div>
            </li>
            <li class="media">
              <i class="fas fa-check"></i>
              <div class="media-body">Tahap 2: Psikotes, Kesehatan &amp; Wawancara</div>
            </li>
            <li class="media">
              <i class="fas fa-check"></i>
              <div class="media-body">Proses tes wawancara diikuti oleh orang tua dan calon siswa
              </div>
            </li>
          </ul>
        </div>
        <div class="col-lg-6">
          <div class="image-container">
            <img class="img-fluid gambar" src="assets/img/prestasi.svg" alt="PERISAI SMK TELKOM MAKASSAR" data-aos="fade-left">
          </div>
        </div>
      </div>
    </div>

    <!-- jalur reguler -->
    <div class="container mb-5">
      <div class="row rata-tengah">
        <div class="col-lg-6" data-aos="fade-right">
          <div class="image-container">
            <img class="img-fluid gambar" src="assets/img/reguler.svg" alt="PERISAI SMK TELKOM MAKASSAR">
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-up">
          <h2 class="media-title fw-bold">Jalur Reguler</h2>
          <p class="media-p">Berikut merupakan persyaratan untuk jalur reguler:</p>
          <ul class="list-unstyled li-space-lg">
            <li class="media">
              <i class="fas fa-check"></i>
              <div class="media-body">Seleksi Tahap 1 berupa Tes Akademik</div>
            </li>
            <li class="media">
              <i class="fas fa-check"></i>
              <div class="media-body">Materi tes Akademik: Matematika, Bahasa Inggris &amp; IPA
              </div>
            </li>
            <li class="media">
              <i class="fas fa-check"></i>
              <div class="media-body">Seleksi Tahap 2 berupa tes non akademik</div>
            </li>
            <li class="media">
              <i class="fas fa-check"></i>
              <div class="media-body">Tes non akademik: Psikotes, kesehatan dan wawancara</div>
            </li>
            <li class="media">
              <i class="fas fa-check"></i>
              <div class="media-body">Proses tes wawancara diikuti oleh orang tua dan calon siswa
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- jalur prestasi khusus -->
    <div class="container mb-5">
      <div class="row rata-tengah">
        <div class="col-lg-7" data-aos="fade-up">
          <h2 class="media-title fw-bold">Jalur Prestasi Khusus</h2>
          <p class="media-p">Berikut merupakan persyaratan untuk jalur prestasi:</p>
          <br>
          <p style="font-weight:bold">Memiliki salah satu prestasi yang ada dibawah ini :</p>
          <ul class="list-unstyled li-space-lg">
            <li class="media">
              <i class="fas fa-check"></i>
              <div class="media-body">Pernah menjuarai lomba tingkat nasional minimal juara 5 atau
                tingkat kota minimal juara 3 (dibuktikan dengan sertifikat)</div>
            </li>
            <li class="media">
              <i class="fas fa-check"></i>
              <div class="media-body">Pernah menjabat sebagai Ketua/Wakil Ketua Osis (dibuktikan
                dengan sertifikat)</div>
            </li>
            <li class="media">
              <i class="fas fa-check"></i>
              <div class="media-body">Memiliki hafalan al-quran minamal 1 Juz (dibuktikan dengan
                sertifikat)</div>
            </li>
            <br>
            <p>Lainnya :</p>
            <li class="media">
              <i class="fas fa-check"></i>
              <div class="media-body">Nilai Rapor minimal 7.00 Untuk Mapel B. Ing, Mtk, dan IPA
              </div>
            </li>
            <li class="media">
              <i class="fas fa-check"></i>
              <div class="media-body">Mendapat surat rekomendasi dari Sekolah Asal</div>
            </li>
            <li class="media">
              <i class="fas fa-check"></i>
              <div class="media-body">Tahap 1: Verifikasi Berkas</div>
            </li>
            <li class="media">
              <i class="fas fa-check"></i>
              <div class="media-body">Tahap 2: Psikotes, Kesehatan &amp; Wawancara</div>
            </li>
            <li class="media">
              <i class="fas fa-check"></i>
              <div class="media-body">Proses tes wawancara diikuti oleh calon siswa</div>
            </li>
          </ul>
          <br>
          <p style="font-weight:bold">Note :</p>
          <p>Jika telah lulus pada jalur reguler dan memenuhi persyaratan untuk mengikuti Jalur
            Prestasi Khusus maka peserta Jalur Reguler dapat mengikuti pe-rankingan pada Jalur
            Prestasi Khusus tanpa melalui tes yang sudah dilewati sebelumnya. Silahkan menghubungi
            Panitia Perisai 2022.</p>
        </div>
        <div class="col-lg-5">
          <div class="image-container">
            <img class="img-fluid gambar" src="assets/img/khusus.svg" alt="PERISAI SMK TELKOM MAKASSAR" data-aos="fade-left">
          </div>
        </div>
      </div>
    </div>

    <!-- jadwal -->
    <div class="container jadw" id="jadwal" data-aos="fade-up">
      <div class="text-jpen mb-5">
        <h2 class="text-center jalurPendaftar fw-bold">JADWAL <span class="text-danger">PERISAI</span></h2>
        <p class="text-center fs-5 fw-light jpen-p">Berikut merupakan jadwal PERISAI-STELK untuk calon pendaftar.</p>
      </div>

      <div class="jadwal">
        <div class="row">
          <div class="col-lg-12 d-flex jadwl">
            <div class="kotak-jadwal rounded-4 p-4">
              <div class="jadwal-title">
                <h2>Jalur Reguler 3</h2>
                <p class="text-danger">Rp. 200.000</p>
                <hr>
              </div>
              <div class="jadwal-bagian jadwal-daftar">
                <h4>Jadwal Pendaftaran</h4>
                <p>10 April 2022</p>
                <p>13 Mei 2022</p>
                <hr>
              </div>
              <div class="jadwal-bagian jadwal-ujian">
                <h4>Test / Ujian</h4>
                <p>10 April 2022</p>
                <hr>
              </div>
              <div class="jadwal-bagian jadwal-pengumuman">
                <h4>Pengumuman</h4>
                <p>10 April 2022</p>
              </div>
              <a href="" class="btn btn-danger rounded-4 fw-bold tombol">DAFTAR</a>
            </div>

            <div class="kotak-jadwal rounded-4 p-4">
              <div class="jadwal-title">
                <h2>Jalur Reguler 3</h2>
                <p class="text-danger">Rp. 200.000</p>
                <hr>
              </div>
              <div class="jadwal-bagian jadwal-daftar">
                <h4>Jadwal Pendaftaran</h4>
                <p>10 April 2022</p>
                <p>13 Mei 2022</p>
                <hr>
              </div>
              <div class="jadwal-bagian jadwal-ujian">
                <h4>Test / Ujian</h4>
                <p>10 April 2022</p>
                <hr>
              </div>
              <div class="jadwal-bagian jadwal-pengumuman">
                <h4>Pengumuman</h4>
                <p>10 April 2022</p>
              </div>
              <a href="" class="btn btn-danger rounded-4 fw-bold tombol">DAFTAR</a>
            </div>
          </div>
          <!-- <div class="col-lg-6">

          </div> -->
        </div>
      </div>
    </div>
  </main>

  <footer>
    <div class="container mb-5">
      <div class="row">
        <div class="col-lg-5">
          <div class="tentang-kami">
            <h3>Tentang Kami</h3>
            <p><span class="hitam smk">SMK TELKOM MAKASSAR</span> dengan tekad hendak membentuk insan berkarakter unggul
              dalam kerangka pencerdasan anak bangsa dan pembangunan peradaban bangsa.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="tentang-kami">
            <h3>Lokasi Kami</h3>
            <p>Jl. A. P. Pettarani No.4, Gn. Sari, Rappocini, Kota Makassar, Sulawesi Selatan 90222.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="tentang-kami">
            <h3>Social Media Kami</h3>
            <div class="sosmed">
              <a href="https://www.facebook.com/smktelkommakassar"><img src="assets/img/facebook.svg" alt=""></a>
              <a href="https://www.instagram.com/stelkmakassar/?hl=id"><img src="assets/img/ig.svg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright">
      Copyright © 2022 <span class="fw-bold">SMK TELKOM MAKASSAR</span>
    </div>
  </footer>


  <!-- AOS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- navbar -->
  <script src="assets/js/navbar.js"></script>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>
