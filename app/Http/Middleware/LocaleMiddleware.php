<?php namespace App\Http\Middleware;

use Closure, Session, Auth;

class LocaleMiddleware {


    public function handle($request, Closure $next)
    {
        $langArr = array("en", "lv");
        if(\Auth::user()){

            app()->setLocale(\Auth::user()->locale);

        }elseif(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
        {
            $languages = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
            if (in_array($languages[0], $langArr))
            {
                app()->setLocale($languages[0]);



            }
        }

        elseif($locale = Session::has('locale'))
        {

            app()->setLocale($locale);

        }



        return $next($request);
    }

}