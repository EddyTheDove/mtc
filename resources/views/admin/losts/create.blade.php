<div class="modal school-modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">

                <div class="modal-close">
                    <button type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close">
                        <i class="flaticon-multiply"></i>
                    </button>
                </div>

                <h2>New Found Item</h2>

                <form class="form mt-20" method="post" action="{{ route('losts.index') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Holder's name</label>
                        <input type="text" name="name" value="{{ old('name') }}"
                        required
                        placeholder="Holder's name"
                        class="form-control input-lg">
                    </div>


                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Document Type</label>
                                <select class="form-control input-lg" name="type">
                                    @foreach($types as $t)
                                        <option value="{{ $t }}">{{ $t }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Document No</label>
                                <input type="text" name="number" value="{{ old('number') }}"
                                    placeholder="Document No"
                                    class="form-control input-lg">
                            </div>
                        </div>
                    </div>


                    <div class="mt-20 text-right">
                        <button class="btn btn-green input-lg w-200" type="submit">
                            <i class="flaticon-check"></i> Save Item
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
