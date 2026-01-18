@extends('admin.body')


@section('body')
    <div class="page-heading">
        <div class="buttons">
            <a href="#" class="btn btn-lg btn-green" data-toggle="modal" data-target="#createModal">
                <i class="flaticon-cross"></i> New Found Item
            </a>
        </div>

        <div class="title">
            Found Items
        </div>
    </div>

    <div class="container-fluid mt-10">
        @include('errors.list')
    </div>

    <section class="page page-white">
        <div class="container-fluid">

            <div class="mt-10">
                <div class="row">
                    <form class="form" action="" method="get">
                        <div class="col-sm-4">
                            <div class="form-select grey">
                                <select class="" name="status">
                                    <option value="">All</option>
                                    <option value="available" {{ request()->input('status') == 'available' ? 'selected' : '' }}>Available</option>
                                    <option value="collected" {{ request()->input('status') == 'collected' ? 'selected' : '' }}>Collected</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="text"
                                        name="keywords"
                                        class="form-control input-lg"
                                        value="{{ request()->input('keywords') }}"
                                        placeholder="Name">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-lg btn-blue btn-block">
                                        Filter
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Location</th>
                            <th>Issued By</th>
                            <th>Updated</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($items as $item)
                            <tr data-href="{{ route('losts.edit', $item->id) }}">
                                <td class="bold">{{ $item->name }}</td>
                                <td>{{ $item->type }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->location ? $item->location : 'N/A' }}</td>
                                <td>{{ $item->issued_by ? $item->issued_by : 'N/A' }}</td>
                                <td>{{ date('d/m/Y H:i', strtotime($item->created_at)) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- End of table -->
        </div>
    </section>

    <div class="pagination pagination-lg ml-20">
        {{ $items->links() }}
    </div>

    @include('admin.losts.create')

@endsection
