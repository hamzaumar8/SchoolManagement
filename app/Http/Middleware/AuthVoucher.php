<?php

namespace App\Http\Middleware;

use App\Models\AddmissionGenerate;
use Closure;
use Illuminate\Http\Request;

class AuthVoucher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $addmission_number = session()->get('addmission_number');
        $token = session()->get('token');
        $user = AddmissionGenerate::where('addmission_number', $addmission_number)->orWhere('token', $token)->first();

        if ($user) {
            session(['VoucherUser' => $user]);
            return $next($request);
        }
        session()->flush();
        return redirect()->route('voucher.auth');
    }
}