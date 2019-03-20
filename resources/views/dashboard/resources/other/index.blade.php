@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <a href="{{ route('dashboard.other.create') }}" class="btn btn-info mb-3">Add Other</a>
          @if (session('status'))
              <div class="alert alert-success" >
                  {{ session('status') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
          @endif
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">File</th>
                        <th scope="col">Last Update</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $value)
                      <tr>
                          <th scope="row">{{ $value->id }}</th>
                          <td><a href="{{ $value->link ?: '#' }}">{{ $value->title }}</a></td>
                          <td>{{ $value->file }}</td>
                          <td>{{ $value->created_at->diffForHumans() }}</td>
                          <td>
                            <form class="" action="{{ route('dashboard.other.destroy',['id' => $value->id]) }}" method="POST">
                               @csrf
                               @method('DELETE')
                               <a href="{{ route('dashboard.other.edit',['id' => $value->id]) }}" class="btn btn-info btn-sm">Edit</a>
                               <button type="submit" name="button" class="btn btn-info btn-sm">Delete</button>
                            </form>
                          </td>
                      </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
