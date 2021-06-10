<?php

namespace App\Http\Controllers;

use App\Navitem;
use Illuminate\Http\Request;

class NavitemController extends Controller
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
        $navitems = Navitem::all();
        return view('Navigation.Navitems', compact('navitems'));
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
           'nav_name'=>'required',
           'nav_url'=>'required',
        ]);
        $nav=Navitem::create([
           'nav_name'=>$data['nav_name'],
           'nav_url'=>$data['nav_url'],
            'navigation_id'=>$n_id
        ]);
        return redirect('/navitem');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Navitem  $navitem
     * @return \Illuminate\Http\Response
     */
    public function show(Navitem $navitem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Navitem  $navitem
     * @return \Illuminate\Http\Response
     */
    public function edit(Navitem $navitem)
    {
        return view('Navigation.NavitemEdit',compact('navitem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Navitem  $navitem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Navitem $navitem)
    {
        $data=request()->validate([
            'nav_name'=>'required',
            'nav_url'=>'required',
        ]);
       $navitem->update($data);
       return redirect('/navitem');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Navitem  $navitem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Navitem $navitem)
    {
        $navitem->delete();
        return redirect('/navitem');
    }
}
