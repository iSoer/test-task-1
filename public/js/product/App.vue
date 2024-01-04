<script setup>
  import ProductForm from './components/ProductForm.vue'
  import ProductTable from './components/ProductTable.vue'
  import { useProductsStore } from './stores/products'

  const { createProduct, products } = useProductsStore()

</script>

<template>
  <ProductForm
    @create="createProduct"
  />
  <ProductTable
    :products="products"
  />
</template>
