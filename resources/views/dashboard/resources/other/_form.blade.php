@csrf
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
  <label class="col-lg-2 control-label">Title</label>
  <div class="col-lg-10">
    <input type="text" name="title" placeholder="Title" class="form-control" value="{{ $data->title ?? old('title') }}" required>
    @if ($errors->has('title'))
    <span class="help-block m-b-none">{{ $errors->first('title') }}</span>
    @endif
  </div>
</div>
<div class="form-group {{ $errors->has('link') ? 'has-error' : '' }}">
  <label class="col-lg-2 control-label">Type</label>
  <div class="col-lg-10">
    {{-- <input type="text" name="link" placeholder="Optional Link" class="form-control" value="{{ $data->link ?? old('link') }}"> --}}
    <select name="other_type_id" class="form-control">
      @foreach ($types as $value)
        <option value="{{ $value->id }}" {{ $value->id == ($data->other_type_id ?? old('other_type_id')) ? 'selected' : '' }}>{{ $value->type }}</option>
      @endforeach
    </select>
    @if ($errors->has('link'))
    <span class="help-block m-b-none">{{ $errors->first('link') }}</span>
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
<div class="form-group {{ $errors->has('file') ? 'has-error' : '' }}">
  <label class="col-lg-2 control-label">File</label>
  <div class="col-lg-10">
    <input type="file" name="file" value="{{ $data->file ?? old('file') }}">
    @if ($errors->has('file'))
    <span class="help-block m-b-none">{{ $errors->first('file') }}</span>
    @endif
  </div>
</div>
