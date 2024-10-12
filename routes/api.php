<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middelware('auth:sanctum')->get('/user',
function (Request $request)
{
    return $request->user();
});