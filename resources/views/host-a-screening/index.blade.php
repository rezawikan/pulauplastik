@extends('layouts.app-default')

@push('t-scripts')
  <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@endpush


@section('title',  'Selenggarakan Pemutaran')

@section('tagline','Surga  Yang Terancam Sampah Plastik')

@section('description','Serial  edutainment bersama host Gede Robi (aktivis lingkungan dan vokalis band Navicula) menelusuri isu penanganan sampah plastik di Bali. Lebih Lanjut.')

@section('content')
<!-- Probelms -->
<div class="header-custom"></div>

<!-- Descriotion Gede Robi -->
<div class="container default-text contact-us py-4">
  <div class="row">
    <div class="col-md-12">
      <div class="container-inner-form">
        <h3 class="text-center mb-4">Selenggarakan Pemutaran</h3>
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
