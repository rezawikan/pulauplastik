@extends('layouts.app-default')

@section('title', 'FAQ')

@section('tagline','Surga  Yang Terancam Sampah Plastik')

@section('description','Serial  edutainment bersama host Gede Robi (aktivis lingkungan dan vokalis band Navicula) menelusuri isu penanganan sampah plastik di Bali. Lebih Lanjut.')

@section('content')
<!-- Probelms -->
<div class="header-custom"></div>

<!-- Why is plastik a problem? -->
<div id="kenapa-plastik-menjadi-masalah" class="container default-text">
    <div class="row">
        <div class="col-md-12">
            <div class="py-4">
                <h3 class="text-center">Kenapa plastik menjadi masalah?</h3>
                <p>Indonesia adalah penyumbang sampah plastik ke lautan kedua di dunia setelah Cina. Jika keadaan ini berlangsung terus-menerus, diperkirakan pada tahun 2050 akan lebih banyak plastik di laut dibandingkan ikan. Pencemaran sampah plastik dan ancaman bencana ekologi yang dihasilkan oleh plastik berdampak sangat buruk bagi keseimbangan antara lingkungan, hewan, dan manusia.</p>
                <br>
                <div class="row">
                  <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card">
                      <div class="card-body">
                        <div class="text-center">
                          <img src="{{ asset('img/resources/family-group.png')}}" style="width:2em;padding-bottom:.5em;">
                        </div>
                        <h6 class="card-title text-center">Manusia</h6>
                        <p class="card-text">Zat kimia berbahaya pada plastik dapat menyebabkan kanker, cacat lahir, gangguan imunitas, dan masalah kesehatan lainnya.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card">
                      <div class="card-body">
                        <div class="text-center">
                          <img src="{{ asset('img/resources/fish.png')}}" style="width:2em;padding-bottom:.5em;">
                        </div>
                        <h6 class="card-title text-center">Hewan</h6>
                        <p class="card-text">Dampak buruk dari sampah plastik adalah puluhan ribu burung, anjing laut, penyu, dan hewan lainnya terperangkap sampah plastik. Plastik yang tertelan tidak dapat dicerna sehingga akan menyumbat usus dan dapat berujung kematian.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card">
                      <div class="card-body">
                        <div class="text-center">
                          <img src="{{ asset('img/resources/sprout.png')}}" style="width:2em;padding-bottom:.5em;">
                        </div>
                        <h6 class="card-title text-center">Lingkungan</h6>
                        <p class="card-text">Plastik tidak dapat terurai di alam. Bukan hanya akumulasi plastik yang membahayakan lingkungan, mikroplastik dan racun di dalam plastik yang dilepaskan selama dekomposisi akan merusak kesuburan tanah sekaligus menyebabkan kontaminasi pada air.</p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- What can I do? -->
<div id="apa-yang-bisa-saya-lakukan" class="container default-text">
    <div class="row">
        <div class="col-md-12">
            <div class="py-4">
                <h3 class="text-center">Apa yang bisa saya lakukan?</h3>
                <p>Cara paling ampuh untuk mengurangi sampah plastik adalah untuk tidak menggunakan plastik sekali pakai. Mengubah pola pikir dan kebiasaan kita dalam menggunakan plastik dibutuhkan untuk memberi perubahan di keadaan saat ini.</p>
                <blockquote class="blockquote">
                  <p class="mb-0 bold">Tolak dan kurangi pemakaian plastik sekali pakai</p>
                </blockquote>
                <p>Plastik sekali pakai seperti kantong plastik, botol air kemasan, sedotan, gelas, wadah makanan, dan barang plastik lainnya menjadi sumber polutan yang besar dari total sampah yang ditemukan di laut dan darat. Menolak plastik sekali pakai dengan membawa barang-barang yang dapat digunakan kembali, seperti : membawa tas belanja, botol minum, peralatan makan sendiri, akan menjadi solusi nyata untuk menjaga bumi tetap lestari.</p>
                <div class="row">
                  <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card">
                      <div class="card-body">
                        <div class="text-center">
                          <img src="{{ asset('img/resources/shopping-bag.png')}}" style="width:60%;padding-bottom:.5em;">
                        </div>
                        <h6 class="card-title text-center">Bawa Tasmu Sendiri</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card">
                      <div class="card-body">
                        <div class="text-center">
                          <img src="{{ asset('img/resources/water-bottle.png')}}" style="width:60%;padding-bottom:.5em;">
                        </div>
                        <h6 class="card-title text-center">Bawa Tumblermu Sendiri</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card">
                      <div class="card-body">
                        <div class="text-center">
                          <img src="{{ asset('img/resources/straw.png')}}" style="width:60%;padding-bottom:.5em;">
                        </div>
                        <h6 class="card-title text-center">Stop Menggunakan Sedotan Plastik</h6>
                      </div>
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
