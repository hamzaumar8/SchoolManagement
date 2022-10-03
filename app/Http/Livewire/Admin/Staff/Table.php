<?php

namespace App\Http\Livewire\Admin\Staff;

use App\Models\Staff;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class Table extends PowerGridComponent
{
    use ActionButton;

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
     * @return Builder<\App\Models\Staff>
     */
    public function datasource(): Builder
    {
        return Staff::query();
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
            ->addColumn('staff_number')
            ->addColumn('staff_type')
            ->addColumn('title')
            ->addColumn('full_name')
            ->addColumn('gender')
            ->addColumn('email')
            ->addColumn('phone1')
            ->addColumn('phone2')
            ->addColumn('postal_address')
            ->addColumn('residential_address')
            ->addColumn('birthdate_formatted', fn (Staff $model) => Carbon::parse($model->birthdate)->format('d/m/Y'))
            ->addColumn('nationality')
            ->addColumn('marital_status')
            ->addColumn('passport_picture')
            ->addColumn('created_at_formatted', fn (Staff $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'))
            ->addColumn('updated_at_formatted', fn (Staff $model) => Carbon::parse($model->updated_at)->format('d/m/Y H:i:s'));
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
            Column::make('STAFF NUMBER', 'staff_number')
                ->sortable()
                ->searchable(),
            // ->makeInputText(),

            Column::make('STAFF TYPE', 'staff_type')
                ->sortable()
                ->searchable(),
            // ->makeInputText(),

            Column::make('TITLE', 'title')
                ->sortable()
                ->searchable(),
            // ->makeInputText(),

            Column::make('FULL NAME', 'full_name')
                ->sortable()
                ->searchable(),
            // ->makeInputText(),

            Column::make('GENDER', 'gender')
                ->sortable()
                ->searchable(),
            // ->makeInputText(),

            Column::make('EMAIL', 'email')
                ->sortable()
                ->searchable(),
            // ->makeInputText(),

            Column::make('PHONE1', 'phone1')
                ->sortable()
                ->searchable(),
            // ->makeInputText(),

            // Column::make('PHONE2', 'phone2')
            //     ->sortable()
            //     ->searchable(),
            // // ->makeInputText(),

            // Column::make('RESIDENTIAL ADDRESS', 'residential_address')
            //     ->sortable()
            //     ->searchable(),
            // // ->makeInputText(),

            // Column::make('BIRTHDATE', 'birthdate_formatted', 'birthdate')
            //     ->sortable()
            //     ->searchable(),
            // // ->makeInputDatePicker(),

            // Column::make('MARITAL STATUS', 'marital_status')
            //     ->sortable()
            //     ->searchable(),
            // // ->makeInputText(),

            // Column::make('PASSPORT PICTURE', 'passport_picture'),
            // ->searchable(),

            Column::make('ADDED AT', 'created_at_formatted', 'created_at')
                ->sortable()
                ->searchable(),
            // ->makeInputDatePicker(),

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
     * PowerGrid Staff Action Buttons.
     *
     * @return array<int, Button>
     */


    public function actions(): array
    {
        return [
            Button::make('details', 'Details')
                ->class('px-4 py-2 text-xs font-bold uppercase cursor-pointer outline-none inline-flex justify-center items-center group transition-all ease-in duration-150 focus:ring-2 focus:ring-offset-2 hover:shadow-sm rounded-md gap-x-2 ring-yellow-500 text-yellow-500 border border-yellow-500 hover:bg-yellow-50')
                ->route('staffs.show', ['staff' => 'id']),
            //        Button::make('edit', 'Edit')
            //            ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
            //            ->route('staff.edit', ['staff' => 'id']),

            //        Button::make('destroy', 'Delete')
            //            ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
            //            ->route('staff.destroy', ['staff' => 'id'])
            //            ->method('delete')
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
     * PowerGrid Staff Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($staff) => $staff->id === 1)
                ->hide(),
        ];
    }
    */
}