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
            <div class="py-4 container-inner-text">
                <h3 class="text-center">Upcoming</h3>
                <img src="{{ asset('storage/img/main/potato-head-event-header.jpg')}}" alt="">
                <p>Momentum untuk beraksi terhadap masalah sampah plastik di Bali semakin meningkat. Sekarang adalah waktu yang tepat untuk meluncurkan Pulau Plastik, serial menarik terbaru kami yang menelusuri masalah sampah dengan melibatkan inisiatif lokal di seluruh pulau Bali. Kami mengundang Anda untuk bergabung di acara peluncuran Pulau Plastik di Potato Head Bali. Untuk reservasi, mohon mengisi <a href="https://goo.gl/dMG3Ri">form</a> ini.</p>
                {{-- <div class="frame">
                  <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSe9rmyVK6YRBNXpdXu_uuC2paorBiYhSTNU1MlUx8lw8QGSnA/viewform?embedded=true"  frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
                </div> --}}
            </div>
        </div>
    </div>
</div>

<!-- Host A Screenings -->
<div id="host-a-screenings" class="container default-text py-4">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">Host A Screening</h3>
        </div>
        <div class="col-md-12">
            <p>Coming Soon</p>
        </div>
    </div>
</div>


@endsection

@section('footer')
@include('layouts.footer')
@endsection
