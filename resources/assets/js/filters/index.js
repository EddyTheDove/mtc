
Vue.filter('currency', function (value) {
    if ( 'string' === typeof value ) {
        value = parseInt(value)
    }

    // value = value.toString()
    value = value.toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")
    return '$' + value
})

Vue.filter('number', function(value) {
    value = parseInt(value)
    return value.toFixed(0).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")
})


Vue.filter('date', function(date) {
    return moment(date).format('DD/MM/YYYY')
})

Vue.filter('time', function(date) {
    return moment(date).format('DD MMM YYYY HH:mm')
})

Vue.filter('capitalize', function(string) {
    return string.charAt(0).toUpperCase() + string.slice(1)
})
