<section class="home-statement">
    <div class="container">
        <div class="h2">
            Mission Statement
        </div>

        <div class="h3">
            <i class="flaticon-minus"></i> Our commitment
        </div>

        <div class="row mt-40">
            <div class="col-sm-6 col-md-5">
                <div class="photo elevated">
                    <img src="/assets/img/statement.jpg" class="img-responsive" alt="">
                </div>
            </div>

            <div class="col-sm-6 col-md-7">
                <div class="_statement">
                    @if($statement)
                        {{ $statement->excerpt }}
                    @endif
                </div>

                <div class="mt-20">
                    <a href="/statement" class="btn btn-lg btn-blue elevated w-200">
                        Read Full Statement
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
