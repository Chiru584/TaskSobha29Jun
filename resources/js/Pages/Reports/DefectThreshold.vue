<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import FilterDropdown from '@/Components/ThresholdFilter.vue'
import SearchFilterBar from '@/Components/ThresholdSearch.vue'
import ThresholdTable from '@/Components/ThresholdTable.vue'

const filters = ['Project', 'Division', 'Sub-Division', 'Activity', 'Sub-Activity', 'Severity', 'Control']
defineProps({ thresholds: Array });
</script>

<template>
   <AuthenticatedLayout>
    <div class="flex-1 p-6">
      <div class="flex items-center justify-between mb-4 flex-wrap gap-4">
        <h1 class="text-2xl font-bold">Defect Threshold Mapping</h1>
        <SearchFilterBar />
      </div>

      <div class="bg-white rounded-lg shadow p-4">
        <div class="flex flex-wrap gap-2 mb-4">
          <FilterDropdown v-for="item in filters" :key="item" :label="item" />
          <button class="bg-black text-white px-4 py-2 rounded-lg">Filter</button>
        </div>
        <ThresholdTable :thresholds="thresholds"/>
      </div>
    </div>
   </AuthenticatedLayout>
</template>
