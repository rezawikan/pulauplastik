@extends('layouts.app-default')

@section('title',  'Kontak')

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
        <h3 class="text-center">Kontak</h3>
        @if (session('status'))
            <div class="alert alert-success alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                {{ session('status') }}.
            </div>
        @endif
        <form class="bg-soft-two" method="POST" action="{{ route('contact-us.store')}}">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="firtName">Nama Depan</label>
              <input type="text" class="form-control" name="firstName" required>
            </div>
            <div class="form-group col-md-6">
              <label for="lastName">Nama Belakang</label>
              <input type="text" class="form-control" name="lastName" required>
            </div>
            </div>
            <div class="form-group">
              <label for="emailAddress">Alamat Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
              <label for="YourMessage">Pesan</label>
              <textarea class="form-control" rows="6" name="message" required></textarea>
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
