@extends('layouts.app-default')

@section('title',  'Tentang Serial')

@section('tagline','Surga  Yang Terancam Sampah Plastik')

@section('description','Serial  edutainment bersama host Gede Robi (aktivis lingkungan dan vokalis band Navicula) menelusuri isu penanganan sampah plastik di Bali. Lebih Lanjut.')

@section('content')
  <!-- Probelms -->
  <div class="header-custom"></div>

  <!-- Descriotion Gede Robi -->
  <div id="about-the-series" class="container default-text py-4">
    <div class="row">
      <div class="col-md-12">
        <h3 class="text-center">Tentang Serial</h3>
        <p>Serial video dengan pendekatan antropologis dan budaya yang dirancang untuk penonton lokal, bertujuan untuk mengubah perilaku publik terhadap masalah sampah plastik sekaligus menunjukan sistem pengelolaan sampah yang lebih baik.</p>
        <p>PULAU PLASTIK merupakan seri edutainment yang diproduksi oleh Kopernik dan Akarumput. Serial ini mengeksplorasi masalah pengelolaan sampah di Bali, serta tantangan yang sedang dihadapi oleh masyarakat Bali dan pemerintah. Serial ini juga turut menyoroti kebiasaan baik dan solusi yang berkelanjutan. Disutradarai oleh Dandhy Laksono, dengan pembawa acara Gede Robi dari Navicula, serial ini menggunakan pendekatan sosial-budaya dan menunjukan peran tradisi dan spiritual Bali dalam pengelolaan limbah, sekaligus peran seni dan musik sebagai medium kampanye untuk mendorong gerakan ramah lingkungan.</p>
      </div>
    </div>
  </div>
  <!-- Descriotion Gede Robi -->
  <div id="the-team" class="container-fluid default-text py-4">
    <div class="row">
      <div class="col-md-12 mb-2">
          <h3 class="text-center">Tim</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-lg-3 d-flex py-3">
            <div class="card card-team border-reset">
              <a href="#" class="text-center">
              <img src="{{ asset('storage/img/team/gede-robi.jpg')}}" class="img-xs rounded-circle" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Gede Robi (Navicula)</h6>
                  <p class="card-text">Musisi, Aktifis, Pemandu Acara, Petani</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3 d-flex py-3">
            <div class="card card-team border-reset">
              <a href="#" class="text-center">
              <img src="{{ asset('storage/img/team/dandhy-laksono.jpg')}}" class="img-xs rounded-circle" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Dandhy Laksono</h6>
                  <p class="card-text">WatchDoc, Jurnalis, Sutradara, Produser Dokumenter</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3 d-flex py-3">
            <div class="card card-team border-reset">
              <a href="#" class="text-center">
              <img src="{{ asset('storage/img/team/shinta-retnani.jpg')}}" class="img-xs rounded-circle" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Shinta Retnani</h6>
                  <p class="card-text">Produser Dokumenter ASA Film</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3 d-flex py-3">
            <div class="card card-team border-reset">
              <a href="#" class="text-center">
              <img src="{{ asset('storage/img/team/nadia-astari.jpg')}}" class="img-xs rounded-circle" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Nadia Astari</h6>
                  <p class="card-text">Pembuat Film</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3 d-flex py-3">
            <div class="card card-team border-reset">
              <a href="#" class="text-center">
              <img src="{{ asset('storage/img/team/lakota-moira.jpg')}}" class="img-xs rounded-circle" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Lakota Moira</h6>
                  <p class="card-text">Produser Akarumput</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3 d-flex py-3">
            <div class="card card-team border-reset">
              <a href="#" class="text-center">
              <img src="{{ asset('storage/img/team/ewa-wojkowska.jpg')}}" class="img-xs rounded-circle" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Ewa Wojkowska</h6>
                  <p class="card-text">Pendiri Kopernik</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3 d-flex py-3">
            <div class="card card-team border-reset">
              <a href="#" class="text-center">
              <img src="{{ asset('storage/img/team/anna-baranova.jpg')}}" class="img-xs rounded-circle" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Anna Baranova</h6>
                  <p class="card-text">Direktur Rekanan Kopernik</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3 d-flex py-3">
            <div class="card card-team border-reset">
              <a href="#" class="text-center">
              <img src="{{ asset('storage/img/team/andre-dananjaya.jpg')}}" class="img-xs rounded-circle" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Andre Dananjaya</h6>
                  <p class="card-text">Staff Komunikasi Senior</p>
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
        <h3 class="text-center">Rekan</h3>
      </div>
      <div class="col-md-12">
        <div class="container-text partners">
          <div class="partner-col-20">
            <a href="http://www.naviculamusic.com/"><img src="{{ asset('img//partners/navicula.png') }}"></a>
          </div>
          <div class="partner-col-20">
            <a href="https://kopernik.info/"><img src="{{ asset('img//partners/kopernik.png') }}"></a>
          </div>
          <div class="partner-col-20">
            <a href="#"><img src="{{ asset('img//partners/akar-rumput.png') }}"></a>
          </div>
          <div class="partner-col-20">
            <a href="https://asafilm.co/"><img src="{{ asset('img//partners/asa-film.png') }}"></a>
          </div>
          <div class="partner-col-20">
            <a href="http://www.nadiaastari.com/"><img src="{{ asset('img//partners/nadia-astari.png') }}"></a>
          </div>
      </div>
    </div>
  </div>
  </div>
@endsection

@section('footer')
@include('layouts.footer')
@endsection
