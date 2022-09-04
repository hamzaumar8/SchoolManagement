<?php

namespace App\Http\Controllers;

use App\Models\AddmissionGenerate;
use Illuminate\Http\Request;

class AddmissionGenerateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.addmissiongenerate.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addmissiongenerate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AddmissionGenerate  $addmissionGenerate
     * @return \Illuminate\Http\Response
     */
    public function show(AddmissionGenerate $addmissionGenerate)
    {
        // $addmissionGenerate = $addmissionGenerate::findOrFail()
        return view('admin.addmissiongenerate.show', compact('addmissionGenerate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AddmissionGenerate  $addmissionGenerate
     * @return \Illuminate\Http\Response
     */
    public function edit(AddmissionGenerate $addmissionGenerate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AddmissionGenerate  $addmissionGenerate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddmissionGenerate $addmissionGenerate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AddmissionGenerate  $addmissionGenerate
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddmissionGenerate $addmissionGenerate)
    {
        //
    }
}