<?php

namespace App\Http\Controllers;

use App\ContactDetail;
use Illuminate\Http\Request;

class ContactDetailController extends Controller
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
        $contact=ContactDetail::all();
        return view('Contact.ContactDetails',compact('contact'));
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
    public function store(Request $request,$id)
    {
       $data=request()->validate([
           'contact_name'=>'required',
           'contact_icons'=>'required',
           'contact_content'=>'required'
       ]);
       $cont=ContactDetail::create([
          'contact_id'=>$id,
          'contact_name'=>$data['contact_name'],
          'contact_icons'=>$data['contact_icons'],
          'contact_content'=>$data['contact_content']
       ]);
       return redirect('/ContactDetails');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContactDetail  $contactDetail
     * @return \Illuminate\Http\Response
     */
    public function show(ContactDetail $contactDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactDetail  $contactDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactDetail $contactDetail)
    {
        return view('Contact.ContactDetailEdit',compact('contactDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactDetail  $contactDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactDetail $contactDetail)
    {

        $data=request()->validate([
            'contact_name'=>'required',
            'contact_icons'=>'required',
            'contact_content'=>'required'
        ]);
        $contactDetail->update($data);
        return redirect('/ContactDetails');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactDetail  $contactDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactDetail $contactDetail)
    {
        $contactDetail->delete();
        return redirect('/ContactDetails');
    }
}
