<?php

namespace App\Http\Livewire;

use App\Models\Classes;
use App\Models\Student;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class StudentTable extends PowerGridComponent
{
    use ActionButton;
    //Table sort field
    public string $sortField = 'students.id';
    /*
    |--------------------------------------------------------------------------
    |  Event listeners
    |--------------------------------------------------------------------------
    | Add custom events to StudentTable
    |
    */
    protected function getListeners(): array
    {
        return array_merge(
            parent::getListeners(),
            [
                'edit-student' => 'editStudent',
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
        $this->emit('openModal', 'delete-student', [
            'studentIds'                 => $this->checkboxValues,
            'confirmationTitle'       => 'Delete student',
            'confirmationDescription' => 'Are you sure you want to delete this student?',
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    |  Edit Student button
    |--------------------------------------------------------------------------
    */
    public function editStudent(array $data)
    {
        return redirect()->route('students.edit', ['student' => $data['studentId']]);
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
     * @return Builder<\App\Models\Student>
     */
    public function datasource(): Builder
    {

        return Student::query()
            ->join('classes', function ($classes) {
                $classes->on('students.class_id', '=', 'classes.id');
            })
            ->select('students.*', 'classes.name as class_name');
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
            ->addColumn('last_name')
            ->addColumn('surname')
            ->addColumn('other_name')
            ->addColumn('gender')
            ->addColumn('birthdate_formatted', fn (Student $model) => Carbon::parse($model->birthdate)->format('d/m/Y'))
            ->addColumn('birthplace')
            ->addColumn('religion')
            ->addColumn('nationality')
            ->addColumn('home_town')
            ->addColumn('home_digital_address')
            ->addColumn('postal_address')
            ->addColumn('first_language')
            ->addColumn('previous_school')
            ->addColumn('email')
            ->addColumn('class_id', function (Student $student) {
                return $student->class_id;
            })
            ->addColumn('class_name', function (Student $student) {
                return $student->class->name;
            })
            ->addColumn('class_type')
            ->addColumn('term')
            ->addColumn('accomodation_type')
            ->addColumn('phone')
            ->addColumn('date_admitted_formatted', fn (Student $model) => Carbon::parse($model->date_admitted)->format('d/m/Y'))
            ->addColumn('picture')
            ->addColumn('hpa')
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
            Column::make('ID', 'id')
                ->makeInputRange(),

            Column::make('LAST NAME', 'last_name')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('SURNAME', 'surname')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('OTHER NAME', 'other_name')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('GENDER', 'gender')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('BIRTHDATE', 'birthdate_formatted', 'birthdate')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker(),

            Column::make('BIRTHPLACE', 'birthplace')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('RELIGION', 'religion')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('NATIONALITY', 'nationality')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('HOME TOWN', 'home_town')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('HOME DIGITAL ADDRESS', 'home_digital_address')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('POSTAL ADDRESS', 'postal_address')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('FIRST LANGUAGE', 'first_language')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('PREVIOUS SCHOOL', 'previous_school')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('EMAIL', 'email')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('CLASS', 'class_name', 'classes.name')
                ->makeInputMultiSelect(Classes::all(), 'name', 'class_id')
                ->sortable(),

            Column::make('CLASS TYPE', 'class_type')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('TERM', 'term')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('ACCOMODATION TYPE', 'accomodation_type')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('PHONE', 'phone')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('DATE ADMITTED', 'date_admitted_formatted', 'date_admitted')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker(),

            Column::make('HPA', 'hpa')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('CREATED AT', 'created_at_formatted', 'created_at')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker(),

            Column::make('UPDATED AT', 'updated_at_formatted', 'updated_at')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker(),

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
                ->class('cursor-pointer block bg-white-200 text-gray-700 border border-gray-300 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-600 dark:border-gray-500 dark:bg-gray-500 2xl:dark:placeholder-gray-300 dark:text-gray-200 dark:text-gray-300')
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
     * PowerGrid Student Action Buttons.
     *
     * @return array<int, Button>
     */


    public function actions(): array
    {
        return [
            Button::make('edit', 'Edit')
                ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
                ->emit('edit-student', [
                    'studentId' => 'id',
                    'custom' => __METHOD__
                ]),

            Button::make('destroy', 'Delete')
                ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
                ->openModal('delete-student', [
                    'studentId' => 'id',
                    'confirmationTitle' => 'Delete student',
                    'confirmationDescription' => 'Are you sure you want to delete this student?',
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