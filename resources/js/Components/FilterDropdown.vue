<script setup>
defineProps({ label: String })
</script>

<template>
  <select class="border-[#cdcdcd] rounded-lg pl-2 pr-9 text-sm text-gray-600">
    <option>{{ label }}</option>
  </select>
</template>
