
@extends('layouts.home')

@section('title', 'Beranda Desa Mojosari')

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">
      @foreach ($sliders as $index => $slider)
        <!-- Slide 1 -->
        <div class="carousel-item {{$index === 0 ? 'active' : ''}}" style="background-image: url(image/{{$slider->image}})">
          <div class="container">
            <h2>{{$slider->title}}</h2>
            <p>{{$slider->description}}</p>
              
          </div>
        </div>
@endforeach
        

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">
    <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">
  
          <div class="section-title">
              <h2>Perangkat Desa Mojosari</h2>
          </div>
  
          <div id="doctorsCarousel" class="carousel slide">
              <div class="carousel-inner">
                  @foreach ($perangkatChunks as $key => $chunk)
                      <div class="carousel-item{{ $key === 0 ? ' active' : '' }}">
                          <div class="row">
                              @foreach ($chunk as $perangkat)
                                  <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                      <div class="member" data-aos="fade-up" data-aos-delay="100">
                                          <div class="member-img">
                                              <img src="image/{{ $perangkat->image }}" class="img-fluid" alt="">
                                          </div>
                                          <div class="member-info">
                                              <h4>{{ $perangkat->title }}</h4>
                                              <span>{{ $perangkat->description }}</span>
                                          </div>
                                      </div>
                                  </div>
                              @endforeach
                          </div>
                      </div>
                  @endforeach
              </div>
              <a class="carousel-control-prev" href="#doctorsCarousel" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
              </a>
              <a class="carousel-control-next" href="#doctorsCarousel" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
              </a>
          </div>
  
      </div>
  </section><!-- End Doctors Section -->


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Transparansi APBD Desa Mojosari</h3>
          <p> Dibawah adalah data transparansi dari Desa Mojosari pada tahun 2023</p>
          <a class="cta-btn scrollto" href="docs/transparansi.pdf" target="blank">Lihat detail</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
      @foreach ($sambutan as $sambutan)
        <div class="section-title">
          <h2>Sambutan Kepala Desa</h2>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="image/{{$sambutan->image}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>{{$sambutan->title}}</h3>
            <br>
            <p>
             {{$sambutan->description}}
            </p>
          </div>
        </div>
    @endforeach
      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Data Desa Mojosari</h2>
        </div>

        <div class="row">
        @foreach ($data as $data)
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon">
              <img src="image/{{$data->image}}" alt="" class="img-fluid" width="80">
              </div>
              <h4>{{$data->title}}</h4>
              <p class="description">{{$data->description}}</p>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Counts Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Dokumen Desa Mojosari</h2>
        </div>
        <div class="row">
          @foreach ($document as $document)
            <div class="col-lg-3 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
             <img src="image/{{$document->image}}" alt="" class="img-fluid" width="100">
              <h4>{{$document->title}}</h4>
              <p>{{$document->description}}</p> 
              <a class="cta-btn scrollto" href="docs/{{$document->document}}" target="blank">Lihat</a>  
           </div>
           @endforeach 
          </div>
      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Features Section ======= -->

    <section id="visimisi" class="features">
      <div class="container" data-aos="fade-up">

      <div class="section-title">
          <h2>Visi, Misi dan Motto</h2>
        </div>

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
            <div class="icon-box mt-5 mt-lg-0">
              <i class="bx bx-receipt"></i>
              <h4>Visi</h4>
              <p>Terwujudnya masyarakat yang beriman dan bertaqwa pada tuhan yang maha esa, serta Desa Mojosari yang aman, tentram, sejahtera, mandiri.</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-cube-alt"></i>
              <h4>Misi</h4>
              <p>
                1. Pemberdayaan masyarakat dengan mencipatakan peluang kerja dan wirausaha<br>
                2. Membina kerukunan antar umat beragama<br>
                3. Meningkatkan kerjasama dengan lembaga-lembaga Desa<br>
                4. Meningkatkan kualitas mutu pelayanan masyarakat<br>
                5. Meningkatkan etos kerja dan kinerja Pemerintah Desa<br>
                6. Membina generasi muda dalam wadah Karang Taruna yang solid dan mandiri<br>
                7. Meningkatkan rasa persatuan dan kesatuan antara anggota masyarakat<br>
                8. Menggali dan meningkatkan sumber-sumber pendapatan asli Desa<br>
                9.	Meningkatkan fasilitas peribadatan, pendidikan, dan kesehatan masyarakat<br>
                10.	Menciptakan keamanan, ketertiban, persatuan, dan kesatuan masyarakat
          </p>
            </div>
            {{-- <div class="icon-box mt-5">
              <i class="bx bx-images"></i>
              <h4>Motto</h4>
              <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
            </div> --}}
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/kepalamotto.png");' data-aos="zoom-in"></div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Informasi Layanan Desa Mojosari</h2>
        </div>

        <div class="row">
        @foreach ($service as $service)
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
           <img src="image/{{$service->image}}" alt="" class="img-fluid" width="100">
            <h4>{{$service->title}}</h4>
            <p>{{$service->description}}</p> 
            <a class="cta-btn scrollto" href="/informasi">Lihat detail</a>  
         </div>
         @endforeach 
        </div>

      </div>
    </section><!-- End Featured Services Section -->

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


  </main><!-- End #main -->

@endsection