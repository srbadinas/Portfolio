<?php

namespace App\Http\Middleware;

use Closure;

use App\Viewer;

class ViewWebsite
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $view = new Viewer();

        $view->ip_address = trim(shell_exec("dig +short myip.opendns.com @resolver1.opendns.com"));
        $view->viewed_at = date('Y-m-d H:i:s');
        $view->save();


        return $next($request);
    }
}
