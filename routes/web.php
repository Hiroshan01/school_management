<?php

use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;



Route::get('/',[StudentController::class,'base'])->name('student.base');

Route::prefix('student')->group(function (){
    Route::get('/list',[StudentController::class,'stu_list'])->name('student.list');
    Route::get('/student_register',[StudentController::class,'stu_reg'])->name('student.stu_reg');
    Route::post('/save',[StudentController::class,'store'])->name('student.store');
    Route::get('/delete/{id}',[StudentController::class,'delete'])->name('student.delete');
    Route::get('/edit/{id}',[StudentController::class,'stu_update'])->name('student.stu_update');
    Route::post('/update',[StudentController::class,'update'])->name('student.update');
});



