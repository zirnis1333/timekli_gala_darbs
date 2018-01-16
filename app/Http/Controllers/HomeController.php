<?php

namespace App\Http\Controllers;

use App\Mail\mails;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/');
    }
    public function admin()
    {
        return view('admin_list', array('title' => trans('custom.posts'), 'raksti' =>auth()->user()->raksti()->get()));
    }
    public function about()
    {
        return view('about');
    }
    public function mail()
        {
            $mail = new Mail();
        $mail->to(auth()->user()->email)->send(new mails());
        redirect()->back();
    }



}
