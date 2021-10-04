<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<!-- slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="assets/css/my.css">

    <!-- logo -->
    <link rel="shortcut icon" href="assets/images/logo/logo.ico" />

    <!-- title -->
    <title>Marsit Bangun Sejahtera</title>

  </head>
  <body>

  	  <!-- navbar -->
    <section id="navbar">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="index.html"><img src="assets/images/logo/logo-samping.svg" alt="Logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="inner">
              <div class="menu-btn">
                <div class="line"></div>
              </div>
            </div>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link page-scroll active" href="#banner">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#produk">Produk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#visi-misi">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#kontak">Kontak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#galeri">Galeri</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>

    <!-- banner -->
    <section id="banner">
        <div class="slider-banner">
          <img src="assets/images/banner/banner1.svg" class="img-banner">
          <img src="assets/images/banner/banner2.svg" class="img-banner">
          <img src="assets/images/banner/banner3.svg" class="img-banner">
        </div>
    </section>

    <section id="produk">
      <div class="container">
        <div class="header">
          <h1 class="judul-produk">Produk Kami</h1>
        </div>
        <div class="slider-produk">
          <img src="assets/images/produk/produk-1.png" class="img-produk" data-bs-toggle="modal" data-bs-target="#modal-pensiun">
          <img src="assets/images/produk/produk-2.png" class="img-produk" data-bs-toggle="modal" data-bs-target="#modal-prapensiun">
          <img src="assets/images/produk/produk-3.png" class="img-produk" data-bs-toggle="modal" data-bs-target="#modal-aktif">
          <img src="assets/images/produk/produk-5.png" class="img-produk" data-bs-toggle="modal" data-bs-target="#modal-janda">
        </div>
      </div>
    </section>

    <section id="visi-misi">
      <div class="container">
        <div class="text text-visimisi">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Profil Perusahaan</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Visi</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Misi</button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <p>PT. Marsit Bangun Sejahtera berdiri pada tanggal 17 November 2016, di Bekasi, Jawa Barat. PT. Marsit Bangun Sejahtera di inisiasi oleh Bapak Maruli Tua H Sitohang, SE., MM. Berbekal pengalaman beliau pada bidang bisnis pensiun yang mencapai 35 Tahun di Bank BTPN. Setelah 3 tahun berkecimpung dalam bisnis konsultan bisnis consumer loans terutama bagi para pensiunan.</p>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <p>" Menjadi konsultan bisnis pensiun & karyawan aktif, terkemuka dan terbaik di Indonesia, dengan memberikan kepuasan kepada mitra dan nasabah. "</p>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
              <ul>
                <li>Melakukan kegiatan konsultasi perbankan yang terbaik dengan mengutamakan pelayanan kepada mitra.</li><br>
                <li>Memberikan pelayanan kepada nasabah melalui jaringan kerja yang tersebar luas dan didukung oleh sumber daya manusia yang profesional,pantang menyerah dan berintegritas.</li><br>
                <li>Memberikan keuntungan dan manfaat yang optimal kepada stakeholder.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="gambar">
        <img src="assets/images/visimisi/bapak.png" alt="bapak" class="gambar-bapak">
      </div>
    </section>

    <section id="kontak">
      <div class="container">
        <h1 class="judul-kontak">Kontak Kami</h1>
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-kontak" data-img="assets/images/kontak/pusat.webp">
              <div class="row g-0">
                <div class="col-4">
                  <img src="assets/images/kontak/pusat.webp" alt="Kantor Pusat">
                </div>
                <div class="col-8">
                  <div class="card-body">
                    <h2 class="card-title">Kantor Pusat</h2>
                    <p class="card-text">
                      Jl. Taman Galaxy Raya No. 5B<br>
                      RT 01 RW 011 Kel. Jaka Setia Kec. Bekasi Selatan<br>
                      Kota Bekasi, 17147.<br>
                      Telepon : 021-82738377</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-kontak" data-img="assets/images/kontak/makasar.webp">
              <div class="row g-0">
                <div class="col-4">
                  <img src="assets/images/kontak/makasar.webp" alt="Kantor Cabang Makasar">
                </div>
                <div class="col-8">
                  <div class="card-body">
                    <h2 class="card-title">KC Makasar</h2>
                    <p class="card-text">
                      Perum. Puri Tamansari<br>
                      Jl. Puri Raya Blok G8 No 11,<br>
                      Borong, Manggala,<br>
                      Makassar, 90233<br>
                      Telepon : 0411-4672754
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-kontak" data-img="assets/images/kontak/manado.webp"">
              <div class="row g-0">
                <div class="col-4">
                  <img src="assets/images/kontak/manado.webp" alt="Kantor Cabang Manado">
                </div>
                <div class="col-8">
                  <div class="card-body">
                    <h2 class="card-title">KC Manado</h2>
                    <p class="card-text">
                      Jl.Samrat 27 Lingkungan III,<br>
                      Kel. Tanjung Batu,<br>
                      Kec. Wanea Kota. Manado,<br>
                      Sulawesi Utara, 95117<br>
                      Telepon : 0431-8805173
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="galeri">
      <div class="container">
        <div class="judul">
          <h1 class="judul-galeri">Galeri</h1>
        </div>
        <div class="slider-galeri">
          <img src="assets/images/galeri/1.jpeg" class="img-galeri">
          <img src="assets/images/galeri/2.jpeg" class="img-galeri">
          <img src="assets/images/galeri/3.jpeg" class="img-galeri">
          <img src="assets/images/galeri/4.jpeg" class="img-galeri">
          <img src="assets/images/galeri/5.jpeg" class="img-galeri">
          <img src="assets/images/galeri/6.jpeg" class="img-galeri">
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="kiri">
              <div class="gambar">
                <img src="assets/images/logo/marsit-logo.ico" alt="logo">
              </div>
              <h1>PT. MARSIT BANGUN SEJAHTERA</h1>
              <p>
                Konsultan Bisnis Pra-Pensiun,Pensiun &<br>
                Sales Marketing Partner.
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="tengah">
              <h1>INFORMASI</h1>
              <p>
                <i class="fas fa-map-marker-alt"></i> Jl. Taman Galaxy Raya No.5B. Jakasetia,Bekasi Selatan,17147.<br>
                <i class="fas fa-phone-alt"></i> +6221-82738377<br>
                <i class="far fa-envelope"></i> pusat@marsitbangunsejahtera.com<br>
                <i class="far fa-clock"></i> 08.00-17.00 WIB
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="kanan">
              <h1>PERJANJIAN KERJASAMA</h1>
              <div class="gambar">
                <img src="assets/images/logo/bni-logo.webp" alt="Logo BNI">
                <img src="assets/images/logo/btpn-logo.webp" alt="Logo BTPN">
              </div>
            </div>
          </div>
        </div>
        <div class="bottom">
          <p>&copy; Copyright <?php echo date("Y"); ?> <strong>PT. Marsit Bangun Sejahtera</strong>. All Rights Reserved</p>
        </div>
      </div>
    </footer>

    <!-- Modal Pensiun -->
    <div class="modal fade" id="modal-pensiun" tabindex="-1" aria-labelledby="modal-pensiun-label" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-body">
            <h1>Kredit Pensiun</h1>
            <div class="row highlight">
              <div class="col-4">
                <p><img src="assets/images/produk/icon-1.svg"> 51 - 74 Tahun</p>
              </div>
              <div class="col-4">
                <p><img src="assets/images/produk/icon-2.svg"> Plafond sd 500 jt</p>
              </div>
              <div class="col-4">
                <p><img src="assets/images/produk/icon-3.svg"> Tenor sd 180 bulan</p>
              </div>
            </div>
            <div class="penjelasan">
              <p>Produk kredit yang diberikan kepada Pensiunan PNS, TNI/POLRI, dan BUMN/BUMD. Nasabah dapat dilayani dengan plafond sampai dengan 500 juta dan jangka waktu sampai dengan 15 tahun.</p>
            </div>
            <div class="syarat">
              <h2>Persyaratan</h2>
              <ul>
                <li>Copy KTP.</li>
                <li>Copy NPWP.</li>
                <li>Copy Kartu Keluarga.</li>
                <li>Cover Buku Tabungan.</li>
                <li>Copy SK Pensiun.</li>
                <li>Copy E-Karip (Kartu Identitas Pensiun).</li>
                <li>Rekening Koran 3 Bulan Terakhir.</li>
                <li>Copy Kartu Peserta TASPEN / ASABRI / DAPEN.</li>
              </ul>
            </div>
            <div class="button">
              <a href="https://kreditpensiun.com/" target="_blank" class="btn btn-primary">Simulasikan</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Prapensiun -->
    <div class="modal fade" id="modal-prapensiun" tabindex="-1" aria-labelledby="modal-prapensiun-label" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-body">
            <h1>Kredit Prapensiun</h1>
            <div class="row highlight">
              <div class="col-4">
                <p><img src="assets/images/produk/icon-1.svg"> 5 thn prapensiun</p>
              </div>
              <div class="col-4">
                <p><img src="assets/images/produk/icon-2.svg"> Plafond sd 500 jt</p>
              </div>
              <div class="col-4">
                <p><img src="assets/images/produk/icon-3.svg"> Tenor sd 180 bulan</p>
              </div>
            </div>
            <div class="penjelasan">
              <p>Produk kredit yang diberikan kepada calon pensiun pegawai ASN, TNI/POLRI, dan pegawai di institusi BUMN/BUMD (termasuk grup dan anak perusahaan) yang akan memasuki usia pensiun maksimal 5 tahun mendatang.</p>
            </div>
            <div class="syarat">
              <h2>Persyaratan</h2>
              <ul>
                <li>Copy KTP.</li>
                <li>Copy NPWP.</li>
                <li>Copy Kartu Keluarga.</li>
                <li>Cover Buku Tabungan.</li>
                <li>Copy SK Pengangkatan PNS / TNI / POLRI.</li>
                <li>Copy SK Kenaikan Gaji Berkala (Terakhir).</li>
                <li>Slip Gaji.</li>
                <li>Rekening Koran 3 Bulan Terakhir.</li>
                <li>Copy Kartu Peserta TASPEN / ASABRI / DAPEN.</li>
              </ul>
            </div>
            <div class="button">
              <a href="https://kreditpensiun.com/" target="_blank" class="btn btn-primary">Simulasikan</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Aktif -->
    <div class="modal fade" id="modal-aktif" tabindex="-1" aria-labelledby="modal-aktif-label" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-body">
            <h1>Kredit Pegawai Aktif</h1>
            <div class="row highlight">
              <div class="col-4">
                <p><img src="assets/images/produk/icon-1.svg"> PNS aktif</p>
              </div>
              <div class="col-4">
                <p><img src="assets/images/produk/icon-2.svg"> Plafond sd 500 jt</p>
              </div>
              <div class="col-4">
                <p><img src="assets/images/produk/icon-3.svg"> Tenor sd 180 bulan</p>
              </div>
            </div>
            <div class="penjelasan">
              <p>Produk  kredit yang dberikan kepada pegawai aktif di instansi pemerintahan dan BUMN/BUMD. Nasabah dapat dilayani dengan plafond sampai dengan 500 juta dan jangka waktu sampai dengan 15 tahun.</p>
            </div>
            <div class="syarat">
              <h2>Persyaratan</h2>
              <ul>
                <li>Copy KTP.</li>
                <li>Copy NPWP.</li>
                <li>Slip Gaji.</li>
                <li>Pas Foto Terbaru 3 x 4.</li>
              </ul>
            </div>
            <div class="button">
              <a href="https://kreditpensiun.com/" target="_blank" class="btn btn-primary">Simulasikan</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Pensiun -->
    <div class="modal fade" id="modal-janda" tabindex="-1" aria-labelledby="modal-janda-label" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-body">
            <h1>Kredit Pensiun Janda Duda</h1>
            <div class="row highlight">
              <div class="col-4">
                <p><img src="assets/images/produk/icon-1.svg"> 40 - 74 Tahun</p>
              </div>
              <div class="col-4">
                <p><img src="assets/images/produk/icon-2.svg"> Plafond sd 500 jt</p>
              </div>
              <div class="col-4">
                <p><img src="assets/images/produk/icon-3.svg"> Tenor sd 180 bulan</p>
              </div>
            </div>
            <div class="penjelasan">
              <p>Produk kredit yang diberikan kepada janda atau duda dari Pensiunan PNS, TNI/POLRI, dan BUMN/BUMD. Nasabah dapat dilayani dengan plafond sampai dengan 500 juta dan jangka waktu sampai dengan 15 tahun.</p>
            </div>
            <div class="syarat">
              <h2>Persyaratan</h2>
              <ul>
                <li>Copy KTP.</li>
                <li>Copy NPWP.</li>
                <li>Copy Kartu Keluarga.</li>
                <li>Cover Buku Tabungan.</li>
                <li>Copy SK Pensiun.</li>
                <li>Copy E-Karip (Kartu Identitas Pensiun).</li>
                <li>Rekening Koran 3 Bulan Terakhir.</li>
                <li>Copy Kartu Peserta TASPEN / ASABRI / DAPEN.</li>
              </ul>
            </div>
            <div class="button">
              <a href="https://kreditpensiun.com/" target="_blank" class="btn btn-primary">Simulasikan</a>
            </div>
          </div>
        </div>
      </div>
    </div>

      <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- jquery easing -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ==" crossorigin="anonymous"></script>
    <!-- slick -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript">
    	$(document).ready(function() {
    		// toggle navbar
		    $(".menu-btn").on('click', function () {
		        $(".menu-btn").toggleClass("open");
		    });

        // event pada saat link di klik
        $('.page-scroll').on('click', function (e) {
            // mematikan href
            e.preventDefault();
            // ambil isi href
            var tujuan = $(this).attr('href');
            // tangkap elemen yang bersangkutan
            var elemenTujuan = $(tujuan);
            // pindahkan scroll
            $("html").animate({
                scrollTop: (elemenTujuan.offset().top - 70)
            }, 0, 'linear');

            $('.page-scroll').removeClass('active');
            $(this).addClass('active');
        });

        // slider banner
        $('.slider-banner').slick({
          arrows: false,
          slidesToShow: 1,
          autoplay: true,
          autoplaySpeed: 1000,
          slidesToScroll: 1
        });

        // slider produk
        $('.slider-produk').slick({
          arrows: false,
          autoplay: true,
          autoplaySpeed: 1000,
          slidesToShow: 3,
          slidesToScroll: 1,
            responsive: [
                {
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 2
                  }
                }
            ]
        });

        // slider galeri
        $('.slider-galeri').slick({
            infinite: true,
            slidesToShow: 4,
            autoplay: true,
            autoplaySpeed: 1000,
            arrows: false,
            responsive: [
                {
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 2
                  }
                }
            ]
        });

        // event ketika di scroll
        $(window).scroll(function() {
          const wScroll = $(this).scrollTop();
          
          // produk
          if (wScroll > $('#produk').offset().top - 400 ) {
            $('.judul-produk').addClass('muncul');
            setTimeout(function() {
              $('.img-produk').addClass('muncul');
            },300);
          }

          // visi misi
          if (wScroll > $('#visi-misi').offset().top - 400 ) {
            $('.gambar-bapak').addClass('muncul');
            setTimeout(function() {
              $('.text-visimisi').addClass('muncul');
            },300);
            setTimeout(function() {
              $('#pills-tab').addClass('muncul');
              $('#pills-tabContent').addClass('muncul');
            },800);
          }

          // kontak
          if (wScroll > $('#kontak').offset().top - 400 ) {
            $('.judul-kontak').addClass('muncul');
            $('.card-kontak').each(function(i) {
             setTimeout(function() {
               $('.card-kontak').eq(i).addClass('muncul');
             }, 300 * (i+1));
            });
          }

          // galeri
          if (wScroll > $('#galeri').offset().top - 400 ) {
            $('.judul-galeri').addClass('muncul');
            setTimeout(function() {
              $('.img-galeri').addClass('muncul');
            },300);
          }

        });

    	});
    </script>

    </body>
</html>