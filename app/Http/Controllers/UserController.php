<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function setLocale($locale)
    {

        if(\Auth::check())
        {
            $user = User::find(\Auth::user()->id);

            $user->locale=$locale;
            $user->save();

        }
        else
        {

            Session::put('locale',$locale);
            app()->setLocale($locale);

        }

        return back();
    }
    public function sort($sort)
    {
        if(\Auth::check())
        {
            $user = User::find(\Auth::user()->id);
            if($sort=="asc")
            {
                $user->sort = 1;
            }
            else
            {
                $user->sort = 2;
            }

            $user->save();
        }
        return back();
    }
}
