<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CurrTerm = session()->get('CurrTerm') ? session()->get('CurrTerm') : null;
        $staff = Staff::where('user_id', Auth::user()->id)->first();
        return view('staff.dashboard', compact('staff', 'CurrTerm'));
    }
}