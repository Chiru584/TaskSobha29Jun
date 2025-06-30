<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import FilterDropdown from '@/Components/FilterDropdown.vue'
import ActivityTable from '@/Components/AllActivitiesTable.vue'
import DatePicker from '@/Components/DatePicker.vue'
import SearchFilterBar from '@/Components/ThresholdSearch.vue'

const filters = ['Parent Activity']

defineProps({ activities: Array });
</script>

<template>
  <AuthenticatedLayout>
    <div class="flex-1 p-6">
      <div class="flex items-center justify-between mb-4">
        <h1 class="text-2xl font-bold">All Activities</h1>
         <SearchFilterBar />
      </div>
      <div class="bg-white rounded-lg shadow p-4">
        <div class="flex gap-3 mb-4">
            <label class="pt-2"> Filter By</label>
            <FilterDropdown label="Parent Activity" />
            <DatePicker />
            <button class="bg-black text-white px-4 py-2 mr-8 rounded absolute right-0 ">+ Add New Activity</button>
        </div>
        <ActivityTable :activities="activities" />
      </div>
  </div>
  </AuthenticatedLayout>
</template>
