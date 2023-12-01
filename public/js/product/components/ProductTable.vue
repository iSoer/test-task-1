<template>
  <div>
    <input type="text" placeholder="Search..." v-model="searchTerm" @input="filterProducts">
    <table>
      <tr>
        <th @click="sortBy('name')">Name</th>
        <th @click="sortBy('price')">Price</th>
        <th>Description</th>
      </tr>
      <tr v-for="product in filteredProducts" :key="product.id">
        <td>{{ product.name }}</td>
        <td>{{ product.price }}</td>
        <td>{{ product.description }}</td>
      </tr>
    </table>
  </div>
</template>

<script>
// @TODO: rewrite with Vue 3 using composition API, enhance code
// @TODO: add translations support for the static fields inside markup
export default {
  data() {
    return {
      products: [],
      filteredProducts: [],
      searchTerm: '',
      currentSortField: null
    };
  },
  mounted() {
    this.$store.dispatch('fetchProducts');
  },
  computed: {
    // Use the getter to get products
    products() {
      return this.$store.getters.allProducts;
    },
    filteredProducts() {
      // @TODO: implement
    }
  },
  methods: {
    filterProducts() {
      // @TODO: implement filtering logic based on searchTerm
    },
    sortBy(field) {
      // @TODO: implement sorting logic
    }
  }
};
</script>

<style>

</style>
