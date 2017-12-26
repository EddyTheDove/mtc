<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Inspiring Talents Through Language and Theatre">
        <meta name="keywords" content="mtc, gic mtc, english classes, french classes, cours d'anglais, IELTS, TOEFL">
        <meta name="author" content="Eddy Ella">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:title" content="GIC MTC | Mirror Theatre Co.">
        <meta property="og:description" content="Find the right school">
        <link rel="stylesheet" href="/assets/css/app.min.css">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        @yield('head')
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-default navbar-app">
                @include('front.includes.nav')
            </nav>

            @yield('body')

            @include('front.includes.footer')
            @include('front.modals.contact')
        </div>
    </body>

    <script src="/assets/js/app.min.js"></script>
    @yield('js')
</html>
