@extends('layouts.apps')

@section('title',  'Pulau Plastik')

@section('tagline','Surga  Yang Terancam Sampah Plastik')

@section('description','Serial  edutainment bersama host Gede Robi (aktivis lingkungan dan vokalis band Navicula) menelusuri isu penanganan sampah plastik di Bali. Lebih Lanjut.')

@section('content')
<!-- Probelms -->
<div id="problems" class="container-fluid default-text transitions py-4 bg-soft">
    <div class="row">
        <div class="col-md-12">
            <div class="row no-gutters">
                <div class="col-md-6 flex-fill">
                    <div class="socmed">
                        <ul>
                            <li><a href="https://www.facebook.com/pulauplastik/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/pulauplastik/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCZ8v9tyreRJPOBjYrgLDHaw" target="_blank"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <p class="header text-uppercase" style="color:white;">ikuti kami</p>
                </div>
                <div class="col-md-6 flex-fill">
                    <div class="text-center border-side-custom">
                        <p class="header px-4 text-uppercase" style="color:white;">Waktu untuk bertindak adalah sekarang.. <br>atau Bali akan menjadi Pulau Plastik!</p>
                        <a href="https://goo.gl/Bisni1" target="_blank" class="btn btn-custom">Donasi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Video Trailer -->
<div class="trailer">
    <div class="row no-gutters">
        <div class="col-md-12" style="line-height: 0;">
            <iframe src="https://www.youtube.com/embed/4xUAUWcPq74?vq=hd1080" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            {{-- <video controls poster="{{ asset('img/poster.png')}}" width="100%">
              <source src="{{ asset('video/Pulau Plastik - official trailer.mp4') }}" type="video/mp4">
              Your browser does not support the video tag.
            </video> --}}
        </div>
    </div>
</div>

<!-- Description -->
<div class="bg-soft">
    <div class="container default-text p-4">
        <div class="row">
            <div class="col-md-12">
                <div class="container-inner-text" style="color:white;">
                    <p>Pulau Plastik adalah serial yang dipandu oleh musisi dan aktivis Gede Robi yang menyoroti pencemaran sampah plastik di Bali, serta mengupas fakta dibalik luapan sampah plastik yang berakhir di tempat pembuangan sampah, di
                        laut, dan di makanan kita.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Gede Robi -->
<div class="">
    <div class="row no-gutters">
        <div class="col-md-12 m-auto">
            <a href="#"><img src="{{asset('img/gede-robi-one.JPG')}}" class="" alt="Gede Robi - Navicula"></a>
        </div>
    </div>
</div>

<!-- Description -->
<div class="bg-soft">
    <div class="container default-text p-4">
        <div class="row">
            <div class="col-md-12">
                <div class="container-inner-text">
                    <p style="color:white;">Robi menyoroti masalah sampah dalam konteks budaya lokal sekaligus bertemu dengan para komunitas lokal yang telah memberikan solusi nyata. Serial ini bertujuan untuk membagi inspirasi dan membantu warga
                        membuat perubahan positif di Bali yang berkelanjutan.</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="">
    <div class="row no-gutters">
        <div class="col-md-12">
            <img src="{{asset('img/gede-robi-one.JPG')}}" target="_blank" alt="Robi Navicula">

      </div>
    </div>
</div> --}}

<!-- Horizontal Line -->
{{-- <div class="">
    <div class="container default-text p-4">
        <div class="row">
            <div class="col-md-12">
                <div class="container-inner-text">
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<!-- supported by -->
<div class="">
    <div class="container default-text py-4">
        <div class="row">
            <div class="col-md-12">
                <h6 class="text-center">Didukung Oleh</h6>
                <div class="container-text partners">
                    <div class="partner-col-25">
                        <a href="https://www.thebodyshop.co.id/"><img src="{{ asset('img/supported/body-shop.png') }}"></a>
                    </div>
                    <div class="partner-col-25">
                        <a href="https://www.fordfoundation.org/"><img src="{{ asset('img/supported/ford-foundation.png') }}"></a>
                    </div>
                    <div class="partner-col-25">
                        <a href="https://www.kemendagri.go.id/"><img src="{{ asset('img/supported/kemendagri.png') }}"></a>
                    </div>
                    <div class="partner-col-25">
                        <a href="https://www.nationalgeographic.com/"><img src="{{ asset('img/supported/nat-geo.png') }}"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Join Our movement -->
<!-- <div class="container default-text">
    <div class="row">
      <div class="col-md-12">
        <p>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting.</p>
        <form class="subscribe pb-4" action="index.html" method="POST">
          <div class="input-group input-group-md mb-3">
            <input type="text" class="form-control input-custom" placeholder="Enter your email" aria-label="Small" aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-custom bold" type="button" id="join-our-movement">JOIN OUR MOVEMENT</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  -->

@endsection

@section('footer')
@include('layouts.footer')
@endsection
