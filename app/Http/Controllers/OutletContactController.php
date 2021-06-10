<?php

namespace App\Http\Controllers;

use App\Contact;
use App\OutletContact;
use Illuminate\Http\Request;

class OutletContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts=OutletContact::all();
        return view('Contact.OutletContact',compact('contacts'));
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
    public function store(Request $request)
    {
        $data=request()->validate([
            'contact_heading'=>'',
            'Contact_Url'=>'',
            'outlet_heading'=>'',
            'Outlet_Url'=>'',
            'contact_button'=>'',
            'outlet_button'=>''
        ]);
        $id=auth()->user()->id;
        $con=OutletContact::create([
            'contact_heading'=>$data['contact_heading'],
            'Contact_Url'=>$data['Contact_Url'],
            'outlet_heading'=>$data['outlet_heading'],
            'Outlet_Url' =>$data['Outlet_Url'],
            'user_id'=>$id,
            'contact_button'=>$data['contact_button'],
            'outlet_button'=>$data['outlet_button']
        ]);
        return redirect('/outletcontact');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OutletContact  $outletContact
     * @return \Illuminate\Http\Response
     */
    public function show(OutletContact $outletContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OutletContact  $outletContact
     * @return \Illuminate\Http\Response
     */
    public function edit(OutletContact $outletContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OutletContact  $outletContact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OutletContact $outletContact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OutletContact  $outletContact
     * @return \Illuminate\Http\Response
     */
    public function destroy(OutletContact $outletContact)
    {
        $outletContact->delete();
        return redirect('/outletqueries');
    }
}
