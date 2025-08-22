<?php

use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;



Route::get('/',[LoginController::class,'login'])->name('login');
Route::post('/login_check',[LoginController::class,'login_check'])->name('login.check');


Route::prefix('student')->group(function (){
    Route::middleware('auth:student')->group(function(){
        Route::post('/logout',[LoginController::class, 'logout'])->name('student.logout');
        Route::get('/',[StudentController::class,'base'])->name('student.base');
        Route::get('/list',[StudentController::class,'stu_list'])->name('student.list');
        Route::get('/student_register',[StudentController::class,'stu_reg'])->name('student.stu_reg');
        Route::post('/save',[StudentController::class,'store'])->name('student.store');
        Route::get('/delete/{id}',[StudentController::class,'delete'])->name('student.delete');
        Route::get('/edit/{id}',[StudentController::class,'stu_update'])->name('student.stu_update');
        Route::get('/image',[StudentController::class,'image_student'])->name('student.image');
        Route::post('/update',[StudentController::class,'update'])->name('student.update');
    });

});



