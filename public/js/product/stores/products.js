import {computed, ref} from 'vue'
import {defineStore} from 'pinia'

export const useProductsStore = defineStore('products', () => {
	// State
	const products = ref([])
	const isLoadingProducts = ref(false)
	const isLoadingAddProduct = ref(false)

	// Getters
	const allProducts = computed(() => {
		return products
	})

	// Actions
	const getProducts = async () => {
		isLoadingProducts.value = true

		try {
			const response = await fetch('/api/products')
			products.value = await response.json()
		} catch (error) {
			console.error('Error fetching products:', error)
		} finally {
			isLoadingProducts.value = false
		}
	}

	const createProduct = async (data) => {
		isLoadingAddProduct.value = true

		try {
			// I assume that the updated list of items will be returned
			const response = await fetch('/api/products', {
				method: 'POST',
				body: JSON.stringify(data)
			})
			products.value = await response.json()
		} catch (error) {
			console.error('Error fetching products:', error)
		} finally {
			isLoadingAddProduct.value = false
		}
	}

	return {
		products,
		isLoadingProducts,
		isLoadingAddProduct,

		allProducts,

		getProducts,
		createProduct,
	}
})
