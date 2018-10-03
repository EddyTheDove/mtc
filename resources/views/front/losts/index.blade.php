@extends('front.templates.main')

@section('head')
    <title>Lost & Found Items</title>
@endsection

@section('body')
    <section class="lost-page">
        <div class="container">
            <div class="h2">Lost & Found Items</div>


            <div class="search-container">
                <div class="form">
                    <h5>Search for missing items</h5>

                    <form action="/finder" method="get">
                        <div class="row">
                            <div class="col-sm-8 col-md-9">
                                <input type="text"
                                    name="keywords"
                                    class="search-input elevated"
                                    value="{{ Request::get('keywords') }}"
                                    placeholder="Enter your name or someone else's here"
                                    required>
                            </div>

                            <div class="col-sm-4 col-md-3">
                                <button type="submit" class="btn btn-dark btn-lg btn-block elevated">
                                    <i class="flaticon-search mr-10"></i> Search
                                </button>
                            </div>
                        </div>


                        <div class="form-group mt-20">
                            <label>Document types</label><br>
                            <select
                                class="search-select"
                                onchange="this.form.submit()"
                                name="type">
                                <option value="">Show All Items</option>
                                @foreach($types as $type)
                                    <option value="{{ $type }}" {{ Request::get('type') === $type ? 'selected' : '' }}>{{ ucfirst($type) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                </div>
            </div>



            @if( sizeof($items) === 0)
                <div class="nothing">
                    <div class="icon">
                        <i class="flaticon-folder"></i>
                    </div>

                    <div class="h3">
                        Nothing to display
                    </div>
                </div>
                {{-- end of nothing  --}}
            @else

                <div class="_search-items">
                    <div class="total">
                        Found {{ $items->total() }} item{{ sizeof($items) > 1 ? 's' : '' }}
                    </div>

                    @foreach($items as $i)
                        <div class="_item">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="_item_column">
                                        <div class="_value">
                                            {{ $i->name }}
                                        </div>
                                        <div class="_label">
                                            Name
                                        </div>
                                    </div>
                                </div>

                                <div class="hidden-xs col-sm-6 col-md-2">
                                    <div class="_item_column">
                                        <div class="_value">
                                            {{ ucfirst($i->type) }}
                                        </div>
                                        <div class="_label">
                                            Type
                                        </div>
                                    </div>
                                </div>

                                <div class="hidden-xs hidden-sm col-md-2">
                                    <div class="_item_column">
                                        <div class="_value">
                                            {{ ucfirst($i->status) }}
                                        </div>
                                        <div class="_label">
                                            Status
                                        </div>
                                    </div>
                                </div>

                                <div class="hidden-xs hidden-sm col-md-4">
                                    <div class="_item_column">
                                        <div class="_value">
                                            {{ ucfirst($i->location) }}
                                        </div>
                                        <div class="_label">
                                            Location
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="_pagination">
                        {{ $items->links() }}
                    </div>
                </div>
            @endif


            <div class="mt-40">
                <p>
                    If you could not find what you were looking for, please
                    <a href="#" data-toggle="modal" data-target="#contactModal">contact us</a>
                </p>
            </div>

        </div>
    </section>
@endsection
