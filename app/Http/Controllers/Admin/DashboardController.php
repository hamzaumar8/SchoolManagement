<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Addmission;
use App\Models\Classes;
use App\Models\Staff;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::count();
        $addmissions = Addmission::count();
        $staffs = Staff::count();
        $classes = Classes::count();
        return view('dashboard', compact('students', 'addmissions', 'staffs', 'classes'));
    }
}