@extends('layouts.app-default')

@section('title',  'The Series')

@section('tagline','Surga  Yang Terancam Sampah Plastik')

@section('description','Serial  edutainment bersama host Gede Robi (aktivis lingkungan dan vokalis band Navicula) menelusuri isu penanganan sampah plastik di Bali. Lebih Lanjut.')

@section('content')
  <!-- Probelms -->
  <div class="header-custom"></div>

  <!-- Descriotion Gede Robi -->
  <div id="about-the-series" class="container default-text py-4">
    <div class="row">
      <div class="col-md-12">
        <h3>About The Series</h3>
        <p>A video series that adopt an anthropological and cultural approach designed for local audiences and aimed at changing attitude and behavior towards waste and promoting better waste disposal practices.</p>
        <p>PULAU PLASTIK is an edutainment series developed by Kopernik and Akarumput which explores the issue of waste management in Bali and what challenges are being faced by Bali community groups and the government, while also highlighting best practices and sustainable solutions. Directed by Dandhy Laksono, with host Gede Robi of Navicula, the series will take a socio-cultural approach and examine the role of Balinese traditions and spirituality in waste management, as well as the role of art and music as a means to create an eco-conscious movement on the island.</p>
      </div>
    </div>
  </div>
  <!-- Descriotion Gede Robi -->
  <div id="the-team" class="container default-text py-4">
    <div class="row">
      <div class="col-md-12 mb-2">
          <h3>The Team</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="card border-reset">
              <a href="#" class="text-center">
              <img src="{{ asset('storage/img/team/gede-robi.jpg')}}" class="img-xs rounded-circle" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Gede Robi (Navicula)</h6>
                  <p class="card-text">Musician, Activist, TV Host, Famer</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="card border-reset">
              <a href="#" class="text-center">
              <img src="{{ asset('storage/img/team/dandhy-laksono.jpg')}}" class="img-xs rounded-circle" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Dandhy Laksono</h6>
                  <p class="card-text">WatchdoC, Journalist, Director, Documentary Producer</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="card border-reset">
              <a href="#" class="text-center">
              <img src="{{ asset('storage/img/team/shinta-retnani.jpg')}}" class="img-xs rounded-circle" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Shinta Retnani</h6>
                  <p class="card-text">Documentary Producer Asa Film</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="card border-reset">
              <a href="#" class="text-center">
              <img src="{{ asset('storage/img/team/nadia-astari.jpg')}}" class="img-xs rounded-circle" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Nadia Astari</h6>
                  <p class="card-text">Filmmaker</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="card border-reset">
              <a href="#" class="text-center">
              <img src="{{ asset('storage/img/team/lakota-moira.jpg')}}" class="img-xs rounded-circle" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Lakota Moira</h6>
                  <p class="card-text">Producer Akarumput</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="card border-reset">
              <a href="#" class="text-center">
              <img src="{{ asset('storage/img/team/ewa-wojkowska.jpg')}}" class="img-xs rounded-circle" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Ewa Wojkowska</h6>
                  <p class="card-text">Co-Founder, Kopernik Ex-UNDP, World Bank</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="card border-reset">
              <a href="#" class="text-center">
              <img src="{{ asset('storage/img/team/anna-baranova.jpg')}}" class="img-xs rounded-circle" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Anna Baranova</h6>
                  <p class="card-text">Associate Director, Kopernik</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="card border-reset">
              <a href="#" class="text-center">
              <img src="{{ asset('storage/img/team/andre-dananjaya.jpg')}}" class="img-xs rounded-circle" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Andre Dananjaya</h6>
                  <p class="card-text">Senior Communications Officer, Kopernik</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Partner -->
  <div id="partners" class="container-fluid default-text py-4 bg-grey">
    <div class="row">
      <div class="col-md-12">
        <h3>Partners</h3>
      </div>
      <div class="col-md-12">
        <div class="container-text partners">
          <div class="partner-col-20">
            <a href="#"><img src="{{ asset('img//partners/navicula.png') }}"></a>
          </div>
          <div class="partner-col-20">
            <a href="#"><img src="{{ asset('img//partners/kopernik.png') }}"></a>
          </div>
          <div class="partner-col-20">
            <a href="#"><img src="{{ asset('img//partners/akar-rumput.png') }}"></a>
          </div>
          <div class="partner-col-20">
            <a href="#"><img src="{{ asset('img//partners/asa-film.png') }}"></a>
          </div>
          <div class="partner-col-20">
            <a href="#"><img src="{{ asset('img//partners/nadia-astari.png') }}"></a>
          </div>
      </div>
    </div>
  </div>
  </div>

  <!-- Press -->
  <div id="press" class="container default-text py-4">
    <div class="row">
      <div class="col-md-12">
        <h3>Press</h3>
        <p>Coming Soon</p>
      </div>
    </div>
  </div>
@endsection

@section('footer')
@include('layouts.footer')
@endsection
