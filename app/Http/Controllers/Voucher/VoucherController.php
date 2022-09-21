<?php

namespace App\Http\Controllers\Voucher;

use Session;
use App\Http\Controllers\Controller;
use App\Models\Addmission;
use App\Models\Voucher;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function index()
    {
        return view('voucher.index');
    }

    public function submitted($addmission_number)
    {
        $addmission = Addmission::where('addmission_number', $addmission_number)->first();
        if (!$addmission) {
            abort(404);
        }
        return view('voucher.submit', compact('addmission'));
    }


    public function create()
    {
        if (session()->get('VoucherUser')) {
            return redirect()->route('voucher.index');
        }
        return view('voucher.auth');
    }


    public function store(Request $request)
    {
        $request->validate([
            'addmission_number' => ['required', 'string'],
            'token' => ['required', 'string'],
        ]);

        $user = Voucher::where('addmission_number', $request->addmission_number)->Where('token', $request->token)->first();

        if (!$user) {
            throw ValidationException::withMessages([
                'addmission_number' => trans('auth.failed'),
            ]);
        }

        session(['VoucherUser' => $user]);

        return redirect()->route('voucher.index');
    }

    public function destroy()
    {
        session()->flush();
        Session::flush();
        return redirect()->route('voucher.auth');
    }
}