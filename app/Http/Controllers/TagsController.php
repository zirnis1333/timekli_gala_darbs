<?php

namespace App\Http\Controllers;

use App\Raksta_tagi;
use App\Tags;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function create()
    {
        if (\Auth::check() && \Auth::user()->isAdmin() )
        {
            $tags= new Tags();
            return view('tags_create', array('title' =>   trans('custom.tag'), 'tags' =>$tags));
        }
        else
        {
            return redirect('/');
        }

    }
    public function edit($id)
    {
        if (\Auth::check() && \Auth::user()->isAdmin() )
        {
            return view('tags_create', array('title' => trans('custom.tag'), 'tags' => Tags::find($id)));
        }
        else
        {
            return redirect('/');
        }
    }
    public function store(Request $request)
    {
        if (\Auth::check() && \Auth::user()->isAdmin() )
        {
            $data = $request->all();
            $rules = $rules = array(
                'tags' => 'required|min:3',
            );

            $this->validate($request, $rules);

            $tags = new Tags();
            $tags->tags=$data['tags'];
            $tags->save();
            return redirect()->action('TagsController@listed')->withMessage('Veismīgi pievienots jauns tags!');
        }
        else
        {
            return redirect('/');
        }


    }
    public function update(Request $request)
    {
        if (\Auth::check() && \Auth::user()->isAdmin() )
        {
            $data = $request->all();
            $rules = $rules = array(
                'tags' => 'required|min:3',
            );


            $this->validate($request, $rules);

            $tags = Tags::find($data['id']);

            $tags->tags = $data['tags'];
            $tags->save();
            return redirect()->action('TagsController@listed')->withMessage(trans('custom.tagChanged'));
        }
        else
        {
            return redirect('/');
        }
    }
    public function listed()
    {
        if (\Auth::check() && \Auth::user()->isAdmin() )
        {
            return view('tags_listed', array('title' => trans('custom.tags'), 'tagi' =>Tags::all()->load("raksti")));

        }
        else
        {
            return redirect('/');
        }
    }



}
