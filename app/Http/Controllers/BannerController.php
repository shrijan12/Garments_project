<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BannerController extends Controller
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
        $banners=Banner::all();
        return view('Banner.index',compact('banners'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Banner.create');
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
        'banner_header'=>'required',
        'banner_content'=>'required',
        'banner_button'=>'required',
        'carousel_icon1'=>'required',
        'carousel_icon2'=>'required',
        'banner_image'=>'required'
        ]);
        $id=auth()->user()->id;
        $imagePath = request('banner_image')->store('BannerImage', 'public');
        $image = Image::make("storage/{$imagePath}")->fit(1519, 389);
        $banner=Banner::create([
            'banner_header'=>$data['banner_header'],
            'banner_content'=>$data['banner_content'],
            'banner_button'=>$data['banner_button'],
            'carousel_icon1'=>$data['carousel_icon1'],
            'carousel_icon2'=>$data['carousel_icon2'],
            'banner_image'=>$imagePath,
            'user_id'=>$id
        ]);
        return redirect('/banner');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('Banner.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $data=request()->validate([
            'banner_header'=>'required',
            'banner_content'=>'required',
            'banner_button'=>'required',
            'carousel_icon1'=>'required',
            'carousel_icon2'=>'required',
            'banner_image'=>'required'
        ]);
        if (request('banner_image')){
            $imagePath = request('banner_image')->store('BannerImage', 'public');
            $image = Image::make("storage/{$imagePath}")->fit(1519, 389);
            $data = array_merge($data,['banner_image'=>$imagePath]);
        }
        $banner->update($data);
        return redirect('/banner');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
       $banner->delete();
       return redirect('/banner');
    }
}
