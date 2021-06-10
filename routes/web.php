<?php

use App\Notifications\OrderNotification;
use App\Order;
use App\Product;
use App\User;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;


Route::get('/contact',function (){
   return view('contact');
});
Route::get('/about',function (){
    return view('about');
});
Route::get('/category',function (){
    return view('category');
});
Route::get('/product',function (){
    $posts=\App\Product::all();
    return view('products',compact('posts'));
});
Route::get('/product_details',function (){
    return view('product_details');
});
Route::get('/home/contact/create',function (){
   return view('Contact.create');
});

/*Auth Routes*/
Auth::routes(['verify' => true]);
Auth::routes();

/*Home Routes*/
Route::get('/home', 'HomeController@index')->name('home');

/*Navigation Routes */
Route::resource('navigation','NavigationController');
Route::delete('/navigation/{navigation}','NavigationController@destroy');
Route::resource('navitem','NavitemController');
Route::post('/navitem/{n_id}','NavitemController@store');
Route::post('/navcontact/{n_id}','NavcontactController@store');
Route::resource('navcontact','NavcontactController');
Route::delete('/navcontact/{navcontact}','NavContactController@destroy');
Route::delete('/navitem/{navitem}','NavitemController@destroy');
Route::get('/navigation/{navigation}/edit','NavigationController@edit');
Route::get('/navitem/{navitem}/edit','NavigationController@edit');
Route::get('/navcontact/{navcontact}/edit','NavcontactController@edit');

/*Social Routes*/
Route::resource('social','SocialController');
Route::post('/social/{n_id}','SocialController@store');
Route::delete('/social/{social}','SocialController@destroy');

/*Banner Routes*/
Route::resource('banner','BannerController');
Route::delete('/banner/{banner}','BannerController@destroy');
Route::get('/banner/{banner}/edit','BannerController@edit');

/*Footer Routes*/
Route::resource('footer','FooterController');
Route::delete('/footer/{footer}','FooterController@destroy');
Route::get('/footer/{footer}/edit','FooterController@edit');

/*home content section*/
Route::resource('homeContent','HomeContentController');
Route::get('/homeContent/{homeContent}/edit','HomeContentController@edit');
Route::delete('/homeContent/{homeContent}','HomeContentController@destroy');

/*categories routes*/
Route::resource('categories','CategoriesController');
Route::delete('/categories/{category}','CategoriesController@destroy');
Route::get('/categories/{category}/edit','CategoriesController@edit');


/*About Section*/
Route::resource('abouts','AboutController');
Route::delete('/abouts/{about}','AboutController@destroy');
Route::get('/abouts/{about}/edit','AboutController@edit');

/*About us service Section*/
Route::resource('service','ServiceController');
Route::post('/service/{id}','ServiceController@store');
Route::delete('/service/{service}','ServiceController@destroy');

/*About us Partners Route*/
Route::resource('partner','PartnerController');
Route::post('/partner/{about_id}','PartnerController@store');
Route::delete('/partner/{partner}','PartnerController@destroy');

Route::resource('products','ProductController');
Route::post('/product/{id}','ProductController@store');
Route::delete('/product/{product}','ProductController@destroy');
Route::get('/products/{product}/edit','ProductController@edit');




Route::resource('contacts','ContactController');
Route::post('/contacts/{id}','ContactDetailController@store');
Route::get('/ContactDetails','ContactDetailController@index');
Route::delete('/contactdetails/{contactDetail}','ContactDetailController@destroy');
Route::get('/contactdetails/{contactDetail}/edit','ContactDetailController@edit');
Route::patch('/contactdetails/{contactDetail}','ContactDetailController@update');
Route::delete('/contact/{contact}','ContactController@destroy');

/* Composer Routes*/
View::composer(['layouts.master-layout'],function ($view){
     $view->with('navlogo',\App\Navigation::orderBy('created_at','desc')->take(1)->get());
     $view->with('navitems',\App\Navitem::orderBy('created_at','asc')->take(5)->get());
     $view->with('navcontact',\App\Navcontact::orderBy('created_at','desc')->take(2)->get());
     $view->with('social',\App\Social::orderBy('created_at','desc')->take(5)->get());
     $view->with('footer',\App\Footer::orderBy('created_at','desc')->take(1)->get());
});

Route::get('/',function (){
    $banner_content=\App\Banner::orderBy('created_at','desc')->take(2)->get();
    $home_content=\App\HomeContent::orderBy('created_at','desc')->take(1)->get();
    $categories_content=\App\Categories::orderBy('created_at','desc')->take(6)->get();
    $products=\App\Product::orderBy('created_at','asc')->take(6)->get();
    return view('welcome',compact('banner_content','home_content','categories_content','products'));
});

Route::get('/category',function (){
   $category_heading=\App\Categories::orderBy('created_at','desc')->take(1)->get();
   $category_content=\App\Categories::orderBy('created_at','asc')->get();
   $category_title=\App\Categories::orderBy('created_at','desc')->get();
   return view('category',compact('category_heading','category_content','category_title'));
});

Route::get('/about',function (){
   $about_content=\App\About::orderBy('created_at','desc')->take(1)->get();
   $service_heading=\App\About::orderBy('created_at','desc')->take(1)->get();
   $services=\App\Service::orderBy('created_at','desc')->get();
   $partners=\App\Partner::orderBy('created_at','desc')->get();
   return view('about',compact('about_content','service_heading','services','partners'));
});

Route::get('/category/{category}',function ($category)
{
    $posts = Product::where('product_category',$category)->orderBy('created_at','desc')->take(3)->get();
    return view('products',compact('posts'));
});

Route::get('/category/{category}/{product}',function ($category,$product){
    $posts=Product::findOrfail($product);
    return view('product_details',compact('posts'));
});


Route::resource('order','OrderController');
Route::post('/order/{id}',function ($id){
    $user=User::all();
    $data=request()->validate([
        'name'=>'required',
        'email'=>'required',
        'Quantity'=>'',
        'size'=>'',
        'phone'=>'required',
        'product_name'=>'',
        'address'=>'required',
        'message'=>''
    ]);

    $order=Order::create([
        'name'=>$data['name'],
        'email'=>$data['email'],
        'Quantity'=>$data['Quantity'],
        'size'=>$data['size'],
        'phone'=>$data['phone'],
        'product_name'=>$data['product_name'],
        'address'=>$data['address'],
        'message'=>$data['message'],
    ]);
    Notification::send($user, new OrderNotification($order));
    return redirect('/');
});

Route::delete('/order/{order}','OrderController@destroy');
Route::get('/contact',function (){
   $contact=\App\Contact::orderBy('created_at','desc')->take(1)->get();
   $c=\App\ContactDetail::orderBy('created_at','asc')->take(3)->get();
   $contact_outlets=\App\ContactDetail::orderby('created_at','asc')->skip(3)->take(3)->get();
   return view('contact',compact('contact','c','contact_outlets'));
});

Route::post('/queries',function (Request $request){
        $data=request()->validate([
           'name'=>'required|max:20',
           'email'=>'required|email',
           'subject'=>'required|max:40',
           'message'=>'required|max:100'
        ]);
        $query=\App\Query::create([
           'name'=>$data['name'],
           'email'=>$data['email'],
           'subject'=>$data['subject'],
           'message'=>$data['message']
        ]);
        return redirect('/');
});

Route::get('/queries','QueryController@index');
Route::delete('/queries/{query}','QueryController@destroy');

Route::post('/outletqueries',function (Request $request){
    $data=request()->validate([
        'contact_name'=>'required|max:20',
        'contact_email'=>'required|email',
        'contact_subject'=>'required|max:40',
        'contact_message'=>'required|max:100'
    ]);
    $query=\App\OutletContact::create([
        'contact_name'=>$data['contact_name'],
        'contact_email'=>$data['contact_email'],
        'contact_subject'=>$data['contact_subject'],
        'contact_message'=>$data['contact_message']
    ]);
    return redirect('/');
});
Route::get('/outletqueries','OutletContactController@index');
Route::delete('/outletqueries/{outletContact}','OutletContactController@destroy');


