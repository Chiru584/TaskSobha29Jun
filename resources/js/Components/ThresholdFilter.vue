<script setup>
defineProps({ label: String })
</script>

<template>
  <select class="border-[#cdcdcd] pl-2 pr-9 py-2 text-sm rounded-lg text-gray-600">
    <option>{{ label }}</option>
  </select>
</template>
