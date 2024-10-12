<?php

use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello',function(){
    return response('<h1>hello piv nati u do great thing</h1>');
});
Route::get('/posts/{id}',function($id){
      return response('post  '. $id);
})->where('id','[0-9]+');// this make the post to find only numbers
Route::get('/search',function(Request $request){
      return $request->name. ' ' . $request->city;
});