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
                <h3>Upcoming</h3>
                <img src="{{ asset('storage/img/main/potato-head-event-header.jpg')}}" alt="">
                <p>The momentum to take action against Bali's plastic waste problem is rising, which means it's the perfect time to share Pulau Plastik, our exciting new series exploring the issue of waste and featuring local initiatives across the island. We invite you to join us for the launch of Pulau Plastik at Potato Head Bali. For RSVP, please fill the <a href="https://goo.gl/dMG3Ri">form</a>.</p>
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
            <h3>Host A Screening</h3>
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
