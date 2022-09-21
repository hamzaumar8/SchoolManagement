<?php

namespace App\Http\Livewire;

use App\Models\Addmission;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class AddmissionTable extends PowerGridComponent
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
     * @return Builder<\App\Models\Addmission>
     */
    public function datasource(): Builder
    {
        return Addmission::query()->where('status', 'submit')->orWhere('status', 'addmitted')->orderBy('created_at', 'DESC');
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
            ->addColumn('first_name')
            ->addColumn('surname')
            ->addColumn('other_name')
            ->addColumn('gender')
            ->addColumn('birthdate_formatted', fn (Addmission $model) => Carbon::parse($model->birthdate)->format('d/m/Y'))
            ->addColumn('birthplace')
            ->addColumn('religion')
            ->addColumn('nationality')
            ->addColumn('home_town')
            ->addColumn('home_digital_address')
            ->addColumn('postal_address')
            ->addColumn('first_language')
            ->addColumn('previous_school')
            ->addColumn('created_at_formatted', fn (Addmission $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'))
            ->addColumn('updated_at_formatted', fn (Addmission $model) => Carbon::parse($model->updated_at)->format('d/m/Y H:i:s'));
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

            Column::make('ADDMISSION NUMBER', 'addmission_number')
                ->sortable()
                ->searchable(),
            Column::make('LAST NAME', 'first_name')
                ->sortable()
                ->searchable(),

            Column::make('SURNAME', 'surname')
                ->sortable()
                ->searchable(),

            Column::make('OTHER NAME', 'other_name')
                ->sortable()
                ->searchable(),

            Column::make('GENDER', 'gender')
                ->sortable()
                ->searchable(),

            Column::make('BIRTHDATE', 'birthdate_formatted', 'birthdate')
                ->searchable()
                ->sortable(),

            Column::make('BIRTHPLACE', 'birthplace')
                ->sortable()
                ->searchable(),

            Column::make('RELIGION', 'religion')
                ->sortable()
                ->searchable(),

            Column::make('NATIONALITY', 'nationality')
                ->sortable()
                ->searchable(),

            Column::make('FIRST LANGUAGE', 'first_language')
                ->sortable()
                ->searchable(),

            Column::make('PREVIOUS SCHOOL', 'previous_school')
                ->sortable()
                ->searchable(),

            Column::make('CREATED AT', 'created_at_formatted', 'created_at')
                ->searchable()
                ->sortable(),

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
     * PowerGrid Addmission Action Buttons.
     *
     * @return array<int, Button>
     */


    public function actions(): array
    {
        return [
            Button::make('addmitted', 'Addmit')
                ->class('px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase  cursor-pointer')
                ->route('addmissions.edit', ['addmission' => 'id']),

            Button::make('edit', 'Edit')
                ->class('px-4 py-2 bg-indigo-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase  cursor-pointer')
                ->route('addmissions.edit', ['addmission' => 'id']),

            Button::make('destroy', 'Delete')
                ->class('px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase  cursor-pointer')
                ->route('addmissions.destroy', ['addmission' => 'id'])
                ->method('delete')
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
     * PowerGrid Addmission Action Rules.
     *
     * @return array<int, RuleActions>
     */


    public function actionRules(): array
    {
        return [

            Rule::button('addmitted')
                ->when(fn ($addmission) => $addmission->status === 'addmitted')
                ->hide(),


            Rule::rows()
                ->when(fn ($addmission) => $addmission->status === 'submit')
                ->setAttribute('class', 'bg-yellow-50 hover:bg-yellow-100')
        ];
    }
}