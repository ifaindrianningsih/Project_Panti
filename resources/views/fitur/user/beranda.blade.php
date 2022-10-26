@extends('layouts.user.master')
 
@section('content')

  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">PANTI ASUHAN<span> PUTRI ‘AISYIYAH </span></h2>
          <p class="animate__animated animate__fadeInUp">Panti Asuhan Putri ‘Aisyiyah Kel. Dinoyo Kec. Lowokwaru merupakan salah satu amal usaha dibawah organisasi Muhammadiyah yang dalam hal ini berada dibawah naungan  Pimpinan Daerah Muhammadiyah Kota Malang. Sementara dalam penyelenggaraan teknis berada dibawah Pimpinan  Daerah ‘Aisyiyah dan Pimpinan Cabang ‘Aisyiyah Lowokwaru </p>
          <a href="{{url('/profil/sejarah')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      {{-- <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Nama Kegiatan</h2>
          <p class="animate__animated animate__fadeInUp"> deskripsi singkat kegiatan</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div> --}}

      <!-- Slide 3 -->
      {{-- <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div> --}}

      {{-- <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a> --}}

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Nama Kegiatan</a></h4>
              <p class="description">deskripsi singkat kegiatan</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Nama Kegiatan</a></h4>
              <p class="description">deskripsi singkat kegiatan</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Nama Kegiatan</a></h4>
              <p class="description">deskripsi singkat kegiatan</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4 class="title"><a href="">Nama Kegiatan</a></h4>
              <p class="description">deskripsi singkat kegiatan</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Icon Boxes Section -->

    <!-- ======= tentang kami Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang Kami</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <div class="swiper-slide"><img src="assets/img/tempat/p1.jpeg" class="img-fluid" alt=""></div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            Panti Asuhan Putri ‘Aisyiyah Malang berdiri karena belum ada panti asuhan putri di Kelurahan Dinoyo Kecamatan Lowokwaru. Begitu juga dinilai masih banyaknya anak yatim yang tidak tertampung dan tidak ada orangtua asuh yang menanggung, sehingga mereka tidak dapat melanjutkan sekolah. 
            </p>
            <a href="{{url('/profil/sejarah')}}"" class="btn-learn-more">Selengkapnya</a>
          </div>
        </div>

      </div>
    </section><!-- End tentang kami Section -->

    

  </main><!-- End #main -->

  @endsection