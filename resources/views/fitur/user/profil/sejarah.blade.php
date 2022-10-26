@extends('layouts.user.master')
 
@section('content')

  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">PROFIL PANTI ASUHAN<span> PUTRI ‘AISYIYAH </span></h2>
          <p class="animate__animated animate__fadeInUp">Panti asuhan adalah suatu lembaga usaha kesejahteraan sosial yang mempunyai tanggung jawab untuk memberikan pelayanan kesejahteraan sosial kepada anak telantar dengan melaksanakan penyantunan dan pengentasan anak telantar, memberikan pelayanan pengganti fisik, mental, dan sosial pada anak asuh, sehingga memperoleh kesempatan yang luas, tepat dan memadai bagi perkembangan kepribadiannya sesuai dengan yang diharapkan sebagai bagian dari generasi penerus cita-cita bangsa dan sebagai insan yang akan turut serta aktif di dalam bidang pembangunan nasional.</p>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
        
      <div class="container">
        <div class="row">
            <div class="col-12 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                <div class="icon-box">
                    <div class="d-flex justify-content-center">
                        <h4 class=""><a href="" class="text-center">Sejarah Panti Asuhan  Putri Aisyiyah Malang </a></h4>
                    </div>
                    <img src="{{asset('assets')}}/img/tempat/p2.jpeg" class="img-fluid" alt=""><br><br>
                    <p class="description">Panti Asuhan Putri ‘Aisyiyah berdiri dilatar belakangi karena belum ada panti asuhan putri di Kelurahan Dinoyo Kecamatan Lowokwaru. Begitu juga dinilai masih banyaknya anak yatim yang tidak tertampung dan tidak ada orangtua asuh yang menanggung, sehingga mereka tidak dapat melanjutkan sekolah. Selain itu juga masih banyaknya anak yang tidak mampu baik secara ekonomi dan sosialnya dilihat dari; tempat huniannya tidak memadai sehingga tidak layak untuk menjadi tempat tinggal untuk pertumbuhan anak, orangtua yang tidak memiliki penghasilan atau tidak memiliki pekerjaan sehingga pendidikan anak tidak terpenuhi dengan baik, begitu pula lingkungan sosial yang buruk yang di khawatirkan memberi pengaruh buruk untuk perkembangan psikologis anak. Selain itu juga bentuk pelaksaan dari perintah Allah SWT dalam QS. Al-Ma’un untuk menyantuni anak yatim.</p><br>    
                    <p class="description">
                        Dari alasan tersebut ibu-ibu yang berada dipengurusan Pimpinan ‘Aisyiyah Cabang Lowokwaru dengan mengajak bapak-bapak Muhammadiyah Cabang Lowokwaru untuk mendirikan Panti Asuhan Putri ‘Aisyiyah. Modal utama pendirian bangunan panti didapat dari tanah waqaf yang diberikan oleh warga Muhammadiya Ranting Dinoyo. Setelah terbentuk panitia maka mulailah dilakukan penggalian dana dari pusat maupun warga Muhammadiyah sekitar.
                    </p><br>
                    <p class="description">
                        Pada tahun 1995 terwujudlah Panti Asuhan Putri ‘Aisyiyah yang beralamat di jalan Mayjen Haryono gang 3 no. 231a Kelurahan Dinoyo Kecamatan Lowokwaru  Kota Malang yang pada 7 Juli 1996 diresmikan pemakaiannya oleh bapak H. Soetamso selaku Walikota Malang, dan mendapatkan akta notaris dengan nama Notaris CH. Weltre dengan nomor notaris 467/STP/ORSOS/III/97. Panti Asuhan Putri ‘Aisyiyah sudah melakukan pembaharuan akte notaris atau surat tanda pendaftaran ulang secara berkala, dan yang terbaru adalah sebagai berikut 460/8531/102.006/STPU/ORS/2009.  
                    </p><br>
                    <p class="description">
                        Pada tahun 1995 terwujudlah Panti Asuhan Putri ‘Aisyiyah yang beralamat di jalan Mayjen Haryono gang 3 no. 231a Kelurahan Dinoyo Kecamatan Lowokwaru  Kota Malang yang pada 7 Juli 1996 diresmikan pemakaiannya oleh bapak H. Soetamso selaku Walikota Malang, dan mendapatkan akta notaris dengan nama Notaris CH. Weltre dengan nomor notaris 467/STP/ORSOS/III/97. Panti Asuhan Putri ‘Aisyiyah sudah melakukan pembaharuan akte notaris atau surat tanda pendaftaran ulang secara berkala, dan yang terbaru adalah sebagai berikut 460/8531/102.006/STPU/ORS/2009.  
                    </p>
                </div>
              </div>
        </div>
      </div>
    </section><!-- End Icon Boxes Section -->

    

  </main><!-- End #main -->

  @endsection