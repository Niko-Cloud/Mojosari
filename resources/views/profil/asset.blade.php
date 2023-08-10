
@extends('layouts.home')

@section('title', 'Aset Desa Mojosari')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section>
  </section><!-- End Hero -->

  <main>
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Aset Desa Mojosari</h2>
        </div>

        <div class="row">
          @foreach ($asset as $asset)
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" asset-aos="fade-up" asset-aos-delay="100">
                <div class="icon">
                <img src="/image/{{$asset->image}}" alt="" class="img-fluid" width="80">
                </div>
                <h4>{{$asset->title}}</h4>
                <p class="description">{{$asset->description}}</p>
              </div>
            </div>
            @endforeach
          </div>

        </div>

      </div>
    </section>
  </main><!-- End #main -->

 @endsection