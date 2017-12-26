<template lang="html">
    <div class="_s-item" @click="selected()">
        <div class="_s-icon">
            <i :class="icon"></i>
        </div>

        <div class="_s-item-title">
            {{ service.name }}
        </div>

        <div class="_s-item-desc">
            {{ service.excerpt }}
        </div>
    </div>
</template>

<script>
export default {
    name: 'service',
    props: ['service'],

    computed: {
        icon () {
            return 'flaticon-' + this.service.icon + ' ' + this.service.colour
        }
    },

    methods: {
        selected () {
            this.$emit('selected')
        }
    }
}
</script>
