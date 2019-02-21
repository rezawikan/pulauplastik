<nav class="navbar navbar-expand-lg fixed-top navbar-dark">
  <a class="navbar-brand" href="/"><img class="small-logo" src="{{ asset('img/pulau_plastik_logo_black.png') }}" alt="Logo Pulau Plastik" style="width:50px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mc-auto">
      <li class="nav-item ml-1 mr-3">
        <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown ml-1 mr-3">
        <a class="nav-link default dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        The Series</a>
        <div class="dropdown-menu fade" aria-labelledby="navbarDropdown">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('the-series.index')}}#about-the-series" >About The Series</a>
          <a class="dropdown-item" href="{{route('the-series.index')}}#the-team">The Team</a>
          <a class="dropdown-item" href="{{route('the-series.index')}}#partners">Partners</a>
          <a class="dropdown-item" href="{{route('the-series.index')}}#press">Press</a>
        </div>
      </li>
      <li class="nav-item dropdown ml-1 mr-3">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Screenings</a>
        <div class="dropdown-menu fade" aria-labelledby="navbarDropdown">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('screenings.index')}}#upcoming">Upcoming</a>
          <a class="dropdown-item" href="{{route('host-a-screening.index')}}">Host a Screening</a>
        </div>
      </li>
      <li class="nav-item dropdown ml-1 mr-3">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Press Kit</a>
        <div class="dropdown-menu fade" aria-labelledby="navbarDropdown">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('press-kit.index')}}#photo">Photo</a>
          <a class="dropdown-item" href="{{route('press-kit.index')}}#press-release">Press Release</a>
        </div>
      </li>
      <li class="nav-item dropdown ml-1 mr-3">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Resources</a>
        <div class="dropdown-menu fade" aria-labelledby="navbarDropdown">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('resources.index')}}#why-is-plastik-a-problem">Why is plastik a problem?</a>
          <a class="dropdown-item" href="{{route('resources.index')}}#what-can-i-do">What can I do?</a>
          <a class="dropdown-item" href="{{route('resources.index')}}#what-is-the-government-doing">What is the government doing?</a>
        </div>
      </li>
      <li class="nav-item ml-1 mr-3">
        <a class="nav-link" href="{{ route('contact-us.index')}}">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>
