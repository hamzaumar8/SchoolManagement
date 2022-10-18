<?php

namespace App\Http\Middleware;

use App\Models\Term;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class TermSet
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

        $term = Term::where('end_date', '>=', now()->format('Y-m-d'))->orderBy('created_at', 'DESC')->first();
        if (!$term) {
            return back();
        }
        session(['CurrTerm' => $term]);
        return $next($request);
    }
}