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

        if(in_array($params[3], config('app.allowed_languages'))){
            app()->setLocale($params[3]);
        }
        else{
             return redirect()->to(env('app.url') . '/' . app()->getLocale());
        }

        // if ($request->has('setLang') && in_array($request->get('setLang'), config('app.allowed_languages'))) {
        //     app()->setLocale($request->get('setLang'));
        //     return redirect()->to(env('app.url') . '/' . $request->get('setLang'));
        // }

        // if (!isset($params[3]))
        //     return redirect()->to(env('app.url') . '/' . app()->getLocale());
        // else
             return $next($request);
    }
}
