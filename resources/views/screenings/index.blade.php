@extends('layouts.app-default')

@section('title',  'Screenings')

@section('tagline','Surga  Yang Terancam Sampah Plastik')

@section('description','Serial  edutainment bersama host Gede Robi (aktivis lingkungan dan vokalis band Navicula) menelusuri isu penanganan sampah plastik di Bali. Lebih Lanjut.')

@section('content')
<!-- Probelms -->
<div class="header-custom"></div>

<!-- Upcoming RSVP -->
<div id="upcoming" class="container-fluid default-text">
    <div class="row">
        <div class="col-md-12">
            <div class="py-4">
                <h3>Upcoming</h3>
                <div class="frame">
                  <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSe9rmyVK6YRBNXpdXu_uuC2paorBiYhSTNU1MlUx8lw8QGSnA/viewform?embedded=true"  frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Host A Screenings -->
<div id="host-a-screenings" class="container default-text py-4">
    <div class="row">
        <div class="col-md-12">
            <h3>Host A Screening</h3>
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
