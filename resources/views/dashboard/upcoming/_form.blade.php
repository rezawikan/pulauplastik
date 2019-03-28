@csrf
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label class="col-lg-2 control-label">Title</label>
    <div class="col-lg-10">
        <input type="text" name="title" placeholder="Title" class="form-control" value="{{ $data->title ?? old('title') }}">
        @if ($errors->has('title'))
        <span class="help-block m-b-none">{{ $errors->first('title') }}</span>
        @endif
    </div>
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
    <label class="col-lg-2 control-label">Address</label>
    <div class="col-lg-10">
        <input type="text" name="address" placeholder="Address" class="form-control" value="{{ $data->address ?? old('address') }}">
        @if ($errors->has('address'))
        <span class="help-block m-b-none">{{ $errors->first('address') }}</span>
        @endif
    </div>
</div>
<div class="form-group {{ $errors->has('date') ? 'has-error' : '' }}">
    <label class="col-lg-2 control-label">Date</label>
    <div class="col-lg-10">
        <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
            <input type="text" name="date" class="form-control datetimepicker-input" data-target="#datetimepicker2"  value="{{ $data->date ?? old('date') }}" />
            <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fas fa-calendar-week"></i></div>
            </div>
        </div>
        @if ($errors->has('date'))
        <span class="help-block m-b-none">{{ $errors->first('date') }}</span>
        @endif
    </div>
</div>
<div class="form-group {{ $errors->has('additional_information') ? 'has-error' : '' }}">
    <label class="col-lg-2 control-label">Additional Information</label>
    <div class="col-lg-10">
        <input type="text" name="additional_information" placeholder="Additional Information" class="form-control" value="{{ $data->additional_information ?? old('additional_information') }}">
        @if ($errors->has('additional_information'))
        <span class="help-block m-b-none">{{ $errors->first('additional_information') }}</span>
        @endif
    </div>
</div>
<div class="form-group {{ $errors->has('link') ? 'has-error' : '' }}">
    <label class="col-lg-2 control-label">Link</label>
    <div class="col-lg-10">
        <input type="text" name="link" placeholder="Optional Link" class="form-control" value="{{ $data->link ?? old('link') }}">
        @if ($errors->has('link'))
        <span class="help-block m-b-none">{{ $errors->first('link') }}</span>
        @endif
    </div>
</div>
