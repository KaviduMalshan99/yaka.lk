@extends('web.layout.layout')


@section('content')
    <section class="error-part">
        <div class="container">
            <div class="error">
                <h2>{{ GoogleTranslate::trans('Oops! Empty Result', app()->getLocale()) }}</h2>
                <a href="{{route('/')}}" class="btn btn-outline">
                    <i class="fas fa-home"></i>
                    <span>{{ GoogleTranslate::trans('go to homepage', app()->getLocale()) }}</span>
                </a>
            </div>
        </div>
    </section>
@endsection
