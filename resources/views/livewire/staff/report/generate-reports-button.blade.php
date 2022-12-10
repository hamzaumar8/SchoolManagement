<div>
    {{ $classId }}
  <x-button rose >Generate Report</x-button>
  <x-button wire:click='$emit("openModal", "staff.report.generate-reports", {{ json_encode(["classId" => $classId, "termId" => $termId]) }})'>Edit User</x-button>

</div>
