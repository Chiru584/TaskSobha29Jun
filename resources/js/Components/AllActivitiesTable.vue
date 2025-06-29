<script setup>
import { ref } from 'vue'
import SubActivityRow from './SubActivityRow.vue'
import { ChevronDown, ChevronUp } from 'lucide-vue-next'

const activities = ref([
  {
    name: 'Site Preparation',
    desc: 'Lorem Ipsum Lorem Ipsum',
    count: 14,
    time: '1 Dec 2023 | 11:00PM',
    subActivities: [
      {
        name: 'Clearing and Grading',
        desc: 'Lorem Ipsum Lorem Ipsum',
        count: 45,
        date: '18 Nov 2023 | 11:00PM'
      },
      {
        name: 'Clearing and Grading',
        desc: 'Lorem Ipsum Lorem Ipsum',
        count: 45,
        date: '18 Nov 2023 | 11:00PM'
      }
    ],
    expanded: true
  },
  {
    name: 'Foundation Construction',
    desc: 'Lorem Ipsum Lorem Ipsum',
    count: 14,
    time: '1 Dec 2023 | 11:00PM',
    subActivities: [],
    expanded: false
  },
  {
    name: 'Framing',
    desc: 'Lorem Ipsum Lorem Ipsum',
    count: 14,
    time: '1 Dec 2023 | 11:00PM',
    subActivities: [],
    expanded: false
  }
])
</script>

<template>
  <div class="bg-white rounded-lg shadow p-4">
    <table class="w-full text-sm text-left border-collapse">
      <thead class="text-gray-600">
        <tr>
          <th class="p-2">Activity</th>
          <th class="p-2">Description</th>
          <th class="p-2">Total Sub Activities</th>
          <th class="p-2">Date & Time</th>
          <th class="p-2 text-center">Action</th>
        </tr>
      </thead>

      <tbody>
        <template v-for="(activity, index) in activities" :key="index">
          <!-- Parent Activity Row -->
          <tr class="border-b">
            <td class="p-2 font-medium">{{ activity.name }}</td>
            <td class="p-2">{{ activity.desc }}</td>
            <td class="p-2">{{ activity.count }}</td>
            <td class="p-2">{{ activity.time }}</td>
            <td class="p-2 text-center">
              <button @click="activity.expanded = !activity.expanded"
                    class="p-1 rounded hover:bg-gray-200 transition" >
                    <ChevronUp v-if="activity.expanded" class="w-5 h-5 text-gray-600" />
                    <ChevronDown v-else class="w-5 h-5 text-gray-600" />
                </button>
            </td>
          </tr>

          <!-- Sub Activity Table -->
          <tr v-if="activity.expanded && activity.subActivities.length">
            <td colspan="5" class="p-0">
              <div class="border border-gray-300 rounded m-2">
                <table class="w-full text-sm text-left">
                  <thead class="bg-gray-100">
                    <tr>
                      <th class="p-2">Sub Activity</th>
                      <th class="p-2">Description</th>
                      <th class="p-2">Insp. Req. Count</th>
                      <th class="p-2">Date</th>
                      <th class="p-2 text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <SubActivityRow
                      v-for="(sub, subIndex) in activity.subActivities"
                      :key="subIndex"
                      :sub-activity="sub"
                    />
                  </tbody>
                </table>
              </div>
            </td>
          </tr>
        </template>
      </tbody>
    </table>
  </div>
</template>
