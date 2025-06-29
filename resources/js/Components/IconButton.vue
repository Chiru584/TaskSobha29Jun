<script setup>
import { Pencil, Eye, Trash } from 'lucide-vue-next'

const props = defineProps({
  type: {
    type: String,
    required: true,
  },
})
</script>

<template>
  <button class="hover:text-blue-600">
    <Pencil v-if="type === 'edit'" class="w-5 h-5" />
    <Eye v-if="type === 'view'" class="w-4 h-4 hover:text-gray-700" />
    <Trash v-if="type === 'delete'" class="w-5 h-5" />
  </button>
</template>
