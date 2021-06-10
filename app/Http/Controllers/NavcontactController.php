<?php

namespace App\Http\Controllers;

use App\Navcontact;
use Illuminate\Http\Request;

class NavcontactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function index()
    {
        $navcontacts=Navcontact::all();
        return view('Navigation.NavContact',compact('navcontacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$n_id)
    {
        $data=request()->validate([
           'contact_item'=>'required',
           'contact_url'=>'required',
           'contact_icons'=>'required'
        ]);
        $navcontact=Navcontact::create([
           'contact_item'=>$data['contact_item'],
           'contact_url'=>$data['contact_url'],
           'contact_icons'=>$data['contact_icons'],
           'navigation_id'=>$n_id,
        ]);
        return redirect('/navcontact');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Navcontact  $navcontact
     * @return \Illuminate\Http\Response
     */
    public function show(Navcontact $navcontact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Navcontact  $navcontact
     * @return \Illuminate\Http\Response
     */
    public function edit(Navcontact $navcontact)
    {
        return view('Navigation.NavContactEdit',compact('navcontact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Navcontact  $navcontact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Navcontact $navcontact)
    {
        $data=request()->validate([
            'contact_item'=>'required',
            'contact_url'=>'required',
            'contact_icons'=>'required'
        ]);
        $navcontact->update($data);
        return redirect('/navcontact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Navcontact  $navcontact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Navcontact $navcontact)
    {
        $navcontact->delete();
        return redirect('/navcontact');
    }
}
