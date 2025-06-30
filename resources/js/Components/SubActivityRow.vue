<script setup>
import IconButton from './IconButton.vue'
import { format } from 'date-fns';

defineProps({
  subActivity: {
    type: Object,
    required: true,
  },
})

function formatDate(date) {
  return format(new Date(date), 'd MMM yyyy | hh:mm a');
}
</script>

<template>
  <tr class="border-t">
    <td class="p-2">{{ subActivity.name }}</td>
    <td class="p-2">{{ subActivity.description }}</td>
    <td class="p-2">{{ subActivity.inspection_required_count }}</td>
    <td class="p-2">{{ formatDate(subActivity.date) }}</td>
    <td class="p-2 text-center">
      <div class="flex justify-center gap-2">
        <IconButton type="edit" />
        <span>|</span>
        <IconButton type="view" />
      </div>
    </td>
  </tr>
</template>
