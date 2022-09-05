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

        $addmission_number = session()->get('VoucherUser')['addmission_number'];
        $token = session()->get('VoucherUser')['token'];
        $user = AddmissionGenerate::where('addmission_number', $addmission_number)->orWhere('token', $token)->first();

        if ($user) {
            return $next($request);
        }
        session()->flush();
        return redirect()->route('voucher.auth');
    }
}