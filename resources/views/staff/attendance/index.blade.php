<x-app-layout>
    @foreach(Auth::user()->staff->classes as $classes)
    <x-table-card header="Attendance for ">
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="name">Name</th>
                        <th scope="col" class="sort" data-sort="action">Attendant</th>
                    </tr>
                </thead>
                <tbody class="list">
                    {{$classes->students}}
                    @foreach ($classes->students as $student)
                    <tr>
                        <td class="text-capitalize">
                            {{ $student->first_name }}
                        </td>
                        <td class="">
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" id="radio-{{ $student->id }}-on" name="status[{{ $student->id }}]"
                                    value="on" class="custom-control-input" required>
                                <label class="custom-control-label" for="radio-{{ $student->id }}-on">Present</label>
                            </div>
                            <div class="custom-control custom-radio d-inline">
                                <input type="radio" id="radio-{{ $student->id }}-off" name="status[{{ $student->id }}]"
                                    value="off" class="custom-control-input" required>
                                <label class="custom-control-label" for="radio-{{ $student->id }}-off">Absent</label>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-table-card>
    @endforeach
</x-app-layout>