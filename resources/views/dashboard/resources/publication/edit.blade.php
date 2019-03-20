@extends('layouts.app')

@section('title', 'Edit Publication')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
            <h5>Edit Publication</h5>
          </div>
          <div class="ibox-content">
            <div class="row">
              <div class="col-lg-12">
                <form class="form-horizontal" enctype="multipart/form-data" action="{{ route('dashboard.publication.update',[ 'id' => $data->id ]) }}" method="POST">
                  @method('PUT')
                  @include('dashboard.resources.publication._form')
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-md btn-primary" type="submit">Update</button>
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
