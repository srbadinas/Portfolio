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
