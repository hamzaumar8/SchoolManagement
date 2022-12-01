<div>
    <div>

        <div class="my-3 overflow-x-auto bg-white shadow-lg rounded-lg overflow-y-auto relative ps ps--active-x">

            <table class="table power-grid-table rounded-lg min-w-full border border-slate-200 dark:bg-slate-600 dark:border-slate-500">
                <thead class="shadow-sm bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-500">
                    <tr class="">
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 ">
                            <div class="uppercase">
                                <span>NO.</span>
                            </div>
                        </th>

                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 " style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>Student Name</span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 " style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>Index Number</span>
                            </div>
                        </th>
                        <th class="block !w-[100px] ">
                        </th>

                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 " style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>Action </span>
                            </div>
                        </th>

                    </tr>
                </thead>
                <tbody class="text-slate-800">
                    @forelse ($classes->students as $index => $student)
                    <tr class="table-t-r">

                        <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200 ">
                            <span class="">
                                <div>
                                    {{ $index + 1 }}
                                </div>
                            </span>
                        </td>
                        <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    {{$student->index_number}}
                                </div>
                            </span>
                        </td>
                        <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    {{$student->fullname()}}
                                </div>
                            </span>
                        </td>
                        <td class="block !w-[100px] ">
                        </td>

                        <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    <a href="{{ route('staff.grade.class_subject_preschool', [$student->class_id,$subject->id,$student->id,$student->class->class_type]) }}" class="px-4 py-2 text-xs font-bold uppercase cursor-pointer outline-none inline-flex justify-center items-center group transition-all ease-in duration-150 focus:ring-2 focus:ring-offset-2 hover:shadow-sm rounded-md gap-x-2 ring-green-500 text-green-500 border border-green-500 hover:bg-green-50">input
                                        results</a>
                                </div>
                            </span>
                        </td>


                    </tr>
                    @empty
                    <tr>
                        <td colspan="12" class=" text-center uppercase px-3 py-2 whitespace-nowrap text-red-500 font-bold">
                            <span class="">
                                <div>
                                    no student in this class
                                </div>
                            </span>
                        </td>
                    </tr>
                    @endforelse

                </tbody>
            </table>

        </div>

    </div>
</div>