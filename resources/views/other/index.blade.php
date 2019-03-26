@extends('layouts.app-default')

@section('title', 'Penelitian dan dokumen lainnya')

@section('tagline','Surga Yang Terancam Sampah Plastik')

@section('description','Serial edutainment bersama host Gede Robi (aktivis lingkungan dan vokalis band Navicula) menelusuri isu penanganan sampah plastik di Bali. Lebih Lanjut.')

@section('content')
<!-- Probelms -->
<div class="header-custom"></div>

<!-- Why is plastik a problem? -->
<div class="container default-text">
    <div class="row">
        <div class="col-md-12">
            <div class="py-4">
                <h3 class="text-center mb-3">Penelitian dan dokumen lainnya</h3>
                @if (count($types) > 1)
                  <div class="row">
                      <div class="col-md-3 offset-md-9">
                          <div class="form-group">
                              <label for="exampleFormControlSelect1">Kategori</label>
                              <select class="form-control" onChange="window.location.replace(window.location.pathname +'?type='+this.options[this.selectedIndex].value)">
                                  @foreach ($types as $value)
                                  <option value="{{ $value->id }}">{{ $value->type }}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>
                  </div>
                @endif
                <ul class="list-group">
                    @foreach ($datas as $value)
                    <li class="list-group-item">
                        <a href="{{ $value->link ?: ($value->file ? asset('storage/'.$value->file ) : '#') }}" target="_blank">{{ $value->title }}</a> - {{  $value->type()->first() ? $value->type()->first()->type : 'Umum' }} - {{$value->created_at->diffForHumans()}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-md-12">
            <div class="mt-3 mb-5">
                {{ $datas->appends(request()->query())->links() }}
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
@include('layouts.footer')
@endsection
