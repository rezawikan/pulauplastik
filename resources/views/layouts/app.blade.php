<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') | @yield('tagline')</title>
    <meta name="description" content="Serial edutainment bersama host Gede Robi (aktivis lingkungan dan vokalis band Navicula) menelusuri isu penanganan sampah plastik di Bali. Lebih Lanjut.">

    <meta property="og:url" content="http://pulauplastik.org" />
    <meta property="og:title" content="@yield('title') | @yield('tagline')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:image" content="http://pulauplastik.org/assets/pulau-plastik.png" />

    <!-- Icon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="og:title" content="Pulau Plastik"/>
    <meta name="og:description" content="Serial edutainment bersama host Gede Robi (aktivis lingkungan dan vokalis band Navicula) menelusuri isu penanganan sampah plastik di Bali. Lebih Lanjut."/>
    <meta name="author" content="Mochammad Rezza Wikandito, reza.wikan.dito@gmail.com">
    <meta name="owner" content="Kopernik (NGO)">
    <link rel='fluid-icon' type='image/png' href='https://intranet.kopernik.info/img/k-icon.png'>

    <!-- App styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @stack('t-scripts')

</head>
<body>

  <main role="main" id="app">

    @include('navigation.navigation-front')

    @yield('content')

  </main>

  @yield('footer')

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

  <!-- Mainly scripts -->
  <script src="{{ mix('js/app.js') }}"></script>
  <script src="{{ mix('js/vegas.js') }}"></script>
  <script src="{{ mix('js/jquery.fancybox.js') }}"></script>

  <script type="text/javascript" src="{{asset('js/home.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>

  <!-- Custom -->
  @stack('b-scripts')

</body>
</html>
