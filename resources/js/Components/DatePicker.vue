<script setup>
import Datepicker from '@vuepic/vue-datepicker'
import '@vuepic/vue-datepicker/dist/main.css'

import { ref } from 'vue'

const selectedDate = ref(new Date())
</script>

<template>
<div class="flex items-center gap-2 border rounded">
  <Datepicker
    v-model="selectedDate"
    :format="'dd MMM yyyy'"
    :clearable="false"
    :teleport="true"
    placeholder="Select Date"
    class="w-32"
  />
  </div>
</template>

<style scoped>
/* optional: customize here if needed */
</style>
