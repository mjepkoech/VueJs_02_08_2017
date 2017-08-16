
import Vue from 'vue'
import Vuex from 'vuex'
import router from './router'
import App from './router/App.vue'
import store from './router/counter.js'

Vue.use(Vuex)
Vue.component('watch', require('./router/watch.vue'))

Vue.config.productionTip = false
import Vue from 'vue'

const defaultBackgroundColor = '#86bbff'


new Vue({
  el: '#app',
  router,
  store,
  template: '<App/>',
  components: { App }
})


