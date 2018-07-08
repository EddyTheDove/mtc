@extends('front.templates.main')

@section('head')
    <title>{{ $page->title }}</title>
@endsection

@section('body')
    <section class="services-page">
        <div class="container">
            <div class="h2">{{ $page->title }}</div>

            <div class="mt-40 fs-18 pb-40">
                {!! $page->content !!}
            </div>

        </div>
    </section>
@endsection
