<?php

namespace App\Http\Middleware;

use App\Models\Term;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        $currDate = now()->format('Y-m-d');
        $term = Term::orderBy('created_at', 'DESC')->first();
        session(['Term' => $term]);
        if ($currDate <= $term->end_date) {
            // dd($term->end_date, $currDate);
            session(['CurrTerm' => $term]);
        }
        if (!$request->expectsJson()) {
            return route('login');
        }
    }
}