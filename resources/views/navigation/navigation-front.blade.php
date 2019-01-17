<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron full-height front-background transitions">
  <nav class="navbar navbar-expand-lg fixed-top navbar-light">
    <a class="navbar-brand d-sm-none" href="#" style="font-weight:bold; text-decoration:underline;">PULAU PLASTIK</a>
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mc-auto">
        <li class="nav-item ml-1 mr-3 active">
          <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown ml-1 mr-3">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          The Series</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('the-series.index')}}#upcoming">Upcoming</a>
            <a class="dropdown-item" href="{{route('the-series.index')}}#the-team">Host a Screenings</a>
          </div>
        </li>
        <li class="nav-item dropdown ml-1 mr-3">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Press Kit</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('the-series.index')}}#upcoming">Photo</a>
            <a class="dropdown-item" href="{{route('the-series.index')}}#the-team">Press Release</a>
          </div>
        </li>
        <li class="nav-item dropdown ml-1 mr-3">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Resources</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('the-series.index')}}#upcoming">Why is plastik a problem?</a>
            <a class="dropdown-item" href="{{route('the-series.index')}}#the-team">What can I do?</a>
            <a class="dropdown-item" href="{{route('the-series.index')}}#the-team">What is the government doing?</a>
          </div>
        </li>
        <li class="nav-item ml-1 mr-3">
          <a class="nav-link" href="news-and-events.html">Contact Us</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
    </div>
  </nav>
  <div class="container">
    {{-- <div class="front-logo">
      <img src="{{ asset('img/pulau_plastik_logo_white.png') }}" alt="Logo Pulau Plastik">
    </div> --}}
    <div class="front-arrow bounce">
      <img src="{{asset('img/arrow-down.png')}}" alt="Arrow">

    </div>
  </div>
</div>
