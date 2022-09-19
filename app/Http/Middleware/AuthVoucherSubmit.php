<?php

namespace App\Http\Middleware;

use App\Models\Addmission;
use Closure;
use Illuminate\Http\Request;

class AuthVoucherSubmit
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
        if (session()->get('VoucherUser')) {
            $addmission_number = session()->get('VoucherUser')['addmission_number'];

            $addmission = Addmission::where('addmission_number', $addmission_number)->first();

            if ($addmission->status === 'submit') {
                return redirect()->route('voucher.submitted');
            }
            return $next($request);
        }
        session()->flush();
        return redirect()->route('voucher.auth');
    }
}