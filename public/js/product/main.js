import Vue from 'vue';
import ProductTable from './components/ProductTable.vue';
import store from './store/store.js';

new Vue({
  el: '#product-app',
  store,
  components: {
    ProductTable
  }
});
