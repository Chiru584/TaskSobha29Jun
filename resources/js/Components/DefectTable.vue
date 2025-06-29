<script setup>
const rows = [
  { sou: 'SOU 3', project: 'Sobha Seahaven', division: 'Finishing Division', sub: 'Paint', activity: 'Dry Area Floor', subActivity: 'Floor Tiling', type: 'UCM Leak', threshold: 200, count: 80 },
  { sou: 'SOU 1', project: 'Sobha Seahaven', division: 'Finishing Division', sub: 'Tile Division', activity: 'Dry Area Floor', subActivity: 'Ceiling First coat', type: 'Glass Bend', threshold: 60, count: 40 },
  { sou: 'SOU 1', project: 'The Crest', division: 'Finishing Division', sub: 'Paint', activity: 'Dry Area Floor', subActivity: 'Floor Tiling', type: 'UCM Leak', threshold: 200, count: 20 },
  { sou: 'SOU 2', project: 'Sobha Hartland II', division: 'MEP Division', sub: 'Plumbing', activity: 'GI Box Fixing', subActivity: 'GI Box Fixing', type: 'Screw missing', threshold: 80, count: 50 },
  { sou: 'SOU 2', project: 'Sobha Seahaven', division: 'Finishing Division', sub: 'Tile Division', activity: 'Dry Area Floor', subActivity: 'MS Bracket Fixing', type: 'Screw missing', threshold: 100, count: 30 }
]
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
        <tr v-for="row in rows" :key="row.sou" class="border-b text-[#333333]">
          <td class="p-2.5">{{ row.sou }}</td>
          <td class="p-2.5">{{ row.project }}</td>
          <td class="p-2.5">{{ row.division }}</td>
          <td class="p-2.5">{{ row.sub }}</td>
          <td class="p-2.5">{{ row.activity }}</td>
          <td class="p-2.5">{{ row.subActivity }}</td>
          <td class="p-2.5">{{ row.type }}</td>
          <td class="p-2.5">{{ row.threshold }}</td>
          <td class="p-2.5">{{ row.count }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
