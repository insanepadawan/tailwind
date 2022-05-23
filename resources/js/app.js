require('./bootstrap')

import { createApp } from 'vue/dist/vue.esm-browser.prod'


window.addEventListener('DOMContentLoaded', function () {

    const app = createApp()

    app.mount('#app')

})
