<template lang="html">
    <div class="service-icon">
        <div class="block">
            <div class="block-content">
                <div class="form-group">
                    <label>Icon</label>
                    <select class="form-control input-lg" name="icon" v-model="module.icon">
                        <option v-for="c in icons" :value="c">{{ c | capitalize }}</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Colour</label>
                    <select class="form-control input-lg" name="colour" v-model="module.colour">
                        <option v-for="c in colours" :value="c">{{ c | capitalize }}</option>
                    </select>
                </div>

                <div class="_s-icon mt-20 text-center">
                    <i :class="className"></i>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'service-icon',

    data () {
        return {
            icons: [],
            colours: [],
            module: {}
        }
    },

    mounted () {
        this.icons = _icons || []
        this.colours = _colours || []
        this.module = _module
    },

    computed: {
        className () {
            return 'flaticon-' + this.module.icon + ' ' + this.module.colour
        }
    }
}
</script>
