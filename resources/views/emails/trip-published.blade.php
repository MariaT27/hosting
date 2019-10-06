@component('mail::message')

# {{ $model->metaTitle() }}

{{ trans('mail.trip_published') }}

{{ $model->metaDescription() }}

@if ($model->meta_image)
<a href="{{ $email->signedLink($model->wwwLocale(null, $user->locale)) }}">
  ![{{ $model->title }}]({{ $model->metaImage(500, 375) }})
</a>
@endif

@component('mail::button', ['url' => $email->signedLink($model->wwwLocale(null, $user->locale))])
{{ trans('mail.read') }}
@endcomponent

@component('mail::button', [
  'color' => 'light',
  'url' => $email->signedLink(path_locale([App\Http\Controllers\MySettings::class, 'edit'], [], false, $user->locale)),
])
{{ trans('mail.settings') }}
@endcomponent

@include('vendor.mail.html.hit')
@endcomponent
