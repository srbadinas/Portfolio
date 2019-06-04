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

        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $view->ip_address = $_SERVER['HTTP_CLIENT_IP'];
        }
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $view->ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else if(isset($_SERVER['HTTP_X_FORWARDED'])) {
            $view->ip_address = $_SERVER['HTTP_X_FORWARDED'];
        }
        else if(isset($_SERVER['HTTP_FORWARDED_FOR'])) {
            $view->ip_address = $_SERVER['HTTP_FORWARDED_FOR'];
        }
        else if(isset($_SERVER['HTTP_FORWARDED'])) {
            $view->ip_address = $_SERVER['HTTP_FORWARDED'];
        }
        else if(isset($_SERVER['REMOTE_ADDR'])) {
            $view->ip_address = $_SERVER['REMOTE_ADDR'];
        }
        else {
            $view->ip_address = 'UNKNOWN'; 
        }

        $arr_ip = geoip()->getLocation($view->ip_address);
        $view->location = $arr_ip->city . ", " . $arr_ip->country;
        $view->viewed_at = date('Y-m-d H:i:s');
        $view->save();

        return $next($request);
    }
}
