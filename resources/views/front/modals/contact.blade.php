<div class="mtc-modal">
    <div class="modal fade" id="contactModal" tabindex="-1" role="dialog">
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

                    <h2>Contact Us</h2>

                    <div class="h4 bold">We are located here</div>

                    <div class="address fs-18">
                        MTC Lost Property Office <br>
                        {{ $settings->addresse_street }} <br>
                        {{ $settings->addresse_suburb }}, Yaounde - Cameroon <br>
                    </div>



                    <div class="h4 bold mt-40">Call Us</div>

                    <div class="fs-18 pb-20">
                        <i class="flaticon-telephone"></i>
                        {{ $settings->phone }} - {{ $settings->phone2 }}

                        <br>
                        <i class="flaticon-mobile"></i>
                        {{ $settings->phone3 }} - {{ $settings->phone4 }}
                    </div>

                    <div class="h4 bold mt-10">Emails</div>

                    <div class="fs-18 pb-20">
                        <a href="mailto:kkbonteh@gicmtc.com">kkbonteh@gicmtc.com</a>

                        <br>
                        <a href="mailto:mirrortheatreco@gicmtc.com">mirrortheatreco@gicmtc.com</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
