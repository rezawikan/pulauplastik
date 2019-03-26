@csrf
<div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
  <label class="col-lg-2 control-label">Type</label>
  <div class="col-lg-10">
    <input type="text" name="type" placeholder="Title" class="form-control" value="{{ $data->type ?? old('title') }}">
    @if ($errors->has('type'))
    <span class="help-block m-b-none">{{ $errors->first('type') }}</span>
    @endif
  </div>
</div>
