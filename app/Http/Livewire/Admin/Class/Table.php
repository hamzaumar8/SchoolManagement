<?php

namespace App\Http\Livewire\Admin\Class;

use App\Models\Classes;
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
            // Footer::make()
            //     ->showPerPage()
            //     ->showRecordCount(),
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
     * @return Builder<\App\Models\Classes>
     */
    public function datasource(): Builder
    {
        return Classes::query();
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
        return [
            'students',
            'subjects'
        ];
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
            ->addColumn('name')
            ->addColumn('house_name')
            ->addColumn('class_type')
            ->addColumn('campus')
            ->addColumn('no_of_student', fn (Classes $model) => $model->students->count())
            ->addColumn('no_of_subject', fn (Classes $model) => $model->subjects->count());
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
            // Column::make('ID', 'id')
            //     ->makeInputRange(),

            Column::make('CLASS NAME', 'name')
                ->searchable()
                ->sortable(),

            Column::make('HOUSE NAME', 'house_name')
                ->searchable()
                ->sortable(),

            Column::make('CAMPUS', 'campus')
                ->searchable()
                ->sortable(),

            Column::make('NO. OF STUDENTS', 'no_of_student', 'students.count')
                // ->searchable()
                ->sortable(),

            Column::make('NO. OF SUBJECTS', 'no_of_subject', 'students.count')
                // ->searchable()
                ->sortable(),

            // Column::make('CREATED AT', 'created_at_formatted', 'created_at')
            //     ->searchable()
            //     ->sortable(),



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
     * PowerGrid Classes Action Buttons.
     *
     * @return array<int, Button>
     */


    public function actions(): array
    {
        return [
            Button::make('details', 'View')
                ->class('px-4 py-2 text-xs font-bold uppercase cursor-pointer outline-none inline-flex justify-center items-center group transition-all ease-in duration-150 focus:ring-2 focus:ring-offset-2 hover:shadow-sm rounded-md gap-x-2 ring-yellow-500 text-yellow-500 border border-yellow-500 hover:bg-yellow-50')
                ->route('classes.show', ['class' => 'id']),

            Button::make('add-subject', 'Add Subjects')
                ->class('px-4 py-2 text-xs font-bold uppercase cursor-pointer outline-none inline-flex justify-center items-center group transition-all ease-in duration-150 focus:ring-2 focus:ring-offset-2 hover:shadow-sm rounded-md gap-x-2 ring-green-500 text-green-500 border border-green-500 hover:bg-green-50')
                ->route('classes.add-subject', ['class' => 'id']),

            Button::make('edit', 'Edit')
                ->class('px-4 py-2 text-xs font-bold uppercase cursor-pointer outline-none inline-flex justify-center items-center group transition-all ease-in duration-150 focus:ring-2 focus:ring-offset-2 hover:shadow-sm rounded-md gap-x-2 ring-blue-500 text-blue-500 border border-blue-500 hover:bg-blue-50')
                ->openModal('admin.classes.edit-action', [
                    'classId' => 'id',
                    'name' => 'name',
                    'house_name' => 'house_name',
                    'class_type' => 'class_type',
                    'campus' => 'campus',
                ]),
            Button::make('destroy', 'Delete')
                ->class('px-4 py-2 text-xs font-bold uppercase cursor-pointer outline-none inline-flex justify-center items-center group transition-all ease-in duration-150 focus:ring-2 focus:ring-offset-2 hover:shadow-sm rounded-md gap-x-2 ring-red-500 text-red-500 border border-red-500 hover:bg-red-500')
                ->openModal('admin.classes.delete-action', [
                    'classId' => 'id',
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
     * PowerGrid Classes Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($classes) => $classes->id === 1)
                ->hide(),
        ];
    }
    */
}