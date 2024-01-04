<template>
  <form
      :action="action"
      :method="method"
  >
    <slot></slot>
  </form>
</template>

<script setup>
import {defineProps} from 'vue'

const props = defineProps({
  method: {
    type: String,
    default: 'post',
  },
  action: {
    type: String,
    required: true,
  },
})
</script>
