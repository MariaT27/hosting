@include('tpl.form_errors')

{!! Form::text('kanji_string')->html() !!}

<div class="tw-mb-4">
  <label>Есть в кандзи</label>
  @php ($kanjis = $model->kanjis->pluck('id')->all())
  @foreach (App\Kanji::orderBy('level')->orderBy('meaning')->get(['id', 'character', 'meaning']) as $row)
    <label class="tw-flex tw-items-center tw-font-normal">
      <input class="tw-mr-2" type="checkbox" name="kanjis[]" value="{{ $row->id }}" {{ in_array($row->id, (array) old('kanjis', $kanjis)) ? 'checked' : '' }}>
      <span class="tw-mr-1">{{ $row->character }}</span>
      <span class="text-muted">{{ $row->firstMeaning() }}</span>
    </label>
  @endforeach
</div>
