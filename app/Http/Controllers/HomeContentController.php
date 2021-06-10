<?php

namespace App\Http\Controllers;
Use Alert;
use App\Banner;
use App\HomeContent;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class HomeContentController extends Controller
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
        $content=HomeContent::all();
        return view('HomeContent.index',compact('content'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('HomeContent.create');
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
       'aboutus_heading'=>'required',
       'aboutus_content'=>'required',
       'aboutus_image'=>'required',
       'factory_heading'=>'required',
       'factory_content'=>'required',
        'factory_image'=>'required',
        'outlet_heading'=>'required',
        'outlet_content'=>'required',
        'outlet_image'=>'required',
    ]);
        $id=auth()->user()->id;
        $imagePath = request('aboutus_image')->store('HomeContent', 'public');
        $image = Image::make("storage/{$imagePath}")->fit(555, 600);
        $imagePath1 = request('factory_image')->store('HomeContent', 'public');
        $image = Image::make("storage/{$imagePath}")->fit(555, 600);
        $imagePath2 = request('outlet_image')->store('HomeContent', 'public');
        $image = Image::make("storage/{$imagePath}")->fit(555, 600);
        $banner=HomeContent::create([
            'aboutus_heading'=>$data['aboutus_heading'],
            'aboutus_content'=>$data['aboutus_content'],
            'factory_heading'=>$data['factory_heading'],
            'factory_content'=>$data['factory_content'],
            'outlet_heading'=>$data['outlet_heading'],
            'outlet_content'=>$data['outlet_content'],
            'aboutus_image'=>$imagePath,
            'factory_image'=>$imagePath1,
            'outlet_image'=>$imagePath2,
            'user_id'=>$id
        ]);
        return redirect('/homeContent');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HomeContent  $homeContent
     * @return \Illuminate\Http\Response
     */
    public function show(HomeContent $homeContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomeContent  $homeContent
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeContent $homeContent)
    {
        return view('HomeContent.edit',compact('homeContent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomeContent  $homeContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeContent $homeContent)
    {
        $data=request()->validate([
            'aboutus_heading'=>'required',
            'aboutus_content'=>'required',
            'aboutus_image'=>'required',
            'factory_heading'=>'required',
            'factory_content'=>'required',
            'factory_image'=>'required',
            'outlet_heading'=>'required',
            'outlet_content'=>'required',
            'outlet_image'=>'required',
        ]);
        $imagePath = request('aboutus_image')->store('HomeContent', 'public');
        $image = Image::make("storage/{$imagePath}")->fit(555, 600);
        $imagePath1 = request('factory_image')->store('HomeContent', 'public');
        $image = Image::make("storage/{$imagePath}")->fit(555, 600);
        $imagePath2 = request('outlet_image')->store('HomeContent', 'public');
        $image = Image::make("storage/{$imagePath}")->fit(555, 600);
        $data = array_merge($data,['aboutus_image'=>$imagePath,'factory_image'=>$imagePath1,'outlet_image'=>$imagePath2]);
        $homeContent->update($data);
        return redirect('/homeContent');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomeContent  $homeContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeContent $homeContent)
    {
        Alert::success('Success', 'Deleted Sucessfully');
        $homeContent->delete();
        return redirect('/homeContent');
    }
}
