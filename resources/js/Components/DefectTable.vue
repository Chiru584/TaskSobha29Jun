<script setup>

defineProps({ reports: Array });

</script>

<template>
  <div class="p-6 overflow-auto">
    <table class="min-w-full text-sm text-left border-collapse">
      <thead class="bg-gray-50">
        <tr>
          <th class="p-2.5">SOU</th>
          <th class="p-2.5">Projects</th>
          <th class="p-2.5">Division</th>
          <th class="p-2.5">Sub-Division</th>
          <th class="p-2.5">Activity</th>
          <th class="p-2.5">Sub-Activity</th>
          <th class="p-2.5">Defect Type</th>
          <th class="p-2.5">Defect Threshold</th>
          <th class="p-2.5">Yearly Count</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="row in reports" :key="row.sou" class="border-b text-[#333333]">
          <td class="p-2.5">{{ row.sou }}</td>
          <td class="p-2.5">{{ row.project }}</td>
          <td class="p-2.5">{{ row.division }}</td>
          <td class="p-2.5">{{ row.sub_division }}</td>
          <td class="p-2.5">{{ row.activity }}</td>
          <td class="p-2.5">{{ row.sub_activity }}</td>
          <td class="p-2.5">{{ row.defect_type }}</td>
          <td class="p-2.5">{{ row.defect_threshold }}</td>
          <td class="p-2.5">{{ row.yearly_count }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
