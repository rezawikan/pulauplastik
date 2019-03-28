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
                <h3 class="text-center mb-4">Mendatang</h3>
                <div class="row">
                  @foreach ($datas as $value)
                    <div class="col-md-12">
                      <div class="card mb-2">
                        <div class="card-body">
                          <h6 class="card-subtitle mb-2 text-muted text-center">
                            @if ($value->link != null)
                              <a href="{{$value->link}}" target="_blank">{{$value->title}}</a>
                            @else
                              {{$value->title}}
                            @endif
                          </h6>
                          <p class="card-text text-center mb-1">{{ $value->address }}</p>
                          <p class="card-text text-center mb-1"><time datetime="{{ $value->date->format('Y-m-d')}}">{{ $value->date->format('d-m-Y')}}</time> | <time datetime="{{ $value->date->format('h:m')}}">{{ $value->date->format('H:i')}}</time></p>
                          <p class="card-text text-center">{{ $value->additional_information }}</p>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
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
