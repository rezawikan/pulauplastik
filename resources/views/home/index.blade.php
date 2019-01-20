@extends('layouts.app')

@section('title', 'Pulau Plastik')

@section('tagline','Surga Yang Terancam Sampah Plastik')

@section('description','Serial edutainment bersama host Gede Robi (aktivis lingkungan dan vokalis band Navicula) menelusuri isu penanganan sampah plastik di Bali. Lebih Lanjut.')

@section('content')
  <!-- Probelms -->
  <div id="problems" class="container default-text transitions">
    <div class="row">
      <div class="col-md-12">
        <div class="pt-4 pb-4">
          <p>Indonesia is the fourth most populous country in the world, yet it is the second largest marine plastic polluter. Each year, over 1.3 million tons of plastic are carried by its rivers into the surrounding oceans that are known to be
            some of the most biodiverse places in the world. It is estimated that the island of Bali alone contributes up to 110,000 tonnes to this plastic waste annually.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Video Trailer -->
  <div class="">
    <div class="row no-gutters">
      <div class="col-md-12">
        <a data-fancybox href="https://youtu.be/X5FB3cf8Rks"><img src="{{asset('img/video-picture.jpg')}}" target="_blank" alt="Trailer Pulau Plastik"></a>
      </div>
    </div>
  </div>

<!-- Description -->
  <div class="container default-text">
    <div class="row">
      <div class="col-md-12">
        <div class="py-4">
          <p>A video series that adopt an anthropological and cultural approach designed for local audiences and aimed at changing attitude and behavior towards waste and promoting better waste disposal practices.</p>
          <p>PULAU PLASTIK is an edutainment series developed by Kopernik and Akarumput which explores the issue of waste management in Bali and what challenges are being faced by Bali community groups and the government, while also highlighting
            best practices and sustainable solutions. Directed by Dandhy Laksono, with host Gede Robi of Navicula, the series will take a socio-cultural approach and examine the role of Balinese traditions and spirituality in waste management, as
            well as the role of art and music as a means to create an eco-conscious movement on the island.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Partner One-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 m-auto py-4 img-partner">
        <img src="{{asset('img/partner-one.png')}}" alt="Partners">
      </div>
    </div>
  </div>

  <!-- Gede Robi -->
  <div class="">
    <div class="row no-gutters">
      <div class="col-md-12 m-auto py-4">
        <a href="#"><img src="{{asset('img/gede-robi.jpg')}}" class="" alt="Gede Robi - Navicula"></a>
      </div>
    </div>
  </div>

  <!-- Descriotion Gede Robi -->
  <div id="testu" class="container default-text">
    <div class="row">
      <div class="col-md-12">
        <div class="py-4">
          <h3>OUR HOST : GEDE ROBI NAVICULA</h3>
          <p>A video series that adopt an anthropological and cultural approach designed for local audiences and aimed at changing attitude and behavior towards waste and promoting better waste disposal practices.</p>
          <p>PULAU PLASTIK is an edutainment series developed by Kopernik and Akarumput which explores the issue of waste management in Bali and what challenges are being faced by Bali community groups and the government, while also highlighting
            best practices and sustainable solutions. Directed by Dandhy Laksono, with host Gede Robi of Navicula, the series will take a socio-cultural approach and examine the role of Balinese traditions and spirituality in waste management, as
            well as the role of art and music as a means to create an eco-conscious movement on the island.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- supported by -->
  <div class="container default-text">
    <div class="row">
      <div class="col-md-12">
        <div class="py-4">
          <h6>supported By</h6>
          <div class="m-auto img-partner">
            <a href="#"><img src="{{asset('img/partner-two.png')}}" alt="Partners"></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Join Our movement -->
  <div class="container default-text">
    <div class="row">
      <div class="col-md-12">
        <!-- <p>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting.</p> -->
        <form class="subscribe pb-4" action="index.html" method="POST">
          <div class="input-group input-group-md mb-3">
            <input type="text" class="form-control input-custom" placeholder="Enter your email" aria-label="Small" aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-custom bold" type="button" id="join-our-movement">JOIN OUR MOVEMENT</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection

@section('footer')
  @include('layouts.footer')
@endsection
