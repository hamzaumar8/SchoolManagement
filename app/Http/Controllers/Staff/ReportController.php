<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Student;
use App\Models\Term;
use App\Models\TerminalReport;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CurrTerm = session()->get('CurrTerm') ? session()->get('CurrTerm') : null;
        $term = $CurrTerm ? Term::find($CurrTerm->id) : null;
        return view('staff.report.index', compact('term'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($term_id, $class_id, $student_id)
    {
        $student =  Student::findOrFail($student_id);
        $term =  Term::findOrFail($term_id);
        $class =  Classes::findOrFail($class_id);

        $report = TerminalReport::where('student_id', $student->id)->where('term_id',  $term->id)->where('class_id', $class->id)->first();
        $check = Classes::where('name', 'like', '%Kindergarten two%')->orWhere('name', 'like', '%kindergarten 2%')->first();

        return view('staff.report.show', compact('report', 'term', 'student', 'check'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function class($class_id, $class_name)
    {
        $CurrTerm = session()->get('CurrTerm') ? session()->get('CurrTerm') : null;
        $term = $CurrTerm ? Term::find($CurrTerm->id) : null;
        $class = Classes::findOrFail($class_id);
        return view('staff.report.class', compact('class', 'term'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}