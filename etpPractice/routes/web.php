<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\NamedRouteController;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Cookie;

use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

use App\Http\Rules\UpperCase;

Route::get('/', function () {
    return view('defaultWelcome');
});

Route::get('/hello', function () {
    return view('hello');
});
Route::get('/hello1', function () {
    return view('hello1');
});

Route::get('/home',function(){
    return view("home");
});

// Passing data to view :: Required Parameters
Route::get('/about/{name}',function($name){
    echo $name;
    return view('about',['name'=>$name]);
});

Route::get('/compactMethod/{data}',function($data){
    return view('withMethod',compact('data',$data));
});

Route::get('/withMethod/{data}',function($data){
    return view('withMethod',)->with('data',$data);
});

Route::get('/associativeArrayMethod/{data}',function($data){
    return view('withMethod',['data'=>$data]);
});
// Passing data to view :: Optional Parameters
// The ? in {slug?} marks the parameter as optional in the route, Without ? Laravel will throw a 404 error.
// If slug is not provided in the URL, use 'default' as its value.
Route:: get('/about2/{slug?}',function($slug='default'){
    return view("about")->with('name',$slug);
});

// Redirects
route::redirect('/redirect','/hello1');

// same as above
Route::get('/old',function(){
    return redirect('/hello1');
});

// template inheritance
Route::view('/parentFile','templateInheritance.parentFile');

// Named route
Route::view('/namedRoute-home','namedRoute.home')->name('namedHome');
Route::get('/namedShow',[NamedRouteController::class,'namedShow']);
// Route::get('/namedShow/{user}',[NamedRouteController::class,'user'])->name('namedUser');

Route::get('/childFile', function(){
    return view('templateInheritance.childFile');
})->name('child');

// return redirect()->route('child');

// Route::post('/register',function(){
//     return ('Thank You for registering');
// });
Route::post('/register',[UserController::class,'register']);
Route::get('/register',[DemoController::class,'demo']);
Route::get('/demo/{u}',[DemoController::class,'user']);
Route::get('/demoPage',[DemoController::class,'index']);

Route::get('/getUserName/{name?}',[DemoController::class,'getUserName']);


// Nested Routes
Route::get('admin',[DemoController::class,'adminLogin']);



// URL Generation
Route::view('/urlGeneration-home','urlGeneration.home');
Route::view('/urlGeneration-home2','urlGeneration.home');

Route::view('/urlGeneration-about','urlGeneration.about');

Route::get('/urlGeneration-details',function(){
    return view('urlGeneration.details');
});

Route::get('/urlGeneration-details/{data}',function($data){
    return view('urlGeneration.details')->with('data',$data);
});

// Request Data
Route::get('/request-form',function(){
    return view('requestData.form1');
});
Route::post('/submit-form',function(Request $request){
    // return view('requestData.submitForm');
    $request->validate([
        'name'=>'required|min:2',
        'age'=>'required|numeric|min:1',
    ]);
    $name=$request->input('name');
    $age=$request->input('age');
    return "Data Recieved: \nName: $name,\nAge: $age";
});

// File Upload
Route::get('/uploaded-files',function(){
    return view('uploadFiles.upload');
});
Route::post('/upload-file',function(Request $request){
    $request->validate([
        'file'=>'required|file|max:2048',//2MB
    ]);
    $path=$request->file('file')->store('uploads','public');
    return "File uloaded successfully to:".$path;
});

// Cookie
Route::get('/set-cookie',function(){
    Cookie::queue('user_name','Piyush',60); // username, value, minutes
    return "Cookie has been set.";
});
Route::get('/get-cookie',function(){
    $username=Cookie::get('user_name');
    if($username){return "Cookie value: ".$username;}
    else{return "Cookie not found.";}
});
Route::get('/delete-cookie',function(){
    Cookie::queue(Cookie::forget('user_name'));
    return "Cookie has been deleted.";
});

// Email Sending
Route::get('/send-mail',function(){
    $name="Piyush";
    Mail::to('kushikk110012@gmail.com')->send(new TestMail($name));
    return "Mail Sent Successfully";
});

// Sessions & Localization
Route::get('localize/{lang}',function($lang){
    App::setLocale($lang);
    session(['lang'=>$lang]);
    return redirect('localized');
});
Route::get('/localized',function(){
    App::setLocale(session('lang','en')); // default
    return view('LocalizationAndSession.localization');
});

// Form Validation
Route::get('/validation-form',function(){
    return view('formValidation.form1',['data'=>null]);
});
Route::post('/submit',function(Request $request){
    $validated=$request->validate([
        // 'name'=>['required','min:2','uppercase'], // Custom Rule
        'name'=>['required','min:2',new \App\Rules\UpperCAse], // Custom Rule
        'email'=>'required|email',
        'age'=>'required|numeric|min:1',
    ]);
    $name=$request->input('name');
    $email=$request->input('email');
    $age=$request->input('age');
    // return response("Data Recieved: \nName: $name,\nEmail: $email,\nAge: $age",200);
    // return redirect('/validation-form')->with([
    //     'submitted' => true,
    //     'name' => $validated['name'],
    //     'email' => $validated['email'],
    //     'age' => $validated['age']
    // ]);
    return view( 'formValidation.form1',['data'=>$validated]);
});