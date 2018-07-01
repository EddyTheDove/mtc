@extends('admin.body')

@section('body')
    <div class="page-heading">
        <div class="buttons">
            <a href="{{ route('losts.index') }}" class="btn btn-lg btn-grey">
                <i class="flaticon-undo"></i> Back
            </a>
        </div>

        <div class="title">
            Edit Item
        </div>
    </div>

    <section class="mt-20">
        <div class="container-fluid">
            @include('errors.list')

            {!! Form::model($lost, ['method' => 'PATCH', 'route' => ['losts.update', $lost->id], 'class' => 'form' ]) !!}

                {{-- Left side  --}}
                <div class="row">
                    <div class="col-sm-8">
                        <div class="block">
                            <div class="block-content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Holder's name</label>
                                            <input type="text" name="name" value="{{ $lost->name }}"
                                            required
                                            placeholder="Holder's name"
                                            class="form-control input-lg">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Document No</label>
                                            <input type="text" name="number" value="{{ $lost->number }}"
                                                placeholder="Document No"
                                                class="form-control input-lg">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input type="text" name="location" value="{{ $lost->location }}"
                                                placeholder="Location"
                                                class="form-control input-lg">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Issued By</label>
                                            <input type="text" name="issued_by" value="{{ $lost->issued_by }}"
                                                placeholder="Issued by"
                                                class="form-control input-lg">
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <h4>When document is picked up</h4>

                                <div class="row mt-20">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Picked up by</label>
                                            <input type="text" name="collected_by" value="{{ $lost->collected_by }}"
                                                placeholder="Collector's name"
                                                class="form-control input-lg">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Picked up date</label>
                                            <input type="text" name="collected_on" value="{{ $lost->collected_on }}"
                                                placeholder="Collection date"
                                                readonly
                                                class="form-control input-lg date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End of col 9 --}}


                    <div class="col-sm-4">
                        <div class="block">
                            <div class="block-content">
                                <div class="form-group">
                                    <label>Document Type</label>
                                    <select class="form-control input-lg" name="type">
                                        @foreach($types as $t)
                                            <option value="{{ $t }}" {{ $lost->type == $t ? 'selected' : '' }}>{{ $t }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Document Status</label>
                                    <select class="form-control input-lg" name="status">
                                        <option value="available" {{ $lost->status === 'available' ? 'selected' : '' }}>Available</option>
                                        <option value="collected" {{ $lost->status === 'collected' ? 'selected' : '' }}>Collected</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="mt-20">
                            <button type="submit" class="btn btn-lg btn-blue">
                                <i class="flaticon-check mr-10"></i> Update Item
                            </button>
                        </div>
                    </div>
                    {{-- End of col 3 --}}
                </div>

            {!! Form::close() !!}


            <div class="mt-20 pb-40">
                <a href="#" class="btn btn-red" data-target="#confirm" data-toggle="modal">
                    <i class="flaticon-trash"></i> Delete
                </a>
            </div>
        </div>
    </section>

    @include('admin.losts.confirm')
@endsection

@section('js')
<script>
$(document).ready(function() {
    $('.date').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true
    })
})
</script>
@endsection
