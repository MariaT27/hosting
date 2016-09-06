@include('tpl.form_errors')

<div class="form-group {{ $errors->has('title_ru') ? 'has-error' : '' }}">
  <label class="col-md-3 control-label required">Название:</label>
  <div class="col-md-6">
    <input required type="text" class="form-control" name="title_ru" value="{{ old('title_ru', @$model->title_ru) }}">
  </div>
</div>

<div class="form-group {{ $errors->has('title_en') ? 'has-error' : '' }}">
  <label class="col-md-3 control-label required">Название EN:</label>
  <div class="col-md-6">
    <input required type="text" class="form-control" name="title_en" value="{{ old('title_en', @$model->title_en) }}">
  </div>
</div>

<div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
  <label class="col-md-3 control-label required">URL:</label>
  <div class="col-md-6">
    <input required type="text" class="form-control" name="slug" value="{{ old('slug', @$model->slug) }}">
  </div>
</div>

<div class="form-group {{ $errors->has('country_id') ? 'has-error' : '' }}">
  <label class="col-md-3 control-label required">Страна:</label>
  <div class="col-md-6">
    <div class="form-select">
      <select class="form-control" name="country_id">
        <option value="0">—</option>
        @foreach (App\Country::orderBy("title_{$locale}")->get(['id', 'title_ru', 'title_en']) as $country)
          <option value="{{ $country->id }}" {{ $country->id == old('country_id', @$model->country_id) ? 'selected' : '' }}>
            {{ $country->title }}
          </option>
        @endforeach
      </select>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-3 control-label">Код IATA:</label>
  <div class="col-md-6">
    <input type="text" class="form-control" name="iata" maxlength="3" value="{{ old('iata', @$model->iata) }}">
  </div>
</div>

<div class="form-group">
  <label class="col-md-3 control-label">Широта:</label>
  <div class="col-md-6">
    <input type="text" class="form-control" name="lat" maxlength="10" value="{{ old('lat', @$model->lat) }}">
  </div>
</div>

<div class="form-group">
  <label class="col-md-3 control-label">Долгота:</label>
  <div class="col-md-6">
    <input type="text" class="form-control" name="lon" maxlength="10" value="{{ old('lon', @$model->lon) }}">
  </div>
</div>
