@extends('layouts.app-default')

@section('title',  'Press Kit')

@section('tagline','Surga  Yang Terancam Sampah Plastik')

@section('description','Serial  edutainment bersama host Gede Robi (aktivis lingkungan dan vokalis band Navicula) menelusuri isu penanganan sampah plastik di Bali. Lebih Lanjut.')

@section('content')
<!-- Probelms -->
<div class="header-custom"></div>

<!-- Descriotion Gede Robi -->
<div id="photo" class="container default-text py-4">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">Foto</h3>
            {{-- <p>Segera</p> --}}
            <div class="card-columns">
                <div class="card">
                  <a href="{{ asset('storage/img/photo/1.jpg') }}" data-fancybox="images" data-caption="">
                    <img src="{{ asset('storage/img/photo/1.jpg') }}" />
                  </a>
                </div>
                <div class="card">
                  <a href="{{ asset('storage/img/photo/2.jpg') }}" data-fancybox="images" data-caption="">
                    <img src="{{ asset('storage/img/photo/2.jpg') }}" />
                  </a>
                </div>
                <div class="card">
                  <a href="{{ asset('storage/img/photo/3.jpg') }}" data-fancybox="images" data-caption="">
                    <img src="{{ asset('storage/img/photo/3.jpg') }}" />
                  </a>
                </div>
                <div class="card">
                  <a href="{{ asset('storage/img/photo/4.jpg') }}" data-fancybox="images" data-caption="">
                    <img src="{{ asset('storage/img/photo/4.jpg') }}" />
                  </a>
                </div>
                <div class="card">
                  <a href="{{ asset('storage/img/photo/5.jpg') }}" data-fancybox="images" data-caption="">
                    <img src="{{ asset('storage/img/photo/5.jpg') }}" />
                  </a>
                </div>
                <div class="card">
                  <a href="{{ asset('storage/img/photo/6.jpg') }}" data-fancybox="images" data-caption="">
                    <img src="{{ asset('storage/img/photo/6.jpg') }}" />
                  </a>
                </div>
                <div class="card">
                  <a href="{{ asset('storage/img/photo/7.jpg') }}" data-fancybox="images" data-caption="">
                    <img src="{{ asset('storage/img/photo/7.jpg') }}" />
                  </a>
                </div>
                <div class="card">
                  <a href="{{ asset('storage/img/photo/8.jpg') }}" data-fancybox="images" data-caption="">
                    <img src="{{ asset('storage/img/photo/8.jpg') }}" />
                  </a>
                </div>
                <div class="card">
                  <a href="{{ asset('storage/img/photo/9.jpg') }}" data-fancybox="images" data-caption="">
                    <img src="{{ asset('storage/img/photo/9.jpg') }}" />
                  </a>
                </div>
                <div class="card">
                  <a href="{{ asset('storage/img/photo/10.jpg') }}" data-fancybox="images" data-caption="">
                    <img src="{{ asset('storage/img/photo/10.jpg') }}" />
                  </a>
                </div>
                <div class="card">
                  <a href="{{ asset('storage/img/photo/11.jpg') }}" data-fancybox="images" data-caption="">
                    <img src="{{ asset('storage/img/photo/11.jpg') }}" />
                  </a>
                </div>
                <div class="card">
                  <a href="{{ asset('storage/img/photo/12.jpg') }}" data-fancybox="images" data-caption="">
                    <img src="{{ asset('storage/img/photo/12.jpg') }}" />
                  </a>
                </div>
                <div class="card">
                  <a href="{{ asset('storage/img/photo/13.jpeg') }}" data-fancybox="images" data-caption="">
                    <img src="{{ asset('storage/img/photo/13.jpeg') }}" />
                  </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Press Release -->
<div id="press-release" class="container default-text py-4">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">Press Release</h3>
            <div class="container-inner-text mt-4">
              <div class="row">
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header bold"><a href="{{ asset('storage/files/Press_Release_ID.pdf')}}" target="_blank">Download Press Release - ID</a></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header bold"><a href="{{ asset('storage/files/Press_Release_ENG.pdf')}}" target="_blank">Download Press Release - EN</a></div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('footer')
@include('layouts.footer')
@endsection

@push('b-scripts')
  <script type="text/javascript">
    $('[data-fancybox="images"]').fancybox({
        buttons : [
          'slideShow',
          'share',
          'zoom',
          'fullScreen',
          'close'
        ],
        thumbs : {
          autoStart : true
        }
    });
  </script>
@endpush
