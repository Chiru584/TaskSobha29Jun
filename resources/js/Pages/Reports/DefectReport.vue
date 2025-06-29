<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import FilterDropdown from '@/Components/FilterDropdown.vue'
import SearchAndExport from '@/Components/SearchAndExport.vue'
import DefectTable from '@/Components/DefectTable.vue'

const filters = ['Project', 'Division', 'Sub-Division', 'Activity', 'Sub-Activity', 'Defect Type', 'Year - 2025']
</script>

<template>
  <AuthenticatedLayout>
    <div class="flex-1 px-3 py-3">
     <div class="flex items-center justify-between mb-3 flex-wrap gap-4">
        <h1 class="text-2xl font-bold">Defects Report</h1>
        <SearchAndExport />
    </div>
      <div class="bg-white rounded-lg shadow-sm">
      <div class="flex items-center justify-between mb-4 flex-wrap gap-4 p-3">
        <div class="flex flex-wrap gap-2">
          <label class="mt-2 text-bold">Filter By</label>
          <FilterDropdown v-for="item in filters" :key="item" :label="item" />
        </div>
      </div>
      <DefectTable />
      </div>
    </div>
  </AuthenticatedLayout>
</template>
