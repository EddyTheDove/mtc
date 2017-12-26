@extends('admin.body')



@section('body')
<div class="page-title">
    <h1>Dashboard</h1>
</div>

<div class="dashboard">
    <div class="container-fluid">
        <div class="cards row">
            <div class="col-sm-3">
                <div class="card blue">
                    <h2>{{ $totalItems }}</h2>
                    <h4>Total Items</h4>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card red">
                    <h2>{{ $availableItems }}</h2>
                    <h4>Available</h4>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card green">
                    <h2>{{ $collectedItems }}</h2>
                    <h4>Collected</h4>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
