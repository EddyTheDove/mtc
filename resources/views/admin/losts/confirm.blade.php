<div class="modal school-modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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

                <h2>Are you sure you want to delete this item?</h2>

                <div class="mt-20" style="font-size:17px;font-weight:500;">
                    Deleting an item is permanent and cannot be reversed.

                    <br><br>Still want to delete?
                </div>

                <div class="mt-20 text-center">
                    <button class="btn btn-lg btn-green" data-dismiss="modal">No, cancel</button>
                </div>



                <div class="mt-40 text-center">
                    {!! Form::model($lost, ['method' => 'delete', 'route' => ['losts.destroy', $lost->id], 'class' => 'form' ]) !!}
                        <button class="btn btn-red round" type="submit">
                            <i class="flaticon-trash"></i> Delete Permanently
                        </button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
