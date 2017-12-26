@extends('front.templates.main')

@section('head')
    <title>Services</title>
    <script>
        var _services = <?php echo json_encode($services) ?>;
    </script>
@endsection

@section('body')
    <section class="services-page">
        <div class="container">
            <div class="h1">Our Services</div>
            <div class="h3"><i class="flaticon-minus"></i> What we do</div>


            <Services></Services>

        </div>
    </section>

    <service-preview></service-preview>
@endsection
