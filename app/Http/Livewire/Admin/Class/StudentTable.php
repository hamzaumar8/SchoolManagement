<?php

namespace App\Http\Livewire\Admin\Class;

use App\Models\Student;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class StudentTable extends PowerGridComponent
{
    use ActionButton;

    public $classId;
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
        return Student::query()->where('class_id', $this->classId);
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
            ->addColumn('passport_picture', function (Student $model) {
                $path = asset("assets/img/addmission/" . $model->addmission->passport_picture);
                return '<img class="h-20" src="' . $path . '" />';
            })
            ->addColumn('index_number')
            ->addColumn('first_name')
            ->addColumn('surname')
            ->addColumn('other_name')
            ->addColumn('fullname', fn (Student $model) => $model->fullname())
            ->addColumn('gender')
            ->addColumn('birthdate_formatted', fn (Student $model) => Carbon::parse($model->birthdate)->format('d/m/Y'))
            ->addColumn('class_type')
            ->addColumn('campus');
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
            // Column::make('', 'passport_picture'),

            Column::make('INDEX NUMBER', 'index_number')
                ->sortable()
                ->searchable(),
            // ->makeInputText(),

            Column::make('FULL NAME', 'fullname')
                ->sortable()
                ->searchable(),

            Column::make('GENDER', 'gender')
                ->sortable()
                ->searchable(),
            // ->makeInputText(),

            Column::make('CLASS TYPE', 'class_type')
                ->sortable()
                ->searchable(),
            // ->makeInputText(),

            Column::make('CAMPUS', 'campus')
                ->sortable()
                ->searchable(),
            // ->makeInputText(),

            Column::make('BIRTHDATE', 'birthdate_formatted', 'birthdate')
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
            //    Button::make('edit', 'Edit')
            //        ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
            //        ->route('student.edit', ['student' => 'id']),

            //    Button::make('destroy', 'Delete')
            //        ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
            //        ->route('student.destroy', ['student' => 'id'])
            //        ->method('delete')

            Button::make('details', 'View')
                ->class('px-4 py-2 text-xs font-bold uppercase cursor-pointer outline-none inline-flex justify-center items-center group transition-all ease-in duration-150 focus:ring-2 focus:ring-offset-2 hover:shadow-sm rounded-md gap-x-2 ring-red-500 text-red-500 border border-red-500 hover:bg-red-50')
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

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($student) => $student->id === 1)
                ->hide(),
        ];
    }
    */
}