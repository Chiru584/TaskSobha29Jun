<script setup>
import IconButton from './IconButton.vue'
defineProps({ thresholds: Array });
</script>

<template>
  <div class="">
    <table class="w-full text-sm text-left border-collapse">
      <thead class="bg-gray-50">
        <tr>
          <th class="p-2">Defect Type</th>
          <th class="p-2">Defect Threshold</th>
          <th class="p-2">Sporadic Threshold</th>
          <th class="p-2">Chronic Threshold</th>
          <th class="p-2">Severity Index</th>
          <th class="p-2">Control Index</th>
          <th class="p-2 text-center">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="row in thresholds" :key="row.defect" class="border-[#cdcdcd] rounded-lg">
          <td class="p-2">{{ row.defect_type }}</td>
          <td class="p-2"><input type="text" :value="row.defect_threshold" class="border-[#cdcdcd] px-2 py-1 rounded w-16 text-center text-[#686868] rounded-lg" /></td>
          <td class="p-2"><input type="text" :value="row.sporadic_threshold" class="border-[#cdcdcd] px-2 py-1 rounded w-16 text-center text-[#686868] rounded-lg" /></td>
          <td class="p-2"><input type="text" :value="row.chronic_threshold" class="border-[#cdcdcd] px-2 py-1 rounded w-16 text-center text-[#686868] rounded-lg" /></td>
          <td class="p-2"><input type="text" :value="row.severity_index" class="border-[#cdcdcd] px-2 py-1 rounded w-16 text-center text-[#686868] rounded-lg" /></td>
          <td class="p-2"><input type="text" :value="row.control_index" class="border-[#cdcdcd] px-2 py-1 rounded w-16 text-center text-[#686868] rounded-lg" /></td>
          <td class="p-2 text-center">
            <div class="flex justify-center gap-2">
              <IconButton type="edit" />
              <span>|</span>
              <IconButton type="delete" />
            </div>
          </td>
        </tr>
      </tbody>
    </table>

    
    <div class="flex justify-center mt-6">
      <button class="bg-black text-white px-3 py-1 rounded-lg hover:bg-gray-800">Sell All ➤</button>
    </div>
  </div>
</template>
