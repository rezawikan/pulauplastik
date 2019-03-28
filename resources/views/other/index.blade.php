@extends('layouts.app-default')

@section('title', 'Penelitian dan dokumen')

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
                <h3 class="text-center mb-4">Penelitian dan dokumen</h3>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            @if (count($types) > 0)
                            <label for="inputEmail4">Kategori</label>
                            <select class="form-control" onChange="categoryChanged(this.value)">
                                <option value="all">All</option>
                                @foreach ($types as $value)
                                <option value="{{ $value->id }}" {{ request()->type == $value->id ? 'selected' : '' }}>{{ $value->type }}</option>
                                @endforeach
                            </select>
                            @endif
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputPassword4">Bahasa</label>
                            <select class="form-control" onChange="languageChanged(this.value)">
                                <option value="all">All</option>
                                @foreach ($langs as $lang)
                                <option value="{{ $lang->id }}" {{ request()->lang == $lang->id ? 'selected' : '' }}>{{ $lang->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="py-4">
                <ul class="list-group">
                    @foreach ($datas as $value)
                    <li class="list-group-item">
                        <a href="{{ $value->link ?: ($value->file ? asset('storage/'.$value->file ) : '#') }}" target="_blank">{{ $value->title }}</a> - {{ $value->type()->first() ? $value->type()->first()->type : 'Umum' }} </li>
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

@push('b-scripts')
<script type="text/javascript">
    function categoryChanged(value) {
        let url = new URL(window.location.href)

        if (!isNaN(parseInt(value))) {
            if (url.searchParams.has('type')) {
                url.searchParams.set('type', parseInt(value))
            } else {
                url.searchParams.append('type', parseInt(value))
            }

            window.location.replace(url)
        }

        if (value == 'all') {
            url.searchParams.delete('type')
            window.location.replace(url)
        }
    }

    function languageChanged(value) {
        let url = new URL(window.location.href)

        if (!isNaN(parseInt(value))) {
            if (url.searchParams.has('lang')) {
                url.searchParams.set('lang', parseInt(value))
            } else {
                url.searchParams.append('lang', parseInt(value))
            }
            window.location.replace(url)
        }

        if (value == 'all') {
            url.searchParams.delete('lang')
            window.location.replace(url)
        }
    }
</script>
@endpush
