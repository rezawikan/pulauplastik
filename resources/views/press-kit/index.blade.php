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
            <h3>Photo</h3>
            <p>Coming Soon</p>
            {{-- <div class="row">
              <div class="col-md-6 col-sm-6 col-lg-4">
                <div class="card">
                  <a href="{{ asset('storage/img/photo/1.jpeg') }}" data-fancybox="images" data-caption="Backpackers following a dirt trail">
                    <img src="{{ asset('storage/img/photo/1.jpeg') }}" />
                    <div class="card-body">
                      <p class="card-text"><small class="text-muted">Pulau Plastik host Gede Robi Supriyanto di TPA Suwung, Denpasar (Photo credit: Asa Film)</small></p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-lg-4">
                <div class="card">
                  <a href="{{ asset('storage/img/photo/2.jpg') }}" data-fancybox="images" data-caption="Backpackers following a dirt trail">
                    <img src="{{ asset('storage/img/photo/2.jpg') }}" />
                    <div class="card-body">
                      <p class="card-text"><small class="text-muted">Pulau Plastik host Gede Robi Supriyanto memilah sampah plastik yang ditemukan di tepi jalan di Gianyar  (Photo credit: Asa Film)</small></p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-lg-4">
                <div class="card">
                  <a href="{{ asset('storage/img/photo/3.jpg') }}" data-fancybox="images" data-caption="Backpackers following a dirt trail">
                    <img src="{{ asset('storage/img/photo/3.jpg') }}" />
                    <div class="card-body">
                      <p class="card-text"><small class="text-muted">Pulau Plastik host Gede Robi Supriyanto berdialog dengan warga setempat yang terkena dampak sampah plastik (Photo credit: Andre Dananjaya/Kopernik)</small></p>
                    </div>
                  </a>
                </div>
              </div>
            </div> --}}
        </div>
    </div>
</div>

<!-- Press Release -->
<div id="press-release" class="container default-text py-4">
    <div class="row">
        <div class="col-md-12">
            <h3>Press Release</h3>
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
