<?php

namespace App\Http\Middleware;


use Closure;
use Carbon\Carbon;

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
        $view->ip_address = getIPAddress();
        $check_viewer = Viewer::where('ip_address', $view->ip_address)->orderByDesc('id')->first();
        
        if ($check_viewer) {
            $valid_time = Carbon::parse($check_viewer->viewed_at);
            $valid_time->addMinutes(30);
            $current_date_time = Carbon::now('Asia/Singapore');
            if (strtotime($current_date_time) >= strtotime($valid_time)) {
                $arr_ip = geoip()->getLocation($view->ip_address);
                $view->location = $arr_ip->city . ", " . $arr_ip->country;
                $view->viewed_at = Carbon::now('Asia/Singapore');
                $view->save();
            }
        }
        else {
            $arr_ip = geoip()->getLocation($view->ip_address);
            $view->location = $arr_ip->city . ", " . $arr_ip->country;
            $view->viewed_at = Carbon::now('Asia/Singapore');
            $view->save();
        }
        
        

        return $next($request);
    }
}
