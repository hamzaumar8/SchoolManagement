<?php

use App\Models\Classes;
use App\Models\ClassName;
use App\Models\Nationality;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Database\Eloquent\Builder;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::name('api.')->group(function () {
    // classe Api
    Route::get('classes', function (Request $request) {
        return Classes::query()
            ->select('id', 'name', 'house_name')
            ->orderBy('id')
            ->when(
                $request->search,
                fn (Builder $query) => $query
                    ->where('name', 'like', "%{$request->search}%")
                    ->orWhere('house_name', 'like', "%{$request->search}%")
            )
            ->when(
                $request->exists('selected'),
                fn (Builder $query) => $query->whereIn('id', $request->input('selected', [])),
                // fn (Builder $query) => $query->limit(10)
            )
            ->get();
    })->name('classes.index');

    // nationality Api
    Route::get('nationality', function (Request $request) {
        return Nationality::query()
            ->select('id', 'name')
            ->orderBy('id')
            ->when(
                $request->search,
                fn (Builder $query) => $query
                    ->where('name', 'like', "%{$request->search}%")
            )
            ->when(
                $request->exists('selected'),
                fn (Builder $query) => $query->whereIn('id', $request->input('selected', [])),
                fn (Builder $query) => $query->limit(20)
            )
            ->get();
    })->name('nationality.index');



    // Staff Api
    Route::get('staffs', function (Request $request) {
        return Staff::query()
            ->where('staff_type', '!=', 'non-teaching')
            ->select('id', 'full_name',)
            ->orderBy('id')
            ->when(
                $request->search,
                fn (Builder $query) => $query
                    ->where('full_name', 'like', "%{$request->search}%")
            )
            ->when(
                $request->exists('selected'),
                fn (Builder $query) => $query->whereIn('id', $request->input('selected', [])),
                fn (Builder $query) => $query->limit(10)
            )
            ->get();
    })->name('staffs');

    // class Names Api
    // Staff Api
    Route::get('classnames', function (Request $request) {
        return ClassName::query()
            ->select('id', 'name',)
            ->orderBy('id')
            ->when(
                $request->search,
                fn (Builder $query) => $query
                    ->where('name', 'like', "%{$request->search}%")
            )
            ->when(
                $request->exists('selected'),
                fn (Builder $query) => $query->whereIn('id', $request->input('selected', [])),
                fn (Builder $query) => $query->limit(10)
            )
            ->get();
    })->name('classnames.index');
});