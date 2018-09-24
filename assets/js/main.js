import Vue from 'vue'

import App from '@/App'
import router from '@/router'

window.Vue = Vue
Vue.config.productionTip = false

new Vue({
  el: '#app',
  router,
  components: {App},
  render: h => h(App)
})
