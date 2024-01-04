<template>
  <div>
    <input
        v-model="searchTerm"
        type="text"
        :placeholder="$t('productTable.searchInputPlaceholder')"
    >
    <table>
      <tr>
        <th @click="setCurrentSortField('name')">{{ $t('productTable.nameTh') }}</th>
        <th @click="setCurrentSortField('price')">{{ $t('productTable.priceTh') }}</th>
        <th>{{ $t('productTable.descriptionTh') }}</th>
      </tr>
      <tr
          v-for="product in sortedProducts"
          :key="product.id"
      >
        <td>{{ product.name }}</td>
        <td>{{ product.price }}</td>
        <td>{{ product.description }}</td>
      </tr>
    </table>
  </div>
</template>

<script setup>
  import {computed, ref, defineProps} from 'vue'

  // Data
  const searchTerm = ref('')
  const currentSortField =  ref(null)

  // Props
  const props = defineProps({
    products: {
      type: Array,
      default: () => [],
    },
  })

  // Computed
  const filteredProducts = computed(() => {
    if (searchTerm.value) {
      return props.products.filter((item) => {
        return item?.name?.includes(searchTerm.value) || item?.description?.includes(searchTerm.value)
      })
    }

    return props.products
  })

  const sortedProducts = computed(() => {
    if (currentSortField.value) {
      // Sort by ASC
      return filteredProducts.value.sort((a, b) => {
        if (a[currentSortField.value] < b[currentSortField.value]) {
          return -1;
        }

        if (a[currentSortField.value] > b[currentSortField.value]) {
          return 1;
        }

        return 0
      })
    }

    return filteredProducts.value
  })

  // Methods
  const setCurrentSortField = (value) => {
    currentSortField.value = value
  }
</script>
