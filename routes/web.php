<?php

use App\Http\Controllers\Admincontroller;
use Illuminate\Support\Facades\Route;



Route::get('/',[Admincontroller::class,'dashboard']);
