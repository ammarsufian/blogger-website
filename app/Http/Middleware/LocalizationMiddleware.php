<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LocalizationMiddleware
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
        $params = explode('/', $request->fullUrl());

        if (isset($params[3]) && in_array($params[3], config('app.allowed_languages'))) {
            app()->setLocale($params[3]);
        }
        else {
            if (isset($params[3]) && $params[3] == 'livewire')
                return $next($request);
            return redirect()->to(env('app.url') . '/' . app()->getLocale());
        }
        return $next($request);
    }
}
