<template lang="html">
    <div class="service-modal">
        <div class="modal fade" id="serviceModal" tabindex="-1" role="dialog" style="z-index:5">
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

                        <div class="heading">
                            <div class="icon">
                                <i :class="icon"></i>
                            </div>

                            <div class="name">{{ service.name }}</div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="content" v-html="service.description"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'service-preview',

    computed: {
        service () {
            return this.$store.state.service
        },

        icon () {
            return 'flaticon-' + this.service.icon + ' ' + this.service.colour
        }
    }
}
</script>
