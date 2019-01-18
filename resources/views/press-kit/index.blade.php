@extends('layouts.app-default')

@section('title',  'Press Kit')

@section('tagline','Surga  Yang Terancam Sampah Plastik')

@section('description','Serial  edutainment bersama host Gede Robi (aktivis lingkungan dan vokalis band Navicula) menelusuri isu penanganan sampah plastik di Bali. Lebih Lanjut.')

@section('content')
<!-- Probelms -->
<div class="header-custom"></div>

<!-- Descriotion Gede Robi -->
<div id="about-the-series" class="container default-text">
    <div class="row">
        <div class="col-md-12">
            <div class="py-4">
                <h3>About The Series</h3>
                <p>A video series that adopt an anthropological and cultural approach designed for local audiences and aimed at changing attitude and behavior towards waste and promoting better waste disposal practices.</p>
                <p>PULAU PLASTIK is an edutainment series developed by Kopernik and Akarumput which explores the issue of waste management in Bali and what challenges are being faced by Bali community groups and the government, while also
                    highlighting
                    best practices and sustainable solutions. Directed by Dandhy Laksono, with host Gede Robi of Navicula, the series will take a socio-cultural approach and examine the role of Balinese traditions and spirituality in waste
                    management, as
                    well as the role of art and music as a means to create an eco-conscious movement on the island.</p>
            </div>
        </div>
    </div>
</div>
<!-- Descriotion Gede Robi -->
<div id="the-team" class="container default-text pb-4">
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
                        <a href="join-us-for-the-lauch-of-pulau-plastik.html" class="text-center">
                        <img src="https://v1.kopernik.info/pictures/team/Ewa_Wojkowska.JPG" class="img-xs rounded-circle" alt="...">
                        <div class="card-body">
                          <h6 class="card-title">Ewa Wojkowska</h6>
                          <p class="card-text">Ewa co-founded Kopernik after a decade of work with the United Nations and</p>
                          <p class="card-text"><small class="text-muted">16 December 2018</small></p>
                        </div>
                      </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-lg-3">
                    <div class="card border-reset">
                        <a href="join-us-for-the-lauch-of-pulau-plastik.html" class="text-center">
                        <img src="https://v1.kopernik.info/pictures/team/Ewa_Wojkowska.JPG" class="img-xs rounded-circle" alt="...">
                        <div class="card-body">
                          <h6 class="card-title">Ewa Wojkowska</h6>
                          <p class="card-text">Ewa co-founded Kopernik after a decade of work with the United Nations and</p>
                          <p class="card-text"><small class="text-muted">16 December 2018</small></p>
                        </div>
                      </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-lg-3">
                    <div class="card border-reset">
                        <a href="join-us-for-the-lauch-of-pulau-plastik.html" class="text-center">
                        <img src="https://v1.kopernik.info/pictures/team/Ewa_Wojkowska.JPG" class="img-xs rounded-circle" alt="...">
                        <div class="card-body">
                          <h6 class="card-title">Ewa Wojkowska</h6>
                          <p class="card-text">Ewa co-founded Kopernik after a decade of work with the United Nations and</p>
                          <p class="card-text"><small class="text-muted">16 December 2018</small></p>
                        </div>
                      </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-lg-3">
                    <div class="card border-reset">
                        <a href="join-us-for-the-lauch-of-pulau-plastik.html" class="text-center">
                        <img src="https://v1.kopernik.info/pictures/team/Ewa_Wojkowska.JPG" class="img-xs rounded-circle" alt="...">
                        <div class="card-body">
                          <h6 class="card-title">Ewa Wojkowska</h6>
                          <p class="card-text">Ewa co-founded Kopernik after a decade of work with the United Nations and</p>
                          <p class="card-text"><small class="text-muted">16 December 2018</small></p>
                        </div>
                      </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Partner -->
<div class="container default-text py-4">
    <div class="row">
        <div class="col-md-12">
            <h3>Partner</h3>
        </div>
        <div class="col-md-12">
          <div class="is-fullwidth m-auto img-partner">
              <a href="#"><img src="{{asset('img/partner-two.png')}}" alt="Partners"></a>
          </div>
        </div>
    </div>
</div>

<!-- Press -->
<div class="container default-text py-4">
    <div class="row">
        <div class="col-md-12">
            <h3>Press</h3>
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
