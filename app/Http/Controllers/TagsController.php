<?php

namespace App\Http\Controllers;

use App\Raksta_tagi;
use App\Tags;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function create()
    {
        $tags= new Tags();
        return view('tags_create', array('title' =>   trans('custom.tag'), 'tags' =>$tags));
    }
    public function edit($id)
    {
        return view('tags_create', array('title' =>  trans('custom.tag'), 'tags' =>Tags::find($id)));
    }
    public function store(Request $request)
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
    public function update(Request $request)
    {
        $data = $request->all();
        $rules = $rules = array(
            'tags' => 'required|min:3',
        );


        $this->validate($request, $rules);

        $tags = Tags::find($data['id']);

        $tags->tags=$data['tags'];
        $tags->save();
        return redirect()->action('TagsController@listed')->withMessage( trans('custom.tagChanged'));

    }
    public function listed()
    {
        return view('tags_listed', array('title' => trans('custom.tags'), 'tagi' =>Tags::all()->load("raksti")));
    }



}
