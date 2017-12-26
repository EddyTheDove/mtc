@extends('admin.body')


@section('body')
    <div class="page-heading">
        <div class="buttons">
            <a href="{{ route('modules.create') }}" class="btn btn-lg btn-green">
                <i class="flaticon-cross"></i> New Service
            </a>
        </div>

        <div class="title">
            Services
        </div>
    </div>

    <section class="page page-white">
        <div class="container-fluid">

            @include('errors.list')

            <div class="mt-10">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Created</th>
                            <th>Updated</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($services as $service)
                            <tr data-href="{{ route('modules.edit', $service->id) }}">
                                <td class="bold">{{ $service->name }}</td>
                                <td>{{ date('d/m/Y H:i', strtotime($service->created_at)) }}</td>
                                <td>{{ date('d/m/Y H:i', strtotime($service->updated_at)) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- End of table -->
        </div>
    </section>

@endsection
