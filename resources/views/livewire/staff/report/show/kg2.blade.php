<div class="bg-white">
    <table class="table !text-slate-800 border !border-gray-700 printed relative">
        <tbody>
            <tr>
                <td class="px-2 py-3 text-left text-xs whitespace-nowrap" colspan="3" style="width: 15% !important;">
                    <x-application-logo class="h-40 inline-block" />
                </td>
                <td class="font-bold text-lg text-gray-900 uppercase px-2 py-3 text-center whitespace-nowrap"
                    colspan="4">
                    <div>
                        <div>University Basic School - North Campus</div>
                        <div>University of Cape Coast</div>
                        <div>Cape Coast</div>
                        <div class="space-x-4"><span>Terminal reports</span> <span>-</span> <span>Session
                                {{ $report->term->term }}</span> </div>
                        <div> {{ $report->term->academic_year }}</div>
                    </div>
                </td>
                <td class="px-2 py-3 !text-right  whitespace-nowrap" colspan="4" style="width: 20% !important;">
                    <img src="{{ asset('assets/img/addmission') }}/{{ $report->student->addmission->passport_picture }}"
                        alt="" class="h-40 inline-block">
                </td>
            </tr>
            <tr>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="2"
                    style="width: 15% !important;">
                    Name:</td>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="4"
                    style="width: 45% !important;">
                    <span>
                        {{ $report->student->fullname() }}
                    </span>
                </td>
                <td class="uppercase text-right px-3 py-2 whitespace-nowrap border font-bold"
                    style="width: 20% !important;">
                    <span>
                        Class:
                    </span>
                </td>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="4"
                    style="width: 20% !important;">
                    <span>
                        {{ $report->class->name }}
                    </span>
                </td>
            </tr>
            <tr>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="2">Date:</td>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="4">
                    <span>
                        {{ $report->term->end_date }}
                    </span>
                </td>
                <td class="text-right uppercase px-3 py-2 whitespace-nowrap border font-bold">
                    <span>
                        Next Term Begins:
                    </span>
                </td>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="4">
                    <span>
                        {{ $report->reopen_date }}

                    </span>
                </td>
            </tr>
            <tr>
                <td class="text-center uppercase px-3 py-2 whitespace-nowrap font-bold" colspan="11">
                    <span class="underline">
                        Session Report
                    </span>
                </td>
            </tr>
        </tbody>
    </table>

    <table class="table !text-slate-800 border !border-gray-700 printed relative">
        <tbody>
            <tr class="bg-gray-300 hover:bg-gray-300" style="background-color: #d1d5db !important;">
                <td class="px-3 py-2 whitespace-nowrap border font-bold" style="width: 5% !important;">
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" style="width:75% !important">
                    <div class="uppercase">
                        <span>Content</span>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" style="width: 5% !important;">
                    <div class="uppercase">
                        <span>A+</span>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" style="width: 5% !important;">
                    <div class="uppercase">
                        <span>A</span>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" style="width: 5% !important;">
                    <div class="uppercase">
                        <span>D</span>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" style="width: 5% !important;">
                    <div class="uppercase">
                        <span>N</span>
                    </div>
                </td>
            </tr>

            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap border-r border-r-gray-900">
                    <span class="">
                        <div>
                            1
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can associate parts of the body with numerals.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-assoc_parts_body-a+" class="checkBtn" name="assoc_parts_body"
                            value="A+" {{ $assoc_parts_body == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-assoc_parts_body-a" class="checkBtn" name="assoc_parts_body"
                            value="A" {{ $assoc_parts_body == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-assoc_parts_body-d" class="checkBtn" name="assoc_parts_body"
                            value="D" {{ $assoc_parts_body == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-assoc_parts_body-n" class="checkBtn" name="assoc_parts_body"
                            value="N" {{ $assoc_parts_body == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap border-r border-r-gray-900">
                    <span class="">
                        <div>
                            2
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can compare relationship between numbers. Examples; <,>, =
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-compare_rel_no-a+" class="checkBtn" name="compare_rel_no"
                            value="A+" {{ $compare_rel_no == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-compare_rel_no-a" class="checkBtn" name="compare_rel_no"
                            value="A" {{ $compare_rel_no == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-compare_rel_no-d" class="checkBtn" name="compare_rel_no"
                            value="D" {{ $compare_rel_no == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-compare_rel_no-n" class="checkBtn" name="compare_rel_no"
                            value="N" {{ $compare_rel_no == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap border-r border-r-gray-900">
                    <span class="">
                        <div>
                            3
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can compare the weight of objects. Examples; Heavy, light. </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-compare_weight_obj-a+" class="checkBtn"
                            name="compare_weight_obj" value="A+"
                            {{ $compare_weight_obj == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-compare_weight_obj-a" class="checkBtn"
                            name="compare_weight_obj" value="A"
                            {{ $compare_weight_obj == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-compare_weight_obj-d" class="checkBtn"
                            name="compare_weight_obj" value="D"
                            {{ $compare_weight_obj == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-compare_weight_obj-n" class="checkBtn"
                            name="compare_weight_obj" value="N"
                            {{ $compare_weight_obj == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            4
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can tell the size of object. Example; Big and small.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-tell_size_obj-a+" class="checkBtn" name="tell_size_obj"
                            value="A+" {{ $tell_size_obj == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-tell_size_obj-a" class="checkBtn" name="tell_size_obj"
                            value="A" {{ $tell_size_obj == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-tell_size_obj-d" class="checkBtn" name="tell_size_obj"
                            value="D" {{ $tell_size_obj == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-tell_size_obj-n" class="checkBtn" name="tell_size_obj"
                            value="N" {{ $tell_size_obj == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            5
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>Can compare the height of objects. Example; tall and short.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-compare_height_obj-a+" class="checkBtn"
                            name="compare_height_obj" value="A+"
                            {{ $compare_height_obj == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-compare_height_obj-a" class="checkBtn"
                            name="compare_height_obj" value="A"
                            {{ $compare_height_obj == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-compare_height_obj-d" class="checkBtn"
                            name="compare_height_obj" value="D"
                            {{ $compare_height_obj == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-compare_height_obj-n" class="checkBtn"
                            name="compare_height_obj" value="N"
                            {{ $compare_height_obj == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            6
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can compare the length of objects. Example; Long and short. </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-compare_len_obj-a+" class="checkBtn" name="compare_len_obj"
                            value="A+" {{ $compare_len_obj == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-compare_len_obj-a" class="checkBtn" name="compare_len_obj"
                            value="A" {{ $compare_len_obj == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-compare_len_obj-d" class="checkBtn" name="compare_len_obj"
                            value="D" {{ $compare_len_obj == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-compare_len_obj-n" class="checkBtn" name="compare_len_obj"
                            value="N" {{ $compare_len_obj == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            7
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can sort and group according to colours and shapes.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-sort_group_color-a+" class="checkBtn"
                            name="sort_group_color" value="A+" {{ $sort_group_color == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-sort_group_color-a" class="checkBtn" name="sort_group_color"
                            value="A" {{ $sort_group_color == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-sort_group_color-d" class="checkBtn" name="sort_group_color"
                            value="D" {{ $sort_group_color == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-sort_group_color-n" class="checkBtn" name="sort_group_color"
                            value="N" {{ $sort_group_color == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            8
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can join two groups of object together.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-join_group_obj-a+" class="checkBtn" name="join_group_obj"
                            value="A+" {{ $join_group_obj == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-join_group_obj-a" class="checkBtn" name="join_group_obj"
                            value="A" {{ $join_group_obj == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-join_group_obj-d" class="checkBtn" name="join_group_obj"
                            value="D" {{ $join_group_obj == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-join_group_obj-n" class="checkBtn" name="join_group_obj"
                            value="N" {{ $join_group_obj == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            9
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can add two numbers. Example; 5+1=6.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-add_two_no-a+" class="checkBtn" name="add_two_no"
                            value="A+" {{ $add_two_no == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-add_two_no-a" class="checkBtn" name="add_two_no"
                            value="A" {{ $add_two_no == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-add_two_no-d" class="checkBtn" name="add_two_no"
                            value="D" {{ $add_two_no == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-add_two_no-n" class="checkBtn" name="add_two_no"
                            value="N" {{ $add_two_no == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            10
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can estimate the number of 7+2=9 object that can fill a given space.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-estimate_no-a+" class="checkBtn" name="estimate_no"
                            value="A+" {{ $estimate_no == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-estimate_no-a" class="checkBtn" name="estimate_no"
                            value="A" {{ $estimate_no == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-estimate_no-d" class="checkBtn" name="estimate_no"
                            value="D" {{ $estimate_no == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-estimate_no-n" class="checkBtn" name="estimate_no"
                            value="N" {{ $estimate_no == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            11
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can take away a given number from a whole group. Examples; 5-2=3, 10-3=7
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-take_away_no-a+" class="checkBtn" name="take_away_no"
                            value="A+" {{ $take_away_no == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-take_away_no-a" class="checkBtn" name="take_away_no"
                            value="A" {{ $take_away_no == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-take_away_no-d" class="checkBtn" name="take_away_no"
                            value="D" {{ $take_away_no == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-take_away_no-n" class="checkBtn" name="take_away_no"
                            value="N" {{ $take_away_no == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            12
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can identify and describe their external body parts. Examples; Leg, arm, nose.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_desc_body-a+" class="checkBtn"
                            name="identify_desc_body" value="A+"
                            {{ $identify_desc_body == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_desc_body-a" class="checkBtn"
                            name="identify_desc_body" value="A"
                            {{ $identify_desc_body == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_desc_body-d" class="checkBtn"
                            name="identify_desc_body" value="D"
                            {{ $identify_desc_body == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_desc_body-n" class="checkBtn"
                            name="identify_desc_body" value="N"
                            {{ $identify_desc_body == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            13
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can tell the functions of some of the external body part.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-func_body_part-a+" class="checkBtn" name="func_body_part"
                            value="A+" {{ $func_body_part == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-func_body_part-a" class="checkBtn" name="func_body_part"
                            value="A" {{ $func_body_part == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-func_body_part-d" class="checkBtn" name="func_body_part"
                            value="D" {{ $func_body_part == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-func_body_part-n" class="checkBtn" name="func_body_part"
                            value="N" {{ $func_body_part == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            14
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can identify and describe some of the human body organs. Example; Heart, intestines,
                            brain.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_desc_human_body-a+" class="checkBtn"
                            name="identify_desc_human_body" value="A+"
                            {{ $identify_desc_human_body == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_desc_human_body-a" class="checkBtn"
                            name="identify_desc_human_body" value="A"
                            {{ $identify_desc_human_body == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_desc_human_body-d" class="checkBtn"
                            name="identify_desc_human_body" value="D"
                            {{ $identify_desc_human_body == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_desc_human_body-n" class="checkBtn"
                            name="identify_desc_human_body" value="N"
                            {{ $identify_desc_human_body == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            15
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can tell the functions of some of the internal body organs. Example; The heart pumps
                            blood.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-func_internal_body_part-a+" class="checkBtn"
                            name="func_internal_body_part" value="A+"
                            {{ $func_internal_body_part == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-func_internal_body_part-a" class="checkBtn"
                            name="func_internal_body_part" value="A"
                            {{ $func_internal_body_part == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-func_internal_body_part-d" class="checkBtn"
                            name="func_internal_body_part" value="D"
                            {{ $func_internal_body_part == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-func_internal_body_part-n" class="checkBtn"
                            name="func_internal_body_part" value="N"
                            {{ $func_internal_body_part == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            16
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can observe personal hygiene. Example; Covering the mouth when sneezing.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-observe_personal_hygiene-a+" class="checkBtn"
                            name="observe_personal_hygiene" value="A+"
                            {{ $observe_personal_hygiene == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-observe_personal_hygiene-a" class="checkBtn"
                            name="observe_personal_hygiene" value="A"
                            {{ $observe_personal_hygiene == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-observe_personal_hygiene-d" class="checkBtn"
                            name="observe_personal_hygiene" value="D"
                            {{ $observe_personal_hygiene == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-observe_personal_hygiene-n" class="checkBtn"
                            name="observe_personal_hygiene" value="N"
                            {{ $observe_personal_hygiene == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>

            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            17
                        </div>
                    </span>
                </td>
                <td class=" px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can identify the various food groups. Example; Carbohydrate, protein, minerals.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_food_groups-a+" class="checkBtn"
                            name="identify_food_groups" value="A+"
                            {{ $identify_food_groups == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_food_groups-a" class="checkBtn"
                            name="identify_food_groups" value="A"
                            {{ $identify_food_groups == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_food_groups-d" class="checkBtn"
                            name="identify_food_groups" value="D"
                            {{ $identify_food_groups == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_food_groups-n" class="checkBtn"
                            name="identify_food_groups" value="N"
                            {{ $identify_food_groups == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            18
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can talk about the importance of eating a balanced meal. Example; For proper growth.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-importance_eating-a+" class="checkBtn"
                            name="importance_eating" value="A+"
                            {{ $importance_eating == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-importance_eating-a" class="checkBtn"
                            name="importance_eating" value="A" {{ $importance_eating == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-importance_eating-d" class="checkBtn"
                            name="importance_eating" value="D" {{ $importance_eating == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-importance_eating-n" class="checkBtn"
                            name="importance_eating" value="N" {{ $importance_eating == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            19
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can differentiate between clean and dirty environment.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-diff_clean_dirty-a+" class="checkBtn"
                            name="diff_clean_dirty" value="A+" {{ $diff_clean_dirty == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-diff_clean_dirty-a" class="checkBtn" name="diff_clean_dirty"
                            value="A" {{ $diff_clean_dirty == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-diff_clean_dirty-d" class="checkBtn" name="diff_clean_dirty"
                            value="D" {{ $diff_clean_dirty == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-diff_clean_dirty-n" class="checkBtn" name="diff_clean_dirty"
                            value="N" {{ $diff_clean_dirty == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            20
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can demonstrate ways of keeping the environment clean.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-demo_keep_environ-a+" class="checkBtn"
                            name="demo_keep_environ" value="A+"
                            {{ $demo_keep_environ == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-demo_keep_environ-a" class="checkBtn"
                            name="demo_keep_environ" value="A" {{ $demo_keep_environ == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-demo_keep_environ-d" class="checkBtn"
                            name="demo_keep_environ" value="D" {{ $demo_keep_environ == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-demo_keep_environ-n" class="checkBtn"
                            name="demo_keep_environ" value="N" {{ $demo_keep_environ == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            21
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can mention some equipment for cleaning the environment. Examples; Broom for
                            sweeping,
                            <br>cutlass for weeding.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-equip_cleaning_environ-a+" class="checkBtn"
                            name="equip_cleaning_environ" value="A+"
                            {{ $equip_cleaning_environ == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-equip_cleaning_environ-a" class="checkBtn"
                            name="equip_cleaning_environ" value="A"
                            {{ $equip_cleaning_environ == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-equip_cleaning_environ-d" class="checkBtn"
                            name="equip_cleaning_environ" value="D"
                            {{ $equip_cleaning_environ == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-equip_cleaning_environ-n" class="checkBtn"
                            name="equip_cleaning_environ" value="N"
                            {{ $equip_cleaning_environ == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>


            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap border-r border-r-gray-900">
                    <span class="">
                        <div>
                            22
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can differentiate between harmful and non-harmful objects.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-diff_harmful_non-a+" class="checkBtn"
                            name="diff_harmful_non" value="A+" {{ $diff_harmful_non == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-diff_harmful_non-a" class="checkBtn" name="diff_harmful_non"
                            value="A" {{ $diff_harmful_non == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-diff_harmful_non-d" class="checkBtn" name="diff_harmful_non"
                            value="D" {{ $diff_harmful_non == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-diff_harmful_non-n" class="checkBtn" name="diff_harmful_non"
                            value="N" {{ $diff_harmful_non == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap border-r border-r-gray-900">
                    <span class="">
                        <div>
                            23
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can tell the practice that can cause road accidents.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-practice_road_accidents-a+" class="checkBtn"
                            name="practice_road_accidents" value="A+"
                            {{ $practice_road_accidents == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-practice_road_accidents-a" class="checkBtn"
                            name="practice_road_accidents" value="A"
                            {{ $practice_road_accidents == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-practice_road_accidents-d" class="checkBtn"
                            name="practice_road_accidents" value="D"
                            {{ $practice_road_accidents == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-practice_road_accidents-n" class="checkBtn"
                            name="practice_road_accidents" value="N"
                            {{ $practice_road_accidents == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap border-r border-r-gray-900">
                    <span class="">
                        <div>
                            24
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can distinguish the nuclear and extended family.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-dist_nuclear_extended-a+" class="checkBtn"
                            name="dist_nuclear_extended" value="A+"
                            {{ $dist_nuclear_extended == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-dist_nuclear_extended-a" class="checkBtn"
                            name="dist_nuclear_extended" value="A"
                            {{ $dist_nuclear_extended == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-dist_nuclear_extended-d" class="checkBtn"
                            name="dist_nuclear_extended" value="D"
                            {{ $dist_nuclear_extended == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-dist_nuclear_extended-n" class="checkBtn"
                            name="dist_nuclear_extended" value="N"
                            {{ $dist_nuclear_extended == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            25
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>Can talk about the roles and responsibilities of the family.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-roles_family-a+" class="checkBtn" name="roles_family"
                            value="A+" {{ $roles_family == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-roles_family-a" class="checkBtn" name="roles_family"
                            value="A" {{ $roles_family == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-roles_family-d" class="checkBtn" name="roles_family"
                            value="D" {{ $roles_family == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-roles_family-n" class="checkBtn" name="roles_family"
                            value="N" {{ $roles_family == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            26
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>Can role play some celebrations and festivals that bring the family and community
                            together.<br>Example; Birthday.</div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-fest_family_together-a+" class="checkBtn"
                            name="fest_family_together" value="A+"
                            {{ $fest_family_together == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-fest_family_together-a" class="checkBtn"
                            name="fest_family_together" value="A"
                            {{ $fest_family_together == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-fest_family_together-d" class="checkBtn"
                            name="fest_family_together" value="D"
                            {{ $fest_family_together == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-fest_family_together-n" class="checkBtn"
                            name="fest_family_together" value="N"
                            {{ $fest_family_together == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            27
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can practice some of the rules and regulations of the school. Example; Do not fight.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-practice_rule_of_school-a+" class="checkBtn"
                            name="practice_rule_of_school" value="A+"
                            {{ $practice_rule_of_school == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-practice_rule_of_school-a" class="checkBtn"
                            name="practice_rule_of_school" value="A"
                            {{ $practice_rule_of_school == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-practice_rule_of_school-d" class="checkBtn"
                            name="practice_rule_of_school" value="D"
                            {{ $practice_rule_of_school == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-practice_rule_of_school-n" class="checkBtn"
                            name="practice_rule_of_school" value="N"
                            {{ $practice_rule_of_school == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            28
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can draw and colour some of the external human body parts. </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-draw_color_body-a+" class="checkBtn" name="draw_color_body"
                            value="A+" {{ $draw_color_body == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-draw_color_body-a" class="checkBtn" name="draw_color_body"
                            value="A" {{ $draw_color_body == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-draw_color_body-d" class="checkBtn" name="draw_color_body"
                            value="D" {{ $draw_color_body == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-draw_color_body-n" class="checkBtn" name="draw_color_body"
                            value="N" {{ $draw_color_body == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            29
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>Can cut and paste some external body parts.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-cut_paste_body-a+" class="checkBtn" name="cut_paste_body"
                            value="A+" {{ $cut_paste_body == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-cut_paste_body-a" class="checkBtn" name="cut_paste_body"
                            value="A" {{ $cut_paste_body == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-cut_paste_body-d" class="checkBtn" name="cut_paste_body"
                            value="D" {{ $cut_paste_body == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-cut_paste_body-n" class="checkBtn" name="cut_paste_body"
                            value="N" {{ $cut_paste_body == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            30
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can draw to match the various sense.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-draw_match_sense-a+" class="checkBtn"
                            name="draw_match_sense" value="A+" {{ $draw_match_sense == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-draw_match_sense-a" class="checkBtn" name="draw_match_sense"
                            value="A" {{ $draw_match_sense == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-draw_match_sense-d" class="checkBtn" name="draw_match_sense"
                            value="D" {{ $draw_match_sense == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-draw_match_sense-n" class="checkBtn" name="draw_match_sense"
                            value="N" {{ $draw_match_sense == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            31
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can cut and paste to show an activity. Example; Hand washing. </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-cut_paste_activity-a+" class="checkBtn"
                            name="cut_paste_activity" value="A+"
                            {{ $cut_paste_activity == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-cut_paste_activity-a" class="checkBtn"
                            name="cut_paste_activity" value="A"
                            {{ $cut_paste_activity == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-cut_paste_activity-d" class="checkBtn"
                            name="cut_paste_activity" value="D"
                            {{ $cut_paste_activity == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-cut_paste_activity-n" class="checkBtn"
                            name="cut_paste_activity" value="N"
                            {{ $cut_paste_activity == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            32
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can mould at least two food items.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-mould_two_food-a+" class="checkBtn" name="mould_two_food"
                            value="A+" {{ $mould_two_food == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-mould_two_food-a" class="checkBtn" name="mould_two_food"
                            value="A" {{ $mould_two_food == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-mould_two_food-d" class="checkBtn" name="mould_two_food"
                            value="D" {{ $mould_two_food == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-mould_two_food-n" class="checkBtn" name="mould_two_food"
                            value="N" {{ $mould_two_food == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            33
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can model how to give vaccination.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-model_vaccine-a+" class="checkBtn" name="model_vaccine"
                            value="A+" {{ $model_vaccine == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-model_vaccine-a" class="checkBtn" name="model_vaccine"
                            value="A" {{ $model_vaccine == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-model_vaccine-d" class="checkBtn" name="model_vaccine"
                            value="D" {{ $model_vaccine == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-model_vaccine-n" class="checkBtn" name="model_vaccine"
                            value="N" {{ $model_vaccine == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            34
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can arrange material to form a design.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-arrange_mat_design-a+" class="checkBtn"
                            name="arrange_mat_design" value="A+"
                            {{ $arrange_mat_design == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-arrange_mat_design-a" class="checkBtn"
                            name="arrange_mat_design" value="A"
                            {{ $arrange_mat_design == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-arrange_mat_design-d" class="checkBtn"
                            name="arrange_mat_design" value="D"
                            {{ $arrange_mat_design == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-arrange_mat_design-n" class="checkBtn"
                            name="arrange_mat_design" value="N"
                            {{ $arrange_mat_design == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            35
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can use waste paper to make a mosaic work.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-waste_paper_mosaic-a+" class="checkBtn"
                            name="waste_paper_mosaic" value="A+"
                            {{ $waste_paper_mosaic == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-waste_paper_mosaic-a" class="checkBtn"
                            name="waste_paper_mosaic" value="A"
                            {{ $waste_paper_mosaic == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-waste_paper_mosaic-d" class="checkBtn"
                            name="waste_paper_mosaic" value="D"
                            {{ $waste_paper_mosaic == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-waste_paper_mosaic-n" class="checkBtn"
                            name="waste_paper_mosaic" value="N"
                            {{ $waste_paper_mosaic == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            36
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can use positive words to describe him/herself. Example; I am specially created and
                            unique.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-positive_dec_self-a+" class="checkBtn"
                            name="positive_dec_self" value="A+"
                            {{ $positive_dec_self == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-positive_dec_self-a" class="checkBtn"
                            name="positive_dec_self" value="A"
                            {{ $positive_dec_self == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-positive_dec_self-d" class="checkBtn"
                            name="positive_dec_self" value="D"
                            {{ $positive_dec_self == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-positive_dec_self-n" class="checkBtn"
                            name="positive_dec_self" value="N"
                            {{ $positive_dec_self == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            27
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can tell how different a human is from animals.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-diff_human_animal-a+" class="checkBtn"
                            name="diff_human_animal" value="A+"
                            {{ $diff_human_animal == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-diff_human_animal-a" class="checkBtn"
                            name="diff_human_animal" value="A"
                            {{ $diff_human_animal == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-diff_human_animal-d" class="checkBtn"
                            name="diff_human_animal" value="D"
                            {{ $diff_human_animal == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-diff_human_animal-n" class="checkBtn"
                            name="diff_human_animal" value="N"
                            {{ $diff_human_animal == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>

            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            38
                        </div>
                    </span>
                </td>
                <td class=" px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can tell the beginning and ending sound of the body parts. Examples; Head, lungs.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-beginning_ending_sound_body-a+" class="checkBtn"
                            name="beginning_ending_sound_body" value="A+"
                            {{ $beginning_ending_sound_body == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-beginning_ending_sound_body-a" class="checkBtn"
                            name="beginning_ending_sound_body" value="A"
                            {{ $beginning_ending_sound_body == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-beginning_ending_sound_body-d" class="checkBtn"
                            name="beginning_ending_sound_body" value="D"
                            {{ $beginning_ending_sound_body == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-beginning_ending_sound_body-n" class="checkBtn"
                            name="beginning_ending_sound_body" value="N"
                            {{ $beginning_ending_sound_body == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            39
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can use appropriate words to label a book. Example; Spine, back cover
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-approprite_word_label-a+" class="checkBtn"
                            name="approprite_word_label" value="A+"
                            {{ $approprite_word_label == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-approprite_word_label-a" class="checkBtn"
                            name="approprite_word_label" value="A"
                            {{ $approprite_word_label == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-approprite_word_label-d" class="checkBtn"
                            name="approprite_word_label" value="D"
                            {{ $approprite_word_label == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-approprite_word_label-n" class="checkBtn"
                            name="approprite_word_label" value="N"
                            {{ $approprite_word_label == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            40
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can identify letter sounds in their names.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_letter_sounds-a+" class="checkBtn"
                            name="identify_letter_sounds" value="A+"
                            {{ $identify_letter_sounds == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_letter_sounds-a" class="checkBtn"
                            name="identify_letter_sounds" value="A"
                            {{ $identify_letter_sounds == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_letter_sounds-d" class="checkBtn"
                            name="identify_letter_sounds" value="D"
                            {{ $identify_letter_sounds == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_letter_sounds-n" class="checkBtn"
                            name="identify_letter_sounds" value="N"
                            {{ $identify_letter_sounds == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            41
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can recopy words appropriately.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-recopy_words_approp-a+" class="checkBtn"
                            name="recopy_words_approp" value="A+"
                            {{ $recopy_words_approp == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-recopy_words_approp-a" class="checkBtn"
                            name="recopy_words_approp" value="A"
                            {{ $recopy_words_approp == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-recopy_words_approp-d" class="checkBtn"
                            name="recopy_words_approp" value="D"
                            {{ $recopy_words_approp == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-recopy_words_approp-n" class="checkBtn"
                            name="recopy_words_approp" value="N"
                            {{ $recopy_words_approp == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            42
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can match upper case letters to their lower case letters.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-match_upper_lower_case-a+" class="checkBtn"
                            name="match_upper_lower_case" value="A+"
                            {{ $match_upper_lower_case == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-match_upper_lower_case-a" class="checkBtn"
                            name="match_upper_lower_case" value="A"
                            {{ $match_upper_lower_case == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-match_upper_lower_case-d" class="checkBtn"
                            name="match_upper_lower_case" value="D"
                            {{ $match_upper_lower_case == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-match_upper_lower_case-n" class="checkBtn"
                            name="match_upper_lower_case" value="N"
                            {{ $match_upper_lower_case == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap border-r border-r-gray-900">
                    <span class="">
                        <div>43
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can relate actions to words. Example; Brush your teeth.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-relate_action_words-a+" class="checkBtn"
                            name="relate_action_words" value="A+"
                            {{ $relate_action_words == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-relate_action_words-a" class="checkBtn"
                            name="relate_action_words" value="A"
                            {{ $relate_action_words == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-relate_action_words-d" class="checkBtn"
                            name="relate_action_words" value="D"
                            {{ $relate_action_words == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-relate_action_words-n" class="checkBtn"
                            name="relate_action_words" value="N"
                            {{ $relate_action_words == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap border-r border-r-gray-900">
                    <span class="">
                        <div>
                            44
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can identify rhyming words in sentences.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_rhyming_words-a+" class="checkBtn"
                            name="identify_rhyming_words" value="A+"
                            {{ $identify_rhyming_words == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_rhyming_words-a" class="checkBtn"
                            name="identify_rhyming_words" value="A"
                            {{ $identify_rhyming_words == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_rhyming_words-d" class="checkBtn"
                            name="identify_rhyming_words" value="D"
                            {{ $identify_rhyming_words == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_rhyming_words-n" class="checkBtn"
                            name="identify_rhyming_words" value="N"
                            {{ $identify_rhyming_words == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap border-r border-r-gray-900">
                    <span class="">
                        <div>
                            45
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can recite and identify most occurring sounds in tongue twisters.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_occuring_sounds-a+" class="checkBtn"
                            name="identify_occuring_sounds" value="A+"
                            {{ $identify_occuring_sounds == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_occuring_sounds-a" class="checkBtn"
                            name="identify_occuring_sounds" value="A"
                            {{ $identify_occuring_sounds == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_occuring_sounds-d" class="checkBtn"
                            name="identify_occuring_sounds" value="D"
                            {{ $identify_occuring_sounds == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_occuring_sounds-n" class="checkBtn"
                            name="identify_occuring_sounds" value="N"
                            {{ $identify_occuring_sounds == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            46
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can read and talk about pictures.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-read_talk_pictures-a+" class="checkBtn"
                            name="read_talk_pictures" value="A+"
                            {{ $read_talk_pictures == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-read_talk_pictures-a" class="checkBtn"
                            name="read_talk_pictures" value="A"
                            {{ $read_talk_pictures == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-read_talk_pictures-d" class="checkBtn"
                            name="read_talk_pictures" value="D"
                            {{ $read_talk_pictures == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-read_talk_pictures-n" class="checkBtn"
                            name="read_talk_pictures" value="N"
                            {{ $read_talk_pictures == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            47
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>Can clap to the syllables of a given word. Example; (po-lio)
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-clap_syllabus_words-a+" class="checkBtn"
                            name="clap_syllabus_words" value="A+"
                            {{ $clap_syllabus_words == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-clap_syllabus_words-a" class="checkBtn"
                            name="clap_syllabus_words" value="A"
                            {{ $clap_syllabus_words == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-clap_syllabus_words-d" class="checkBtn"
                            name="clap_syllabus_words" value="D"
                            {{ $clap_syllabus_words == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-clap_syllabus_words-n" class="checkBtn"
                            name="clap_syllabus_words" value="N"
                            {{ $clap_syllabus_words == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            48
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can blend sounds to form a word. Example; //p/o/l/i/o//
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-blend_sound_form_word-a+" class="checkBtn"
                            name="blend_sound_form_word" value="A+"
                            {{ $blend_sound_form_word == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-blend_sound_form_word-a" class="checkBtn"
                            name="blend_sound_form_word" value="A"
                            {{ $blend_sound_form_word == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-blend_sound_form_word-d" class="checkBtn"
                            name="blend_sound_form_word" value="D"
                            {{ $blend_sound_form_word == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-blend_sound_form_word-n" class="checkBtn"
                            name="blend_sound_form_word" value="N"
                            {{ $blend_sound_form_word == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            49
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can use sight words to form simple sentences. Example; I am eating.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-sight_word_sentences-a+" class="checkBtn"
                            name="sight_word_sentences" value="A+"
                            {{ $sight_word_sentences == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-sight_word_sentences-a" class="checkBtn"
                            name="sight_word_sentences" value="A"
                            {{ $sight_word_sentences == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-sight_word_sentences-d" class="checkBtn"
                            name="sight_word_sentences" value="D"
                            {{ $sight_word_sentences == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-sight_word_sentences-n" class="checkBtn"
                            name="sight_word_sentences" value="N"
                            {{ $sight_word_sentences == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            50
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can listen and retell story in a sequence.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-listen_retell_story-a+" class="checkBtn"
                            name="listen_retell_story" value="A+"
                            {{ $listen_retell_story == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-listen_retell_story-a" class="checkBtn"
                            name="listen_retell_story" value="A"
                            {{ $listen_retell_story == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-listen_retell_story-d" class="checkBtn"
                            name="listen_retell_story" value="D"
                            {{ $listen_retell_story == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-listen_retell_story-n" class="checkBtn"
                            name="listen_retell_story" value="N"
                            {{ $listen_retell_story == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            51
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can listen to stories and answer questions orally.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-listen_quest_ans_orally-a+" class="checkBtn"
                            name="listen_quest_ans_orally" value="A+"
                            {{ $listen_quest_ans_orally == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-listen_quest_ans_orally-a" class="checkBtn"
                            name="listen_quest_ans_orally" value="A"
                            {{ $listen_quest_ans_orally == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-listen_quest_ans_orally-d" class="checkBtn"
                            name="listen_quest_ans_orally" value="D"
                            {{ $listen_quest_ans_orally == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-listen_quest_ans_orally-n" class="checkBtn"
                            name="listen_quest_ans_orally" value="N"
                            {{ $listen_quest_ans_orally == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            52
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can recite rhymes and poems.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-recite_rhymes_poems-a+" class="checkBtn"
                            name="recite_rhymes_poems" value="A+"
                            {{ $recite_rhymes_poems == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-recite_rhymes_poems-a" class="checkBtn"
                            name="recite_rhymes_poems" value="A"
                            {{ $recite_rhymes_poems == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-recite_rhymes_poems-d" class="checkBtn"
                            name="recite_rhymes_poems" value="D"
                            {{ $recite_rhymes_poems == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-recite_rhymes_poems-n" class="checkBtn"
                            name="recite_rhymes_poems" value="N"
                            {{ $recite_rhymes_poems == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            53
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can talk about their school environment.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_school_environ-a+" class="checkBtn"
                            name="talk_school_environ" value="A+"
                            {{ $talk_school_environ == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_school_environ-a" class="checkBtn"
                            name="talk_school_environ" value="A"
                            {{ $talk_school_environ == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_school_environ-d" class="checkBtn"
                            name="talk_school_environ" value="D"
                            {{ $talk_school_environ == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_school_environ-n" class="checkBtn"
                            name="talk_school_environ" value="N"
                            {{ $talk_school_environ == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            54
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can identify vowels and consonants of the English alphabets.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_vowels_consonant-a+" class="checkBtn"
                            name="identify_vowels_consonant" value="A+"
                            {{ $identify_vowels_consonant == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_vowels_consonant-a" class="checkBtn"
                            name="identify_vowels_consonant" value="A"
                            {{ $identify_vowels_consonant == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_vowels_consonant-d" class="checkBtn"
                            name="identify_vowels_consonant" value="D"
                            {{ $identify_vowels_consonant == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_vowels_consonant-n" class="checkBtn"
                            name="identify_vowels_consonant" value="N"
                            {{ $identify_vowels_consonant == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr class="table-t-r">
                <td class="px-3 py-2 whitespace-nowrap  border-r border-r-gray-900">
                    <span class="">
                        <div>
                            55
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>Can arrange pictures to complete a story.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-arrange_pictures_story-a+" class="checkBtn"
                            name="arrange_pictures_story" value="A+"
                            {{ $arrange_pictures_story == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-arrange_pictures_story-a" class="checkBtn"
                            name="arrange_pictures_story" value="A"
                            {{ $arrange_pictures_story == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-arrange_pictures_story-d" class="checkBtn"
                            name="arrange_pictures_story" value="D"
                            {{ $arrange_pictures_story == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-arrange_pictures_story-n" class="checkBtn"
                            name="arrange_pictures_story" value="N"
                            {{ $arrange_pictures_story == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>

            <tr>
                <td class="px-3 py-2 whitespace-nowrap border text-center h-[40px]" colspan="11">
                </td>
            </tr>
        </tbody>
    </table>

    <table class="table !text-slate-800 border !border-gray-700 printed relative">
        <tbody>
            <tr>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="3"
                    style="width: 25% !important">
                    Neatness</td>

                <td class=" capitalize px-3 py-2 whitespace-nowrap border font-bold" colspan="8"
                    style="width: 75% !important">
                    {{ $neatness }}
                </td>
            </tr>
            <tr>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="3">
                    Conduct</td>
                <td class="capitalize px-3 py-2 whitespace-nowrap border font-bold" colspan="8">
                    {{ $conduct }}
                </td>
            </tr>
            <tr>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="3">
                    Facilitator's Remarks</td>
                <td class="capitalize px-3 py-2 whitespace-nowrap border font-bold" colspan="7">
                    {{ $report->class_teacher_remark }}
                </td>
            </tr>
            <tr>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="3">
                    Headteacher's Signature</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" colspan="7" rowspan="2">
                    <img alt="headteacher signature image" />
                </td>
            </tr>
            <tr>
                <td class="px-3 py-2 whitespace-nowrap border text-center h-[40px]" colspan="4">
                </td>
            </tr>
            <tr>
                <td class="px-3 py-2 whitespace-nowrap border text-center h-[40px]" colspan="4">
                </td>
            </tr>
        </tbody>
    </table>
    <table class="table !text-slate-800 border !border-gray-700 printed relative">
        <tbody>
            <tr>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold bg-gray-300 hover:bg-gray-300"
                    style="background-color: #d1d5db !important;" colspan="4" style="width: 40% !important;">
                    Grading / Rating Scale</td>
                <td style="width: 5% !important;"></td>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="2"
                    style="width: 15% !important">
                    Id Number
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" colspan="4"
                    style="width: 40% !important">
                    {{ $report->student->index_number }}
                </td>
            </tr>
            <tr>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="4">
                    A+ - MOVED BEYOND ACHIEVING THE SKILL</td>
                <td></td>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="2">
                    Student Name
                </td>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="4">
                    {{ $report->student->fullname() }}
                </td>
            </tr>
            <tr>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="4">
                    A - ACHIEVED THE SKILL </td>
                <td></td>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="2">
                    Amount Due For The Term
                </td>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="4">
                </td>
            </tr>
            <tr>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="4">
                    D - DEVELOPING THE SKILL </td>
                <td></td>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="2">
                    Amount Due For The Year
                </td>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="4">
                </td>
            </tr>
            <tr>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="4">
                    N - Not yet</td>
                <td colspan="7"></td>
            </tr>
            <tr>
                <td class="px-3 py-2 whitespace-nowrap border text-center h-[40px]" colspan="11">
                </td>
            </tr>
            <tr>
                <td class="px-3 py-2 whitespace-nowrap border text-center" colspan="11">
                    <strong class="uppercase">Note: </strong> Parent are kinndly reminded to pay their ward fees at
                    <strong class="uppercase">GCB Bank LTD </strong> with the account details on the bill before
                    re-opening. <br>Please use the <strong class="uppercase"> Eagle Pay System.</strong>
                </td>
            </tr>
        </tbody>
    </table>
</div>
