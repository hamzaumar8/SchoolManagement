<?php

namespace App\Http\Livewire\Admin\Voucher;

use App\Models\Voucher;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class Table extends PowerGridComponent
{
    use ActionButton;

    //Table sort field
    public string $sortField = 'vouchers.id';


    /*
    |--------------------------------------------------------------------------
    |  Event listeners
    |--------------------------------------------------------------------------
    | Add custom events to VouchersTable
    |
    */
    protected function getListeners(): array
    {
        return array_merge(
            parent::getListeners(),
            [
                'bulkDelete',
            ]
        );
    }

    /*
    |--------------------------------------------------------------------------
    |  Bulk delete button
    |--------------------------------------------------------------------------
    */
    public function bulkDelete(): void
    {
        $this->emit('openModal', 'admin.voucher.delete', [
            'voucherIds'                 => $this->checkboxValues,
            'confirmationTitle'       => 'Delete voucher',
            'confirmationDescription' => 'Are you sure you want to delete this voucher?',
        ]);
    }


    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */

    /**
     * PowerGrid datasource.
     *
     * @return Builder<\App\Models\Voucher>
     */
    public function datasource(): Builder
    {
        return Voucher::query();
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    */
    public function addColumns(): PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('id')
            ->addColumn('addmission_number')
            ->addColumn('addmission_number_formatted', fn (Voucher $model) => "<a href='" . route('vouchers.show', $model->id) . "' class='underline'>$model->addmission_number </a>")
            ->addColumn('token')
            ->addColumn('name')
            ->addColumn('phone')
            ->addColumn('campus')
            ->addColumn('created_at_formatted', fn (Voucher $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'));
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

    /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return [
            Column::make('ID', 'id'),

            Column::make('ADDMISSION NUMBER', 'addmission_number_formatted', 'addmission_number')
                ->sortable()
                ->searchable(),
            // ->makeInputText(),

            Column::make('TOKEN', 'token')
                ->sortable()
                ->searchable(),
            // ->makeInputText(),

            Column::make('NAME', 'name')
                ->sortable()
                ->searchable(),
            // ->makeInputText(),

            Column::make('PHONE', 'phone')
                ->sortable()
                ->searchable(),
            // ->makeInputText(),


            Column::make('CAMPUS', 'campus')
                ->searchable()
                // ->headerAttribute('', 'width: 100px;')
                // ->makeBooleanFilter('campus', 'north', 'south')
                ->sortable(),



            Column::make('CREATED AT', 'created_at_formatted', 'created_at')
                ->searchable()
                ->sortable(),

        ];
    }
    /*
    |--------------------------------------------------------------------------
    | Header Action Buttons
    |--------------------------------------------------------------------------
    */

    public function header(): array
    {
        return [
            Button::add('bulk-delete')
                ->caption(__('Bulk delete'))
                ->class('outline-none inline-flex justify-center items-center group transition-all ease-in duration-150 focus:ring-2 focus:ring-offset-2 hover:shadow-sm disabled:opacity-80 disabled:cursor-not-allowed rounded gap-x-2 text-sm px-4 py-2  ring-red-500 text-red-500 border border-red-500 hover:bg-red-50 dark:ring-offset-slate-800 dark:hover:bg-slate-700')
                ->emit('bulkDelete', [])
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

    /**
     * PowerGrid Voucher Action Buttons.
     *
     * @return array<int, Button>
     */


    public function actions(): array
    {
        return [
            //    Button::make('edit', 'Edit')
            //        ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
            //        ->route('voucher.edit', ['voucher' => 'id']),

            Button::make('destroy', 'Delete')
                ->class('px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase  cursor-pointer')
                ->openModal('admin.voucher.delete', [
                    'addmissionId'                  => 'id',
                    'confirmationTitle'       => 'Delete Addmission',
                    'confirmationDescription' => 'Are you sure you want to delete this addmission?',
                ]),
        ];
    }


    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

    /**
     * PowerGrid Voucher Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($voucher) => $voucher->id === 1)
                ->hide(),
        ];
    }
    */
}