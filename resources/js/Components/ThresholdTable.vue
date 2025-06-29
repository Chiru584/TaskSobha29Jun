<script setup>
import IconButton from './IconButton.vue'

const rows = [
  { defect: 'UCM Leak', t: 60, s: 5, c: 20, si: 4, ci: 8 },
  { defect: 'Glass Bend', t: 70, s: 3, c: 15, si: 6, ci: 3 },
  { defect: 'Wire not connected', t: 100, s: 5, c: 10, si: 8, ci: 8 },
  { defect: 'FCD connection issue', t: 200, s: 5, c: 5, si: 5, ci: 4 },
  { defect: 'Access not provided for FCU', t: 50, s: 8, c: 55, si: 4, ci: 8 },
  { defect: 'Screw missing', t: 30, s: 2, c: 32, si: 2, ci: 1 },
]
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
        <tr v-for="row in rows" :key="row.defect" class="border-[#cdcdcd] rounded-lg">
          <td class="p-2">{{ row.defect }}</td>
          <td class="p-2"><input type="text" :value="row.t" class="border-[#cdcdcd] px-2 py-1 rounded w-16 text-center text-[#686868] rounded-lg" /></td>
          <td class="p-2"><input type="text" :value="row.s" class="border-[#cdcdcd] px-2 py-1 rounded w-16 text-center text-[#686868] rounded-lg" /></td>
          <td class="p-2"><input type="text" :value="row.c" class="border-[#cdcdcd] px-2 py-1 rounded w-16 text-center text-[#686868] rounded-lg" /></td>
          <td class="p-2"><input type="text" :value="row.si" class="border-[#cdcdcd] px-2 py-1 rounded w-16 text-center text-[#686868] rounded-lg" /></td>
          <td class="p-2"><input type="text" :value="row.ci" class="border-[#cdcdcd] px-2 py-1 rounded w-16 text-center text-[#686868] rounded-lg" /></td>
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
