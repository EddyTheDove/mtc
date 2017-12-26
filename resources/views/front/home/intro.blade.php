<section class="home-intro">
    <nav class="navbar navbar-default navbar-home">
        @include('front.includes.nav')
    </nav>

    <div class="container">
        <div class="motto">
            Language is Power
        </div>

        <div class="message">
            <h1>Mirror Theatre Co.</h1>
            Inspiring Talents Through <span>Language</span> and <span>Theatre</span>

            <div class="mt-20">
                <a href="/services" class="btn btn-primary btn-lg">
                    See Our Services
                </a>

                <a href="/finder" class="btn btn-blue btn-lg">
                    Lost & Found Items
                </a>
            </div>
        </div>

        <div class="phones">
            <i class="flaticon-telephone"></i>
            {{ $settings->phone }} - {{ $settings->phone2 }}

            <br>
            <i class="flaticon-mobile"></i>
            {{ $settings->phone3 }} - {{ $settings->phone4 }}
        </div>
    </div>
</section>
