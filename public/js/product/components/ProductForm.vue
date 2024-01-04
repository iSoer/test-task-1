<template>
  <MyFormContainer
      action="/products/create"
  >
    <MyInput
        v-model="name"
        :is-required="true"
        id="name"
        :label="$t('productForm.labelName')"
    />
    <MyInput
        v-model="price"
        :is-required="true"
        id="price"
        :label="$t('productForm.labelPrice')"
        type="number"
        step="0.01"
    />
    <MyInput
        v-model="description"
        :is-required="true"
        id="description"
        :label="$t('productForm.labelDescription')"
    />
    <button
        type="submit"
        :disabled="!canCreateProduct"
        @click.prevent="createProduct"
    >
      {{ $t('productForm.submitFormButton') }}
    </button>
  </MyFormContainer>
</template>

<script setup>
  import { ref, computed, defineEmits } from 'vue'

  import MyFormContainer from './UI/MyFormContainer.vue'
  import MyInput from './UI/MyInput.vue'

  const name = ref(null)
  const price = ref(null)
  const description = ref(null)

  const emits = defineEmits(['create'])

  const canCreateProduct = computed(() => {
    return name.value && price.value && description.value
  })

  const createProduct = () => {
    if (!canCreateProduct.value) {
      return
    }

    emits('create', {
      name: name.value,
      price: price.value,
      description: description.value,
    })
  }
</script>
