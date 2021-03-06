<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron full-height front-background transitions">
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent">
    <a class="navbar-brand" href="/"><img class="small-logo" src="{{ asset('img/pulau_plastik_logo_whites.png') }}" alt="Logo Pulau Plastik" style="width:50px;"></a>
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mc-auto">
        <li class="nav-item ml-1 mr-3 active">
          <a class="nav-link" href="/">BERANDA <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown ml-1 mr-3">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TENTANG FILM</a>
          <div class="dropdown-menu fade home" aria-labelledby="navbarDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('the-series.index')}}#about-the-series" >TENTANG SERIAL</a>
            {{-- <a class="dropdown-item" href="{{route('the-series.index')}}#the-team">TIM</a> --}}
            <a class="dropdown-item" href="{{route('the-series.index')}}#partners">REKAN</a>
          </div>
        </li>
        <li class="nav-item dropdown ml-1 mr-3">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PEMUTARAN FILM</a>
          <div class="dropdown-menu fade" aria-labelledby="navbarDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('screenings.index')}}#upcoming">MENDATANG</a>
            <a class="dropdown-item" href="{{route('host-a-screening.index')}}">SELENGGARAKAN FILM</a>
          </div>
        </li>
        <li class="nav-item dropdown ml-1 mr-3">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PERS</a>
          <div class="dropdown-menu fade" aria-labelledby="navbarDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('press-kit.index')}}#photo">FOTO</a>
            <a class="dropdown-item" href="{{route('press-kit.index')}}#press-release">Press Release</a>
          </div>
        </li>
        <li class="nav-item dropdown ml-1 mr-3">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SUMBER DATA</a>
          <div class="dropdown-menu fade" aria-labelledby="navbarDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('infographic.index')}}">Infografik</a>
            <a class="dropdown-item" href="{{route('media.index')}}">Media</a>
            <a class="dropdown-item" href="{{route('others.index')}}">Penelitian dan dokumen lainnya</a>
          </div>
        </li>
        <li class="nav-item ml-1 mr-3">
          <a class="nav-link" href="{{ route('contact-us.index')}}">KONTAK</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">

    {{-- <div class="btn-front">
      <div class="row">
        <div class="col-md-4">
          asd
        </div>
        <div class="col-md-4">
          ads
        </div>
        <div class="col-md-4">
          asdasd
        </div>
      </div>
    </div> --}}
    <div class="front-logo">
      <img src="{{ asset('img/pulau_plastik_logo_white.png') }}" alt="Logo Pulau Plastik">
    </div>
    {{-- <div class="front-text">
      <p>Waktu untuk bertindak adalah sekarang.. <br>atau Bali akan menjadi Pulau Plastik!</p>
    </div> --}}
    {{-- <div class="front-container-btn">
      <ul>
        <li><a href="https://youtu.be/4xUAUWcPq74" data-fancybox class="btn btn-custom">Tonton Trailer</a></li>
        <li><a href="https://www.youtube.com/channel/UCZ8v9tyreRJPOBjYrgLDHaw" target="_blank" class="btn btn-custom">Tonton serial</a></li>
        <li><a href="https://goo.gl/Bisni1" class="btn btn-custom">beraksi sekarang</a></li>
      </ul>
    </div> --}}
    <div class="front-arrow bounce">
      <img src="{{asset('img/arrow-down.png')}}" alt="Arrow">
    </div>
  </div>
</div>
