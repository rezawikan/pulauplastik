@extends('layouts.app-default')

@section('title',  'Contact Us')

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
        <h3 class="text-center">Contact Us</h3>
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
              <label for="firtName">First Name</label>
              <input type="text" class="form-control" name="firstName" required>
            </div>
            <div class="form-group col-md-6">
              <label for="lastName">Last Name</label>
              <input type="text" class="form-control" name="lastName" required>
            </div>
            </div>
            <div class="form-group">
              <label for="emailAddress">Email address</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
              <label for="YourMessage">Your message</label>
              <textarea class="form-control" rows="6" name="message" required></textarea>
            </div>
            <button type="submit" class="btn btn-custom float-right">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>



@endsection

@section('footer')
@include('layouts.footer')
@endsection
