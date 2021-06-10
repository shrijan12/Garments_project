<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CategoriesController extends Controller
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
        $categories=Categories::all();
        return view('Categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Categories.create');
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
           'name'=>'required|unique:categories,name',
           'categories_type'=>'',
           'categories_size'=>'',
           'categories_image'=>'required',
            'categories_title'=>'',
            'button_name'=>'',
            'button_icon'=>'',
        ]);
        $id=auth()->user()->id;
        $imagePath = request('categories_image')->store('CategoriesImage', 'public');
        $image = Image::make("storage/{$imagePath}")->fit(350, 380);
        $category=Categories::create([
            'name'=>$data['name'],
            'categories_type'=>$data['categories_type'],
            'categories_size'=>$data['categories_size'],
            'categories_image'=>$imagePath,
            'categories_title'=>$data['categories_title'],
            'button_name'=>$data['button_name'],
            'button_icon'=>$data['button_icon'],
            'user_id'=>$id
        ]);
        return redirect('/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categories  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categories  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $category)
    {
        return view('Categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categories  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $category)
    {
        $data=request()->validate([
            'name'=>'required|unique:categories,name',
            'categories_type'=>'',
            'categories_image'=>'required',
            'categories_title'=>'required',
            'categories_size'=>'',
            'button_name'=>'required',
            'button_icon'=>'required',

        ]);
        if (request('categories_image')){
            $imagePath = request('categories_image')->store('CategoriesImage', 'public');
            $image = Image::make("storage/{$imagePath}")->fit(350, 380);
            $data = array_merge($data,['categories_image'=>$imagePath]);
        }
        $category->update($data);
        return redirect('/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categories  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $category)
    {
        $category->delete();
        return redirect('/categories');
    }
}
