<?php

namespace App\Http\Livewire\Admin\Students;

use App\Models\Classes;
use App\Models\Student;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class Table extends PowerGridComponent
{
    use ActionButton;

    //Table sort field
    public string $sortField = 'students.id';
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
     * @return Builder<\App\Models\Student>
     */
    public function datasource(): Builder
    {
        return Student::query()
            ->join('classes', function ($classes) {
                $classes->on('students.class_id', '=', 'classes.id');
            })->select('students.*', 'classes.name as class_name');
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
            'class' => [
                'name'
            ]
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
            ->addColumn('addmission_number')
            ->addColumn('index_number')
            ->addColumn('first_name')
            ->addColumn('surname')
            ->addColumn('other_name')
            ->addColumn('gender')
            ->addColumn('birthdate_formatted', fn (Student $model) => Carbon::parse($model->birthdate)->format('d/m/Y'))

            // CLASS
            ->addColumn('class_id', fn (Student $student) => $student->class_id)
            ->addColumn('clas_name', fn (Student $student) => $student->class->name)
            ->addColumn('class_type')

            ->addColumn('campus')
            ->addColumn('created_at_formatted', fn (Student $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'))
            ->addColumn('updated_at_formatted', fn (Student $model) => Carbon::parse($model->updated_at)->format('d/m/Y H:i:s'));
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

            Column::make('ADDMISSION NUMBER', 'addmission_number')
                ->sortable()
                ->searchable(),
            // ->makeInputText(),

            Column::make('INDEX NUMBER', 'index_number')
                ->sortable()
                ->searchable(),
            // ->makeInputText(),

            Column::make('FIRST NAME', 'first_name')
                ->sortable()
                ->searchable(),
            // ->makeInputText(),

            Column::make('SURNAME', 'surname')
                ->sortable()
                ->searchable(),
            // ->makeInputText(),

            Column::make('OTHER NAME', 'other_name')
                ->sortable()
                ->searchable(),
            // ->makeInputText(),

            Column::make('GENDER', 'gender')
                ->sortable()
                ->searchable(),
            // ->makeInputText(),

            Column::make('BIRTHDATE', 'birthdate_formatted', 'birthdate')
                ->searchable()
                ->sortable(),
            // ->makeInputDatePicker(),

            Column::make('CLASS ', 'class_name', 'classes.name')
                ->sortable()
                ->searchable(),
            // ->placeholder('Slect Class')
            // ->makeInputMultiSelect(Classes::all(), 'name', 'class_id'),

            Column::make('CLASS TYPE', 'class_type')
                ->sortable()
                ->searchable(),
            // ->makeInputText(),

            Column::make('CAMPUS', 'campus')
                ->sortable()
                ->searchable(),
            // ->makeInputText(),

            Column::make('CREATED AT', 'created_at_formatted', 'created_at')
                ->searchable()
                ->sortable(),
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
     * PowerGrid Student Action Buttons.
     *
     * @return array<int, Button>
     */


    public function actions(): array
    {
        return [
            // Button::make('edit', 'Edit')
            //     ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
            //     ->route('student.edit', ['student' => 'id']),

            Button::make('details', 'View')
                ->class('px-4 py-2 bg-amber-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase  cursor-pointer')
                ->route('students.show', ['student' => 'id']),
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
     * PowerGrid Student Action Rules.
     *
     * @return array<int, RuleActions>
     */


    public function actionRules(): array
    {
        return [

            //Hide button edit for ID 1
            // Rule::button('edit')
            //     ->when(fn($student) => $student->id === 1)
            //     ->hide(),

            Rule::rows()
                ->when(fn ($student) => $student->campus === 'north')
                ->setAttribute('class', 'bg-yellow-50 hover:bg-yellow-100')
        ];
    }
}