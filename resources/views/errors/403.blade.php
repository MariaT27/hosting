@extends('errors.base', ['meta_title' => trans('errors.403')])

@section('content')
403<br>{{ trans('errors.403.text') }}
@endsection
