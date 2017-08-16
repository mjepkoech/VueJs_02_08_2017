import Vue from 'vue'
import Router from 'vue-router'
import Hello from './Hello.vue'
import About from './About.vue'
import Coins from './Talents.vue'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Hello',
      component: Hello
    },
    {
      path: '/about',
      name: 'About',
      component: About
    },
    {
      path: '/talents',
      name: 'Talents',
      component: Coins
    }
  ]
})