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
            <tr>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            1
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can talk about living and non living-things in his/her immediate environment.
                            Example; plants, pencils.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_living-a+" class="checkBtn" name="talk_living"
                            value="A+" {{ $talk_living == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_living-a" class="checkBtn" name="talk_living"
                            value="A" {{ $talk_living == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_living-d" class="checkBtn" name="talk_living"
                            value="D" {{ $talk_living == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_living-n" class="checkBtn" name="talk_living"
                            value="N" {{ $talk_living == 'N' ? 'checked' : '' }}>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            2
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can identify and group given pictures into living and non-living things and paste
                            them in his/her book.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_group-a+" class="checkBtn" name="identify_group"
                            value="A+" {{ $identify_group == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_group-a" class="checkBtn" name="identify_group"
                            value="A" {{ $identify_group == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_group-d" class="checkBtn" name="identify_group"
                            value="D" {{ $identify_group == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_group-n" class="checkBtn" name="identify_group"
                            value="N" {{ $identify_group == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr>

                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            3
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can talk and compare some of the living and non-living things. Examples; living
                            things grow and die. <br> Non-living things do not.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_compare-a+" class="checkBtn" name="talk_compare"
                            value="A+" {{ $talk_compare == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_compare-a" class="checkBtn" name="talk_compare"
                            value="A" {{ $talk_compare == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_compare-d" class="checkBtn" name="talk_compare"
                            value="D" {{ $talk_compare == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_compare-n" class="checkBtn" name="talk_compare"
                            value="N" {{ $talk_compare == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr>

                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            4
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can blend letter sounds to form words related to the theme.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-blend_letter-a+" class="checkBtn" name="blend_letter"
                            value="A+" {{ $blend_letter == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-blend_letter-a" class="checkBtn" name="blend_letter"
                            value="A" {{ $blend_letter == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-blend_letter-d" class="checkBtn" name="blend_letter"
                            value="D" {{ $blend_letter == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-blend_letter-n" class="checkBtn" name="blend_letter"
                            value="N" {{ $blend_letter == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr>

                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            5
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>Can talk about other living things around the house and how to prevent them from
                            entering the house.<br> Examples; house fly, lizard etc.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_other_living-a+" class="checkBtn"
                            name="talk_other_living" value="A+"
                            {{ $talk_other_living == 'A+' ? 'checked' : '' }}>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_other_living-a" class="checkBtn"
                            name="talk_other_living" value="A" {{ $talk_other_living == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_other_living-d" class="checkBtn"
                            name="talk_other_living" value="D" {{ $talk_other_living == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_other_living-n" class="checkBtn"
                            name="talk_other_living" value="N" {{ $talk_other_living == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr>

                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            6
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can arrange a given objects to create a pattern in sequence.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-arrange_object-a+" class="checkBtn" name="arrange_object"
                            value="A+" {{ $arrange_object == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-arrange_object-a" class="checkBtn" name="arrange_object"
                            value="A" {{ $arrange_object == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-arrange_object-d" class="checkBtn" name="arrange_object"
                            value="D" {{ $arrange_object == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-arrange_object-n" class="checkBtn" name="arrange_object"
                            value="N" {{ $arrange_object == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr>

                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            7
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can identify domestic and wild animals, imitate the sounds they make and talk about
                            the food they eat.<br> Examples; sheep – baa plant, lion – roars fresh meat. </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_domestic-a+" class="checkBtn"
                            name="identify_domestic" value="A+"
                            {{ $identify_domestic == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_domestic-a" class="checkBtn"
                            name="identify_domestic" value="A" {{ $identify_domestic == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_domestic-d" class="checkBtn"
                            name="identify_domestic" value="D" {{ $identify_domestic == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_domestic-n" class="checkBtn"
                            name="identify_domestic" value="N" {{ $identify_domestic == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr>

                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            7
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can talk about sources of water from his/her community and tell some of the uses of
                            water. Examples; well,<br> bore-hole, rain water for drinking, for cooking.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_sources-a+" class="checkBtn" name="talk_sources"
                            value="A+" {{ $talk_sources == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_sources-a" class="checkBtn" name="talk_sources"
                            value="A" {{ $talk_sources == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_sources-d" class="checkBtn" name="talk_sources"
                            value="D" {{ $talk_sources == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_sources-n" class="checkBtn" name="talk_sources"
                            value="N" {{ $talk_sources == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr>

                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            8
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can identify the beginning sound of the listed words and use it to form simple
                            sentences.<br> Examples; plant, water, grow, sunlight. Example; plants needs water to
                            grow.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_beginning_sound-a+" class="checkBtn"
                            name="identify_beginning_sound" value="A+"
                            {{ $identify_beginning_sound == 'A+' ? 'checked' : '' }}>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_beginning_sound-a" class="checkBtn"
                            name="identify_beginning_sound" value="A"
                            {{ $identify_beginning_sound == 'A' ? 'checked' : '' }}>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_beginning_sound-d" class="checkBtn"
                            name="identify_beginning_sound" value="D"
                            {{ $identify_beginning_sound == 'D' ? 'checked' : '' }}>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_beginning_sound-n" class="checkBtn"
                            name="identify_beginning_sound" value="N"
                            {{ $identify_beginning_sound == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr>

                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            9
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can draw four source of water and write their names. Examples; well, rain, sea water
                            etc.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-draw_four_source-a+" class="checkBtn"
                            name="draw_four_source" value="A+" {{ $draw_four_source == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-draw_four_source-a" class="checkBtn" name="draw_four_source"
                            value="A" {{ $draw_four_source == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-draw_four_source-d" class="checkBtn" name="draw_four_source"
                            value="D" {{ $draw_four_source == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-draw_four_source-n" class="checkBtn" name="draw_four_source"
                            value="N" {{ $draw_four_source == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr>

                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            10
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can describe the position and motion of object in relation to others.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-describe_position_motion-a+" class="checkBtn"
                            name="describe_position_motion" value="A+"
                            {{ $describe_position_motion == 'A+' ? 'checked' : '' }}>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-describe_position_motion-a" class="checkBtn"
                            name="describe_position_motion" value="A"
                            {{ $describe_position_motion == 'A' ? 'checked' : '' }}>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-describe_position_motion-d" class="checkBtn"
                            name="describe_position_motion" value="D"
                            {{ $describe_position_motion == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-describe_position_motion-n" class="checkBtn"
                            name="describe_position_motion" value="N"
                            {{ $describe_position_motion == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr>

                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            11
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can identify the position of the target sounds in words. Examples; oil, hand, plant
                            etc.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_position_target-a+" class="checkBtn"
                            name="identify_position_target" value="A+"
                            {{ $identify_position_target == 'A+' ? 'checked' : '' }}>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_position_target-a" class="checkBtn"
                            name="identify_position_target" value="A"
                            {{ $identify_position_target == 'A' ? 'checked' : '' }}>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_position_target-d" class="checkBtn"
                            name="identify_position_target" value="D"
                            {{ $identify_position_target == 'D' ? 'checked' : '' }}>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_position_target-n" class="checkBtn"
                            name="identify_position_target" value="N"
                            {{ $identify_position_target == 'N' ? 'checked' : '' }}>
                    </div>
                </td>
            </tr>
            <tr>

                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            13
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can talk about the presence of air and its uses.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_presence-a+" class="checkBtn" name="talk_presence"
                            value="A+" {{ $talk_presence == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_presence-a" class="checkBtn" name="talk_presence"
                            value="A" {{ $talk_presence == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_presence-d" class="checkBtn" name="talk_presence"
                            value="D" {{ $talk_presence == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_presence-n" class="checkBtn" name="talk_presence"
                            value="N" {{ $talk_presence == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr>

                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            14
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can talk about types of soil and mention the one that is best for gardening.
                            Example; loamy soil.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_types_soil-a+" class="checkBtn" name="talk_types_soil"
                            value="A+" {{ $talk_types_soil == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_types_soil-a" class="checkBtn" name="talk_types_soil"
                            value="A" {{ $talk_types_soil == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_types_soil-d" class="checkBtn" name="talk_types_soil"
                            value="D" {{ $talk_types_soil == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_types_soil-n" class="checkBtn" name="talk_types_soil"
                            value="N" {{ $talk_types_soil == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr>

                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            15
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can identify parts of plants and talk about its uses. Examples; stem, roots, leaves.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_plants-a+" class="checkBtn" name="identify_plants"
                            value="A+" {{ $identify_plants == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_plants-a" class="checkBtn" name="identify_plants"
                            value="A" {{ $identify_plants == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_plants-d" class="checkBtn" name="identify_plants"
                            value="D" {{ $identify_plants == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_plants-n" class="checkBtn" name="identify_plants"
                            value="N" {{ $identify_plants == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr>

                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            16
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can identify and match some farm tools to their uses and compare them. Examples;
                            hand <br>fork to make the soil loose for air to circulate freely. </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_match_farm-a+" class="checkBtn"
                            name="identify_match_farm" value="A+"
                            {{ $identify_match_farm == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_match_farm-a" class="checkBtn"
                            name="identify_match_farm" value="A"
                            {{ $identify_match_farm == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_match_farm-d" class="checkBtn"
                            name="identify_match_farm" value="D"
                            {{ $identify_match_farm == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_match_farm-n" class="checkBtn"
                            name="identify_match_farm" value="N"
                            {{ $identify_match_farm == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>

            <tr>

                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            17
                        </div>
                    </span>
                </td>
                <td class=" px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can identify and talk about natural and artificial sources of light. Example;
                            natural light moon, <br>artificial light candle, lantern etc.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_talk_natural-a+" class="checkBtn"
                            name="identify_talk_natural" value="A+"
                            {{ $identify_talk_natural == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_talk_natural-a" class="checkBtn"
                            name="identify_talk_natural" value="A"
                            {{ $identify_talk_natural == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_talk_natural-d" class="checkBtn"
                            name="identify_talk_natural" value="D"
                            {{ $identify_talk_natural == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_talk_natural-n" class="checkBtn"
                            name="identify_talk_natural" value="N"
                            {{ $identify_talk_natural == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr>

                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            18
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can identify and talk about the four main weather conditions in Ghana. Examples;
                            rainy, sunny weather etc.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_main_weather-a+" class="checkBtn"
                            name="identify_main_weather" value="A+"
                            {{ $identify_main_weather == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_main_weather-a" class="checkBtn"
                            name="identify_main_weather" value="A"
                            {{ $identify_main_weather == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_main_weather-d" class="checkBtn"
                            name="identify_main_weather" value="D"
                            {{ $identify_main_weather == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-identify_main_weather-n" class="checkBtn"
                            name="identify_main_weather" value="N"
                            {{ $identify_main_weather == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr>

                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            19
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can mention some of the clothing’s we wear during rainy and sunny weather. Examples;
                            sunny weather <br>cotton clothes, sandals, rainy weather sweater,snickers etc.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-mention_clothing-a+" class="checkBtn"
                            name="mention_clothing" value="A+" {{ $mention_clothing == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-mention_clothing-a" class="checkBtn" name="mention_clothing"
                            value="A" {{ $mention_clothing == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-mention_clothing-d" class="checkBtn" name="mention_clothing"
                            value="D" {{ $mention_clothing == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-mention_clothing-n" class="checkBtn" name="mention_clothing"
                            value="N" {{ $mention_clothing == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr>

                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            20
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can talk about various means by which we connect with the international community –
                            Transportation.<br> Example; travelling by air aeroplane, by road car etc.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_various-a+" class="checkBtn" name="talk_various"
                            value="A+" {{ $talk_various == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_various-a" class="checkBtn" name="talk_various"
                            value="A" {{ $talk_various == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_various-d" class="checkBtn" name="talk_various"
                            value="D" {{ $talk_various == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-talk_various-n" class="checkBtn" name="talk_various"
                            value="N" {{ $talk_various == 'N' ? 'checked' : '' }}>

                    </div>
                </td>
            </tr>
            <tr>

                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            21
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <span class="">
                        <div>
                            Can mention and draw some of the things we buy from and sell to other countries.
                            <br> Examples; cocoa, rice etc.
                        </div>
                    </span>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-mention_draw-a+" class="checkBtn" name="mention_draw"
                            value="A+" {{ $mention_draw == 'A+' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-mention_draw-a" class="checkBtn" name="mention_draw"
                            value="A" {{ $mention_draw == 'A' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-mention_draw-d" class="checkBtn" name="mention_draw"
                            value="D" {{ $mention_draw == 'D' ? 'checked' : '' }}>

                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div>
                        <input type="radio" id="radio-mention_draw-n" class="checkBtn" name="mention_draw"
                            value="N" {{ $mention_draw == 'N' ? 'checked' : '' }}>

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
