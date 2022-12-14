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
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold">
                    <span>
                        Next Term Bigins:
                    </span>
                </td>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="4">
                    <span>
                        {{ $report->class_position }}

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
                    <div class="uppercase">
                        <span>(A)</span>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" colspan="6">
                    <div class="uppercase">
                        <span>Emotional And Social Development</span>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" style="width: 5% !important;">
                    <div class="uppercase">
                        <span>E</span>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" style="width: 5% !important;">
                    <div class="uppercase">
                        <span>G </span>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" style="width: 5% !important;">
                    <div class="uppercase">
                        <span>A</span>
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
                    1
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" colspan="6">
                    Can throw and kick ball
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_can_throw-e" name="ms_can_throw" value="E"
                        {{ $ms_can_throw == 'E' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_can_throw-g" name="ms_can_throw" value="G"
                        {{ $ms_can_throw == 'G' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_can_throw-a" name="ms_can_throw" value="A"
                        {{ $ms_can_throw == 'A' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_can_throw-n" name="ms_can_throw" value="N"
                        {{ $ms_can_throw == 'N' ? 'checked' : '' }} class="checkBtn">

                </td>
            </tr>

            <tr>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    2</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" colspan="6">
                    Active and enjoys outdoor play</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_active-e" name="ms_active" value="E"
                        {{ $ms_active == 'E' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_active-g" name="ms_active" value="G"
                        {{ $ms_active == 'G' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_active-a" name="ms_active" value="A"
                        {{ $ms_active == 'A' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_active-n" name="ms_active" value="N"
                        {{ $ms_active == 'N' ? 'checked' : '' }} class="checkBtn">

                </td>
            </tr>

            <tr>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    3</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" colspan="6">
                    Physical co-ordination</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_physical-e" name="ms_physical" value="E"
                        {{ $ms_physical == 'E' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_physical-g" name="ms_physical" value="G"
                        {{ $ms_physical == 'G' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_physical-a" name="ms_physical" value="A"
                        {{ $ms_physical == 'A' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_physical-n" name="ms_physical" value="N"
                        {{ $ms_physical == 'N' ? 'checked' : '' }} class="checkBtn">

                </td>
            </tr>

            <tr>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    4</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" colspan="6">
                    Can wear shoes</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_can_wear-e" name="ms_can_wear" value="E"
                        {{ $ms_can_wear == 'E' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_can_wear-g" name="ms_can_wear" value="G"
                        {{ $ms_can_wear == 'G' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_can_wear-a" name="ms_can_wear" value="A"
                        {{ $ms_can_wear == 'A' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_can_wear-n" name="ms_can_wear" value="N"
                        {{ $ms_can_wear == 'N' ? 'checked' : '' }} class="checkBtn">

                </td>
            </tr>

            <tr>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    5</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" colspan="6">
                    Good control of bladder</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_good_control-e" name="ms_good_control"
                        value="E" {{ $ms_good_control == 'E' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_good_control-g" name="ms_good_control"
                        value="G" {{ $ms_good_control == 'G' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_good_control-a" name="ms_good_control"
                        value="A" {{ $ms_good_control == 'A' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_good_control-n" name="ms_good_control"
                        value="N" {{ $ms_good_control == 'N' ? 'checked' : '' }} class="checkBtn">

                </td>
            </tr>

            <tr>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    6</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" colspan="6">
                    Consciousness of hygiene</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_consiousness-e" name="ms_consiousness"
                        value="E" {{ $ms_consiousness == 'E' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_consiousness-g" name="ms_consiousness"
                        value="G" {{ $ms_consiousness == 'G' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_consiousness-a" name="ms_consiousness"
                        value="A" {{ $ms_consiousness == 'A' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_consiousness-n" name="ms_consiousness"
                        value="N" {{ $ms_consiousness == 'N' ? 'checked' : '' }} class="checkBtn">

                </td>
            </tr>

            <tr>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    7</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" colspan="6">
                    General Health Condition</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_general_health-e" name="ms_general_health"
                        value="E" {{ $ms_general_health == 'E' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_general_health-g" name="ms_general_health"
                        value="G" {{ $ms_general_health == 'G' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_general_health-a" name="ms_general_health"
                        value="A" {{ $ms_general_health == 'A' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-ms_general_health-n" name="ms_general_health"
                        value="N" {{ $ms_general_health == 'N' ? 'checked' : '' }} class="checkBtn">

                </td>
            </tr>
            <tr class="bg-gray-300 hover:bg-gray-300" style="background-color: #d1d5db !important;">
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div class="uppercase">
                        <span>(B)</span>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" colspan="6">
                    <div class="uppercase">
                        <span>Emotional And Social Development</span>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div class="uppercase">
                        <span>E</span>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div class="uppercase">
                        <span>G </span>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div class="uppercase">
                        <span>A</span>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div class="uppercase">
                        <span>N</span>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="px-3 py-2 whitespace-nowrap border font-bold ">
                    1</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" colspan="6">
                    Cheerfulness</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-es_cheerfulness-e" name="es_cheerfulness"
                        value="E" {{ $es_cheerfulness == 'E' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-es_cheerfulness-g" name="es_cheerfulness"
                        value="G" {{ $es_cheerfulness == 'G' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-es_cheerfulness-a" name="es_cheerfulness"
                        value="A" {{ $es_cheerfulness == 'A' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-es_cheerfulness-n" name="es_cheerfulness"
                        value="N" {{ $es_cheerfulness == 'N' ? 'checked' : '' }} class="checkBtn">

                </td>
            </tr>

            <tr>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    2</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" colspan="6">
                    Child mixes with others and shows co-operation</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-es_child_mixes-e" name="es_child_mixes" value="E"
                        {{ $es_child_mixes == 'E' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-es_child_mixes-g" name="es_child_mixes" value="G"
                        {{ $es_child_mixes == 'G' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-es_child_mixes-a" name="es_child_mixes" value="A"
                        {{ $es_child_mixes == 'A' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-es_child_mixes-n" name="es_child_mixes" value="N"
                        {{ $es_child_mixes == 'N' ? 'checked' : '' }} class="checkBtn">

                </td>
            </tr>

            <tr>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    3</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" colspan="6">
                    Child shows confidence during different situations</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-es_child_shows-e" name="es_child_shows" value="E"
                        {{ $es_child_shows == 'E' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-es_child_shows-g" name="es_child_shows" value="G"
                        {{ $es_child_shows == 'G' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-es_child_shows-a" name="es_child_shows" value="A"
                        {{ $es_child_shows == 'A' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-es_child_shows-n" name="es_child_shows" value="N"
                        {{ $es_child_shows == 'N' ? 'checked' : '' }} class="checkBtn">

                </td>
            </tr>

            <!-- C congnitive andlanguage development -->
            <tr class="bg-gray-300 hover:bg-gray-300" style="background-color: #d1d5db !important;">
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div class="uppercase">
                        <span>(c)</span>
                    </div>
                </td>
                <td colspan="6" class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div class="uppercase">
                        <span>Cognitive And Language Development</span>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div class="uppercase">
                        <span>E</span>
                    </div>
                </td>

                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div class="uppercase">
                        <span>G </span>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div class="uppercase">
                        <span>A</span>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div class="uppercase">
                        <span>N</span>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    1</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" colspan="6">
                    Concentrates and follows activity to conclusion</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-cl_concentrates-e" name="cl_concentrates"
                        value="E" {{ $cl_concentrates == 'E' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-cl_concentrates-g" name="cl_concentrates"
                        value="G" {{ $cl_concentrates == 'G' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-cl_concentrates-a" name="cl_concentrates"
                        value="A" {{ $cl_concentrates == 'A' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-cl_concentrates-n" name="cl_concentrates"
                        value="N" {{ $cl_concentrates == 'N' ? 'checked' : '' }} class="checkBtn">

                </td>
            </tr>

            <tr>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    2</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" colspan="6">
                    Can recite rhymes and recall story</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-cl_can_recite-e" name="cl_can_recite" value="E"
                        {{ $cl_can_recite == 'E' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-cl_can_recite-g" name="cl_can_recite" value="G"
                        {{ $cl_can_recite == 'G' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-cl_can_recite-a" name="cl_can_recite" value="A"
                        {{ $cl_can_recite == 'A' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-cl_can_recite-n" name="cl_can_recite" value="N"
                        {{ $cl_can_recite == 'N' ? 'checked' : '' }} class="checkBtn">

                </td>
            </tr>

            <tr>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    3</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" colspan="6">
                    Ask questions and describes an activity</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-cl_ask_questions-e" name="cl_ask_questions"
                        value="E" {{ $cl_ask_questions == 'E' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-cl_ask_questions-g" name="cl_ask_questions"
                        value="G" {{ $cl_ask_questions == 'G' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-cl_ask_questions-a" name="cl_ask_questions"
                        value="A" {{ $cl_ask_questions == 'A' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-cl_ask_questions-n" name="cl_ask_questions"
                        value="N" {{ $cl_ask_questions == 'N' ? 'checked' : '' }} class="checkBtn">

                </td>
            </tr>

            <tr>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    4</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" colspan="6">
                    Can tell name, sex, age and common objects</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-cl_can_tell_name-e" name="cl_can_tell_name"
                        value="E" {{ $cl_can_tell_name == 'E' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-cl_can_tell_name-g" name="cl_can_tell_name"
                        value="G" {{ $cl_can_tell_name == 'G' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-cl_can_tell_name-a" name="cl_can_tell_name"
                        value="A" {{ $cl_can_tell_name == 'A' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-cl_can_tell_name-n" name="cl_can_tell_name"
                        value="N" {{ $cl_can_tell_name == 'N' ? 'checked' : '' }} class="checkBtn">

                </td>
            </tr>

            <tr>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    5</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" colspan="6">
                    Can understand and use simple words/sentences/gestures</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-cl_can_understand-e" name="cl_can_understand"
                        value="E" {{ $cl_can_understand == 'E' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-cl_can_understand-g" name="cl_can_understand"
                        value="G" {{ $cl_can_understand == 'G' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-cl_can_understand-a" name="cl_can_understand"
                        value="A" {{ $cl_can_understand == 'A' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-cl_can_understand-n" name="cl_can_understand"
                        value="N" {{ $cl_can_understand == 'N' ? 'checked' : '' }} class="checkBtn">

                </td>
            </tr>

            <tr>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    6</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" colspan="6">
                    Can manipulate Lego blocks to build</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-cl_can_manipulate-e" name="cl_can_manipulate"
                        value="E" {{ $cl_can_manipulate == 'E' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-cl_can_manipulate-g" name="cl_can_manipulate"
                        value="G" {{ $cl_can_manipulate == 'G' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-cl_can_manipulate-a" name="cl_can_manipulate"
                        value="A" {{ $cl_can_manipulate == 'A' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-cl_can_manipulate-n" name="cl_can_manipulate"
                        value="N" {{ $cl_can_manipulate == 'N' ? 'checked' : '' }} class="checkBtn">

                </td>
            </tr>

            <!-- D music, art, creativity -->
            <tr class="bg-gray-300 hover:bg-gray-300" style="background-color: #d1d5db !important;">
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div class="uppercase">
                        <span>(D)</span>
                    </div>
                </td>

                <td class="px-3 py-2 whitespace-nowrap border font-bold" colspan="6">
                    <div class="uppercase">
                        <span> Music, Art, Creativity</span>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div class="uppercase">
                        <span>E</span>
                    </div>
                </td>

                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div class="uppercase">
                        <span>G </span>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div class="uppercase">
                        <span>A</span>
                    </div>
                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <div class="uppercase">
                        <span>N</span>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    1</td>
                <td class=" px-3 py-2 whitespace-nowrap border font-bold" colspan="6">
                    Ability to sing</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-mac_sing-e" name="mac_sing" value="E"
                        {{ $mac_sing == 'E' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-mac_sing-g" name="mac_sing" value="G"
                        {{ $mac_sing == 'G' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-mac_sing-a" name="mac_sing" value="A"
                        {{ $mac_sing == 'A' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-mac_sing-n" name="mac_sing" value="N"
                        {{ $mac_sing == 'N' ? 'checked' : '' }} class="checkBtn">

                </td>
            </tr>

            <tr>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    2</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold" colspan="6">
                    Ability to dance</td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-mac_dance-e" name="mac_dance" value="E"
                        {{ $mac_dance == 'E' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-mac_dance-g" name="mac_dance" value="G"
                        {{ $mac_dance == 'G' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-mac_dance-a" name="mac_dance" value="A"
                        {{ $mac_dance == 'A' ? 'checked' : '' }} class="checkBtn">

                </td>
                <td class="px-3 py-2 whitespace-nowrap border font-bold">
                    <input type="radio" disabled id="radio-mac_dance-n" name="mac_dance" value="N"
                        {{ $mac_dance == 'N' ? 'checked' : '' }} class="checkBtn">

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
                    E - Excellent</td>
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
                    G - Good </td>
                <td></td>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="2">
                    Amount Due For The Term
                </td>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="4">
                </td>
            </tr>
            <tr>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="4">
                    A - Average </td>
                <td></td>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="2">
                    Amount Due For The Year
                </td>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="4">
                </td>
            </tr>
            <tr>
                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="4">
                    N - Not Applicable </td>
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
