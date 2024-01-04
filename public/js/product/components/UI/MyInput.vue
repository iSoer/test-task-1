<template>
  <div>
    <label
        v-if="label"
        :for="id"
    >
      {{ label }}
    </label>
    <input
        :id="id"
        :name="name"
        :type="type"
        :required="isRequired"
        :value="modelValue"
        :step="step"
        @input="inputModelValue"
    >
  </div>
</template>
<script setup>
import {defineProps, defineEmits} from 'vue'

const props = defineProps({
  id: {
    type: String,
    default: null,
  },
  label: {
    type: String,
    default: null,
  },
  modelValue: {
    type: [String, Number],
    default: null,
  },
  name: {
    type: String,
    default: null,
  },
  type: {
    type: String,
    default: 'text',
  },
  isRequired: {
    type: Boolean,
    default: false,
  },
  step: {
    type: String,
    default: null,
  },
})

const emits = defineEmits(['update:modelValue'])

const inputModelValue = (event) => {
  emits('update:modelValue', event.target.value)
}
</script>
