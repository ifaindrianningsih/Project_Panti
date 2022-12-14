  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="fixed-top d-flex align-items-center "  style="background: #065fad;" >
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:shintyarahma77@gmail.com">email panti</a>
        <i class="bi bi-phone-fill phone-icon"></i> nomor panti
      </div>
      {{-- <div class="cta d-none d-md-block">
        <a href="#about" class="scrollto">Get Started</a>
      </div> --}}
    </div>
  </div>
  
  
  <header id="header" class="fixed-top d-flex align-items-center" style="background: #05579e;">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{url('/beranda')}}">PANTI ASUHAN PUTRI ‘AISYIYAH</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('/beranda')}}">Beranda</a></li>
          <li class="dropdown"><a href="{{url('/profil/sejarah')}}"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{url('/profil/sejarah')}}">Sejarah</a></li>
              <li><a href="{{url('/profil/visi')}}">Visi, Misi & Tujuan</a></li>
              <li><a href="#">Kegiatan</a></li>
              <li><a href="{{url('/profil/struktur-kepengurusan')}}">Struktur Kepengurusan</a></li>
              {{-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> --}}
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#services">Galeri</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Kegiatan</a></li>
          <li><a class="nav-link scrollto" href="#team">Donasi</a></li>
          <li><a class="nav-link scrollto " href="/produk">Pesan Kue</a></li>
          <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
              <li><a href="{{url('/login')}}">Donatur</a></li>
              <li><a href="{{url('/login_pesan_kue')}}">Pesan_Kue</a></li>
              <li><a href="{{url('/login')}}">Admin</a></li>
              
            </ul>
         
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->