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
            <div class="row">
              <div class="col-md-6 col-sm-6 col-lg-4">
                <div class="card">
                  <a href="https://source.unsplash.com/juHayWuaaoQ/1500x1000" data-fancybox="images" data-caption="Backpackers following a dirt trail">
                    <img src="https://source.unsplash.com/juHayWuaaoQ/340x260" />
                    <div class="card-body">
                      <p class="card-text"><small class="text-muted">Backpackers following a dirt trail</small></p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-lg-4">
                <div class="card">
                  <a href="https://source.unsplash.com/juHayWuaaoQ/1500x1000" data-fancybox="images" data-caption="Backpackers following a dirt trail">
                    <img src="https://source.unsplash.com/juHayWuaaoQ/340x260" />
                    <div class="card-body">
                      <p class="card-text"><small class="text-muted">Backpackers following a dirt trail</small></p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-lg-4">
                <div class="card">
                  <a href="https://source.unsplash.com/juHayWuaaoQ/1500x1000" data-fancybox="images" data-caption="Backpackers following a dirt trail">
                    <img src="https://source.unsplash.com/juHayWuaaoQ/340x260" />
                    <div class="card-body">
                      <p class="card-text"><small class="text-muted">Backpackers following a dirt trail</small></p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-lg-4">
                <div class="card">
                  <a href="https://source.unsplash.com/juHayWuaaoQ/1500x1000" data-fancybox="images" data-caption="Backpackers following a dirt trail">
                    <img src="https://source.unsplash.com/juHayWuaaoQ/340x260" />
                    <div class="card-body">
                      <p class="card-text"><small class="text-muted">Backpackers following a dirt trail</small></p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-lg-4">
                <div class="card">
                  <a href="https://source.unsplash.com/juHayWuaaoQ/1500x1000" data-fancybox="images" data-caption="Backpackers following a dirt trail">
                    <img src="https://source.unsplash.com/juHayWuaaoQ/340x260" />
                    <div class="card-body">
                      <p class="card-text"><small class="text-muted">Backpackers following a dirt trail</small></p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-lg-4">
                <div class="card">
                  <a href="https://source.unsplash.com/juHayWuaaoQ/1500x1000" data-fancybox="images" data-caption="Backpackers following a dirt trail">
                    <img src="https://source.unsplash.com/juHayWuaaoQ/340x260" />
                    <div class="card-body">
                      <p class="card-text"><small class="text-muted">Backpackers following a dirt trail</small></p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

<!-- Press Release -->
<div id="press-release" class="container default-text py-4">
    <div class="row">
        <div class="col-md-12">
            <h3>Press Release</h3>
        </div>
        <div class="col-md-12">
            <p>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun.</p>
            <p>Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p>
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
