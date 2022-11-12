<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Grade;
use App\Models\GradeSystem;
use App\Models\Staff;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('staff.grade.index');
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
    public function show($id)
    {
        $staff_id = Auth::user()->staff->id;
        $term = session()->get('CurrTerm');
        $gradesystem = GradeSystem::where('term_id', $term->id)->where('subject_id', $id)->where('staff_id', $staff_id)->first();
        dd($gradesystem);
        return view('staff.grades.class', compact('gradesystem'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function class_subject($class_id, $subject_id)
    {
        $staff_id = Auth::user()->staff->id;
        $term = session()->get('CurrTerm');
        $classes = Classes::findOrFail($class_id);
        $subject = Subject::findOrFail($subject_id);

        $gradesystem = GradeSystem::where('term_id', $term->id)
            ->where('subject_id', $subject->id)
            ->where('staff_id', $staff_id)
            ->where('class_id', $classes->id)
            ->first();

        // TODO: change this soon
        if ($gradesystem) {
            foreach ($classes->students as  $student) {
                $check = Grade::where('grade_id', $gradesystem->id)->where('student_id', $student->id)->first();
                if (!$check) {
                    Grade::create([
                        'grade_id' => $gradesystem->id,
                        'student_id' => $student->id,
                    ]);
                }
            }
        }

        return view('staff.grade.subject_class', compact('gradesystem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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