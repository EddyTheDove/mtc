@extends('front.templates.main')

@section('head')
    <title>Mission Statement</title>
@endsection

@section('body')
    <section class="services-page">
        <div class="container">
            <div class="h1">Mission Statement</div>

            <div class="mt-40">
                <img src="/assets/img/statement.jpg" alt="" class="img-responsive">
            </div>


            <div class="mt-40 fs-18 pb-40">
                {!! $page->content !!}
            </div>

        </div>
    </section>
@endsection
