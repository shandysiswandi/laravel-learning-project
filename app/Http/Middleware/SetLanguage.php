<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLanguage
{
    public function handle($request, Closure $next)
    {
        if (!in_array($request->language, ['en', 'id'])) {
            App::setLocale('en');
            return redirect(changeLanguage('en'));
        }
        App::setLocale($request->language);

        return $next($request);
    }
}
