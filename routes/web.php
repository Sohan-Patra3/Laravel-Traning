<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/bibhu', function(){
    echo 'Hello!';
});

// displaying data in view:
Route::any('/demo', function(){
    // echo 'Demo';
    return view('demo');
});

// displaying passed parameters in view

Route::any('/view/{name}/{gg}', function($name,$gg){
    // echo 'Demo';
    $data = compact('name','gg');
    return view('demo')->with($data);
});

//passing Parameter throught uri

Route::get('demo1/{p_para}',function($para){
    return $para;
});

//passing multiple Parameter throught uri
Route::get('demo2/{n_name}/{i_id}',function($name,$id){
    return $name.$id;
});

//passing optional Parameter throught uri
Route::get('demo3/{name}/{id?}',function($name,$id = null){
    return $name.$id;
});

// routing with regular expression
Route::get('demo4/{name}',function($name){
    return $name;
})->where('name', '[A-Za-z]+');

// routing with multiple regular expression
Route::get('demo5/{id}/{name}',function($id,$name){
    return $id.$name;
})->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);

// routing with multiple regular expression and helper
Route::get('demo6/{id}/{name}',function($id,$name){
    return $id.$name;
})->whereNumber('id')->whereAlpha('name');

// redirect routes : redirects from one routes to other
Route::redirect('/demo', '/bibhu',  301);

// fallback Routes
Route::fallback(function () {
 echo 'No routes';
});

//uncoimmit
Route::get('/about' , function(){
    return view('page');
});

// home route
Route::get('/{name?}',function($name = null){
    $var = '<h1>Entities</h1>';
    $data = compact('name','var');
    return view('home')->with($data);
});
