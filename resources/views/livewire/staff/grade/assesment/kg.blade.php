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
                                <span></span>
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
                                    Can talk about living and non living-things in his/her immediate environment.
                                    Example; plants, pencils.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_living-a+" class="hidden" name="talk_living"
                                    value="A+" wire:model.defer="talk_living">
                                <label class="fa @error('talk_living') !border-red-500 @enderror"
                                    for="radio-talk_living-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_living-a" class="hidden" name="talk_living"
                                    value="A" wire:model.defer="talk_living">
                                <label class="fa @error('talk_living') !border-red-500 @enderror"
                                    for="radio-talk_living-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_living-d" class="hidden" name="talk_living"
                                    value="D" wire:model.defer="talk_living">
                                <label class="fa @error('talk_living') !border-red-500 @enderror"
                                    for="radio-talk_living-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_living-n" class="hidden" name="talk_living"
                                    value="N" wire:model.defer="talk_living">
                                <label class="fa @error('talk_living') !border-red-500 @enderror"
                                    for="radio-talk_living-n"></label>
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
                                    Can identify and group given pictures into living and non-living things and paste
                                    them in his/her book.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_group-a+" class="hidden" name="identify_group"
                                    value="A+" wire:model.defer="identify_group">
                                <label class="fa @error('identify_group') !border-red-500 @enderror"
                                    for="radio-identify_group-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_group-a" class="hidden" name="identify_group"
                                    value="A" wire:model.defer="identify_group">
                                <label class="fa @error('identify_group') !border-red-500 @enderror"
                                    for="radio-identify_group-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_group-d" class="hidden" name="identify_group"
                                    value="D" wire:model.defer="identify_group">
                                <label class="fa @error('identify_group') !border-red-500 @enderror"
                                    for="radio-identify_group-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_group-n" class="hidden"
                                    name="identify_group" value="N" wire:model.defer="identify_group">
                                <label class="fa @error('identify_group') !border-red-500 @enderror"
                                    for="radio-identify_group-n"></label>
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
                                    Can talk and compare some of the living and non-living things. Examples; living
                                    things grow and die. Non-living things do not.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_compare-a+" class="hidden" name="talk_compare"
                                    value="A+" wire:model.defer="talk_compare">
                                <label class="fa @error('talk_compare') !border-red-500 @enderror"
                                    for="radio-talk_compare-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_compare-a" class="hidden" name="talk_compare"
                                    value="A" wire:model.defer="talk_compare">
                                <label class="fa @error('talk_compare') !border-red-500 @enderror"
                                    for="radio-talk_compare-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_compare-d" class="hidden" name="talk_compare"
                                    value="D" wire:model.defer="talk_compare">
                                <label class="fa @error('talk_compare') !border-red-500 @enderror"
                                    for="radio-talk_compare-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_compare-n" class="hidden" name="talk_compare"
                                    value="N" wire:model.defer="talk_compare">
                                <label class="fa @error('talk_compare') !border-red-500 @enderror"
                                    for="radio-talk_compare-n"></label>
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
                                    Can blend letter sounds to form words related to the theme.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-blend_letter-a+" class="hidden" name="blend_letter"
                                    value="A+" wire:model.defer="blend_letter">
                                <label class="fa @error('blend_letter') !border-red-500 @enderror"
                                    for="radio-blend_letter-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-blend_letter-a" class="hidden" name="blend_letter"
                                    value="A" wire:model.defer="blend_letter">
                                <label class="fa @error('blend_letter') !border-red-500 @enderror"
                                    for="radio-blend_letter-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-blend_letter-d" class="hidden" name="blend_letter"
                                    value="D" wire:model.defer="blend_letter">
                                <label class="fa @error('blend_letter') !border-red-500 @enderror"
                                    for="radio-blend_letter-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-blend_letter-n" class="hidden" name="blend_letter"
                                    value="N" wire:model.defer="blend_letter">
                                <label class="fa @error('blend_letter') !border-red-500 @enderror"
                                    for="radio-blend_letter-n"></label>
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
                                <div>Can talk about other living things around the house and how to prevent them from
                                    entering the house. Examples; house fly, lizard etc.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_other_living-a+" class="hidden"
                                    name="talk_other_living" value="A+" wire:model.defer="talk_other_living">
                                <label class="fa @error('talk_other_living') !border-red-500 @enderror"
                                    for="radio-talk_other_living-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_other_living-a" class="hidden"
                                    name="talk_other_living" value="A" wire:model.defer="talk_other_living">
                                <label class="fa @error('talk_other_living') !border-red-500 @enderror"
                                    for="radio-talk_other_living-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_other_living-d" class="hidden"
                                    name="talk_other_living" value="D" wire:model.defer="talk_other_living">
                                <label class="fa @error('talk_other_living') !border-red-500 @enderror"
                                    for="radio-talk_other_living-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_other_living-n" class="hidden"
                                    name="talk_other_living" value="N" wire:model.defer="talk_other_living">
                                <label class="fa @error('talk_other_living') !border-red-500 @enderror"
                                    for="radio-talk_other_living-n"></label>
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
                                    Can arrange a given objects to create a pattern in sequence.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-arrange_object-a+" class="hidden"
                                    name="arrange_object" value="A+" wire:model.defer="arrange_object">
                                <label class="fa @error('arrange_object') !border-red-500 @enderror"
                                    for="radio-arrange_object-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-arrange_object-a" class="hidden"
                                    name="arrange_object" value="A" wire:model.defer="arrange_object">
                                <label class="fa @error('arrange_object') !border-red-500 @enderror"
                                    for="radio-arrange_object-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-arrange_object-d" class="hidden"
                                    name="arrange_object" value="D" wire:model.defer="arrange_object">
                                <label class="fa @error('arrange_object') !border-red-500 @enderror"
                                    for="radio-arrange_object-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-arrange_object-n" class="hidden"
                                    name="arrange_object" value="N" wire:model.defer="arrange_object">
                                <label class="fa @error('arrange_object') !border-red-500 @enderror"
                                    for="radio-arrange_object-n"></label>
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
                                    Can identify domestic and wild animals, imitate the sounds they make and talk about
                                    the food they eat. Examples; sheep – baa plant, lion – roars fresh meat. </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_domestic-a+" class="hidden"
                                    name="identify_domestic" value="A+" wire:model.defer="identify_domestic">
                                <label class="fa @error('identify_domestic') !border-red-500 @enderror"
                                    for="radio-identify_domestic-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_domestic-a" class="hidden"
                                    name="identify_domestic" value="A" wire:model.defer="identify_domestic">
                                <label class="fa @error('identify_domestic') !border-red-500 @enderror"
                                    for="radio-identify_domestic-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_domestic-d" class="hidden"
                                    name="identify_domestic" value="D" wire:model.defer="identify_domestic">
                                <label class="fa @error('identify_domestic') !border-red-500 @enderror"
                                    for="radio-identify_domestic-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_domestic-n" class="hidden"
                                    name="identify_domestic" value="N" wire:model.defer="identify_domestic">
                                <label class="fa @error('identify_domestic') !border-red-500 @enderror"
                                    for="radio-identify_domestic-n"></label>
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
                                    Can talk about sources of water from his/her community and tell some of the uses of
                                    water. Examples; well, bore-hole, rain water for drinking, for cooking.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_sources-a+" class="hidden" name="talk_sources"
                                    value="A+" wire:model.defer="talk_sources">
                                <label class="fa @error('talk_sources') !border-red-500 @enderror"
                                    for="radio-talk_sources-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_sources-a" class="hidden" name="talk_sources"
                                    value="A" wire:model.defer="talk_sources">
                                <label class="fa @error('talk_sources') !border-red-500 @enderror"
                                    for="radio-talk_sources-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_sources-d" class="hidden" name="talk_sources"
                                    value="D" wire:model.defer="talk_sources">
                                <label class="fa @error('talk_sources') !border-red-500 @enderror"
                                    for="radio-talk_sources-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_sources-n" class="hidden" name="talk_sources"
                                    value="N" wire:model.defer="talk_sources">
                                <label class="fa @error('talk_sources') !border-red-500 @enderror"
                                    for="radio-talk_sources-n"></label>
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
                                    Can identify the beginning sound of the listed words and use it to form simple
                                    sentences. Examples; plant, water, grow, sunlight. Example; plants needs water to
                                    grow.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_beginning_sound-a+" class="hidden"
                                    name="identify_beginning_sound" value="A+"
                                    wire:model.defer="identify_beginning_sound">
                                <label class="fa @error('identify_beginning_sound') !border-red-500 @enderror"
                                    for="radio-identify_beginning_sound-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_beginning_sound-a" class="hidden"
                                    name="identify_beginning_sound" value="A"
                                    wire:model.defer="identify_beginning_sound">
                                <label class="fa @error('identify_beginning_sound') !border-red-500 @enderror"
                                    for="radio-identify_beginning_sound-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_beginning_sound-d" class="hidden"
                                    name="identify_beginning_sound" value="D"
                                    wire:model.defer="identify_beginning_sound">
                                <label class="fa @error('identify_beginning_sound') !border-red-500 @enderror"
                                    for="radio-identify_beginning_sound-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_beginning_sound-n" class="hidden"
                                    name="identify_beginning_sound" value="N"
                                    wire:model.defer="identify_beginning_sound">
                                <label class="fa @error('identify_beginning_sound') !border-red-500 @enderror"
                                    for="radio-identify_beginning_sound-n"></label>
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
                                    Can draw four source of water and write their names. Examples; well, rain, sea water
                                    etc.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-draw_four_source-a+" class="hidden"
                                    name="draw_four_source" value="A+" wire:model.defer="draw_four_source">
                                <label class="fa @error('draw_four_source') !border-red-500 @enderror"
                                    for="radio-draw_four_source-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-draw_four_source-a" class="hidden"
                                    name="draw_four_source" value="A" wire:model.defer="draw_four_source">
                                <label class="fa @error('draw_four_source') !border-red-500 @enderror"
                                    for="radio-draw_four_source-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-draw_four_source-d" class="hidden"
                                    name="draw_four_source" value="D" wire:model.defer="draw_four_source">
                                <label class="fa @error('draw_four_source') !border-red-500 @enderror"
                                    for="radio-draw_four_source-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-draw_four_source-n" class="hidden"
                                    name="draw_four_source" value="N" wire:model.defer="draw_four_source">
                                <label class="fa @error('draw_four_source') !border-red-500 @enderror"
                                    for="radio-draw_four_source-n"></label>
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
                                    Can describe the position and motion of object in relation to others.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-describe_position_motion-a+" class="hidden"
                                    name="describe_position_motion" value="A+"
                                    wire:model.defer="describe_position_motion">
                                <label class="fa @error('describe_position_motion') !border-red-500 @enderror"
                                    for="radio-describe_position_motion-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-describe_position_motion-a" class="hidden"
                                    name="describe_position_motion" value="A"
                                    wire:model.defer="describe_position_motion">
                                <label class="fa @error('describe_position_motion') !border-red-500 @enderror"
                                    for="radio-describe_position_motion-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-describe_position_motion-d" class="hidden"
                                    name="describe_position_motion" value="D"
                                    wire:model.defer="describe_position_motion">
                                <label class="fa @error('describe_position_motion') !border-red-500 @enderror"
                                    for="radio-describe_position_motion-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-describe_position_motion-n" class="hidden"
                                    name="describe_position_motion" value="N"
                                    wire:model.defer="describe_position_motion">
                                <label class="fa @error('describe_position_motion') !border-red-500 @enderror"
                                    for="radio-describe_position_motion-n"></label>
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
                                    Can identify the position of the target sounds in words. Examples; oil, hand, plant
                                    etc.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_position_target-a+" class="hidden"
                                    name="identify_position_target" value="A+"
                                    wire:model.defer="identify_position_target">
                                <label class="fa @error('identify_position_target') !border-red-500 @enderror"
                                    for="radio-identify_position_target-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_position_target-a" class="hidden"
                                    name="identify_position_target" value="A"
                                    wire:model.defer="identify_position_target">
                                <label class="fa @error('identify_position_target') !border-red-500 @enderror"
                                    for="radio-identify_position_target-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_position_target-d" class="hidden"
                                    name="identify_position_target" value="D"
                                    wire:model.defer="identify_position_target">
                                <label class="fa @error('identify_position_target') !border-red-500 @enderror"
                                    for="radio-identify_position_target-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_position_target-n" class="hidden"
                                    name="identify_position_target" value="N"
                                    wire:model.defer="identify_position_target">
                                <label class="fa @error('identify_position_target') !border-red-500 @enderror"
                                    for="radio-identify_position_target-n"></label>
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
                                    Can talk about the presence of air and its uses.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_presence-a+" class="hidden"
                                    name="talk_presence" value="A+" wire:model.defer="talk_presence">
                                <label class="fa @error('talk_presence') !border-red-500 @enderror"
                                    for="radio-talk_presence-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_presence-a" class="hidden" name="talk_presence"
                                    value="A" wire:model.defer="talk_presence">
                                <label class="fa @error('talk_presence') !border-red-500 @enderror"
                                    for="radio-talk_presence-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_presence-d" class="hidden" name="talk_presence"
                                    value="D" wire:model.defer="talk_presence">
                                <label class="fa @error('talk_presence') !border-red-500 @enderror"
                                    for="radio-talk_presence-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_presence-n" class="hidden" name="talk_presence"
                                    value="N" wire:model.defer="talk_presence">
                                <label class="fa @error('talk_presence') !border-red-500 @enderror"
                                    for="radio-talk_presence-n"></label>
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
                                    Can talk about types of soil and mention the one that is best for gardening.
                                    Example; loamy soil.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_types_soil-a+" class="hidden"
                                    name="talk_types_soil" value="A+" wire:model.defer="talk_types_soil">
                                <label class="fa @error('talk_types_soil') !border-red-500 @enderror"
                                    for="radio-talk_types_soil-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_types_soil-a" class="hidden"
                                    name="talk_types_soil" value="A" wire:model.defer="talk_types_soil">
                                <label class="fa @error('talk_types_soil') !border-red-500 @enderror"
                                    for="radio-talk_types_soil-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_types_soil-d" class="hidden"
                                    name="talk_types_soil" value="D" wire:model.defer="talk_types_soil">
                                <label class="fa @error('talk_types_soil') !border-red-500 @enderror"
                                    for="radio-talk_types_soil-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_types_soil-n" class="hidden"
                                    name="talk_types_soil" value="N" wire:model.defer="talk_types_soil">
                                <label class="fa @error('talk_types_soil') !border-red-500 @enderror"
                                    for="radio-talk_types_soil-n"></label>
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
                                    Can identify parts of plants and talk about its uses. Examples; stem, roots, leaves.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_plants-a+" class="hidden"
                                    name="identify_plants" value="A+" wire:model.defer="identify_plants">
                                <label class="fa @error('identify_plants') !border-red-500 @enderror"
                                    for="radio-identify_plants-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_plants-a" class="hidden"
                                    name="identify_plants" value="A" wire:model.defer="identify_plants">
                                <label class="fa @error('identify_plants') !border-red-500 @enderror"
                                    for="radio-identify_plants-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_plants-d" class="hidden"
                                    name="identify_plants" value="D" wire:model.defer="identify_plants">
                                <label class="fa @error('identify_plants') !border-red-500 @enderror"
                                    for="radio-identify_plants-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_plants-n" class="hidden"
                                    name="identify_plants" value="N" wire:model.defer="identify_plants">
                                <label class="fa @error('identify_plants') !border-red-500 @enderror"
                                    for="radio-identify_plants-n"></label>
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
                                    Can identify and match some farm tools to their uses and compare them. Examples;
                                    hand fork to make the soil loose for air to circulate freely. </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_match_farm-a+" class="hidden"
                                    name="identify_match_farm" value="A+" wire:model.defer="identify_match_farm">
                                <label class="fa @error('identify_match_farm') !border-red-500 @enderror"
                                    for="radio-identify_match_farm-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_match_farm-a" class="hidden"
                                    name="identify_match_farm" value="A" wire:model.defer="identify_match_farm">
                                <label class="fa @error('identify_match_farm') !border-red-500 @enderror"
                                    for="radio-identify_match_farm-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_match_farm-d" class="hidden"
                                    name="identify_match_farm" value="D" wire:model.defer="identify_match_farm">
                                <label class="fa @error('identify_match_farm') !border-red-500 @enderror"
                                    for="radio-identify_match_farm-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_match_farm-n" class="hidden"
                                    name="identify_match_farm" value="N" wire:model.defer="identify_match_farm">
                                <label class="fa @error('identify_match_farm') !border-red-500 @enderror"
                                    for="radio-identify_match_farm-n"></label>
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
                                    Can identify and talk about natural and artificial sources of light. Example;
                                    natural light moon, artificial light candle, lantern etc.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_talk_natural-a+" class="hidden"
                                    name="identify_talk_natural" value="A+"
                                    wire:model.defer="identify_talk_natural">
                                <label class="fa @error('identify_talk_natural') !border-red-500 @enderror"
                                    for="radio-identify_talk_natural-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_talk_natural-a" class="hidden"
                                    name="identify_talk_natural" value="A"
                                    wire:model.defer="identify_talk_natural">
                                <label class="fa @error('identify_talk_natural') !border-red-500 @enderror"
                                    for="radio-identify_talk_natural-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_talk_natural-d" class="hidden"
                                    name="identify_talk_natural" value="D"
                                    wire:model.defer="identify_talk_natural">
                                <label class="fa @error('identify_talk_natural') !border-red-500 @enderror"
                                    for="radio-identify_talk_natural-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_talk_natural-n" class="hidden"
                                    name="identify_talk_natural" value="N"
                                    wire:model.defer="identify_talk_natural">
                                <label class="fa @error('identify_talk_natural') !border-red-500 @enderror"
                                    for="radio-identify_talk_natural-n"></label>
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
                                    Can identify and talk about the four main weather conditions in Ghana. Examples;
                                    rainy, sunny weather etc.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_main_weather-a+" class="hidden"
                                    name="identify_main_weather" value="A+"
                                    wire:model.defer="identify_main_weather">
                                <label class="fa @error('identify_main_weather') !border-red-500 @enderror"
                                    for="radio-identify_main_weather-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_main_weather-a" class="hidden"
                                    name="identify_main_weather" value="A"
                                    wire:model.defer="identify_main_weather">
                                <label class="fa @error('identify_main_weather') !border-red-500 @enderror"
                                    for="radio-identify_main_weather-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_main_weather-d" class="hidden"
                                    name="identify_main_weather" value="D"
                                    wire:model.defer="identify_main_weather">
                                <label class="fa @error('identify_main_weather') !border-red-500 @enderror"
                                    for="radio-identify_main_weather-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-identify_main_weather-n" class="hidden"
                                    name="identify_main_weather" value="N"
                                    wire:model.defer="identify_main_weather">
                                <label class="fa @error('identify_main_weather') !border-red-500 @enderror"
                                    for="radio-identify_main_weather-n"></label>
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
                                    Can mention some of the clothing’s we wear during rainy and sunny weather. Examples;
                                    sunny weather cotton clothes, sandals, rainy weather sweater, snickers etc.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-mention_clothing-a+" class="hidden"
                                    name="mention_clothing" value="A+" wire:model.defer="mention_clothing">
                                <label class="fa @error('mention_clothing') !border-red-500 @enderror"
                                    for="radio-mention_clothing-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-mention_clothing-a" class="hidden"
                                    name="mention_clothing" value="A" wire:model.defer="mention_clothing">
                                <label class="fa @error('mention_clothing') !border-red-500 @enderror"
                                    for="radio-mention_clothing-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-mention_clothing-d" class="hidden"
                                    name="mention_clothing" value="D" wire:model.defer="mention_clothing">
                                <label class="fa @error('mention_clothing') !border-red-500 @enderror"
                                    for="radio-mention_clothing-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-mention_clothing-n" class="hidden"
                                    name="mention_clothing" value="N" wire:model.defer="mention_clothing">
                                <label class="fa @error('mention_clothing') !border-red-500 @enderror"
                                    for="radio-mention_clothing-n"></label>
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
                                    Can talk about various means by which we connect with the international community –
                                    Transportation. Example; travelling by air aeroplane, by road car etc.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_various-a+" class="hidden" name="talk_various"
                                    value="A+" wire:model.defer="talk_various">
                                <label class="fa @error('talk_various') !border-red-500 @enderror"
                                    for="radio-talk_various-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_various-a" class="hidden" name="talk_various"
                                    value="A" wire:model.defer="talk_various">
                                <label class="fa @error('talk_various') !border-red-500 @enderror"
                                    for="radio-talk_various-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_various-d" class="hidden" name="talk_various"
                                    value="D" wire:model.defer="talk_various">
                                <label class="fa @error('talk_various') !border-red-500 @enderror"
                                    for="radio-talk_various-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-talk_various-n" class="hidden" name="talk_various"
                                    value="N" wire:model.defer="talk_various">
                                <label class="fa @error('talk_various') !border-red-500 @enderror"
                                    for="radio-talk_various-n"></label>
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
                                    Can mention and draw some of the things we buy from and sell to other countries.
                                    Examples; cocoa, rice etc.
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-mention_draw-a+" class="hidden" name="mention_draw"
                                    value="A+" wire:model.defer="mention_draw">
                                <label class="fa @error('mention_draw') !border-red-500 @enderror"
                                    for="radio-mention_draw-a+"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-mention_draw-a" class="hidden" name="mention_draw"
                                    value="A" wire:model.defer="mention_draw">
                                <label class="fa @error('mention_draw') !border-red-500 @enderror"
                                    for="radio-mention_draw-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-mention_draw-d" class="hidden" name="mention_draw"
                                    value="D" wire:model.defer="mention_draw">
                                <label class="fa @error('mention_draw') !border-red-500 @enderror"
                                    for="radio-mention_draw-d"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-mention_draw-n" class="hidden" name="mention_draw"
                                    value="N" wire:model.defer="mention_draw">
                                <label class="fa @error('mention_draw') !border-red-500 @enderror"
                                    for="radio-mention_draw-n"></label>
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
                                <x-native-select placeholder="Select Neatness" :options="[
                                    ['value' => 'very neat', 'name' => 'Very Neat'],
                                    ['value' => 'neat', 'name' => 'Neat'],
                                    ['value' => 'quite neat', 'name' => 'Quite Neat'],
                                ]" option-label="name"
                                    option-value="value" wire:model.defer="neatness" required />
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

                                <x-native-select placeholder="Select Conduct" :options="[
                                    ['value' => 'sociable', 'name' => 'sociable'],
                                    ['value' => 'firendly', 'name' => 'firendly'],
                                    ['value' => 'respectful', 'name' => 'respectful'],
                                    ['value' => 'helpful', 'name' => 'helpful'],
                                    ['value' => 'responsible', 'name' => 'responsible'],
                                    ['value' => 'appreciative', 'name' => 'appreciative'],
                                    ['value' => 'cooperative', 'name' => 'cooperative'],
                                ]" option-label="name"
                                    option-value="value" wire:model.defer="conduct" class="capitalize" required />
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
