<?php

use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;



Route::get('/',[StudentController::class,'base'])->name('student.base');
Route::get('/list',[StudentController::class,'stu_list'])->name('student.list');
Route::get('/student_register',[StudentController::class,'stu_reg'])->name('student.stu_reg');
Route::post('/save',[StudentController::class,'store'])->name('student.store');


