import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const store = new Vuex.Store({
 props: {
  state: {
    count: 0
	}
  },
  mutations: {
  	increment: state => state.count++,
    decrement: state => state.count--
  }
});
export default store;