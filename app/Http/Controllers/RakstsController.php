<?php

namespace App\Http\Controllers;

use App\Mail\mails;
use App\Raksta_tagi;
use App\raksts;
use App\Tags;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class RakstsController extends Controller
{
    /**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
    public function index()
    {
        $raksti=Raksts::all()->where('akceptets','=',true)->load("tagi");

        foreach ($raksti as $raksts)
        {

            $raksts->tagi->load('tags');
          //  foreach ($raksts->tagi as $tags)
          //  {
            //    dd($tags->tags->tags);
         //   }

        }


        return view('raksts_preview', array('title' =>  trans('custom.posts'), 'raksti' => $raksti));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(\Auth::check())
        {
            $raksts=new Raksts();
            return view('raksts_edit', array('title' =>  trans('custom.post'), 'raksts' =>$raksts,'tagi' =>'','create' =>true));
        }
        else
        {
            return redirect()->guest('login');
            return $next($request);
        }


    }
    public function edit($id)
    {


        $tagi=' ';
        $raksts=Raksts::find($id)->load("tagi");
        $raksts->tagi->load('tags');

          foreach ($raksts->tagi as $tags)
          {
              $tagi=$tagi.$tags->tags->tags.',';
          }




        return view('raksts_edit', array('title' => trans('custom.post'), 'raksts' =>Raksts::find($id),'tagi' =>$tagi,'create' =>false));
    }
    public function userRaksti()
    {

        return view('raksts_list', array('title' =>  trans('custom.posts'), 'raksti' =>auth()->user()->raksti()->get()));
    }
    public function show($id)
    {

        if (Raksts::find($id)->akceptets )
        {
            $raksts=Raksts::find($id)->load("tagi");


                $raksts->tagi->load('tags');


            return view('raksts_view', array('title' =>  trans('custom.post'), 'raksts' =>$raksts));

          //  else
          //  {
             //  return redirect()->home();

          //  }
       }
        else if(\Auth::check() && \Auth::user()->isAdmin()  )
        {
            return redirect('/raksts/edit/'.$id);
            //return view('raksts_view', array('title' => 'Raksts', 'raksts' =>Raksts::find($id)));
        }
       else if(\Auth::check() && Raksts::find($id)->user_id==User::find(\Auth::user()->id)->id)
       {
           return redirect('/raksts/edit/'.$id);
           //return redirect()->route();

          //  return view('raksts_edit', array('title' => 'Raksta Editors', 'raksts' =>Raksts::find($id)));
       }



    }
    public function all()
    {
        return view('raksts_list', array('title' => trans('custom.posts'), 'raksti' =>Raksts::all()));
    }
    public function unaccepted()
    {
        return view('raksts_list', array('title' =>  trans('custom.posts'), 'raksti' =>Raksts::all()->where('akceptets','=',false)));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $rules = $rules = array(
            'saturs' => 'required|min:30',
            'nosaukums' => 'required|min:3',
        );

        $this->validate($request, $rules);

        $raksts = new Raksts();
        $raksts->nosaukums=$data['nosaukums'];
        $raksts->saturs=$data['saturs'];


        if (strlen($data['saturs']) > 500)
        {
            $raksts->noskelts = substr($data['saturs'], 0, 500);
        }
        else
        {
            $raksts->noskelts=$data['saturs'];
        }


        $user = User::find(\Auth::user()->id);



        $raksts->user()->associate($user);



        $raksts->save();


        $tagi=Tags::all();
        $offset=0;
        $tagsNew='';
        //dd("pirms:".$data['tagi']);
        $data['tagi']=" ".$data['tagi'];
        //dd(strpos($data['tagi'],'"',$offset));
        while($pos=strpos($data['tagi'],'"',$offset))
        {
            // dd("cikla:".$pos);
            $posEnd=strpos($data['tagi'],'"',$pos+1);
            $tagsNew = substr($data['tagi'], $pos+1, $posEnd-$pos-1);
            $found=false;
            if (strlen($tagsNew) > 2)
            {
                foreach ($tagi as $tags)
                {
                    if($tags->tags==$tagsNew)
                    {
                        $rakstaTags = new Raksta_tagi();
                        $rakstaTags->raksts()->associate($raksts);
                        $rakstaTags->tags()->associate($tags);
                        $rakstaTags->save();
                        $found=true;
                        break;
                    }
                }
                if(!$found)
                {
                    $jaunsTags = new Tags();
                    $jaunsTags->tags=$tagsNew;
                    $jaunsTags->save();
                    $rakstaTags = new Raksta_tagi();
                    $rakstaTags->raksts()->associate($raksts);
                    $rakstaTags->tags()->associate($jaunsTags);
                    $rakstaTags->save();
                }

            }

            $offset=$posEnd+1;



        }

        Mail::to(auth()->user()->email)->send(new mails());
      //  $mail->()->send(new mails());
        return redirect('/')->withMessage( trans('custom.postAdded'));

    }
    public function update(Request $request)
    {
        $data = $request->all();
        $rules = $rules = array(
            'saturs' => 'required|min:30',
            'nosaukums' => 'required|min:3',
        );

        $this->validate($request, $rules);

        $raksts=Raksts::find($data['id']);
        $raksts->nosaukums=$data['nosaukums'];
        $raksts->saturs=$data['saturs'];


        if (strlen($data['saturs']) > 500)
        {
            $raksts->noskelts = substr($data['saturs'], 0, 500);
        }


        $user = User::find(\Auth::user()->id);



        $raksts->user()->associate($user);



        $raksts->save();

        return redirect('/')->withMessage(trans('custom.postChanged'));

    }
    public function statusChange(Request $request)
    {
        if (\Auth::check() && \Auth::user()->isAdmin())
        {
            $data = $request->all();
            $raksts= Raksts::find($data["id"]);
            if(isset($data["accepted"]))
            {
                $raksts->akceptets=$data["accepted"];
            }
            else
            {
                $raksts->akceptets=0;
            }
            $raksts->save();
            return back();
        }
    }
    public function delete($id)
    {
        if (\Auth::check() && \Auth::user()->isAdmin())
        {
            $raksts= Raksts::find($id);
            $raksts->delete();
            return back();

        }
        return redirect('/');
    }



}
