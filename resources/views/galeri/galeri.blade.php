
@extends('layouts.home')

@section('title', 'Beranda Desa Mojosari')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section>
  </section><!-- End Hero -->

    <!-- ======= Featured Services Section ======= -->
    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Galeri Desa Mojosari</h2>
        </div>

        <div class="gallery-slider swiper">
       
          <div class="swiper-wrapper align-items-center">
          @foreach ($galeri as $index => $galeri)
            <div class="swiper-slide{{$index === 0 ? 'active' : ''}}">
              <a class="gallery-lightbox" href="image/{{$galeri->image}}"> <img src="image/{{$galeri->image}}" class="img-fluid" alt=""> </a>
           
            </div>
            @endforeach
            </div>
            <div class="swiper-pagination">
            
            </div>
          
      
        </div>

      </div>
    </section><!-- End Gallery Section -->

  <main>
  </main><!-- End #main -->

@endsection