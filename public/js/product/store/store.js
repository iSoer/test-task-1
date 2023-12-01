import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

// @TODO: Rewrite with Pinia
export default new Vuex.Store({
  state: {
    products: []
  },
  getters: {
    allProducts: state => {
      return state.products;
    },
    // Additional getters can be added here if needed
  },
  mutations: {
    setProducts(state, products) {
      state.products = products;
    }
  },
  actions: {
    fetchProducts({ commit }) {
      // Replace with the actual API call
      fetch('/api/products')
        .then(response => response.json())
        .then(data => {
          commit('setProducts', data);
        })
        .catch(error => console.error('Error fetching products:', error));
    }
  }
});
