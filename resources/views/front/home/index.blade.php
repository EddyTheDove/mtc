<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>GIC MTC | Mirror Theatre Co.</title>
        <meta name="description" content="Inspiring Talents Through Language and Theatre">
        <meta name="keywords" content="mtc, gic mtc, english classes, french classes, cours d'anglais, IELTS, TOEFL">
        <meta name="author" content="Eddy Ella">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:title" content="GIC MTC | Mirror Theatre Co.">
        <meta property="og:description" content="Inspiring Talents Through Language and Theatre">
        <meta property="og:image" content="http://gicmtc.com/assets/img/intro-bg.jpg"/>
        <meta name="twitter:image" content="http://gicmtc.com/assets/img/intro-bg.jpg">
        <meta name="twitter:title" content="GIC MTC | Mirror Theatre Co.">
        <meta name="twitter:description" content="Inspiring Talents Through Language and Theatre">
        <link rel="stylesheet" href="/assets/css/app.min.css">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <script>
            var _services = <?php echo json_encode($services) ?>;
        </script>
    </head>
    <body>
        <div class="home-page" id="app">
            @include('front.home.intro')
            @include('front.home.statement')
            @include('front.home.services')
            @include('front.home.lost')
            @include('front.home.map')
            @include('front.includes.footer')
            @include('front.modals.contact')

            <service-preview></service-preview>
        </div>
    </body>

    <script src="/assets/js/app.min.js"></script>
    <script>
    function initMap() {
        var uluru = { lat: 3.835052, lng: 11.486167 };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 18,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
    </script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRlVespe1t8sflUwQBR_eK7ZhibqNu6XA&callback=initMap">
    </script>
</html>
