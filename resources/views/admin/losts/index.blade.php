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

            <div class="">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Updated</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($items as $item)
                            <tr data-href="{{ route('losts.edit', $item->id) }}">
                                <td class="bold">{{ $item->name }}</td>
                                <td>{{ $item->type }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ date('d/m/Y H:i', strtotime($item->created_at)) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- End of table -->
        </div>
    </section>

    @include('admin.losts.create')

@endsection
