<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public  function stu_list()
    {
        $students = Student::all();
       return view('components.student_list',compact('students'));
    }
    public function base()
    {
        return view('base');
    }
    public function stu_reg(){
        return view('student.student_register');
    }

    public function store(Request $request){
        try {
          Student::query()->create([
              'reg_no'=>$request->reg_no,
              'name'=>$request->name,
              'email'=>$request->email,
              'address'=>$request->address,
              'bod'=>$request->bod,
              'age'=>$request->age,
              'password'=>$request->password,
          ]);

          //return redirect()->back(); this page
            return redirect()->route('student.list');
        }
        catch (\Exception $e) {
            return $e;
        }
    }
    //student edit
    public function stu_update($id)
    {
        $student = Student::query()
            ->where('id',$id)
            ->first(); //can use first() and get

     return view('student.student_update',compact('student'));
    }
    public function update(Request $request){
        try {
            Student::query()
                ->where('id',$request->id)
                ->update([
                'reg_no'=>$request->reg_no,
                'name'=>$request->name,
                'email'=>$request->email,
                'address'=>$request->address,
                'bod'=>$request->bod,
                'age'=>$request->age,
                'password'=>$request->password,
            ]);

            //return redirect()->back(); this page
            return redirect()->route('student.list');
        }
        catch (\Exception $e) {
            return $e;
        }
    }
    //delete student
    public function delete($id)
    {
        try {
            Student::query()
                ->where('id',$id)
                ->delete();
            return redirect()->route('student.list');
        }catch(\Exception $e) {
            return $e;
        }
    }
}
