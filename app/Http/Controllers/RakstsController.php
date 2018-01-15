<?php

namespace App\Http\Controllers;

use App\raksts;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RakstsController extends Controller
{
    /**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
    public function index()
    {
        return view('raksts_preview', array('title' => 'Raksti', 'raksti' => Raksts::all()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('raksts_create', array('title' => 'Raksti'));
    }
    public function edit($id)
    {
        return view('raksts_edit', array('title' => 'Raksti', 'raksts' =>Raksts::find($id)));
    }
    public function userRaksti()
    {

        return view('raksts_list', array('title' => 'Raksti', 'raksti' =>auth()->user()->raksti()->get()));
    }
    public function show($id)
    {

        if (Raksts::find($id)->akceptets || \Auth::user()->isAdmin())
        {

            return view('raksts_view', array('title' => 'Raksts', 'raksts' =>Raksts::find($id)));

          //  else
          //  {
             //  return redirect()->home();

          //  }
       }
       else if(Raksts::find($id)->user_id==User::find(\Auth::user()->id)->id)
       {
           return redirect('/raksts/edit/'.$id);
           //return redirect()->route();

          //  return view('raksts_edit', array('title' => 'Raksta Editors', 'raksts' =>Raksts::find($id)));
       }



    }


}
