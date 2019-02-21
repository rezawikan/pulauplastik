@extends('layouts.app-default')

@push('t-scripts')
  <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@endpush


@section('title',  'Host A Screening')

@section('tagline','Surga  Yang Terancam Sampah Plastik')

@section('description','Serial  edutainment bersama host Gede Robi (aktivis lingkungan dan vokalis band Navicula) menelusuri isu penanganan sampah plastik di Bali. Lebih Lanjut.')

@section('content')
<!-- Probelms -->
<div class="header-custom"></div>

<!-- Descriotion Gede Robi -->
<div class="container default-text contact-us mt-5">
  <div class="row">
    <div class="col-md-12">
      <div class="container-inner-form">
        <h3 class="text-center">Host A Screening</h3>
        @if (session('status'))
            <div class="alert alert-success alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                {{ session('status') }}.
            </div>
        @endif
        <form class="bg-soft-two" method="POST" action="{{ route('host-a-screening.store')}}">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="firtName">Nama Depan *</label>
              <input type="text" class="form-control" name="firstName" required>
            </div>
            <div class="form-group col-md-6">
              <label for="lastName">Nama Belakang</label>
              <input type="text" class="form-control" name="lastName" required>
            </div>
            <div class="form-group col-md-6">
              <label for="lastName">Alamat Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group col-md-6">
              <label for="lastName">No. Kontak</label>
              <input type="number" class="form-control" name="phone" required>
            </div>
          </div>
          <div class="form-group">
            <label for="emailAddress">Komunitas/Lembaga</label>
            <input type="text" class="form-control" name="community" required>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="lastName">Tanggal Kegiatan</label>
              <input id="datepicker"  class="form-control" name="dateOfEvent" placeholder="dd/mm/yyyy" required>
            </div>
            <div class="form-group col-md-6">
              <label for="lastName">Lokasi</label>
              <input type="text" class="form-control" name="location" required>
            </div>
            <div class="form-group col-md-6">
              <label for="lastName">Profil Penonton</label>
              <input type="text" class="form-control" name="audienceProfile" placeholder="Pelajar/Mahasiswa/Umum" required>
            </div>
            <div class="form-group col-md-6">
              <label for="lastName">Estimasi Jumlah Penonton</label>
              <input type="number" class="form-control" name="numbersOfAudience" required>
            </div>
            </div>
            <div class="form-group">
              <label for="YourMessage">Deskripsi singkat kegiatan (talkshow/workshop/pembicara)</label>
              <textarea class="form-control" rows="6" name="shortDescription" required></textarea>
            </div>
            <button type="submit" class="btn btn-custom float-right">Kirim</button>
        </form>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="container-inner-form py-4">
        <p class="bold">Tata cara penyelenggaraan pemutaran dan diskusi secara mandiri</p>
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link-custom" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Rekomendasi fasilitas pemutan
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <ol type="a">
                  <li>Layar dan proyektor</li>
                  <li>Perangkat suara</li>
                  <li>Alat pemutar</li>
                </ol>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-link-custom collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Materi & fasilitasi diskusi
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <ol type="a">
                  <li>Pengantar</li>
                  <li>Acuan data</li>
                  <li>Solusi dan tindak lanjut</li>
                </ol>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link-custom collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Donasi
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <ol type="a">
                  <li>Komunitas</li>
                  <li>Lembaga/instusi pendidikan</li>
                  <li>Perusahaan swasta</li>
                  <li>Lembaga pemerintah</li>
                </ol>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFour">
              <h2 class="mb-0">
                <button class="btn btn-link-custom collapsed text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Catatan singkat & dokumentasi dari kegiatan pemutaran dan diskusi
                </button>
              </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <i>Tuliskan deskripsi singkat mengenai peserta yang hadir serta bahasan dalam diskusi</i>
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

@push('b-scripts')
  <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
  <script>
      let today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
      $('#datepicker').datepicker({
          uiLibrary: 'bootstrap4',
          format: 'dd-mm-yyyy',
          minDate: today
      });
  </script>
@endpush
