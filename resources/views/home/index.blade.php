@extends('layouts.app')

@section('title', 'Pulau Plastik')

@section('tagline','Surga Yang Terancam Sampah Plastik')

@section('description','Serial edutainment bersama host Gede Robi (aktivis lingkungan dan vokalis band Navicula) menelusuri isu penanganan sampah plastik di Bali. Lebih Lanjut.')

@section('content')
  <!-- Probelms -->
  <div id="problems" class="container default-text transitions pt-4 pb-4">
    <div class="row">
      <div class="col-md-12">
        <div class="row no-gutters">
          <div class="col-md-6 flex-fill">
            <div class="socmed">
              <ul>
                <li><a><i class="fab fa-facebook-f"></i></a></li>
                <li><a><i class="fab fa-instagram"></i></a></li>
                <li><a><i class="fab fa-youtube"></i></a></li>
              </ul>
            </div>
            <p class="text-uppercase">Join The Conversation</p>
          </div>
          <div class="col-md-6 flex-fill">
            <div class="text-center border-side-custom">
              <p class="px-5">A story hidden below the waves. A campaign to inspire action in unexpected places. </p>
              <a href="https://goo.gl/Bisni1" class="btn btn-custom">Donate</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Video Trailer -->
  <div class="">
    <div class="row no-gutters">
      <div class="col-md-12">
        <img src="{{asset('img/sampah.png')}}" target="_blank" alt="Robi Navicula">
      </div>
    </div>
  </div>

<!-- Description -->
  <div class="container default-text p-4">
    <div class="row">
      <div class="col-md-12">
        <p>Pulau Plastik is a series hosted by musician and activist Gede Robi that takes a critical look at the problem of plastic waste in Bali, uncovering the inconvenient truths about how it ends up in our landfills, our oceans and our food.</p>
      </div>
    </div>
  </div>

  <!-- Gede Robi -->
  <div class="">
    <div class="row no-gutters">
      <div class="col-md-12 m-auto">
        <a href="#"><img src="{{asset('img/gede-robi.jpg')}}" class="" alt="Gede Robi - Navicula"></a>
      </div>
    </div>
  </div>

  <!-- Description -->
  <div class="container default-text p-4">
    <div class="row">
      <div class="col-md-12">
        <p>Robi examines the issue of plastic and waste in the context of Balinese culture and meets local champions behind real solutions to inspire and help Bali residents create positive change on their island.</p>
      </div>
    </div>
  </div>

  <!-- supported by -->
  <div class="container default-text pb-4">
    <div class="row">
      <div class="col-md-12">
        <h6>supported By</h6>
        <div class="container-text partners">
          <div class="partner-col-25">
            <a href="#"><img src="{{ asset('img/supported/body-shop.png') }}"></a>
          </div>
          <div class="partner-col-25">
            <a href="#"><img src="{{ asset('img/supported/ford-foundation.png') }}"></a>
          </div>
          <div class="partner-col-25">
            <a href="#"><img src="{{ asset('img/supported/kemendagri.png') }}"></a>
          </div>
          <div class="partner-col-25">
            <a href="#"><img src="{{ asset('img/supported/nat-geo.png') }}"></a>
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
