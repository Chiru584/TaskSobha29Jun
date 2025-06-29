<script setup>
import IconButton from './IconButton.vue'

defineProps({
  subActivity: {
    type: Object,
    required: true,
  },
})
</script>

<template>
  <tr class="border-t">
    <td class="p-2">{{ subActivity.name }}</td>
    <td class="p-2">{{ subActivity.desc }}</td>
    <td class="p-2">{{ subActivity.count }}</td>
    <td class="p-2">{{ subActivity.date }}</td>
    <td class="p-2 text-center">
      <div class="flex justify-center gap-2">
        <IconButton type="edit" />
        <span>|</span>
        <IconButton type="view" />
      </div>
    </td>
  </tr>
</template>
