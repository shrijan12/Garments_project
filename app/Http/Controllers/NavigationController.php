<?php

namespace App\Http\Controllers;

use App\Navigation;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class NavigationController extends Controller
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
        $navigations=Navigation::all();
        return view('Navigation.index',compact('navigations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Navigation.create');
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
          'logo'=>'required'
        ]);
        $id=auth()->user()->id;
        $imagePath = request('logo')->store('NavigationLogo', 'public');
        $image = Image::make("storage/{$imagePath}")->fit(100, 100);
        $navigation=Navigation::create([
            'logo'=>$imagePath,
            'user_id'=>$id
        ]);
        return redirect('/navigation');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function show(Navigation $navigation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function edit(Navigation $navigation)
    {
        return view('Navigation.NavEdit',compact('navigation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Navigation $navigation)
    {
        $data=request()->validate([
            'logo'=>'required'
        ]);
        $id=auth()->user()->id;
        $imagePath = request('logo')->store('NavigationLogo', 'public');
        $image = Image::make("storage/{$imagePath}")->fit(100, 100);
        $nav=array_merge($data,['logo'=>$imagePath,'user_id'=>$id]);
        $navigation->update($nav);
        return redirect('/navigation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Navigation $navigation)
    {
        $navigation->delete();
        return redirect('/navigation');
    }

}
