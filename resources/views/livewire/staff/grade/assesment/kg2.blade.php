<div>
    <style>
    input[type="radio"]:checked+.fa:before,
    input[type="radio"]:checked+label:before {
        content: "\f00c";
    }
    </style>
    <form wire:submit.prevent="submit" enctype="multipart/form-data">
        <div class="my-3 overflow-x-auto bg-white shadow-lg rounded-lg overflow-y-auto relative ps ps--active-x">
            <table
                class="table power-grid-table rounded-lg min-w-full border border-slate-200 dark:bg-slate-600 dark:border-slate-500">
                <thead
                    class="shadow-sm bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-500 border-b-2 border-b-gray-900">

                    <tr>
                        <th
                            class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 w-[20px]">
                            <div class="uppercase">
                                <span></span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 "
                            style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span> </span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300"
                            style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>A+</span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 "
                            style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>A</span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 "
                            style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>D</span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 "
                            style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>N</span>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody class="text-slate-800">
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200 border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    1
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can associate parts of the body with numerals.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-assoc_parts_body-a+" class="hidden"
                                    name="assoc_parts_body" value="A+" wire:model.defer="assoc_parts_body">
                                <label class="fa @error('assoc_parts_body') !border-red-500 @enderror"
                                    for="radio-assoc_parts_body-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-assoc_parts_body-a" class="hidden" name="assoc_parts_body"
                                    value="A" wire:model.defer="assoc_parts_body">
                                <label class="fa @error('assoc_parts_body') !border-red-500 @enderror"
                                    for="radio-assoc_parts_body-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-assoc_parts_body-d" class="hidden" name="assoc_parts_body"
                                    value="D" wire:model.defer="assoc_parts_body">
                                <label class="fa @error('assoc_parts_body') !border-red-500 @enderror"
                                    for="radio-assoc_parts_body-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-assoc_parts_body-n" class="hidden" name="assoc_parts_body"
                                    value="N" wire:model.defer="assoc_parts_body">
                                <label class="fa @error('assoc_parts_body') !border-red-500 @enderror"
                                    for="radio-assoc_parts_body-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200 border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    2
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can compare relationship between numbers. Examples; <,>, =
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-compare_rel_no-a+" class="hidden" name="compare_rel_no"
                                    value="A+" wire:model.defer="compare_rel_no">
                                <label class="fa @error('compare_rel_no') !border-red-500 @enderror"
                                    for="radio-compare_rel_no-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-compare_rel_no-a" class="hidden" name="compare_rel_no"
                                    value="A" wire:model.defer="compare_rel_no">
                                <label class="fa @error('compare_rel_no') !border-red-500 @enderror"
                                    for="radio-compare_rel_no-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-compare_rel_no-d" class="hidden" name="compare_rel_no"
                                    value="D" wire:model.defer="compare_rel_no">
                                <label class="fa @error('compare_rel_no') !border-red-500 @enderror"
                                    for="radio-compare_rel_no-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-compare_rel_no-n" class="hidden" name="compare_rel_no"
                                    value="N" wire:model.defer="compare_rel_no">
                                <label class="fa @error('compare_rel_no') !border-red-500 @enderror"
                                    for="radio-compare_rel_no-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200 border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    3
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can compare the weight of objects. Examples; Heavy, light. </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-compare_weight_obj-a+" class="hidden"
                                    name="compare_weight_obj" value="A+" wire:model.defer="compare_weight_obj">
                                <label class="fa @error('compare_weight_obj') !border-red-500 @enderror"
                                    for="radio-compare_weight_obj-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-compare_weight_obj-a" class="hidden"
                                    name="compare_weight_obj" value="A" wire:model.defer="compare_weight_obj">
                                <label class="fa @error('compare_weight_obj') !border-red-500 @enderror"
                                    for="radio-compare_weight_obj-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-compare_weight_obj-d" class="hidden"
                                    name="compare_weight_obj" value="D" wire:model.defer="compare_weight_obj">
                                <label class="fa @error('compare_weight_obj') !border-red-500 @enderror"
                                    for="radio-compare_weight_obj-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-compare_weight_obj-n" class="hidden"
                                    name="compare_weight_obj" value="N" wire:model.defer="compare_weight_obj">
                                <label class="fa @error('compare_weight_obj') !border-red-500 @enderror"
                                    for="radio-compare_weight_obj-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    4
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can tell the size of object. Example; Big and small.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-tell_size_obj-a+" class="hidden" name="tell_size_obj"
                                    value="A+" wire:model.defer="tell_size_obj">
                                <label class="fa @error('tell_size_obj') !border-red-500 @enderror"
                                    for="radio-tell_size_obj-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-tell_size_obj-a" class="hidden" name="tell_size_obj"
                                    value="A" wire:model.defer="tell_size_obj">
                                <label class="fa @error('tell_size_obj') !border-red-500 @enderror"
                                    for="radio-tell_size_obj-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-tell_size_obj-d" class="hidden" name="tell_size_obj"
                                    value="D" wire:model.defer="tell_size_obj">
                                <label class="fa @error('tell_size_obj') !border-red-500 @enderror"
                                    for="radio-tell_size_obj-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-tell_size_obj-n" class="hidden" name="tell_size_obj"
                                    value="N" wire:model.defer="tell_size_obj">
                                <label class="fa @error('tell_size_obj') !border-red-500 @enderror"
                                    for="radio-tell_size_obj-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    5
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>Can compare the height of objects. Example; tall and short.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-compare_height_obj-a+" class="hidden"
                                    name="compare_height_obj" value="A+" wire:model.defer="compare_height_obj">
                                <label class="fa @error('compare_height_obj') !border-red-500 @enderror"
                                    for="radio-compare_height_obj-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-compare_height_obj-a" class="hidden"
                                    name="compare_height_obj" value="A" wire:model.defer="compare_height_obj">
                                <label class="fa @error('compare_height_obj') !border-red-500 @enderror"
                                    for="radio-compare_height_obj-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-compare_height_obj-d" class="hidden"
                                    name="compare_height_obj" value="D" wire:model.defer="compare_height_obj">
                                <label class="fa @error('compare_height_obj') !border-red-500 @enderror"
                                    for="radio-compare_height_obj-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-compare_height_obj-n" class="hidden"
                                    name="compare_height_obj" value="N" wire:model.defer="compare_height_obj">
                                <label class="fa @error('compare_height_obj') !border-red-500 @enderror"
                                    for="radio-compare_height_obj-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    6
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can compare the length of objects. Example; Long and short. </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-compare_len_obj-a+" class="hidden" name="compare_len_obj"
                                    value="A+" wire:model.defer="compare_len_obj">
                                <label class="fa @error('compare_len_obj') !border-red-500 @enderror"
                                    for="radio-compare_len_obj-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-compare_len_obj-a" class="hidden" name="compare_len_obj"
                                    value="A" wire:model.defer="compare_len_obj">
                                <label class="fa @error('compare_len_obj') !border-red-500 @enderror"
                                    for="radio-compare_len_obj-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-compare_len_obj-d" class="hidden" name="compare_len_obj"
                                    value="D" wire:model.defer="compare_len_obj">
                                <label class="fa @error('compare_len_obj') !border-red-500 @enderror"
                                    for="radio-compare_len_obj-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-compare_len_obj-n" class="hidden" name="compare_len_obj"
                                    value="N" wire:model.defer="compare_len_obj">
                                <label class="fa @error('compare_len_obj') !border-red-500 @enderror"
                                    for="radio-compare_len_obj-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    7
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can sort and group according to colours and shapes.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-sort_group_color-a+" class="hidden"
                                    name="sort_group_color" value="A+" wire:model.defer="sort_group_color">
                                <label class="fa @error('sort_group_color') !border-red-500 @enderror"
                                    for="radio-sort_group_color-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-sort_group_color-a" class="hidden" name="sort_group_color"
                                    value="A" wire:model.defer="sort_group_color">
                                <label class="fa @error('sort_group_color') !border-red-500 @enderror"
                                    for="radio-sort_group_color-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-sort_group_color-d" class="hidden" name="sort_group_color"
                                    value="D" wire:model.defer="sort_group_color">
                                <label class="fa @error('sort_group_color') !border-red-500 @enderror"
                                    for="radio-sort_group_color-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-sort_group_color-n" class="hidden" name="sort_group_color"
                                    value="N" wire:model.defer="sort_group_color">
                                <label class="fa @error('sort_group_color') !border-red-500 @enderror"
                                    for="radio-sort_group_color-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    8
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can join two groups of object together.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-join_group_obj-a+" class="hidden" name="join_group_obj"
                                    value="A+" wire:model.defer="join_group_obj">
                                <label class="fa @error('join_group_obj') !border-red-500 @enderror"
                                    for="radio-join_group_obj-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-join_group_obj-a" class="hidden" name="join_group_obj"
                                    value="A" wire:model.defer="join_group_obj">
                                <label class="fa @error('join_group_obj') !border-red-500 @enderror"
                                    for="radio-join_group_obj-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-join_group_obj-d" class="hidden" name="join_group_obj"
                                    value="D" wire:model.defer="join_group_obj">
                                <label class="fa @error('join_group_obj') !border-red-500 @enderror"
                                    for="radio-join_group_obj-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-join_group_obj-n" class="hidden" name="join_group_obj"
                                    value="N" wire:model.defer="join_group_obj">
                                <label class="fa @error('join_group_obj') !border-red-500 @enderror"
                                    for="radio-join_group_obj-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    9
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can add two numbers. Example; 5+1=6.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-add_two_no-a+" class="hidden" name="add_two_no" value="A+"
                                    wire:model.defer="add_two_no">
                                <label class="fa @error('add_two_no') !border-red-500 @enderror"
                                    for="radio-add_two_no-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-add_two_no-a" class="hidden" name="add_two_no" value="A"
                                    wire:model.defer="add_two_no">
                                <label class="fa @error('add_two_no') !border-red-500 @enderror"
                                    for="radio-add_two_no-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-add_two_no-d" class="hidden" name="add_two_no" value="D"
                                    wire:model.defer="add_two_no">
                                <label class="fa @error('add_two_no') !border-red-500 @enderror"
                                    for="radio-add_two_no-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-add_two_no-n" class="hidden" name="add_two_no" value="N"
                                    wire:model.defer="add_two_no">
                                <label class="fa @error('add_two_no') !border-red-500 @enderror"
                                    for="radio-add_two_no-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    10
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can estimate the number of 7+2=9 object that can fill a given space.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-estimate_no-a+" class="hidden" name="estimate_no"
                                    value="A+" wire:model.defer="estimate_no">
                                <label class="fa @error('estimate_no') !border-red-500 @enderror"
                                    for="radio-estimate_no-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-estimate_no-a" class="hidden" name="estimate_no" value="A"
                                    wire:model.defer="estimate_no">
                                <label class="fa @error('estimate_no') !border-red-500 @enderror"
                                    for="radio-estimate_no-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-estimate_no-d" class="hidden" name="estimate_no" value="D"
                                    wire:model.defer="estimate_no">
                                <label class="fa @error('estimate_no') !border-red-500 @enderror"
                                    for="radio-estimate_no-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-estimate_no-n" class="hidden" name="estimate_no" value="N"
                                    wire:model.defer="estimate_no">
                                <label class="fa @error('estimate_no') !border-red-500 @enderror"
                                    for="radio-estimate_no-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    11
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can take away a given number from a whole group. Examples; 5-2=3, 10-3=7
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-take_away_no-a+" class="hidden" name="take_away_no"
                                    value="A+" wire:model.defer="take_away_no">
                                <label class="fa @error('take_away_no') !border-red-500 @enderror"
                                    for="radio-take_away_no-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-take_away_no-a" class="hidden" name="take_away_no"
                                    value="A" wire:model.defer="take_away_no">
                                <label class="fa @error('take_away_no') !border-red-500 @enderror"
                                    for="radio-take_away_no-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-take_away_no-d" class="hidden" name="take_away_no"
                                    value="D" wire:model.defer="take_away_no">
                                <label class="fa @error('take_away_no') !border-red-500 @enderror"
                                    for="radio-take_away_no-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-take_away_no-n" class="hidden" name="take_away_no"
                                    value="N" wire:model.defer="take_away_no">
                                <label class="fa @error('take_away_no') !border-red-500 @enderror"
                                    for="radio-take_away_no-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    12
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can identify and describe their external body parts. Examples; Leg, arm, nose.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_desc_body-a+" class="hidden"
                                    name="identify_desc_body" value="A+" wire:model.defer="identify_desc_body">
                                <label class="fa @error('identify_desc_body') !border-red-500 @enderror"
                                    for="radio-identify_desc_body-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_desc_body-a" class="hidden"
                                    name="identify_desc_body" value="A" wire:model.defer="identify_desc_body">
                                <label class="fa @error('identify_desc_body') !border-red-500 @enderror"
                                    for="radio-identify_desc_body-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_desc_body-d" class="hidden"
                                    name="identify_desc_body" value="D" wire:model.defer="identify_desc_body">
                                <label class="fa @error('identify_desc_body') !border-red-500 @enderror"
                                    for="radio-identify_desc_body-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_desc_body-n" class="hidden"
                                    name="identify_desc_body" value="N" wire:model.defer="identify_desc_body">
                                <label class="fa @error('identify_desc_body') !border-red-500 @enderror"
                                    for="radio-identify_desc_body-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    13
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can tell the functions of some of the external body part.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-func_body_part-a+" class="hidden" name="func_body_part"
                                    value="A+" wire:model.defer="func_body_part">
                                <label class="fa @error('func_body_part') !border-red-500 @enderror"
                                    for="radio-func_body_part-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-func_body_part-a" class="hidden" name="func_body_part"
                                    value="A" wire:model.defer="func_body_part">
                                <label class="fa @error('func_body_part') !border-red-500 @enderror"
                                    for="radio-func_body_part-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-func_body_part-d" class="hidden" name="func_body_part"
                                    value="D" wire:model.defer="func_body_part">
                                <label class="fa @error('func_body_part') !border-red-500 @enderror"
                                    for="radio-func_body_part-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-func_body_part-n" class="hidden" name="func_body_part"
                                    value="N" wire:model.defer="func_body_part">
                                <label class="fa @error('func_body_part') !border-red-500 @enderror"
                                    for="radio-func_body_part-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    14
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can identify and describe some of the human body organs. Example; Heart, intestines,
                                    brain.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_desc_human_body-a+" class="hidden"
                                    name="identify_desc_human_body" value="A+"
                                    wire:model.defer="identify_desc_human_body">
                                <label class="fa @error('identify_desc_human_body') !border-red-500 @enderror"
                                    for="radio-identify_desc_human_body-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_desc_human_body-a" class="hidden"
                                    name="identify_desc_human_body" value="A"
                                    wire:model.defer="identify_desc_human_body">
                                <label class="fa @error('identify_desc_human_body') !border-red-500 @enderror"
                                    for="radio-identify_desc_human_body-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_desc_human_body-d" class="hidden"
                                    name="identify_desc_human_body" value="D"
                                    wire:model.defer="identify_desc_human_body">
                                <label class="fa @error('identify_desc_human_body') !border-red-500 @enderror"
                                    for="radio-identify_desc_human_body-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_desc_human_body-n" class="hidden"
                                    name="identify_desc_human_body" value="N"
                                    wire:model.defer="identify_desc_human_body">
                                <label class="fa @error('identify_desc_human_body') !border-red-500 @enderror"
                                    for="radio-identify_desc_human_body-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    15
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can tell the functions of some of the internal body organs. Example; The heart pumps
                                    blood.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-func_internal_body_part-a+" class="hidden"
                                    name="func_internal_body_part" value="A+"
                                    wire:model.defer="func_internal_body_part">
                                <label class="fa @error('func_internal_body_part') !border-red-500 @enderror"
                                    for="radio-func_internal_body_part-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-func_internal_body_part-a" class="hidden"
                                    name="func_internal_body_part" value="A" wire:model.defer="func_internal_body_part">
                                <label class="fa @error('func_internal_body_part') !border-red-500 @enderror"
                                    for="radio-func_internal_body_part-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-func_internal_body_part-d" class="hidden"
                                    name="func_internal_body_part" value="D" wire:model.defer="func_internal_body_part">
                                <label class="fa @error('func_internal_body_part') !border-red-500 @enderror"
                                    for="radio-func_internal_body_part-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-func_internal_body_part-n" class="hidden"
                                    name="func_internal_body_part" value="N" wire:model.defer="func_internal_body_part">
                                <label class="fa @error('func_internal_body_part') !border-red-500 @enderror"
                                    for="radio-func_internal_body_part-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    16
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can observe personal hygiene. Example; Covering the mouth when sneezing.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-observe_personal_hygiene-a+" class="hidden"
                                    name="observe_personal_hygiene" value="A+"
                                    wire:model.defer="observe_personal_hygiene">
                                <label class="fa @error('observe_personal_hygiene') !border-red-500 @enderror"
                                    for="radio-observe_personal_hygiene-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-observe_personal_hygiene-a" class="hidden"
                                    name="observe_personal_hygiene" value="A"
                                    wire:model.defer="observe_personal_hygiene">
                                <label class="fa @error('observe_personal_hygiene') !border-red-500 @enderror"
                                    for="radio-observe_personal_hygiene-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-observe_personal_hygiene-d" class="hidden"
                                    name="observe_personal_hygiene" value="D"
                                    wire:model.defer="observe_personal_hygiene">
                                <label class="fa @error('observe_personal_hygiene') !border-red-500 @enderror"
                                    for="radio-observe_personal_hygiene-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-observe_personal_hygiene-n" class="hidden"
                                    name="observe_personal_hygiene" value="N"
                                    wire:model.defer="observe_personal_hygiene">
                                <label class="fa @error('observe_personal_hygiene') !border-red-500 @enderror"
                                    for="radio-observe_personal_hygiene-n"></label>
                            </div>
                        </td>
                    </tr>

                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    17
                                </div>
                            </span>
                        </td>
                        <td class=" px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can identify the various food groups. Example; Carbohydrate, protein, minerals.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_food_groups-a+" class="hidden"
                                    name="identify_food_groups" value="A+" wire:model.defer="identify_food_groups">
                                <label class="fa @error('identify_food_groups') !border-red-500 @enderror"
                                    for="radio-identify_food_groups-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_food_groups-a" class="hidden"
                                    name="identify_food_groups" value="A" wire:model.defer="identify_food_groups">
                                <label class="fa @error('identify_food_groups') !border-red-500 @enderror"
                                    for="radio-identify_food_groups-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_food_groups-d" class="hidden"
                                    name="identify_food_groups" value="D" wire:model.defer="identify_food_groups">
                                <label class="fa @error('identify_food_groups') !border-red-500 @enderror"
                                    for="radio-identify_food_groups-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_food_groups-n" class="hidden"
                                    name="identify_food_groups" value="N" wire:model.defer="identify_food_groups">
                                <label class="fa @error('identify_food_groups') !border-red-500 @enderror"
                                    for="radio-identify_food_groups-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    18
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can talk about the importance of eating a balanced meal. Example; For proper growth.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-importance_eating-a+" class="hidden"
                                    name="importance_eating" value="A+" wire:model.defer="importance_eating">
                                <label class="fa @error('importance_eating') !border-red-500 @enderror"
                                    for="radio-importance_eating-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-importance_eating-a" class="hidden"
                                    name="importance_eating" value="A" wire:model.defer="importance_eating">
                                <label class="fa @error('importance_eating') !border-red-500 @enderror"
                                    for="radio-importance_eating-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-importance_eating-d" class="hidden"
                                    name="importance_eating" value="D" wire:model.defer="importance_eating">
                                <label class="fa @error('importance_eating') !border-red-500 @enderror"
                                    for="radio-importance_eating-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-importance_eating-n" class="hidden"
                                    name="importance_eating" value="N" wire:model.defer="importance_eating">
                                <label class="fa @error('importance_eating') !border-red-500 @enderror"
                                    for="radio-importance_eating-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    19
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can differentiate between clean and dirty environment.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-diff_clean_dirty-a+" class="hidden"
                                    name="diff_clean_dirty" value="A+" wire:model.defer="diff_clean_dirty">
                                <label class="fa @error('diff_clean_dirty') !border-red-500 @enderror"
                                    for="radio-diff_clean_dirty-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-diff_clean_dirty-a" class="hidden" name="diff_clean_dirty"
                                    value="A" wire:model.defer="diff_clean_dirty">
                                <label class="fa @error('diff_clean_dirty') !border-red-500 @enderror"
                                    for="radio-diff_clean_dirty-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-diff_clean_dirty-d" class="hidden" name="diff_clean_dirty"
                                    value="D" wire:model.defer="diff_clean_dirty">
                                <label class="fa @error('diff_clean_dirty') !border-red-500 @enderror"
                                    for="radio-diff_clean_dirty-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-diff_clean_dirty-n" class="hidden" name="diff_clean_dirty"
                                    value="N" wire:model.defer="diff_clean_dirty">
                                <label class="fa @error('diff_clean_dirty') !border-red-500 @enderror"
                                    for="radio-diff_clean_dirty-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    20
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can demonstrate ways of keeping the environment clean.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-demo_keep_environ-a+" class="hidden"
                                    name="demo_keep_environ" value="A+" wire:model.defer="demo_keep_environ">
                                <label class="fa @error('demo_keep_environ') !border-red-500 @enderror"
                                    for="radio-demo_keep_environ-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-demo_keep_environ-a" class="hidden"
                                    name="demo_keep_environ" value="A" wire:model.defer="demo_keep_environ">
                                <label class="fa @error('demo_keep_environ') !border-red-500 @enderror"
                                    for="radio-demo_keep_environ-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-demo_keep_environ-d" class="hidden"
                                    name="demo_keep_environ" value="D" wire:model.defer="demo_keep_environ">
                                <label class="fa @error('demo_keep_environ') !border-red-500 @enderror"
                                    for="radio-demo_keep_environ-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-demo_keep_environ-n" class="hidden"
                                    name="demo_keep_environ" value="N" wire:model.defer="demo_keep_environ">
                                <label class="fa @error('demo_keep_environ') !border-red-500 @enderror"
                                    for="radio-demo_keep_environ-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    21
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can mention some equipment for cleaning the environment. Examples; Broom for
                                    sweeping,
                                    cutlass for weeding.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-equip_cleaning_environ-a+" class="hidden"
                                    name="equip_cleaning_environ" value="A+" wire:model.defer="equip_cleaning_environ">
                                <label class="fa @error('equip_cleaning_environ') !border-red-500 @enderror"
                                    for="radio-equip_cleaning_environ-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-equip_cleaning_environ-a" class="hidden"
                                    name="equip_cleaning_environ" value="A" wire:model.defer="equip_cleaning_environ">
                                <label class="fa @error('equip_cleaning_environ') !border-red-500 @enderror"
                                    for="radio-equip_cleaning_environ-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-equip_cleaning_environ-d" class="hidden"
                                    name="equip_cleaning_environ" value="D" wire:model.defer="equip_cleaning_environ">
                                <label class="fa @error('equip_cleaning_environ') !border-red-500 @enderror"
                                    for="radio-equip_cleaning_environ-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-equip_cleaning_environ-n" class="hidden"
                                    name="equip_cleaning_environ" value="N" wire:model.defer="equip_cleaning_environ">
                                <label class="fa @error('equip_cleaning_environ') !border-red-500 @enderror"
                                    for="radio-equip_cleaning_environ-n"></label>
                            </div>
                        </td>
                    </tr>


                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200 border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    22
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can differentiate between harmful and non-harmful objects.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-diff_harmful_non-a+" class="hidden"
                                    name="diff_harmful_non" value="A+" wire:model.defer="diff_harmful_non">
                                <label class="fa @error('diff_harmful_non') !border-red-500 @enderror"
                                    for="radio-diff_harmful_non-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-diff_harmful_non-a" class="hidden" name="diff_harmful_non"
                                    value="A" wire:model.defer="diff_harmful_non">
                                <label class="fa @error('diff_harmful_non') !border-red-500 @enderror"
                                    for="radio-diff_harmful_non-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-diff_harmful_non-d" class="hidden" name="diff_harmful_non"
                                    value="D" wire:model.defer="diff_harmful_non">
                                <label class="fa @error('diff_harmful_non') !border-red-500 @enderror"
                                    for="radio-diff_harmful_non-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-diff_harmful_non-n" class="hidden" name="diff_harmful_non"
                                    value="N" wire:model.defer="diff_harmful_non">
                                <label class="fa @error('diff_harmful_non') !border-red-500 @enderror"
                                    for="radio-diff_harmful_non-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200 border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    23
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can tell the practice that can cause road accidents.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-practice_road_accidents-a+" class="hidden"
                                    name="practice_road_accidents" value="A+"
                                    wire:model.defer="practice_road_accidents">
                                <label class="fa @error('practice_road_accidents') !border-red-500 @enderror"
                                    for="radio-practice_road_accidents-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-practice_road_accidents-a" class="hidden"
                                    name="practice_road_accidents" value="A" wire:model.defer="practice_road_accidents">
                                <label class="fa @error('practice_road_accidents') !border-red-500 @enderror"
                                    for="radio-practice_road_accidents-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-practice_road_accidents-d" class="hidden"
                                    name="practice_road_accidents" value="D" wire:model.defer="practice_road_accidents">
                                <label class="fa @error('practice_road_accidents') !border-red-500 @enderror"
                                    for="radio-practice_road_accidents-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-practice_road_accidents-n" class="hidden"
                                    name="practice_road_accidents" value="N" wire:model.defer="practice_road_accidents">
                                <label class="fa @error('practice_road_accidents') !border-red-500 @enderror"
                                    for="radio-practice_road_accidents-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200 border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    24
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can distinguish the nuclear and extended family.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-dist_nuclear_extended-a+" class="hidden"
                                    name="dist_nuclear_extended" value="A+" wire:model.defer="dist_nuclear_extended">
                                <label class="fa @error('dist_nuclear_extended') !border-red-500 @enderror"
                                    for="radio-dist_nuclear_extended-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-dist_nuclear_extended-a" class="hidden"
                                    name="dist_nuclear_extended" value="A" wire:model.defer="dist_nuclear_extended">
                                <label class="fa @error('dist_nuclear_extended') !border-red-500 @enderror"
                                    for="radio-dist_nuclear_extended-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-dist_nuclear_extended-d" class="hidden"
                                    name="dist_nuclear_extended" value="D" wire:model.defer="dist_nuclear_extended">
                                <label class="fa @error('dist_nuclear_extended') !border-red-500 @enderror"
                                    for="radio-dist_nuclear_extended-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-dist_nuclear_extended-n" class="hidden"
                                    name="dist_nuclear_extended" value="N" wire:model.defer="dist_nuclear_extended">
                                <label class="fa @error('dist_nuclear_extended') !border-red-500 @enderror"
                                    for="radio-dist_nuclear_extended-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    25
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>Can talk about the roles and responsibilities of the family.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-roles_family-a+" class="hidden" name="roles_family"
                                    value="A+" wire:model.defer="roles_family">
                                <label class="fa @error('roles_family') !border-red-500 @enderror"
                                    for="radio-roles_family-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-roles_family-a" class="hidden" name="roles_family"
                                    value="A" wire:model.defer="roles_family">
                                <label class="fa @error('roles_family') !border-red-500 @enderror"
                                    for="radio-roles_family-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-roles_family-d" class="hidden" name="roles_family"
                                    value="D" wire:model.defer="roles_family">
                                <label class="fa @error('roles_family') !border-red-500 @enderror"
                                    for="radio-roles_family-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-roles_family-n" class="hidden" name="roles_family"
                                    value="N" wire:model.defer="roles_family">
                                <label class="fa @error('roles_family') !border-red-500 @enderror"
                                    for="radio-roles_family-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    26
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>Can role play some celebrations and festivals that bring the family and community
                                    together.Example; Birthday.</div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-fest_family_together-a+" class="hidden"
                                    name="fest_family_together" value="A+" wire:model.defer="fest_family_together">
                                <label class="fa @error('fest_family_together') !border-red-500 @enderror"
                                    for="radio-fest_family_together-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-fest_family_together-a" class="hidden"
                                    name="fest_family_together" value="A" wire:model.defer="fest_family_together">
                                <label class="fa @error('fest_family_together') !border-red-500 @enderror"
                                    for="radio-fest_family_together-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-fest_family_together-d" class="hidden"
                                    name="fest_family_together" value="D" wire:model.defer="fest_family_together">
                                <label class="fa @error('fest_family_together') !border-red-500 @enderror"
                                    for="radio-fest_family_together-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-fest_family_together-n" class="hidden"
                                    name="fest_family_together" value="N" wire:model.defer="fest_family_together">
                                <label class="fa @error('fest_family_together') !border-red-500 @enderror"
                                    for="radio-fest_family_together-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    27
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can practice some of the rules and regulations of the school. Example; Do not fight.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-practice_rule_of_school-a+" class="hidden"
                                    name="practice_rule_of_school" value="A+"
                                    wire:model.defer="practice_rule_of_school">
                                <label class="fa @error('practice_rule_of_school') !border-red-500 @enderror"
                                    for="radio-practice_rule_of_school-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-practice_rule_of_school-a" class="hidden"
                                    name="practice_rule_of_school" value="A" wire:model.defer="practice_rule_of_school">
                                <label class="fa @error('practice_rule_of_school') !border-red-500 @enderror"
                                    for="radio-practice_rule_of_school-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-practice_rule_of_school-d" class="hidden"
                                    name="practice_rule_of_school" value="D" wire:model.defer="practice_rule_of_school">
                                <label class="fa @error('practice_rule_of_school') !border-red-500 @enderror"
                                    for="radio-practice_rule_of_school-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-practice_rule_of_school-n" class="hidden"
                                    name="practice_rule_of_school" value="N" wire:model.defer="practice_rule_of_school">
                                <label class="fa @error('practice_rule_of_school') !border-red-500 @enderror"
                                    for="radio-practice_rule_of_school-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    28
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can draw and colour some of the external human body parts. </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-draw_color_body-a+" class="hidden" name="draw_color_body"
                                    value="A+" wire:model.defer="draw_color_body">
                                <label class="fa @error('draw_color_body') !border-red-500 @enderror"
                                    for="radio-draw_color_body-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-draw_color_body-a" class="hidden" name="draw_color_body"
                                    value="A" wire:model.defer="draw_color_body">
                                <label class="fa @error('draw_color_body') !border-red-500 @enderror"
                                    for="radio-draw_color_body-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-draw_color_body-d" class="hidden" name="draw_color_body"
                                    value="D" wire:model.defer="draw_color_body">
                                <label class="fa @error('draw_color_body') !border-red-500 @enderror"
                                    for="radio-draw_color_body-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-draw_color_body-n" class="hidden" name="draw_color_body"
                                    value="N" wire:model.defer="draw_color_body">
                                <label class="fa @error('draw_color_body') !border-red-500 @enderror"
                                    for="radio-draw_color_body-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    29
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>Can cut and paste some external body parts.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cut_paste_body-a+" class="hidden" name="cut_paste_body"
                                    value="A+" wire:model.defer="cut_paste_body">
                                <label class="fa @error('cut_paste_body') !border-red-500 @enderror"
                                    for="radio-cut_paste_body-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cut_paste_body-a" class="hidden" name="cut_paste_body"
                                    value="A" wire:model.defer="cut_paste_body">
                                <label class="fa @error('cut_paste_body') !border-red-500 @enderror"
                                    for="radio-cut_paste_body-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cut_paste_body-d" class="hidden" name="cut_paste_body"
                                    value="D" wire:model.defer="cut_paste_body">
                                <label class="fa @error('cut_paste_body') !border-red-500 @enderror"
                                    for="radio-cut_paste_body-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cut_paste_body-n" class="hidden" name="cut_paste_body"
                                    value="N" wire:model.defer="cut_paste_body">
                                <label class="fa @error('cut_paste_body') !border-red-500 @enderror"
                                    for="radio-cut_paste_body-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    30
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can draw to match the various sense.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-draw_match_sense-a+" class="hidden"
                                    name="draw_match_sense" value="A+" wire:model.defer="draw_match_sense">
                                <label class="fa @error('draw_match_sense') !border-red-500 @enderror"
                                    for="radio-draw_match_sense-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-draw_match_sense-a" class="hidden" name="draw_match_sense"
                                    value="A" wire:model.defer="draw_match_sense">
                                <label class="fa @error('draw_match_sense') !border-red-500 @enderror"
                                    for="radio-draw_match_sense-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-draw_match_sense-d" class="hidden" name="draw_match_sense"
                                    value="D" wire:model.defer="draw_match_sense">
                                <label class="fa @error('draw_match_sense') !border-red-500 @enderror"
                                    for="radio-draw_match_sense-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-draw_match_sense-n" class="hidden" name="draw_match_sense"
                                    value="N" wire:model.defer="draw_match_sense">
                                <label class="fa @error('draw_match_sense') !border-red-500 @enderror"
                                    for="radio-draw_match_sense-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    31
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can cut and paste to show an activity. Example; Hand washing. </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cut_paste_activity-a+" class="hidden"
                                    name="cut_paste_activity" value="A+" wire:model.defer="cut_paste_activity">
                                <label class="fa @error('cut_paste_activity') !border-red-500 @enderror"
                                    for="radio-cut_paste_activity-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cut_paste_activity-a" class="hidden"
                                    name="cut_paste_activity" value="A" wire:model.defer="cut_paste_activity">
                                <label class="fa @error('cut_paste_activity') !border-red-500 @enderror"
                                    for="radio-cut_paste_activity-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cut_paste_activity-d" class="hidden"
                                    name="cut_paste_activity" value="D" wire:model.defer="cut_paste_activity">
                                <label class="fa @error('cut_paste_activity') !border-red-500 @enderror"
                                    for="radio-cut_paste_activity-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cut_paste_activity-n" class="hidden"
                                    name="cut_paste_activity" value="N" wire:model.defer="cut_paste_activity">
                                <label class="fa @error('cut_paste_activity') !border-red-500 @enderror"
                                    for="radio-cut_paste_activity-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    32
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can mould at least two food items.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-mould_two_food-a+" class="hidden" name="mould_two_food"
                                    value="A+" wire:model.defer="mould_two_food">
                                <label class="fa @error('mould_two_food') !border-red-500 @enderror"
                                    for="radio-mould_two_food-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-mould_two_food-a" class="hidden" name="mould_two_food"
                                    value="A" wire:model.defer="mould_two_food">
                                <label class="fa @error('mould_two_food') !border-red-500 @enderror"
                                    for="radio-mould_two_food-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-mould_two_food-d" class="hidden" name="mould_two_food"
                                    value="D" wire:model.defer="mould_two_food">
                                <label class="fa @error('mould_two_food') !border-red-500 @enderror"
                                    for="radio-mould_two_food-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-mould_two_food-n" class="hidden" name="mould_two_food"
                                    value="N" wire:model.defer="mould_two_food">
                                <label class="fa @error('mould_two_food') !border-red-500 @enderror"
                                    for="radio-mould_two_food-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    33
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can model how to give vaccination.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-model_vaccine-a+" class="hidden" name="model_vaccine"
                                    value="A+" wire:model.defer="model_vaccine">
                                <label class="fa @error('model_vaccine') !border-red-500 @enderror"
                                    for="radio-model_vaccine-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-model_vaccine-a" class="hidden" name="model_vaccine"
                                    value="A" wire:model.defer="model_vaccine">
                                <label class="fa @error('model_vaccine') !border-red-500 @enderror"
                                    for="radio-model_vaccine-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-model_vaccine-d" class="hidden" name="model_vaccine"
                                    value="D" wire:model.defer="model_vaccine">
                                <label class="fa @error('model_vaccine') !border-red-500 @enderror"
                                    for="radio-model_vaccine-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-model_vaccine-n" class="hidden" name="model_vaccine"
                                    value="N" wire:model.defer="model_vaccine">
                                <label class="fa @error('model_vaccine') !border-red-500 @enderror"
                                    for="radio-model_vaccine-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    34
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can arrange material to form a design.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-arrange_mat_design-a+" class="hidden"
                                    name="arrange_mat_design" value="A+" wire:model.defer="arrange_mat_design">
                                <label class="fa @error('arrange_mat_design') !border-red-500 @enderror"
                                    for="radio-arrange_mat_design-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-arrange_mat_design-a" class="hidden"
                                    name="arrange_mat_design" value="A" wire:model.defer="arrange_mat_design">
                                <label class="fa @error('arrange_mat_design') !border-red-500 @enderror"
                                    for="radio-arrange_mat_design-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-arrange_mat_design-d" class="hidden"
                                    name="arrange_mat_design" value="D" wire:model.defer="arrange_mat_design">
                                <label class="fa @error('arrange_mat_design') !border-red-500 @enderror"
                                    for="radio-arrange_mat_design-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-arrange_mat_design-n" class="hidden"
                                    name="arrange_mat_design" value="N" wire:model.defer="arrange_mat_design">
                                <label class="fa @error('arrange_mat_design') !border-red-500 @enderror"
                                    for="radio-arrange_mat_design-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    35
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can use waste paper to make a mosaic work.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-waste_paper_mosaic-a+" class="hidden"
                                    name="waste_paper_mosaic" value="A+" wire:model.defer="waste_paper_mosaic">
                                <label class="fa @error('waste_paper_mosaic') !border-red-500 @enderror"
                                    for="radio-waste_paper_mosaic-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-waste_paper_mosaic-a" class="hidden"
                                    name="waste_paper_mosaic" value="A" wire:model.defer="waste_paper_mosaic">
                                <label class="fa @error('waste_paper_mosaic') !border-red-500 @enderror"
                                    for="radio-waste_paper_mosaic-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-waste_paper_mosaic-d" class="hidden"
                                    name="waste_paper_mosaic" value="D" wire:model.defer="waste_paper_mosaic">
                                <label class="fa @error('waste_paper_mosaic') !border-red-500 @enderror"
                                    for="radio-waste_paper_mosaic-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-waste_paper_mosaic-n" class="hidden"
                                    name="waste_paper_mosaic" value="N" wire:model.defer="waste_paper_mosaic">
                                <label class="fa @error('waste_paper_mosaic') !border-red-500 @enderror"
                                    for="radio-waste_paper_mosaic-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    36
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can use positive words to describe him/herself. Example; I am specially created and
                                    unique.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-positive_dec_self-a+" class="hidden"
                                    name="positive_dec_self" value="A+" wire:model.defer="positive_dec_self">
                                <label class="fa @error('positive_dec_self') !border-red-500 @enderror"
                                    for="radio-positive_dec_self-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-positive_dec_self-a" class="hidden"
                                    name="positive_dec_self" value="A" wire:model.defer="positive_dec_self">
                                <label class="fa @error('positive_dec_self') !border-red-500 @enderror"
                                    for="radio-positive_dec_self-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-positive_dec_self-d" class="hidden"
                                    name="positive_dec_self" value="D" wire:model.defer="positive_dec_self">
                                <label class="fa @error('positive_dec_self') !border-red-500 @enderror"
                                    for="radio-positive_dec_self-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-positive_dec_self-n" class="hidden"
                                    name="positive_dec_self" value="N" wire:model.defer="positive_dec_self">
                                <label class="fa @error('positive_dec_self') !border-red-500 @enderror"
                                    for="radio-positive_dec_self-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    27
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can tell how different a human is from animals.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-diff_human_animal-a+" class="hidden"
                                    name="diff_human_animal" value="A+" wire:model.defer="diff_human_animal">
                                <label class="fa @error('diff_human_animal') !border-red-500 @enderror"
                                    for="radio-diff_human_animal-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-diff_human_animal-a" class="hidden"
                                    name="diff_human_animal" value="A" wire:model.defer="diff_human_animal">
                                <label class="fa @error('diff_human_animal') !border-red-500 @enderror"
                                    for="radio-diff_human_animal-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-diff_human_animal-d" class="hidden"
                                    name="diff_human_animal" value="D" wire:model.defer="diff_human_animal">
                                <label class="fa @error('diff_human_animal') !border-red-500 @enderror"
                                    for="radio-diff_human_animal-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-diff_human_animal-n" class="hidden"
                                    name="diff_human_animal" value="N" wire:model.defer="diff_human_animal">
                                <label class="fa @error('diff_human_animal') !border-red-500 @enderror"
                                    for="radio-diff_human_animal-n"></label>
                            </div>
                        </td>
                    </tr>

                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    38
                                </div>
                            </span>
                        </td>
                        <td class=" px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can tell the beginning and ending sound of the body parts. Examples; Head, lungs.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-beginning_ending_sound_body-a+" class="hidden"
                                    name="beginning_ending_sound_body" value="A+"
                                    wire:model.defer="beginning_ending_sound_body">
                                <label class="fa @error('beginning_ending_sound_body') !border-red-500 @enderror"
                                    for="radio-beginning_ending_sound_body-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-beginning_ending_sound_body-a" class="hidden"
                                    name="beginning_ending_sound_body" value="A"
                                    wire:model.defer="beginning_ending_sound_body">
                                <label class="fa @error('beginning_ending_sound_body') !border-red-500 @enderror"
                                    for="radio-beginning_ending_sound_body-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-beginning_ending_sound_body-d" class="hidden"
                                    name="beginning_ending_sound_body" value="D"
                                    wire:model.defer="beginning_ending_sound_body">
                                <label class="fa @error('beginning_ending_sound_body') !border-red-500 @enderror"
                                    for="radio-beginning_ending_sound_body-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-beginning_ending_sound_body-n" class="hidden"
                                    name="beginning_ending_sound_body" value="N"
                                    wire:model.defer="beginning_ending_sound_body">
                                <label class="fa @error('beginning_ending_sound_body') !border-red-500 @enderror"
                                    for="radio-beginning_ending_sound_body-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    39
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can use appropriate words to label a book. Example; Spine, back cover
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-approprite_word_label-a+" class="hidden"
                                    name="approprite_word_label" value="A+" wire:model.defer="approprite_word_label">
                                <label class="fa @error('approprite_word_label') !border-red-500 @enderror"
                                    for="radio-approprite_word_label-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-approprite_word_label-a" class="hidden"
                                    name="approprite_word_label" value="A" wire:model.defer="approprite_word_label">
                                <label class="fa @error('approprite_word_label') !border-red-500 @enderror"
                                    for="radio-approprite_word_label-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-approprite_word_label-d" class="hidden"
                                    name="approprite_word_label" value="D" wire:model.defer="approprite_word_label">
                                <label class="fa @error('approprite_word_label') !border-red-500 @enderror"
                                    for="radio-approprite_word_label-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-approprite_word_label-n" class="hidden"
                                    name="approprite_word_label" value="N" wire:model.defer="approprite_word_label">
                                <label class="fa @error('approprite_word_label') !border-red-500 @enderror"
                                    for="radio-approprite_word_label-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    40
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can identify letter sounds in their names.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_letter_sounds-a+" class="hidden"
                                    name="identify_letter_sounds" value="A+" wire:model.defer="identify_letter_sounds">
                                <label class="fa @error('identify_letter_sounds') !border-red-500 @enderror"
                                    for="radio-identify_letter_sounds-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_letter_sounds-a" class="hidden"
                                    name="identify_letter_sounds" value="A" wire:model.defer="identify_letter_sounds">
                                <label class="fa @error('identify_letter_sounds') !border-red-500 @enderror"
                                    for="radio-identify_letter_sounds-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_letter_sounds-d" class="hidden"
                                    name="identify_letter_sounds" value="D" wire:model.defer="identify_letter_sounds">
                                <label class="fa @error('identify_letter_sounds') !border-red-500 @enderror"
                                    for="radio-identify_letter_sounds-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_letter_sounds-n" class="hidden"
                                    name="identify_letter_sounds" value="N" wire:model.defer="identify_letter_sounds">
                                <label class="fa @error('identify_letter_sounds') !border-red-500 @enderror"
                                    for="radio-identify_letter_sounds-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    41
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can recopy words appropriately.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-recopy_words_approp-a+" class="hidden"
                                    name="recopy_words_approp" value="A+" wire:model.defer="recopy_words_approp">
                                <label class="fa @error('recopy_words_approp') !border-red-500 @enderror"
                                    for="radio-recopy_words_approp-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-recopy_words_approp-a" class="hidden"
                                    name="recopy_words_approp" value="A" wire:model.defer="recopy_words_approp">
                                <label class="fa @error('recopy_words_approp') !border-red-500 @enderror"
                                    for="radio-recopy_words_approp-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-recopy_words_approp-d" class="hidden"
                                    name="recopy_words_approp" value="D" wire:model.defer="recopy_words_approp">
                                <label class="fa @error('recopy_words_approp') !border-red-500 @enderror"
                                    for="radio-recopy_words_approp-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-recopy_words_approp-n" class="hidden"
                                    name="recopy_words_approp" value="N" wire:model.defer="recopy_words_approp">
                                <label class="fa @error('recopy_words_approp') !border-red-500 @enderror"
                                    for="radio-recopy_words_approp-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    42
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can match upper case letters to their lower case letters.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-match_upper_lower_case-a+" class="hidden"
                                    name="match_upper_lower_case" value="A+" wire:model.defer="match_upper_lower_case">
                                <label class="fa @error('match_upper_lower_case') !border-red-500 @enderror"
                                    for="radio-match_upper_lower_case-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-match_upper_lower_case-a" class="hidden"
                                    name="match_upper_lower_case" value="A" wire:model.defer="match_upper_lower_case">
                                <label class="fa @error('match_upper_lower_case') !border-red-500 @enderror"
                                    for="radio-match_upper_lower_case-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-match_upper_lower_case-d" class="hidden"
                                    name="match_upper_lower_case" value="D" wire:model.defer="match_upper_lower_case">
                                <label class="fa @error('match_upper_lower_case') !border-red-500 @enderror"
                                    for="radio-match_upper_lower_case-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-match_upper_lower_case-n" class="hidden"
                                    name="match_upper_lower_case" value="N" wire:model.defer="match_upper_lower_case">
                                <label class="fa @error('match_upper_lower_case') !border-red-500 @enderror"
                                    for="radio-match_upper_lower_case-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200 border-r border-r-gray-900">
                            <span class="">
                                <div>43
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can relate actions to words. Example; Brush your teeth.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-relate_action_words-a+" class="hidden"
                                    name="relate_action_words" value="A+" wire:model.defer="relate_action_words">
                                <label class="fa @error('relate_action_words') !border-red-500 @enderror"
                                    for="radio-relate_action_words-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-relate_action_words-a" class="hidden"
                                    name="relate_action_words" value="A" wire:model.defer="relate_action_words">
                                <label class="fa @error('relate_action_words') !border-red-500 @enderror"
                                    for="radio-relate_action_words-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-relate_action_words-d" class="hidden"
                                    name="relate_action_words" value="D" wire:model.defer="relate_action_words">
                                <label class="fa @error('relate_action_words') !border-red-500 @enderror"
                                    for="radio-relate_action_words-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-relate_action_words-n" class="hidden"
                                    name="relate_action_words" value="N" wire:model.defer="relate_action_words">
                                <label class="fa @error('relate_action_words') !border-red-500 @enderror"
                                    for="radio-relate_action_words-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200 border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    44
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can identify rhyming words in sentences.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_rhyming_words-a+" class="hidden"
                                    name="identify_rhyming_words" value="A+" wire:model.defer="identify_rhyming_words">
                                <label class="fa @error('identify_rhyming_words') !border-red-500 @enderror"
                                    for="radio-identify_rhyming_words-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_rhyming_words-a" class="hidden"
                                    name="identify_rhyming_words" value="A" wire:model.defer="identify_rhyming_words">
                                <label class="fa @error('identify_rhyming_words') !border-red-500 @enderror"
                                    for="radio-identify_rhyming_words-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_rhyming_words-d" class="hidden"
                                    name="identify_rhyming_words" value="D" wire:model.defer="identify_rhyming_words">
                                <label class="fa @error('identify_rhyming_words') !border-red-500 @enderror"
                                    for="radio-identify_rhyming_words-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_rhyming_words-n" class="hidden"
                                    name="identify_rhyming_words" value="N" wire:model.defer="identify_rhyming_words">
                                <label class="fa @error('identify_rhyming_words') !border-red-500 @enderror"
                                    for="radio-identify_rhyming_words-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200 border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    45
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can recite and identify most occurring sounds in tongue twisters.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_occuring_sounds-a+" class="hidden"
                                    name="identify_occuring_sounds" value="A+"
                                    wire:model.defer="identify_occuring_sounds">
                                <label class="fa @error('identify_occuring_sounds') !border-red-500 @enderror"
                                    for="radio-identify_occuring_sounds-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_occuring_sounds-a" class="hidden"
                                    name="identify_occuring_sounds" value="A"
                                    wire:model.defer="identify_occuring_sounds">
                                <label class="fa @error('identify_occuring_sounds') !border-red-500 @enderror"
                                    for="radio-identify_occuring_sounds-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_occuring_sounds-d" class="hidden"
                                    name="identify_occuring_sounds" value="D"
                                    wire:model.defer="identify_occuring_sounds">
                                <label class="fa @error('identify_occuring_sounds') !border-red-500 @enderror"
                                    for="radio-identify_occuring_sounds-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_occuring_sounds-n" class="hidden"
                                    name="identify_occuring_sounds" value="N"
                                    wire:model.defer="identify_occuring_sounds">
                                <label class="fa @error('identify_occuring_sounds') !border-red-500 @enderror"
                                    for="radio-identify_occuring_sounds-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    46
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can read and talk about pictures.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-read_talk_pictures-a+" class="hidden"
                                    name="read_talk_pictures" value="A+" wire:model.defer="read_talk_pictures">
                                <label class="fa @error('read_talk_pictures') !border-red-500 @enderror"
                                    for="radio-read_talk_pictures-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-read_talk_pictures-a" class="hidden"
                                    name="read_talk_pictures" value="A" wire:model.defer="read_talk_pictures">
                                <label class="fa @error('read_talk_pictures') !border-red-500 @enderror"
                                    for="radio-read_talk_pictures-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-read_talk_pictures-d" class="hidden"
                                    name="read_talk_pictures" value="D" wire:model.defer="read_talk_pictures">
                                <label class="fa @error('read_talk_pictures') !border-red-500 @enderror"
                                    for="radio-read_talk_pictures-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-read_talk_pictures-n" class="hidden"
                                    name="read_talk_pictures" value="N" wire:model.defer="read_talk_pictures">
                                <label class="fa @error('read_talk_pictures') !border-red-500 @enderror"
                                    for="radio-read_talk_pictures-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    47
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>Can clap to the syllables of a given word. Example; (po-lio)
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-clap_syllabus_words-a+" class="hidden"
                                    name="clap_syllabus_words" value="A+" wire:model.defer="clap_syllabus_words">
                                <label class="fa @error('clap_syllabus_words') !border-red-500 @enderror"
                                    for="radio-clap_syllabus_words-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-clap_syllabus_words-a" class="hidden"
                                    name="clap_syllabus_words" value="A" wire:model.defer="clap_syllabus_words">
                                <label class="fa @error('clap_syllabus_words') !border-red-500 @enderror"
                                    for="radio-clap_syllabus_words-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-clap_syllabus_words-d" class="hidden"
                                    name="clap_syllabus_words" value="D" wire:model.defer="clap_syllabus_words">
                                <label class="fa @error('clap_syllabus_words') !border-red-500 @enderror"
                                    for="radio-clap_syllabus_words-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-clap_syllabus_words-n" class="hidden"
                                    name="clap_syllabus_words" value="N" wire:model.defer="clap_syllabus_words">
                                <label class="fa @error('clap_syllabus_words') !border-red-500 @enderror"
                                    for="radio-clap_syllabus_words-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    48
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can blend sounds to form a word. Example; //p/o/l/i/o//
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-blend_sound_form_word-a+" class="hidden"
                                    name="blend_sound_form_word" value="A+" wire:model.defer="blend_sound_form_word">
                                <label class="fa @error('blend_sound_form_word') !border-red-500 @enderror"
                                    for="radio-blend_sound_form_word-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-blend_sound_form_word-a" class="hidden"
                                    name="blend_sound_form_word" value="A" wire:model.defer="blend_sound_form_word">
                                <label class="fa @error('blend_sound_form_word') !border-red-500 @enderror"
                                    for="radio-blend_sound_form_word-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-blend_sound_form_word-d" class="hidden"
                                    name="blend_sound_form_word" value="D" wire:model.defer="blend_sound_form_word">
                                <label class="fa @error('blend_sound_form_word') !border-red-500 @enderror"
                                    for="radio-blend_sound_form_word-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-blend_sound_form_word-n" class="hidden"
                                    name="blend_sound_form_word" value="N" wire:model.defer="blend_sound_form_word">
                                <label class="fa @error('blend_sound_form_word') !border-red-500 @enderror"
                                    for="radio-blend_sound_form_word-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    49
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can use sight words to form simple sentences. Example; I am eating.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-sight_word_sentences-a+" class="hidden"
                                    name="sight_word_sentences" value="A+" wire:model.defer="sight_word_sentences">
                                <label class="fa @error('sight_word_sentences') !border-red-500 @enderror"
                                    for="radio-sight_word_sentences-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-sight_word_sentences-a" class="hidden"
                                    name="sight_word_sentences" value="A" wire:model.defer="sight_word_sentences">
                                <label class="fa @error('sight_word_sentences') !border-red-500 @enderror"
                                    for="radio-sight_word_sentences-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-sight_word_sentences-d" class="hidden"
                                    name="sight_word_sentences" value="D" wire:model.defer="sight_word_sentences">
                                <label class="fa @error('sight_word_sentences') !border-red-500 @enderror"
                                    for="radio-sight_word_sentences-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-sight_word_sentences-n" class="hidden"
                                    name="sight_word_sentences" value="N" wire:model.defer="sight_word_sentences">
                                <label class="fa @error('sight_word_sentences') !border-red-500 @enderror"
                                    for="radio-sight_word_sentences-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    50
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can listen and retell story in a sequence.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-listen_retell_story-a+" class="hidden"
                                    name="listen_retell_story" value="A+" wire:model.defer="listen_retell_story">
                                <label class="fa @error('listen_retell_story') !border-red-500 @enderror"
                                    for="radio-listen_retell_story-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-listen_retell_story-a" class="hidden"
                                    name="listen_retell_story" value="A" wire:model.defer="listen_retell_story">
                                <label class="fa @error('listen_retell_story') !border-red-500 @enderror"
                                    for="radio-listen_retell_story-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-listen_retell_story-d" class="hidden"
                                    name="listen_retell_story" value="D" wire:model.defer="listen_retell_story">
                                <label class="fa @error('listen_retell_story') !border-red-500 @enderror"
                                    for="radio-listen_retell_story-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-listen_retell_story-n" class="hidden"
                                    name="listen_retell_story" value="N" wire:model.defer="listen_retell_story">
                                <label class="fa @error('listen_retell_story') !border-red-500 @enderror"
                                    for="radio-listen_retell_story-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    51
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can listen to stories and answer questions orally.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-listen_quest_ans_orally-a+" class="hidden"
                                    name="listen_quest_ans_orally" value="A+"
                                    wire:model.defer="listen_quest_ans_orally">
                                <label class="fa @error('listen_quest_ans_orally') !border-red-500 @enderror"
                                    for="radio-listen_quest_ans_orally-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-listen_quest_ans_orally-a" class="hidden"
                                    name="listen_quest_ans_orally" value="A" wire:model.defer="listen_quest_ans_orally">
                                <label class="fa @error('listen_quest_ans_orally') !border-red-500 @enderror"
                                    for="radio-listen_quest_ans_orally-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-listen_quest_ans_orally-d" class="hidden"
                                    name="listen_quest_ans_orally" value="D" wire:model.defer="listen_quest_ans_orally">
                                <label class="fa @error('listen_quest_ans_orally') !border-red-500 @enderror"
                                    for="radio-listen_quest_ans_orally-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-listen_quest_ans_orally-n" class="hidden"
                                    name="listen_quest_ans_orally" value="N" wire:model.defer="listen_quest_ans_orally">
                                <label class="fa @error('listen_quest_ans_orally') !border-red-500 @enderror"
                                    for="radio-listen_quest_ans_orally-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    52
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can recite rhymes and poems.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-recite_rhymes_poems-a+" class="hidden"
                                    name="recite_rhymes_poems" value="A+" wire:model.defer="recite_rhymes_poems">
                                <label class="fa @error('recite_rhymes_poems') !border-red-500 @enderror"
                                    for="radio-recite_rhymes_poems-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-recite_rhymes_poems-a" class="hidden"
                                    name="recite_rhymes_poems" value="A" wire:model.defer="recite_rhymes_poems">
                                <label class="fa @error('recite_rhymes_poems') !border-red-500 @enderror"
                                    for="radio-recite_rhymes_poems-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-recite_rhymes_poems-d" class="hidden"
                                    name="recite_rhymes_poems" value="D" wire:model.defer="recite_rhymes_poems">
                                <label class="fa @error('recite_rhymes_poems') !border-red-500 @enderror"
                                    for="radio-recite_rhymes_poems-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-recite_rhymes_poems-n" class="hidden"
                                    name="recite_rhymes_poems" value="N" wire:model.defer="recite_rhymes_poems">
                                <label class="fa @error('recite_rhymes_poems') !border-red-500 @enderror"
                                    for="radio-recite_rhymes_poems-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    53
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can talk about their school environment.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_school_environ-a+" class="hidden"
                                    name="talk_school_environ" value="A+" wire:model.defer="talk_school_environ">
                                <label class="fa @error('talk_school_environ') !border-red-500 @enderror"
                                    for="radio-talk_school_environ-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_school_environ-a" class="hidden"
                                    name="talk_school_environ" value="A" wire:model.defer="talk_school_environ">
                                <label class="fa @error('talk_school_environ') !border-red-500 @enderror"
                                    for="radio-talk_school_environ-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_school_environ-d" class="hidden"
                                    name="talk_school_environ" value="D" wire:model.defer="talk_school_environ">
                                <label class="fa @error('talk_school_environ') !border-red-500 @enderror"
                                    for="radio-talk_school_environ-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_school_environ-n" class="hidden"
                                    name="talk_school_environ" value="N" wire:model.defer="talk_school_environ">
                                <label class="fa @error('talk_school_environ') !border-red-500 @enderror"
                                    for="radio-talk_school_environ-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    54
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Can identify vowels and consonants of the English alphabets.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_vowels_consonant-a+" class="hidden"
                                    name="identify_vowels_consonant" value="A+"
                                    wire:model.defer="identify_vowels_consonant">
                                <label class="fa @error('identify_vowels_consonant') !border-red-500 @enderror"
                                    for="radio-identify_vowels_consonant-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_vowels_consonant-a" class="hidden"
                                    name="identify_vowels_consonant" value="A"
                                    wire:model.defer="identify_vowels_consonant">
                                <label class="fa @error('identify_vowels_consonant') !border-red-500 @enderror"
                                    for="radio-identify_vowels_consonant-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_vowels_consonant-d" class="hidden"
                                    name="identify_vowels_consonant" value="D"
                                    wire:model.defer="identify_vowels_consonant">
                                <label class="fa @error('identify_vowels_consonant') !border-red-500 @enderror"
                                    for="radio-identify_vowels_consonant-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_vowels_consonant-n" class="hidden"
                                    name="identify_vowels_consonant" value="N"
                                    wire:model.defer="identify_vowels_consonant">
                                <label class="fa @error('identify_vowels_consonant') !border-red-500 @enderror"
                                    for="radio-identify_vowels_consonant-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    55
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>Can arrange pictures to complete a story.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-arrange_pictures_story-a+" class="hidden"
                                    name="arrange_pictures_story" value="A+" wire:model.defer="arrange_pictures_story">
                                <label class="fa @error('arrange_pictures_story') !border-red-500 @enderror"
                                    for="radio-arrange_pictures_story-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-arrange_pictures_story-a" class="hidden"
                                    name="arrange_pictures_story" value="A" wire:model.defer="arrange_pictures_story">
                                <label class="fa @error('arrange_pictures_story') !border-red-500 @enderror"
                                    for="radio-arrange_pictures_story-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-arrange_pictures_story-d" class="hidden"
                                    name="arrange_pictures_story" value="D" wire:model.defer="arrange_pictures_story">
                                <label class="fa @error('arrange_pictures_story') !border-red-500 @enderror"
                                    for="radio-arrange_pictures_story-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-arrange_pictures_story-n" class="hidden"
                                    name="arrange_pictures_story" value="N" wire:model.defer="arrange_pictures_story">
                                <label class="fa @error('arrange_pictures_story') !border-red-500 @enderror"
                                    for="radio-arrange_pictures_story-n"></label>
                            </div>
                        </td>
                    </tr>

                    <tr
                        class="shadow-sm bg-slate-100 dark:bg-slate-800 border border-slate-200 border-t-2 border-y-gray-900   dark:border-slate-500">
                        <th
                            class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300">
                            <div class="uppercase">
                                <span>(B)</span>
                            </div>
                        </th>
                        <th colspan="5"
                            class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 "
                            style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>Neatness & Conduct</span>
                            </div>
                        </th>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    1
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Neatness
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200" colspan="4">
                            <div>
                                <x-native-select placeholder="Select Neatness"
                                    :options=" [['value' => 'very neat','name' => 'Very Neat'],['value' => 'neat','name' => 'Neat'],['value' => 'quite neat','name' => 'Quite Neat'],]"
                                    option-label="name" option-value="value" wire:model.defer="neatness" required />
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    2
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Conduct
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200" colspan="4">
                            <div>
                                <x-native-select placeholder="Select Conduct"
                                    :options=" [['value' => 'sociable','name' => 'sociable'],['value' => 'firendly','name' => 'firendly'],['value' => 'respectful','name' => 'respectful'],['value' => 'helpful','name' => 'helpful'],['value' => 'responsible','name' => 'responsible'],['value' => 'appreciative','name' => 'appreciative'],['value' => 'cooperative','name' => 'cooperative'],]"
                                    option-label="name" option-value="value" wire:model.defer="conduct"
                                    class="capitalize" required />
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <div class="flex items-center justify-between mt-4 space-x-5">
                <x-button blue wire:click.prevent="save" spinner="save" :label="__('Save and Continue later')"
                    class="w-1/2 uppercase font-bold" />

                <x-button rose type="submit" spinner="submit" :label="__('Save and Submit')"
                    class="w-1/2 uppercase font-bold" />
            </div>
        </div>
    </form>
</div>