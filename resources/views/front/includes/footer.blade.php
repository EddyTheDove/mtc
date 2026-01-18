<section class="main-footer">
    <div class="container">

        <div class="copyright">
                <h4>Links</h4>
                
                @if(!empty($pages))
                    <ul class="list-inline">
                        @foreach($pages as $page)
                        <li>
                            <a href="{{ $page->slug }}" style="color:white">{{ $page->title }}</a>
                        </li>
                        @endforeach
                    </ul>
                @endif
        </div>


        <div class="copyright">
            <h4>Call us</h4>
            @if(!empty($settings))
                {{ $settings->phone }} - {{ $settings->phone2 }} - {{ $settings->phone3 }} - {{ $settings->phone4 }}
            @endif
            <br>&copy; {{ date('Y') }} GIC MTC. All rights reserved.
    </div>
    </div>

    <div class="author">
        With love, Eddy.
    </div>
</section>
