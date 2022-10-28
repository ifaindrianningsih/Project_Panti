@extends('layouts.user.master')
 
@section('content')


<section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">
        <div class="carousel-item active">
       
        <div class="container">

            <!-- <div class="section-title">
                <h2>Produk Kue</h2>
                <p>Berbagai macam produk kue yang kami sediakan</p>
            </div> -->

            
           
            <div class="row">
                <p></p><p></p><p></p><p></p><p></p>
                <div class="section-title">
                    <h2>Produk Kue</h2>
                    <p>Berbagai macam produk kue yang kami sediakan</p>
                </div>
                    @foreach($data as $d)
                    <div class="col-lg-4" data-aos="fade-up">
                        <div class="box">
                        <h3>{{$d->nama}}</h3>
                        <img src="{{$d->gambar}}" width="308" height="200">
                        <h4>Rp. {{$d->harga}}</h4>

                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="card-body">
                    <a class="btn btn-warning" href="{{ route('produk.detail')}}"> Detail</a> 
                    <a class="btn btn-success" href="{{ route('produk.keranjang')}}"> Keranjang</a> 
                    <br></br>
                </div>

            </div>
            
        </div>
            </div>
        </div>
        </div>
        </section>
        </main><!-- End #main -->
  @endsection
