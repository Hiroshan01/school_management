<?php

use App\Http\Controllers\Admincontroller;
use Illuminate\Support\Facades\Route;



Route::get('/',[Admincontroller::class,'dashboard'])->name('admin.dashboard');
Route::get('/about',[Admincontroller::class,'about'])->name('admin.about');
