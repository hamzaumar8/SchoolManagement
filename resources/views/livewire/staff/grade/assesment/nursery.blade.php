<div>
    <style>
        input[type="radio"]:checked+.fa:before,
        input[type="radio"]:checked+label:before {
            content: "\f00c";
        }
    </style>
    <form wire:submit.prevent="submit" enctype="multipart/form-data">
        <div class="my-3 overflow-x-auto bg-white shadow-lg rounded-lg overflow-y-auto relative ps ps--active-x">
            <table class="table power-grid-table rounded-lg min-w-full border border-slate-200 dark:bg-slate-600 dark:border-slate-500">
                <thead class="shadow-sm bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-500 border-b-2 border-b-gray-900">

                    <tr>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 w-[20px]">
                            <div class="uppercase">
                                <span>(A)</span>
                            </div>
                        </th>

                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 " style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span> Motor Skills</span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300" style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>E</span>
                            </div>
                        </th>

                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 " style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>G </span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 " style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>A</span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 " style="width: max-content;  cursor:pointer;">
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
                                    Can throw and kick ball
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_can_throw-e" class="hidden" name="ms_can_throw" value="E" wire:model.defer="ms_can_throw">
                                <label class="fa @error('ms_can_throw') !border-red-500 @enderror" for="radio-ms_can_throw-e"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_can_throw-g" class="hidden" name="ms_can_throw" value="G" wire:model.defer="ms_can_throw">
                                <label class="fa @error('ms_can_throw') !border-red-500 @enderror" for="radio-ms_can_throw-g"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_can_throw-a" class="hidden" name="ms_can_throw" value="A" wire:model.defer="ms_can_throw">
                                <label class="fa @error('ms_can_throw') !border-red-500 @enderror" for="radio-ms_can_throw-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_can_throw-n" class="hidden" name="ms_can_throw" value="N" wire:model.defer="ms_can_throw">
                                <label class="fa @error('ms_can_throw') !border-red-500 @enderror" for="radio-ms_can_throw-n"></label>
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
                                    Active and enjoys outdoor play
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_active-e" class="hidden" name="ms_active" value="E" wire:model.defer="ms_active">
                                <label class="fa @error('ms_active') !border-red-500 @enderror" for="radio-ms_active-e"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_active-g" class="hidden" name="ms_active" value="G" wire:model.defer="ms_active">
                                <label class="fa @error('ms_active') !border-red-500 @enderror" for="radio-ms_active-g"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_active-a" class="hidden" name="ms_active" value="A" wire:model.defer="ms_active">
                                <label class="fa @error('ms_active') !border-red-500 @enderror" for="radio-ms_active-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_active-n" class="hidden" name="ms_active" value="N" wire:model.defer="ms_active">
                                <label class="fa @error('ms_active') !border-red-500 @enderror" for="radio-ms_active-n"></label>
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
                                    Physical co-ordination
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_physical-e" class="hidden" name="ms_physical" value="E" wire:model.defer="ms_physical">
                                <label class="fa @error('ms_physical') !border-red-500 @enderror" for="radio-ms_physical-e"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_physical-g" class="hidden" name="ms_physical" value="G" wire:model.defer="ms_physical">
                                <label class="fa @error('ms_physical') !border-red-500 @enderror" for="radio-ms_physical-g"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_physical-a" class="hidden" name="ms_physical" value="A" wire:model.defer="ms_physical">
                                <label class="fa @error('ms_physical') !border-red-500 @enderror" for="radio-ms_physical-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_physical-n" class="hidden" name="ms_physical" value="N" wire:model.defer="ms_physical">
                                <label class="fa @error('ms_physical') !border-red-500 @enderror" for="radio-ms_physical-n"></label>
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
                                    Can wear shoes
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_can_wear-e" class="hidden" name="ms_can_wear" value="E" wire:model.defer="ms_can_wear">
                                <label class="fa @error('ms_can_wear') !border-red-500 @enderror" for="radio-ms_can_wear-e"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_can_wear-g" class="hidden" name="ms_can_wear" value="G" wire:model.defer="ms_can_wear">
                                <label class="fa @error('ms_can_wear') !border-red-500 @enderror" for="radio-ms_can_wear-g"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_can_wear-a" class="hidden" name="ms_can_wear" value="A" wire:model.defer="ms_can_wear">
                                <label class="fa @error('ms_can_wear') !border-red-500 @enderror" for="radio-ms_can_wear-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_can_wear-n" class="hidden" name="ms_can_wear" value="N" wire:model.defer="ms_can_wear">
                                <label class="fa @error('ms_can_wear') !border-red-500 @enderror" for="radio-ms_can_wear-n"></label>
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
                                <div>
                                    Good control of bladder
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_good_control-e" class="hidden" name="ms_good_control" value="E" wire:model.defer="ms_good_control">
                                <label class="fa @error('ms_good_control') !border-red-500 @enderror" for="radio-ms_good_control-e"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_good_control-g" class="hidden" name="ms_good_control" value="G" wire:model.defer="ms_good_control">
                                <label class="fa @error('ms_good_control') !border-red-500 @enderror" for="radio-ms_good_control-g"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_good_control-a" class="hidden" name="ms_good_control" value="A" wire:model.defer="ms_good_control">
                                <label class="fa @error('ms_good_control') !border-red-500 @enderror" for="radio-ms_good_control-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_good_control-n" class="hidden" name="ms_good_control" value="N" wire:model.defer="ms_good_control">
                                <label class="fa @error('ms_good_control') !border-red-500 @enderror" for="radio-ms_good_control-n"></label>
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
                                    Consciousness of hygiene
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_consiousness-e" class="hidden" name="ms_consiousness" value="E" wire:model.defer="ms_consiousness">
                                <label class="fa @error('ms_consiousness') !border-red-500 @enderror" for="radio-ms_consiousness-e"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_consiousness-g" class="hidden" name="ms_consiousness" value="G" wire:model.defer="ms_consiousness">
                                <label class="fa @error('ms_consiousness') !border-red-500 @enderror" for="radio-ms_consiousness-g"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_consiousness-a" class="hidden" name="ms_consiousness" value="A" wire:model.defer="ms_consiousness">
                                <label class="fa @error('ms_consiousness') !border-red-500 @enderror" for="radio-ms_consiousness-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_consiousness-n" class="hidden" name="ms_consiousness" value="N" wire:model.defer="ms_consiousness">
                                <label class="fa @error('ms_consiousness') !border-red-500 @enderror" for="radio-ms_consiousness-n"></label>
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
                                    General Health Condition
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_general_health-e" class="hidden" name="ms_general_health" value="E" wire:model.defer="ms_general_health">
                                <label class="fa @error('ms_general_health') !border-red-500 @enderror" for="radio-ms_general_health-e"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_general_health-g" class="hidden" name="ms_general_health" value="G" wire:model.defer="ms_general_health">
                                <label class="fa @error('ms_general_health') !border-red-500 @enderror" for="radio-ms_general_health-g"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_general_health-a" class="hidden" name="ms_general_health" value="A" wire:model.defer="ms_general_health">
                                <label class="fa @error('ms_general_health') !border-red-500 @enderror" for="radio-ms_general_health-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-ms_general_health-n" class="hidden" name="ms_general_health" value="N" wire:model.defer="ms_general_health">
                                <label class="fa @error('ms_general_health') !border-red-500 @enderror" for="radio-ms_general_health-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="shadow-sm bg-slate-100 dark:bg-slate-800 border border-slate-200 border-t-2 border-y-gray-900 dark:border-slate-500">
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 ">
                            <div class="uppercase">
                                <span>(B) </span>
                            </div>
                        </th>

                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 " style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>Emotional And Social Development</span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 " style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>E</span>
                            </div>
                        </th>

                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 " style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>G </span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 " style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>A</span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 " style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>N</span>
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
                                    Cheerfulness
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-es_cheerfulness-e" class="hidden" name="es_cheerfulness" value="E" wire:model.defer="es_cheerfulness">
                                <label class="fa @error('es_cheerfulness') !border-red-500 @enderror" for="radio-es_cheerfulness-e"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-es_cheerfulness-g" class="hidden" name="es_cheerfulness" value="G" wire:model.defer="es_cheerfulness">
                                <label class="fa @error('es_cheerfulness') !border-red-500 @enderror" for="radio-es_cheerfulness-g"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-es_cheerfulness-a" class="hidden" name="es_cheerfulness" value="A" wire:model.defer="es_cheerfulness">
                                <label class="fa @error('es_cheerfulness') !border-red-500 @enderror" for="radio-es_cheerfulness-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-es_cheerfulness-n" class="hidden" name="es_cheerfulness" value="N" wire:model.defer="es_cheerfulness">
                                <label class="fa @error('es_cheerfulness') !border-red-500 @enderror" for="radio-es_cheerfulness-n"></label>
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
                                    Child mixes with others and shows co-operation
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-es_child_mixes-e" class="hidden" name="es_child_mixes" value="E" wire:model.defer="es_child_mixes">
                                <label class="fa @error('es_child_mixes') !border-red-500 @enderror" for="radio-es_child_mixes-e"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-es_child_mixes-g" class="hidden" name="es_child_mixes" value="G" wire:model.defer="es_child_mixes">
                                <label class="fa @error('es_child_mixes') !border-red-500 @enderror" for="radio-es_child_mixes-g"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-es_child_mixes-a" class="hidden" name="es_child_mixes" value="A" wire:model.defer="es_child_mixes">
                                <label class="fa @error('es_child_mixes') !border-red-500 @enderror" for="radio-es_child_mixes-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-es_child_mixes-n" class="hidden" name="es_child_mixes" value="N" wire:model.defer="es_child_mixes">
                                <label class="fa @error('es_child_mixes') !border-red-500 @enderror" for="radio-es_child_mixes-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">

                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    3
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Child shows confidence during different situations
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-es_child_shows-e" class="hidden" name="es_child_shows" value="E" wire:model.defer="es_child_shows">
                                <label class="fa @error('es_child_shows') !border-red-500 @enderror" for="radio-es_child_shows-e"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-es_child_shows-g" class="hidden" name="es_child_shows" value="G" wire:model.defer="es_child_shows">
                                <label class="fa @error('es_child_shows') !border-red-500 @enderror" for="radio-es_child_shows-g"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-es_child_shows-a" class="hidden" name="es_child_shows" value="A" wire:model.defer="es_child_shows">
                                <label class="fa @error('es_child_shows') !border-red-500 @enderror" for="radio-es_child_shows-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-es_child_shows-n" class="hidden" name="es_child_shows" value="N" wire:model.defer="es_child_shows">
                                <label class="fa @error('es_child_shows') !border-red-500 @enderror" for="radio-es_child_shows-n"></label>
                            </div>
                        </td>
                    </tr>







                    <!-- C congnitive andlanguage development -->
                    <tr class="shadow-sm bg-slate-100 dark:bg-slate-800 border border-slate-200 border-t-2 border-y-gray-900  dark:border-slate-500">
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 ">
                            <div class="uppercase">
                                <span>(c) </span>
                            </div>
                        </th>

                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 " style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>Cognitive And Language Development</span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 " style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>E</span>
                            </div>
                        </th>

                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 " style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>G </span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 " style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>A</span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 " style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>N</span>
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
                                    Concentrates and follows activity to conclusion
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cl_concentrates-e" class="hidden" name="cl_concentrates" value="E" wire:model.defer="cl_concentrates">
                                <label class="fa @error('cl_concentrates') !border-red-500 @enderror" for="radio-cl_concentrates-e"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cl_concentrates-g" class="hidden" name="cl_concentrates" value="G" wire:model.defer="cl_concentrates">
                                <label class="fa @error('cl_concentrates') !border-red-500 @enderror" for="radio-cl_concentrates-g"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cl_concentrates-a" class="hidden" name="cl_concentrates" value="A" wire:model.defer="cl_concentrates">
                                <label class="fa @error('cl_concentrates') !border-red-500 @enderror" for="radio-cl_concentrates-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cl_concentrates-n" class="hidden" name="cl_concentrates" value="N" wire:model.defer="cl_concentrates">
                                <label class="fa @error('cl_concentrates') !border-red-500 @enderror" for="radio-cl_concentrates-n"></label>
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
                                    Can recite rhymes and recall story
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cl_can_recite-e" class="hidden" name="cl_can_recite" value="E" wire:model.defer="cl_can_recite">
                                <label class="fa @error('cl_can_recite') !border-red-500 @enderror" for="radio-cl_can_recite-e"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cl_can_recite-g" class="hidden" name="cl_can_recite" value="G" wire:model.defer="cl_can_recite">
                                <label class="fa @error('cl_can_recite') !border-red-500 @enderror" for="radio-cl_can_recite-g"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cl_can_recite-a" class="hidden" name="cl_can_recite" value="A" wire:model.defer="cl_can_recite">
                                <label class="fa @error('cl_can_recite') !border-red-500 @enderror" for="radio-cl_can_recite-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cl_can_recite-n" class="hidden" name="cl_can_recite" value="N" wire:model.defer="cl_can_recite">
                                <label class="fa @error('cl_can_recite') !border-red-500 @enderror" for="radio-cl_can_recite-n"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-t-r">

                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200  border-r border-r-gray-900">
                            <span class="">
                                <div>
                                    3
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Ask questions and describes an activity
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cl_ask_questions-e" class="hidden" name="cl_ask_questions" value="E" wire:model.defer="cl_ask_questions">
                                <label class="fa @error('cl_ask_questions') !border-red-500 @enderror" for="radio-cl_ask_questions-e"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cl_ask_questions-g" class="hidden" name="cl_ask_questions" value="G" wire:model.defer="cl_ask_questions">
                                <label class="fa @error('cl_ask_questions') !border-red-500 @enderror" for="radio-cl_ask_questions-g"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cl_ask_questions-a" class="hidden" name="cl_ask_questions" value="A" wire:model.defer="cl_ask_questions">
                                <label class="fa @error('cl_ask_questions') !border-red-500 @enderror" for="radio-cl_ask_questions-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cl_ask_questions-n" class="hidden" name="cl_ask_questions" value="N" wire:model.defer="cl_ask_questions">
                                <label class="fa @error('cl_ask_questions') !border-red-500 @enderror" for="radio-cl_ask_questions-n"></label>
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
                                    Can tell name, sex, age and common objects
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cl_can_tell_name-e" class="hidden" name="cl_can_tell_name" value="E" wire:model.defer="cl_can_tell_name">
                                <label class="fa @error('cl_can_tell_name') !border-red-500 @enderror" for="radio-cl_can_tell_name-e"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cl_can_tell_name-g" class="hidden" name="cl_can_tell_name" value="G" wire:model.defer="cl_can_tell_name">
                                <label class="fa @error('cl_can_tell_name') !border-red-500 @enderror" for="radio-cl_can_tell_name-g"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cl_can_tell_name-a" class="hidden" name="cl_can_tell_name" value="A" wire:model.defer="cl_can_tell_name">
                                <label class="fa @error('cl_can_tell_name') !border-red-500 @enderror" for="radio-cl_can_tell_name-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cl_can_tell_name-n" class="hidden" name="cl_can_tell_name" value="N" wire:model.defer="cl_can_tell_name">
                                <label class="fa @error('cl_can_tell_name') !border-red-500 @enderror" for="radio-cl_can_tell_name-n"></label>
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
                                <div>
                                    Can understand and use simple words/sentences/gestures
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cl_can_understand-e" class="hidden" name="cl_can_understand" value="E" wire:model.defer="cl_can_understand">
                                <label class="fa @error('cl_can_understand') !border-red-500 @enderror" for="radio-cl_can_understand-e"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cl_can_understand-g" class="hidden" name="cl_can_understand" value="G" wire:model.defer="cl_can_understand">
                                <label class="fa @error('cl_can_understand') !border-red-500 @enderror" for="radio-cl_can_understand-g"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cl_can_understand-a" class="hidden" name="cl_can_understand" value="A" wire:model.defer="cl_can_understand">
                                <label class="fa @error('cl_can_understand') !border-red-500 @enderror" for="radio-cl_can_understand-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cl_can_understand-n" class="hidden" name="cl_can_understand" value="N" wire:model.defer="cl_can_understand">
                                <label class="fa @error('cl_can_understand') !border-red-500 @enderror" for="radio-cl_can_understand-n"></label>
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
                                    Can manipulate Lego blocks to build
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cl_can_manipulate-e" class="hidden" name="cl_can_manipulate" value="E" wire:model.defer="cl_can_manipulate">
                                <label class="fa @error('cl_can_manipulate') !border-red-500 @enderror" for="radio-cl_can_manipulate-e"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cl_can_manipulate-g" class="hidden" name="cl_can_manipulate" value="G" wire:model.defer="cl_can_manipulate">
                                <label class="fa @error('cl_can_manipulate') !border-red-500 @enderror" for="radio-cl_can_manipulate-g"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cl_can_manipulate-a" class="hidden" name="cl_can_manipulate" value="A" wire:model.defer="cl_can_manipulate">
                                <label class="fa @error('cl_can_manipulate') !border-red-500 @enderror" for="radio-cl_can_manipulate-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-cl_can_manipulate-n" class="hidden" name="cl_can_manipulate" value="N" wire:model.defer="cl_can_manipulate">
                                <label class="fa @error('cl_can_manipulate') !border-red-500 @enderror" for="radio-cl_can_manipulate-n"></label>
                            </div>
                        </td>
                    </tr>




                    <!-- D music, art, creativity -->

                    <tr class="shadow-sm bg-slate-100 dark:bg-slate-800 border border-slate-200 border-t-2 border-y-gray-900   dark:border-slate-500">
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300">
                            <div class="uppercase">
                                <span>(D)</span>
                            </div>
                        </th>

                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 " style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span> Music, Art, Creativity</span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 " style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>E</span>
                            </div>
                        </th>

                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 " style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>G </span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 " style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>A</span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 " style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>N</span>
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
                        <td class=" px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    Ability to sing
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-mac_sing-e" class="hidden" name="mac_sing" value="E" wire:model.defer="mac_sing">
                                <label class="fa @error('mac_sing') !border-red-500 @enderror" for="radio-mac_sing-e"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-mac_sing-g" class="hidden" name="mac_sing" value="G" wire:model.defer="mac_sing">
                                <label class="fa @error('mac_sing') !border-red-500 @enderror" for="radio-mac_sing-g"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-mac_sing-a" class="hidden" name="mac_sing" value="A" wire:model.defer="mac_sing">
                                <label class="fa @error('mac_sing') !border-red-500 @enderror" for="radio-mac_sing-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-mac_sing-n" class="hidden" name="mac_sing" value="N" wire:model.defer="mac_sing">
                                <label class="fa @error('mac_sing') !border-red-500 @enderror" for="radio-mac_sing-n"></label>
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
                                    Ability to dance
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-mac_dance-e" class="hidden" name="mac_dance" value="E" wire:model.defer="mac_dance">
                                <label class="fa @error('mac_dance') !border-red-500 @enderror" for="radio-mac_dance-e"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-mac_dance-g" class="hidden" name="mac_dance" value="G" wire:model.defer="mac_dance">
                                <label class="fa @error('mac_dance') !border-red-500 @enderror" for="radio-mac_dance-g"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-mac_dance-a" class="hidden" name="mac_dance" value="A" wire:model.defer="mac_dance">
                                <label class="fa @error('mac_dance') !border-red-500 @enderror" for="radio-mac_dance-a"></label>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="radioBtn">
                                <input type="radio" id="radio-mac_dance-n" class="hidden" name="mac_dance" value="N" wire:model.defer="mac_dance">
                                <label class="fa @error('mac_dance') !border-red-500 @enderror" for="radio-mac_dance-n"></label>
                            </div>
                        </td>
                    </tr>



                    <tr class="shadow-sm bg-slate-100 dark:bg-slate-800 border border-slate-200 border-t-2 border-y-gray-900   dark:border-slate-500">
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300">
                            <div class="uppercase">
                                <span>(E)</span>
                            </div>
                        </th>

                        <th colspan="5" class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 " style="width: max-content;  cursor:pointer;">
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
                                <x-native-select placeholder="Select Neatness" :options=" [['value' => 'very neat','name' => 'Very Neat'],['value' => 'neat','name' => 'Neat'],['value' => 'quite neat','name' => 'Quite Neat'],]" option-label="name" option-value="value" wire:model.defer="neatness" required />
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

                                <x-native-select placeholder="Select Conduct" :options=" [['value' => 'sociable','name' => 'sociable'],['value' => 'firendly','name' => 'firendly'],['value' => 'respectful','name' => 'respectful'],['value' => 'helpful','name' => 'helpful'],['value' => 'responsible','name' => 'responsible'],['value' => 'appreciative','name' => 'appreciative'],['value' => 'cooperative','name' => 'cooperative'],]" option-label="name" option-value="value" wire:model.defer="conduct" class="capitalize" required />
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <div class="flex items-center justify-between mt-4 space-x-5">
                <x-button blue wire:click.prevent="save" spinner="save" :label="__('Save and Continue later')" class="w-1/2 uppercase font-bold" />

                <x-button rose type="submit" spinner="submit" :label="__('Save and Submit')" class="w-1/2 uppercase font-bold" />
            </div>
        </div>
    </form>
</div>