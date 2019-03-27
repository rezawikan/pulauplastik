@extends('layouts.app-default')

@section('title', 'Infographic')

@section('tagline','Surga Yang Terancam Sampah Plastik')

@section('description','Serial edutainment bersama host Gede Robi (aktivis lingkungan dan vokalis band Navicula) menelusuri isu penanganan sampah plastik di Bali. Lebih Lanjut.')

@section('content')
<!-- Probelms -->
<div class="header-custom"></div>

<!-- Upcoming RSVP -->
<div id="upcoming" class="container-fluid default-text">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="py-4 container-inner-text">
                <h3 class="text-center mb-3">Infografik</h3>
                <div class="row">
                    @foreach ($datas as $value)
                    <div class="col-md-4 d-flex align-items-stretch p-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                  <a href="{{  asset('storage/'. $value->photo) }}" data-fancybox="images" data-caption="" title="{{$value->title}}">
                                    <img src="{{  asset('storage/'. $value->photo) }}">
                                  </a>
                                </div>
                                <p class="card-text" title="{{$value->title}}">{{$value->title}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-md-12">
                      <div class="mt-3 mb-5">
                        {{ $datas->appends(request()->query())->links() }}
                      </div>
                    </div>
                </div>
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
    $('[data-fancybox="images"]').fancybox({
        buttons: [
            'slideShow',
            'share',
            'zoom',
            'fullScreen',
            'close'
        ],
        thumbs: {
            autoStart: true
        },
        caption: function(instance, item) {
            var caption = $(this).data('caption') || '';

            if (item.type === 'image') {
                caption = (caption.length ? caption + '<br />' : '') + '<a href="' + item.src + '" target="_blank">Download image</a>';
            }

            return caption;
        }
    });
</script>
    @endpush
