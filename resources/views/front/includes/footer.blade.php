<section class="main-footer">
    <div class="container">

        <div class="copyright">
                <h4>Links</h4>
                
                <ul class="list-inline">
                    @foreach($pages as $page)
                    <li>
                        <a href="{{ $page->slug }}" style="color:white">{{ $page->title }}</a>
                    </li>
                    @endforeach
                </ul>
        </div>


        <div class="copyright">
            <h4>Call us</h4>
            {{ $settings->phone }} - {{ $settings->phone2 }} - {{ $settings->phone3 }} - {{ $settings->phone4 }}
            <br>&copy; {{ date('Y') }} GIC MTC. All rights reserved.
    </div>
    </div>

    <div class="author">
        With love, Eddy.
    </div>
</section>
