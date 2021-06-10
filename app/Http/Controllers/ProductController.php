<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
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
        $products=Product::all();
        return view('Categories.product',compact('products'));
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
            'product_name'=>'required',
            'product_short_description'=>'required',
            'product_code'=>'required',
            'product_description'=>'required',
            'product_features'=>'required',
            'product_category'=>'required',
            'tags'=>'required',
            'product_image'=>'required',
        ]);
        $imagePath = request('product_image')->store('ProductImages', 'public');
        $image = Image::make("storage/{$imagePath}")->fit(520, 600);
        $product=Product::create([
            'product_name'=>$data['product_name'],
            'product_short_description'=>$data['product_short_description'],
            'product_code'=>$data['product_code'],
            'product_description'=>$data['product_description'],
            'product_features'=>$data['product_features'],
            'product_category'=>$data['product_category'],
            'tags'=>$data['tags'],
            'product_image'=>$imagePath,
            'category_id'=>$id
        ]);
        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }
    public function display($id)
    {
        $posts = Product::findOrfail($id);
        return view('product_details',compact('posts'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('Categories.productedit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $data=request()->validate([
            'product_name'=>'required',
            'product_short_description'=>'required',
            'product_code'=>'required',
            'product_description'=>'required',
            'product_features'=>'required',
            'product_category'=>'required',
            'tags'=>'required',
            'product_image'=>'required',
        ]);
        if (request('product_image')){
            $imagePath = request('product_image')->store('ProductImages', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(520, 600);
            $data = array_merge($data,['product_image'=>$imagePath]);
        }
        $product->update($data);
        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/products');
    }
}
