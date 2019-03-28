<nav class="navbar navbar-expand-lg fixed-top navbar-dark">
  <a class="navbar-brand" href="/"><img class="small-logo" src="{{ asset('img/pulau_plastik_logo_black.png') }}" alt="Logo Pulau Plastik" style="width:50px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mc-auto">
      <li class="nav-item ml-1 mr-3">
        <a class="nav-link" href="/">BERANDA <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown ml-1 mr-3">
        <a class="nav-link default dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TENTANG FILM</a>
        <div class="dropdown-menu fade" aria-labelledby="navbarDropdown">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('the-series.index')}}#about-the-series" >TENTANG SERIAL</a>
          <a class="dropdown-item" href="{{route('the-series.index')}}#the-team">TIM</a>
          <a class="dropdown-item" href="{{route('the-series.index')}}#partners">REKAN</a>
        </div>
      </li>
      <li class="nav-item dropdown ml-1 mr-3">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PEMUTARAN FILM</a>
        <div class="dropdown-menu fade" aria-labelledby="navbarDropdown">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('screenings.index')}}#upcoming">MENDATANG</a>
          <a class="dropdown-item" href="{{route('host-a-screening.index')}}">SELENGGARAKAN PEMUTARAN</a>
        </div>
      </li>
      <li class="nav-item dropdown ml-1 mr-3">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        PERS</a>
        <div class="dropdown-menu fade" aria-labelledby="navbarDropdown">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('press-kit.index')}}#photo">FOTO</a>
          <a class="dropdown-item" href="{{route('press-kit.index')}}#press-release">Press Release</a>
        </div>
      </li>
      <li class="nav-item dropdown ml-1 mr-3">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        SUMBER DATA</a>
        <div class="dropdown-menu fade" aria-labelledby="navbarDropdown">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('infographic.index')}}">Infografik</a>
          <a class="dropdown-item" href="{{route('media.index')}}">Media</a>
          <a class="dropdown-item" href="{{route('others.index')}}">Penelitian dan dokumen</a>
        </div>
      </li>
      <li class="nav-item ml-1 mr-3">
        <a class="nav-link" href="{{ route('contact-us.index')}}">KONTAK</a>
      </li>
    </ul>
  </div>
</nav>
