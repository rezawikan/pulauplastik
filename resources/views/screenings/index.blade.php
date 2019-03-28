@extends('layouts.app-default')

@section('title', 'Pemuataran Film')

@section('tagline','Surga Yang Terancam Sampah Plastik')

@section('description','Serial edutainment bersama host Gede Robi (aktivis lingkungan dan vokalis band Navicula) menelusuri isu penanganan sampah plastik di Bali. Lebih Lanjut.')

@section('content')
<!-- Probelms -->
<div class="header-custom"></div>

<!-- Upcoming RSVP -->
<div id="upcoming" class="container-fluid default-text">
    <div class="row">
        <div class="col-md-12">
            <div class="py-4 container-inner-text">
                <h3 class="text-center">Mendatang</h3>
                <p>--</p>
                {{-- <img src="{{ asset('storage/img/main/idn.jpeg')}}" alt="">
                <p>IDN Community Bali ingin mengajak generasi millennials dan Gen-Z untuk berbagi bersama sekaligus mengkampanyekan tentang kesadaran akan bahaya plastik dan bagaimana caranya bisa menerapkan "diet plastik" serta berbagi ilmu mengenai cara pengelolaan sampah plastik.</p>

                <p>Acara ini GRATIS dan terbuka untuk umum namun tempat terbatas. Amankan tempatmu sekarang juga dengan daftar di <a href="http://bit.ly/IDNTimesComBali1">http://bit.ly/IDNTimesComBali1</a> <br>Kita tunggu ya kedatanganmu. Mari budayakan diet plastik dan sampai jumpa!</p>

                <h6 class="text-center">Waktu</h6>
                <p class="bold">Sabtu, 23 Februari 2019 | 12:30 - 17:00 WITA</p>
                <h6 class="text-center">Tempat</h6>
                <p class="bold">KE{M}BALI Innovation Hub <br> Jalan Sunset Road No 28, Seminyak, Kuta, Kabupaten Badung, Bali.</p>
                <h6 class="text-center">Detail Acara</h6>
                <p class="bold">Sharing Session bersama dengan:<br>
                  Muharram Atha Rasyadi (Juru Kampanye Urban Greenpeace Indonesia)<br>
                  Fajar Lukman Hakim (GIS Specialist Cust. Development Spv Gringgo)<br>
                  Screening film "Pulau Plastik" bersama dengan Andre Dananjaya (Senior Communication Officer Kopernik)<br>
                  Dipandu oleh Luh De Dwi Jayanti dari Koor Plastik Detox Bali.
                </p>

                <br>
                <hr style="border-top: 2px solid rgba(0, 0, 0, 0.1);">
                <br>

                <img src="{{ asset('storage/img/main/pica.png')}}" alt="">
                <p>Bagi kalian yang berada di Denpasar & Sanur, kini saatnya untuk merapat dan nonton Pulau Plastik pada rangkaian acara PICA Fest, tanggal 24 Februari 2019, pukul 17.00 Wita, di Pantai Matahari Terbit, Sanur. Turut hadir Bli Gede Robi pada sesi diskusi setelah pemutaran. Catat tanggalnya dan sampai bertemu!</p>

                <h6 class="text-center">Waktu</h6>
                <p class="bold">Minggu, 24 Februari 2019 | 17:00 - 18:00 WITA</p>
                <h6 class="text-center">Tempat</h6>
                <p class="bold">Pantai Matahari Terbit, Sanur, Bali.</p>
                <h6 class="text-center">Detail Acara</h6>
                <p class="bold">Pemutaran film Pulau Plastik dan Talkshow bersama Gede Robi</p> --}}

            </div>
        </div>
    </div>
</div>

<!-- Host A Screenings -->
{{-- <div id="host-a-screening" class="container default-text py-4">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">Selenggarakan Pemutaran</h3>
        </div>
        <div class="col-md-12">
            <p>Segera</p>
        </div>
    </div>
</div> --}}


@endsection

@section('footer')
@include('layouts.footer')
@endsection
