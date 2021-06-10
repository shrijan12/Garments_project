<?php

namespace App\Http\Controllers;

use App\About;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
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
        $abouts = About::all();
        return view('About.index',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('About.create');
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
            'about_heading'=>'required',
            'about_image'=>'required',
            'about_desc'=>'required',
            'service_heading'=>'required',
            'service_head_desc'=>'required',
            'partners_heading'=>'required',
            'partners_head_desc'=>'required',
            'about_title'=>'required',
        ]);
        $id=auth()->user()->id;
        $name=auth()->user()->name;
        $imagePath = request('about_image')->store('AboutImages', 'public');
        $image = Image::make("storage/{$imagePath}")->fit(555, 600);
        $about=About::create([
            'about_heading'=>$data['about_heading'] ,
            'about_title'=>$data['about_title'],
            'service_heading'=>$data['service_heading'] ,
            'service_head_desc'=>$data['service_head_desc'] ,
            'partners_heading'=>$data['partners_heading'] ,
            'partners_head_desc'=>$data['partners_head_desc'] ,
            'about_image'=>$imagePath,
            'about_desc'=>$data['about_desc'] ,
            'user_id'=>$id ,
            'created_by'=>$name
        ]);
        Alert::success('Success', 'Data Inserted Sucessfully');
        return redirect('/abouts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('About.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $data=request()->validate([
            'about_heading'=>'required',
            'about_image'=>'required',
            'about_desc'=>'required',
            'service_heading'=>'required',
            'service_head_desc'=>'required',
            'partners_heading'=>'required',
            'partners_head_desc'=>'required',
            'about_title'=>'required',
        ]);
        $id=auth()->user()->id;
        $name=auth()->user()->name;
        if (request('about_image')){
            $imagePath = request('about_image')->store('AboutImages', 'public');
            $image = Image::make("storage/{$imagePath}")->fit(555, 600);
            $data = array_merge($data,['about_image'=>$imagePath,'user_id'=>$id,'created_by'=>$name]);
        }
        $about->update($data);
        return redirect('/abouts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $about->delete();
        return redirect('/abouts');

    }
}
