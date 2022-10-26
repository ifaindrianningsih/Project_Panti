@extends('layouts.user.master')
 
@section('content')

<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>VISI, MISI & TUJUAN</h2>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
              <i class=""></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">VISI <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                Terwujudnya pelayanan dan pengasuhan 
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class=""></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">MISI <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                    - Menerapkan kehidupan sehari-hari  sesuai dengan pedoman hidup islam warga Muhammadiyah
                </p>
                <p>
                    - Mencetak muslimah berwawasan luas dan beraqidah islam bersumber kepada Al-quran dan Al Hadits 
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class=""></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">TUJUAN <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                    Menjadi kader penerus perjuangan persyarikatan Muhammadiyah
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->
    @endsection