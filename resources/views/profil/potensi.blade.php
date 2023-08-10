
@extends('layouts.home')

@section('title', 'Potensi Desa Mojosari')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section>
  </section><!-- End Hero -->

  <main>
  <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Potensi Desa Mojosari</h2>
        </div>

        <div class="row">
          @foreach ($potensi as $potensi)
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" potensi-aos="fade-up" potensi-aos-delay="100">
                <div class="icon">
                <img src="/image/{{$potensi->image}}" alt="" class="img-fluid" width="80">
                </div>
                <h4>{{$potensi->title}}</h4>
                <p class="description">{{$potensi->description}}</p>
              </div>
            </div>
            @endforeach
          </div>

        </div>

      </div>
    </section>
  </main><!-- End #main -->

  @endsection