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
<div class="form-group {{ $errors->has('link') ? 'has-error' : '' }}">
  <label class="col-lg-2 control-label">Link</label>
  <div class="col-lg-10">
    <input type="text" name="link" placeholder="Link" class="form-control" value="{{ $data->link ?? old('link') }}">
    @if ($errors->has('link'))
    <span class="help-block m-b-none">{{ $errors->first('link') }}</span>
    @endif
  </div>
</div>
<div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
  <label class="col-lg-2 control-label">Photo</label>
  <div class="col-lg-10">
    <input type="file" name="photo" value="{{ $data->photo ?? old('photo') }}">
    @if ($errors->has('photo'))
    <span class="help-block m-b-none">{{ $errors->first('photo') }}</span>
    @endif
  </div>
</div>
