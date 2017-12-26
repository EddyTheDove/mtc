<template lang="html">
    <div class="services">
        <div class="_s-items">
            <div class="row">
                <div class="col-sm-4 col-md-3" v-for="s in services">
                    <Service :service="s" key="s.id" @selected="display(s)"></Service>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Service from './service'

export default {
    name: 'services',
    components: { Service },

    data () {
        return {
            services: [],
            selectedService: {}
        }
    },

    mounted () {
        this.services = _services
    },

    methods: {
        display (s) {
            this.$store.commit('SET_SERVICE', s)
            window.$('#serviceModal').modal('show')
        }
    }
}
</script>
