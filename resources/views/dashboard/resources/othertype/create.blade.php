@extends('layouts.app')

@section('title', 'Create Other Type')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
            <h5>Create Other Type</h5>
          </div>
          <div class="ibox-content">
            <div class="row">
              <div class="col-lg-12">
                <form class="form-horizontal" action="{{ route('dashboard.othertype.store') }}" method="POST">
                  @include('dashboard.resources.othertype._form')
                  <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                          <button class="btn btn-md btn-primary" type="submit">Save</button>
                      </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
